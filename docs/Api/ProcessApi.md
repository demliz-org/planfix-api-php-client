# Planfix\ProcessApi

Operations with process

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getContactProcessList()**](ProcessApi.md#getContactProcessList) | **GET** /process/contact | Get list of contact processes |
| [**getTaskProcessList()**](ProcessApi.md#getTaskProcessList) | **GET** /process/task | Get list of task processes |
| [**getTaskStatusList()**](ProcessApi.md#getTaskStatusList) | **GET** /process/task/{id}/statuses | Get list of task statuses for process |


## `getContactProcessList()`

```php
getContactProcessList($fields): \Planfix\Model\GetContactProcessList200Response
```

Get list of contact processes

This method lets you get a list of contact processes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name

try {
    $result = $apiInstance->getContactProcessList($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessApi->getContactProcessList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name | [optional] |

### Return type

[**\Planfix\Model\GetContactProcessList200Response**](../Model/GetContactProcessList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskProcessList()`

```php
getTaskProcessList($fields): \Planfix\Model\GetTaskProcessList200Response
```

Get list of task processes

This method lets you get a list of task processes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name

try {
    $result = $apiInstance->getTaskProcessList($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessApi->getTaskProcessList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name | [optional] |

### Return type

[**\Planfix\Model\GetTaskProcessList200Response**](../Model/GetTaskProcessList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskStatusList()`

```php
getTaskStatusList($id, $fields): \Planfix\Model\GetTaskStatusList200Response
```

Get list of task statuses for process

This method lets you get a list of task statuses for process

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProcessApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Process identifier
$fields = name,isActive,texts; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, color, isActive, hasDeadline, isAppliedIndividually, texts

try {
    $result = $apiInstance->getTaskStatusList($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcessApi->getTaskStatusList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Process identifier | |
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
