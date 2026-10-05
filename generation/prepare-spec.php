<?php

declare(strict_types=1);

if ($argc !== 3) {
    fwrite(STDERR, "Usage: php prepare-spec.php <source-spec> <output-spec>\n");

    exit(1);
}

[$script, $sourcePath, $outputPath] = $argv;

$json = file_get_contents($sourcePath);

if ($json === false) {
    fwrite(STDERR, "Unable to read OpenAPI specification: {$sourcePath}\n");

    exit(1);
}

$spec = json_decode($json, true, 512, JSON_THROW_ON_ERROR);

foreach (['task', 'contact', 'project'] as $target) {
    $oldPath = "/file/{id}/attach/{$target}";
    $newPath = "/file/{fileId}/attach/{$target}";

    if (!isset($spec['paths'][$oldPath]['post']['parameters'])) {
        throw new RuntimeException("Expected operation is absent from the specification: {$oldPath}");
    }

    $wasRenamed = false;

    foreach ($spec['paths'][$oldPath]['post']['parameters'] as &$parameter) {
        if (($parameter['in'] ?? null) === 'path' && ($parameter['name'] ?? null) === 'id') {
            $parameter['name'] = 'fileId';
            $wasRenamed = true;
        }
    }

    unset($parameter);

    if (!$wasRenamed) {
        throw new RuntimeException("Path parameter id is absent from the specification: {$oldPath}");
    }

    $spec['paths'][$newPath] = $spec['paths'][$oldPath];

    unset($spec['paths'][$oldPath]);
}

$encoded = json_encode($spec, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);

if (file_put_contents($outputPath, $encoded) === false) {
    fwrite(STDERR, "Unable to write prepared OpenAPI specification: {$outputPath}\n");

    exit(1);
}
