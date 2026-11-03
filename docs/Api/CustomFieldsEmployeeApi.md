# Planfix\CustomFieldsEmployeeApi



All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomfieldSetsUser()**](CustomFieldsEmployeeApi.md#getCustomfieldSetsUser) | **GET** /customfield/group/user | Get a list of a custom user fields set |
| [**getCustomfieldUser()**](CustomFieldsEmployeeApi.md#getCustomfieldUser) | **GET** /customfield/user | Get list of custom employee fields |
| [**getCustomfieldsForUser()**](CustomFieldsEmployeeApi.md#getCustomfieldsForUser) | **GET** /customfield/user/{id} | Get list of custom fields for employee |
| [**postCustomfieldSetUserAdd()**](CustomFieldsEmployeeApi.md#postCustomfieldSetUserAdd) | **POST** /customfield/group/user/ | Create a custom fields set for user |
| [**postCustomfieldUserAdd()**](CustomFieldsEmployeeApi.md#postCustomfieldUserAdd) | **POST** /customfield/user/ | Create a custom field for user |


## `getCustomfieldSetsUser()`

```php
getCustomfieldSetsUser(): \Planfix\Model\GetCustomfieldSetsContact200Response
```

Get a list of a custom user fields set

This method lets you get a list of custom user fields sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsEmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCustomfieldSetsUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsEmployeeApi->getCustomfieldSetsUser: ', $e->getMessage(), PHP_EOL;
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

## `getCustomfieldUser()`

```php
getCustomfieldUser($fields): \Planfix\Model\GetCustomfieldContact200Response
```

Get list of custom employee fields

This method lets you get a list of custom employee fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsEmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name,names,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldUser($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsEmployeeApi->getCustomfieldUser: ', $e->getMessage(), PHP_EOL;
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

## `getCustomfieldsForUser()`

```php
getCustomfieldsForUser($id, $fields): \Planfix\Model\GetCustomfieldContact200Response
```

Get list of custom fields for employee

This method lets you get a list of custom fields for employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsEmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = user:1 OR 1; // string | Number of employee
$fields = id,name,names,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldsForUser($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsEmployeeApi->getCustomfieldsForUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of employee | |
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

## `postCustomfieldSetUserAdd()`

```php
postCustomfieldSetUserAdd($idempotencyKey, $shortEntity): \Planfix\Model\PostContact201Response
```

Create a custom fields set for user

This method lets you create a custom fields set for user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsEmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$shortEntity = {"name":"My custom fields set for user"}; // \Planfix\Model\ShortEntity

try {
    $result = $apiInstance->postCustomfieldSetUserAdd($idempotencyKey, $shortEntity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsEmployeeApi->postCustomfieldSetUserAdd: ', $e->getMessage(), PHP_EOL;
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

## `postCustomfieldUserAdd()`

```php
postCustomfieldUserAdd($idempotencyKey, $customField): \Planfix\Model\PostContact201Response
```

Create a custom field for user

This method lets you create a custom field for user

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsEmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$customField = {"name":"Line","names":{"en":"Line","fr":"Ligne"},"type":0,"groupId":1}; // \Planfix\Model\CustomField

try {
    $result = $apiInstance->postCustomfieldUserAdd($idempotencyKey, $customField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsEmployeeApi->postCustomfieldUserAdd: ', $e->getMessage(), PHP_EOL;
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
