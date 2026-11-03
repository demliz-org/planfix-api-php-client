#!/usr/bin/env bash

set -euo pipefail

# see https://stackoverflow.com/questions/59895/how-do-i-get-the-directory-where-a-bash-script-is-located-from-within-the-script
SCRIPT_DIR=$(dirname -- "$( readlink -f -- "${BASH_SOURCE[0]}"; )")
PROJECT_ROOT=$(dirname -- "$SCRIPT_DIR")
VERSION=7.27.0
GENERATOR="$SCRIPT_DIR/sources/openapi-generator-cli-$VERSION.jar"
SPEC_FILE="$SCRIPT_DIR/sources/spec.json"
OUTPUT_DIR=${1:-"$PROJECT_ROOT"}
WORK_DIR=$(mktemp -d)
trap 'rm -r "$WORK_DIR"' EXIT

if [ ! -f "$SPEC_FILE" ] ; then
    wget https://help.planfix.com/restapidocs/swagger.json -O "$WORK_DIR/spec.json"
    php -r 'json_decode(file_get_contents($argv[1]), false, flags: JSON_THROW_ON_ERROR);' "$WORK_DIR/spec.json"
    mv "$WORK_DIR/spec.json" "$SPEC_FILE"
fi

if [ ! -f "$GENERATOR" ] ; then
    wget "https://repo.maven.apache.org/maven2/org/openapitools/openapi-generator-cli/$VERSION/openapi-generator-cli-$VERSION.jar" \
        -O "$GENERATOR"
fi

php "$SCRIPT_DIR/prepare-spec.php" "$SPEC_FILE" "$WORK_DIR/spec.json"

java -jar "$GENERATOR" author template -g php -o "$WORK_DIR/templates"
patch --batch --forward --fuzz=0 -p1 -d "$WORK_DIR/templates" \
    -i "$SCRIPT_DIR/patches/$VERSION-empty-success-response.patch"

# Stage and validate the entire generation before updating managed output files.
mkdir -p "$WORK_DIR/output"
cp "$PROJECT_ROOT/.openapi-generator-ignore" "$WORK_DIR/output/.openapi-generator-ignore"

java -jar "$GENERATOR" generate \
    -i "$WORK_DIR/spec.json" \
    -g php \
    -c "$SCRIPT_DIR/config.json" \
    -t "$WORK_DIR/templates" \
    -o "$WORK_DIR/output"

while IFS= read -r -d '' FILE ; do
    if ! CHECK=$(php -n -d error_reporting=32767 -l "$FILE" 2>&1) ; then
        echo "$CHECK" >&2
        exit 1
    fi

    if [[ "$CHECK" == *"Deprecated:"* || "$CHECK" == *"Warning:"* ]] ; then
        echo "$CHECK" >&2
        exit 1
    fi
done < <(find "$WORK_DIR/output/src" -type f -name '*.php' -print0)

mkdir -p "$OUTPUT_DIR"

OUTPUT_DIR=$(cd -- "$OUTPUT_DIR" && pwd)

if [[ "$OUTPUT_DIR" != "$PROJECT_ROOT" && ! -f "$OUTPUT_DIR/.openapi-generator/VERSION" && -n "$(find "$OUTPUT_DIR" -mindepth 1 -maxdepth 1 -print -quit)" ]] ; then
    echo "Refusing to replace a nonempty directory without OpenAPI generation metadata: $OUTPUT_DIR" >&2
    exit 1
fi

# These directories should contain generated artifacts only.
# Remove obsolete classes, documentation and legacy tests.
for DIRECTORY in src docs/Api docs/Model test/Api test/Model ; do
    if [ -d "$OUTPUT_DIR/$DIRECTORY" ] ; then
        while IFS= read -r -d '' FILE ; do
            RELATIVE=${FILE#"$OUTPUT_DIR/"}
            if [ ! -f "$WORK_DIR/output/$RELATIVE" ] ; then
                rm "$FILE"
            fi
        done < <(find "$OUTPUT_DIR/$DIRECTORY" -type f \( -name '*.php' -o -name '*.md' \) -print0)
    fi
done

cp -R "$WORK_DIR/output/." "$OUTPUT_DIR/"

echo "Generated Planfix SDK with OpenAPI Generator $VERSION in $OUTPUT_DIR"
