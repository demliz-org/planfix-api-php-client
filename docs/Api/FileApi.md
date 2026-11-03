# Planfix\FileApi

Operations with files

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**attachFileToContact()**](FileApi.md#attachFileToContact) | **POST** /file/{id}/attach/contact | Attach file to contact |
| [**attachFileToProject()**](FileApi.md#attachFileToProject) | **POST** /file/{id}/attach/project | Attach file to project |
| [**attachFileToTask()**](FileApi.md#attachFileToTask) | **POST** /file/{id}/attach/task | Attach file to task |
| [**deleteFileId()**](FileApi.md#deleteFileId) | **DELETE** /file/{id} | Delete file |
| [**getFileId()**](FileApi.md#getFileId) | **GET** /file/{id} | Get file by identifier |
| [**getFileIdDownload()**](FileApi.md#getFileIdDownload) | **GET** /file/{id}/download | Download file |
| [**postFileUpdate()**](FileApi.md#postFileUpdate) | **POST** /file/{id} | Update file |
| [**postFileUpload()**](FileApi.md#postFileUpload) | **POST** /file/ | Upload file |
| [**postFileUploadByUrl()**](FileApi.md#postFileUploadByUrl) | **POST** /file/from-url/ | Upload file by link |


## `attachFileToContact()`

```php
attachFileToContact($id, $id2, $idempotencyKey): \Planfix\Model\PostFileUpdate200Response
```

Attach file to contact

This method lets you attach file to target contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | File identifier
$id2 = 56; // int | Number of contact
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->attachFileToContact($id, $id2, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->attachFileToContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| File identifier | |
| **id2** | **int**| Number of contact | |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |

### Return type

[**\Planfix\Model\PostFileUpdate200Response**](../Model/PostFileUpdate200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachFileToProject()`

```php
attachFileToProject($id, $id2, $idempotencyKey): \Planfix\Model\PostFileUpdate200Response
```

Attach file to project

This method lets you attach file to target project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | File identifier
$id2 = 56; // int | Number of project
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->attachFileToProject($id, $id2, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->attachFileToProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| File identifier | |
| **id2** | **int**| Number of project | |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |

### Return type

[**\Planfix\Model\PostFileUpdate200Response**](../Model/PostFileUpdate200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `attachFileToTask()`

```php
attachFileToTask($id, $id2, $idempotencyKey): \Planfix\Model\PostFileUpdate200Response
```

Attach file to task

This method lets you attach file to target task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | File identifier
$id2 = 56; // int | Number of task
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->attachFileToTask($id, $id2, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->attachFileToTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| File identifier | |
| **id2** | **int**| Number of task | |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |

### Return type

[**\Planfix\Model\PostFileUpdate200Response**](../Model/PostFileUpdate200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFileId()`

```php
deleteFileId($id): \Planfix\Model\PostFileUpdate200Response
```

Delete file

This method lets you delete a file by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | File identifier

try {
    $result = $apiInstance->deleteFileId($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->deleteFileId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| File identifier | |

### Return type

[**\Planfix\Model\PostFileUpdate200Response**](../Model/PostFileUpdate200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileId()`

```php
getFileId($id, $fields): \Planfix\Model\GetFileId200Response
```

Get file by identifier

This method lets you get a file by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | File identifier
$fields = name,size; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, size, downloadUrl, link (for online documents)

try {
    $result = $apiInstance->getFileId($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFileId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| File identifier | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, size, downloadUrl, link (for online documents) | [optional] |

### Return type

[**\Planfix\Model\GetFileId200Response**](../Model/GetFileId200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileIdDownload()`

```php
getFileIdDownload($id)
```

Download file

This method lets you download file

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | File identifier

try {
    $apiInstance->getFileIdDownload($id);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFileIdDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| File identifier | |

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/gzip`, `application/octet-stream`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFileUpdate()`

```php
postFileUpdate($id, $postFileUpdateRequest): \Planfix\Model\PostFileUpdate200Response
```

Update file

This method lets you update a file name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | File identifier
$postFileUpdateRequest = {"name":"Main file - New"}; // \Planfix\Model\PostFileUpdateRequest

try {
    $result = $apiInstance->postFileUpdate($id, $postFileUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->postFileUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| File identifier | |
| **postFileUpdateRequest** | [**\Planfix\Model\PostFileUpdateRequest**](../Model/PostFileUpdateRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostFileUpdate200Response**](../Model/PostFileUpdate200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFileUpload()`

```php
postFileUpload($file, $idempotencyKey, $targetType): \Planfix\Model\PostFileUpload200Response
```

Upload file

This method lets you upload file to Planfix

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = '/path/to/file.txt'; // \SplFileObject | File for upload
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$targetType = 'task'; // string | Defines the type of entity the uploaded file is associated with.

try {
    $result = $apiInstance->postFileUpload($file, $idempotencyKey, $targetType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->postFileUpload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| File for upload | |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **targetType** | **string**| Defines the type of entity the uploaded file is associated with. | [optional] [default to &#39;task&#39;] |

### Return type

[**\Planfix\Model\PostFileUpload200Response**](../Model/PostFileUpload200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postFileUploadByUrl()`

```php
postFileUploadByUrl($idempotencyKey, $targetType, $fileUploadRequest): \Planfix\Model\PostFileUpload200Response
```

Upload file by link

This method lets you upload a file to Planfix using a link

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$targetType = 'task'; // string | Defines the type of entity the uploaded file is associated with.
$fileUploadRequest = {"name":"My upload file","url":"https://cloud.my/69582925112467.jpg"}; // \Planfix\Model\FileUploadRequest

try {
    $result = $apiInstance->postFileUploadByUrl($idempotencyKey, $targetType, $fileUploadRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->postFileUploadByUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **targetType** | **string**| Defines the type of entity the uploaded file is associated with. | [optional] [default to &#39;task&#39;] |
| **fileUploadRequest** | [**\Planfix\Model\FileUploadRequest**](../Model/FileUploadRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostFileUpload200Response**](../Model/PostFileUpload200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
