# Planfix\CustomFieldsTaskApi



All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomfieldSetsTask()**](CustomFieldsTaskApi.md#getCustomfieldSetsTask) | **GET** /customfield/group/task | Get a list of a custom task fields set |
| [**getCustomfieldTask()**](CustomFieldsTaskApi.md#getCustomfieldTask) | **GET** /customfield/task | Get list of custom task fields |
| [**getCustomfieldsForTask()**](CustomFieldsTaskApi.md#getCustomfieldsForTask) | **GET** /customfield/task/{id} | Get list of custom fields for task |
| [**postCustomfieldSetTaskAdd()**](CustomFieldsTaskApi.md#postCustomfieldSetTaskAdd) | **POST** /customfield/group/task/ | Create a custom fields set for task |
| [**postCustomfieldTaskAdd()**](CustomFieldsTaskApi.md#postCustomfieldTaskAdd) | **POST** /customfield/task/ | Create a custom field for task |


## `getCustomfieldSetsTask()`

```php
getCustomfieldSetsTask(): \Planfix\Model\GetCustomfieldSetsContact200Response
```

Get a list of a custom task fields set

This method lets you get a list of custom task fields sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCustomfieldSetsTask();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsTaskApi->getCustomfieldSetsTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Planfix\Model\GetCustomfieldSetsContact200Response**](../Model/GetCustomfieldSetsContact200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomfieldTask()`

```php
getCustomfieldTask($fields): \Planfix\Model\GetCustomfieldContact200Response
```

Get list of custom task fields

This method lets you get a list of custom task fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name,names,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldTask($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsTaskApi->getCustomfieldTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors | [optional] |

### Return type

[**\Planfix\Model\GetCustomfieldContact200Response**](../Model/GetCustomfieldContact200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomfieldsForTask()`

```php
getCustomfieldsForTask($id, $fields): \Planfix\Model\GetCustomfieldContact200Response
```

Get list of custom fields for task

This method lets you get a list of custom fields for task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$fields = id,name,names,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldsForTask($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsTaskApi->getCustomfieldsForTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors | [optional] |

### Return type

[**\Planfix\Model\GetCustomfieldContact200Response**](../Model/GetCustomfieldContact200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCustomfieldSetTaskAdd()`

```php
postCustomfieldSetTaskAdd($idempotencyKey, $shortEntity): \Planfix\Model\PostContact201Response
```

Create a custom fields set for task

This method lets you create a custom fields set for task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$shortEntity = {"name":"My custom fields set for tasks"}; // \Planfix\Model\ShortEntity

try {
    $result = $apiInstance->postCustomfieldSetTaskAdd($idempotencyKey, $shortEntity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsTaskApi->postCustomfieldSetTaskAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **shortEntity** | [**\Planfix\Model\ShortEntity**](../Model/ShortEntity.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostContact201Response**](../Model/PostContact201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCustomfieldTaskAdd()`

```php
postCustomfieldTaskAdd($idempotencyKey, $customField): \Planfix\Model\PostContact201Response
```

Create a custom field for task

This method lets you create a custom field for task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsTaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$customField = {"name":"Line","names":{"en":"Line","fr":"Ligne"},"type":0,"groupId":1}; // \Planfix\Model\CustomField

try {
    $result = $apiInstance->postCustomfieldTaskAdd($idempotencyKey, $customField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsTaskApi->postCustomfieldTaskAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **customField** | [**\Planfix\Model\CustomField**](../Model/CustomField.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostContact201Response**](../Model/PostContact201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
