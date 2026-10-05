#!/bin/bash

set -eux

# see https://stackoverflow.com/questions/59895/how-do-i-get-the-directory-where-a-bash-script-is-located-from-within-the-script
SCRIPT_DIR=$(dirname -- "$( readlink -f -- "$0"; )")
PREPARED_SPEC=$(mktemp)
trap 'rm -f "$PREPARED_SPEC"' EXIT

if [ ! -f $SCRIPT_DIR/sources/spec.json ] ; then
  curl https://help.planfix.com/restapidocs/swagger.json | sed -E 's#"([0-9]+)\s*//[^"]*"#"\1"#g' > $SCRIPT_DIR/sources/spec.json
fi

if [ ! -f $SCRIPT_DIR/sources/swagger-codegen-cli.jar ] ; then
  wget https://repo1.maven.org/maven2/io/swagger/codegen/v3/swagger-codegen-cli/3.0.82/swagger-codegen-cli-3.0.82.jar -O $SCRIPT_DIR/sources/swagger-codegen-cli.jar
fi

# Swagger Codegen 3.x does not disambiguate a path and a query parameter that share the name "id".
# Planfix has three such file-attachment operations.
# Use "fileId" only in the temporary input spec: the resulting HTTP URL remains unchanged,
# while generated PHP method parameters become unambiguous.
php "$SCRIPT_DIR/prepare-spec.php" "$SCRIPT_DIR/sources/spec.json" "$PREPARED_SPEC"

# You can check config options by invoking:
# java -jar $SCRIPT_DIR/sources/swagger-codegen-cli.jar config-help -l php

# The templates are located here:
# https://github.com/swagger-api/swagger-codegen-generators/tree/master/src/main/resources/handlebars/php

java -jar $SCRIPT_DIR/sources/swagger-codegen-cli.jar generate \
  -i "$PREPARED_SPEC" \
  -l php \
  -o ./ \
  -c $SCRIPT_DIR/config.json

# Fixing the code to replace old removed function with new method
find ./src -type f -name '*.php' \
  -exec sed -i 's#\\GuzzleHttp\\Psr7\\build_query#\\GuzzleHttp\\Psr7\\Query::build#g' {} \;
