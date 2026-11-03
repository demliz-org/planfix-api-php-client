<?php

declare(strict_types=1);

if ($argc !== 3) {
    fwrite(STDERR, "Usage: php prepare-spec.php <source-spec> <output-spec>\n");

    exit(1);
}

$json = file_get_contents($argv[1]);

if ($json === false) {
    throw new RuntimeException('Unable to read OpenAPI specification: ' . $argv[1]);
}

// Preserve JSON objects, including {}, rather than turning them into PHP arrays.
$spec = json_decode($json, false, flags: JSON_THROW_ON_ERROR);

if (!isset($spec->paths) || !$spec->paths instanceof stdClass) {
    throw new RuntimeException('Expected an OpenAPI object containing "paths".');
}

// The upstream specification declares "encoding.historyMetadata.contentType" as "plain/text; charset=utf-8"
// for these "application/json" request bodies, although their schemas have no "historyMetadata" property.
// OpenAPI requires encoding keys to name schema properties; encoding applies only to multipart and form bodies.
// Without removing this block, OpenAPI Generator reports six validation errors, one per path, for example:
// "attribute paths.'/contact/list'(post).requestBody.content.'application/json'.encoding.historyMetadata is unexpected"
$knownPathsWithInvalidEncoding = [
    '/contact/list',
    '/task/list',
    '/project/list',
    '/user/list',
    '/report/list',
    '/report/{id}/save/list',
];

$knownIncorrectEncoding = new stdClass();
$knownIncorrectEncoding->historyMetadata = new stdClass();
$knownIncorrectEncoding->historyMetadata->contentType = 'plain/text; charset=utf-8';

foreach ($knownPathsWithInvalidEncoding as $path) {
    $media = $spec->paths->{$path}->post->requestBody->content->{'application/json'} ?? null;

    if (!$media instanceof stdClass) {
        throw new RuntimeException('Expected JSON request body is absent: ' . $path);
    }

    if (!property_exists($media, 'encoding')) {
        continue;
    }

    if ($media->encoding != $knownIncorrectEncoding) {
        throw new RuntimeException('Unexpected encoding; review specification normalization: ' . $path);
    }

    unset($media->encoding);
}

$encodedSpec = json_encode($spec, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);

if (file_put_contents($argv[2], $encodedSpec) === false) {
    throw new RuntimeException('Unable to write prepared specification: ' . $argv[2]);
}
