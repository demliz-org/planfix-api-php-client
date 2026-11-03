# Planfix\ObjectApi

Operations with objects

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getObjectById()**](ObjectApi.md#getObjectById) | **GET** /object/{id} | Get object by number |
| [**getObjectList()**](ObjectApi.md#getObjectList) | **POST** /object/list | Get list of objects |
| [**getObjectTaskStatusList()**](ObjectApi.md#getObjectTaskStatusList) | **GET** /object/{id}/statuses | Get list of task statuses for object |


## `getObjectById()`

```php
getObjectById($id): \Planfix\Model\GetObjectById200Response
```

Get object by number

This method lets you get a object by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of object

try {
    $result = $apiInstance->getObjectById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->getObjectById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of object | |

### Return type

[**\Planfix\Model\GetObjectById200Response**](../Model/GetObjectById200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectList()`

```php
getObjectList($getObjectListRequest): \Planfix\Model\GetObjectList200Response
```

Get list of objects

This method lets you get a list of objects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$getObjectListRequest = {"offset":0,"pageSize":100}; // \Planfix\Model\GetObjectListRequest

try {
    $result = $apiInstance->getObjectList($getObjectListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->getObjectList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **getObjectListRequest** | [**\Planfix\Model\GetObjectListRequest**](../Model/GetObjectListRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\GetObjectList200Response**](../Model/GetObjectList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getObjectTaskStatusList()`

```php
getObjectTaskStatusList($id, $fields): \Planfix\Model\GetTaskStatusList200Response
```

Get list of task statuses for object

This method lets you get a list of task statuses for object

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of object
$fields = name,isActive,texts; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, color, isActive, hasDeadline, isAppliedIndividually, texts

try {
    $result = $apiInstance->getObjectTaskStatusList($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->getObjectTaskStatusList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of object | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, color, isActive, hasDeadline, isAppliedIndividually, texts | [optional] |

### Return type

[**\Planfix\Model\GetTaskStatusList200Response**](../Model/GetTaskStatusList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
