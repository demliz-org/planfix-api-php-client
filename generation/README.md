# Generate the Planfix PHP SDK

The main pipeline uses **OpenAPI Generator 7.27.0**, `php`/`guzzle`, the standard parameter order
and model-based request-body argument names.

> [!NOTE]
> SDK version is configured independently of the Planfix API version (currently 1.7.7).

Requirements:
- Java capable of running the pinned generator
- PHP 8.1+
- bash
- curl
- patch
- usual Unix file tools

```bash
./generation/generate.sh
# Optional: generate into a separate directory instead of the repository root.
./generation/generate.sh /tmp/planfix-sdk-output
```

Paths are resolved relative to the script, so it can run from another directory.

The script caches the versioned JAR generator file and specification in ignored `sources/`.

The cached spec is reused; to use a new spec, replace `sources/spec.json` explicitly.

The pipeline has two handwritten executable files:
- `generate.sh`
- `prepare-spec.php`

The latter:
- preserves JSON objects (including `{}`)
- removes only the six known invalid JSON-body encoding entries
- stops on unexpected changes to them

It does not rename file parameters or force request bodies to be named body.

OpenAPI validation remains enabled.

The standard `author template` command extracts the pinned templates to a temporary directory.
A short [patch](patches/7.27.0-empty-success-response.patch) handles declared successful responses without a body.
Patch failure stops the generation; there are no regex edits to generated PHP and no permanent template copies.

> [!WARNING]
> Review the patch when updating the generator.

Generation and PHP syntax/deprecation checks complete in a temporary directory before output is synchronized.
`src/`, `docs/Api/`, `docs/Model/`, `test/Api/` and `test/Model/` are managed generated directories:
obsolete PHP/Markdown files in them are removed.

Do not put handwritten code there.

The root `.openapi-generator-ignore` protects some files from regeneration, such as `README.md` and `composer.json`.
Package metadata intentionally has no Composer version field: the actual installed version comes from VCS tags.
The configuration `artifactVersion` is used for generator metadata, not for publishing a release.
