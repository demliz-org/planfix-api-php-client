# Planfix\FileApi

All URIs are relative to *https://your-account.planfix.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**attachFileToContact**](FileApi.md#attachfiletocontact) | **POST** /file/{id}/attach/contact | Attach file to contact
[**attachFileToProject**](FileApi.md#attachfiletoproject) | **POST** /file/{id}/attach/project | Attach file to project
[**attachFileToTask**](FileApi.md#attachfiletotask) | **POST** /file/{id}/attach/task | Attach file to task
[**deleteFileId**](FileApi.md#deletefileid) | **DELETE** /file/{id} | Delete file
[**getFileId**](FileApi.md#getfileid) | **GET** /file/{id} | Get file by identifier
[**getFileIdDownload**](FileApi.md#getfileiddownload) | **GET** /file/{id}/download | Download file
[**postFileUpdate**](FileApi.md#postfileupdate) | **POST** /file/{id} | Update file
[**postFileUpload**](FileApi.md#postfileupload) | **POST** /file/ | Upload file
[**postFileUploadByUrl**](FileApi.md#postfileuploadbyurl) | **POST** /file/from-url/ | Upload file by link

# **attachFileToContact**
> \Planfix\Model\InlineResponse20021 attachFileToContact($id, $id, $idempotencyKey)

Attach file to contact

This method lets you attach file to target contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | File identifier
$id = 56; // int | Number of contact
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->attachFileToContact($id, $id, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->attachFileToContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| File identifier |
 **id** | **int**| Number of contact |
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachFileToProject**
> \Planfix\Model\InlineResponse20021 attachFileToProject($id, $id, $idempotencyKey)

Attach file to project

This method lets you attach file to target project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | File identifier
$id = 56; // int | Number of project
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->attachFileToProject($id, $id, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->attachFileToProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| File identifier |
 **id** | **int**| Number of project |
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **attachFileToTask**
> \Planfix\Model\InlineResponse20021 attachFileToTask($id, $id, $idempotencyKey)

Attach file to task

This method lets you attach file to target task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | File identifier
$id = 56; // int | Number of task
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->attachFileToTask($id, $id, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->attachFileToTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| File identifier |
 **id** | **int**| Number of task |
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFileId**
> \Planfix\Model\InlineResponse20021 deleteFileId($id)

Delete file

This method lets you delete a file by its ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| File identifier |

### Return type

[**\Planfix\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileId**
> \Planfix\Model\InlineResponse20020 getFileId($id, $fields)

Get file by identifier

This method lets you get a file by its ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | File identifier
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, size, downloadUrl, link (for online documents)

try {
    $result = $apiInstance->getFileId($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->getFileId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| File identifier |
 **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, size, downloadUrl, link (for online documents) | [optional]

### Return type

[**\Planfix\Model\InlineResponse20020**](../Model/InlineResponse20020.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFileIdDownload**
> getFileIdDownload($id)

Download file

This method lets you download file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| File identifier |

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/gzip, application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFileUpdate**
> \Planfix\Model\InlineResponse20021 postFileUpdate($id, $body)

Update file

This method lets you update a file name

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | File identifier
$body = new \Planfix\Model\FileIdBody(); // \Planfix\Model\FileIdBody | 

try {
    $result = $apiInstance->postFileUpdate($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->postFileUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| File identifier |
 **body** | [**\Planfix\Model\FileIdBody**](../Model/FileIdBody.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse20021**](../Model/InlineResponse20021.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFileUpload**
> \Planfix\Model\InlineResponse20022 postFileUpload($file, $idempotencyKey, $targetType)

Upload file

This method lets you upload file to Planfix

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "file_example"; // string | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$targetType = "task"; // string | Defines the type of entity the uploaded file is associated with.

try {
    $result = $apiInstance->postFileUpload($file, $idempotencyKey, $targetType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->postFileUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string****string**|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]
 **targetType** | **string**| Defines the type of entity the uploaded file is associated with. | [optional] [default to task]

### Return type

[**\Planfix\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postFileUploadByUrl**
> \Planfix\Model\InlineResponse20022 postFileUploadByUrl($body, $idempotencyKey, $targetType)

Upload file by link

This method lets you upload a file to Planfix using a link

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\FileApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\FileUploadRequest(); // \Planfix\Model\FileUploadRequest | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$targetType = "task"; // string | Defines the type of entity the uploaded file is associated with.

try {
    $result = $apiInstance->postFileUploadByUrl($body, $idempotencyKey, $targetType);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileApi->postFileUploadByUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\FileUploadRequest**](../Model/FileUploadRequest.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]
 **targetType** | **string**| Defines the type of entity the uploaded file is associated with. | [optional] [default to task]

### Return type

[**\Planfix\Model\InlineResponse20022**](../Model/InlineResponse20022.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

