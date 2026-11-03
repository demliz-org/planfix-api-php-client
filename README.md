# Planfix REST API PHP client

The Planfix PHP SDK is generated with **OpenAPI Generator 7.27.0** (`php`/`guzzle`).

## Requirements and installation

PHP 8.1+, ext-curl, ext-json, ext-mbstring, and Guzzle 7. For development:

```bash
composer install
```

## Usage

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Planfix\Api\TaskApi;
use Planfix\Configuration;
use Planfix\Model\TaskCreateRequest;

// Query boolean formatting is global, even when APIs receive their own config.
Configuration::getDefaultConfiguration()
    ->setBooleanFormatForQueryString(Configuration::BOOLEAN_FORMAT_STRING);

$config = (new Configuration())
    ->setHost('https://your-account.planfix.com/rest')
    ->setAccessToken($token);

$taskApi = new TaskApi(config: $config);

$createdTask = $taskApi->postTask(
    taskCreateRequest: new TaskCreateRequest(['name' => 'Example task']),
);

$taskId = $createdTask->getId();
```

Use model objects as request bodies; the SDK performs JSON encoding.

API documentation is in [docs/Api](docs/Api), model documentation in [docs/Model](docs/Model).
The API and Model namespaces are `Planfix\Api` and `Planfix\Model`.

## Regeneration

```bash
./generation/generate.sh
```

The [generation guide](generation/README.md) documents caching, strict input validation,
managed directories and the small upstream template patch for successful responses without a body.
Regeneration preserves handwritten metadata, including this `README.md` file.
No Planfix requests are made by tests.
