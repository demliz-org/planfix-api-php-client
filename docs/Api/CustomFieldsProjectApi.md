# Planfix\CustomFieldsProjectApi



All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomfieldProject()**](CustomFieldsProjectApi.md#getCustomfieldProject) | **GET** /customfield/project | Get a list of custom project fields |
| [**getCustomfieldSetsProject()**](CustomFieldsProjectApi.md#getCustomfieldSetsProject) | **GET** /customfield/group/project | Get a list of a custom project fields set |
| [**getCustomfieldsForProject()**](CustomFieldsProjectApi.md#getCustomfieldsForProject) | **GET** /customfield/project/{id} | Get list of custom fields for project |
| [**postCustomfieldProjectAdd()**](CustomFieldsProjectApi.md#postCustomfieldProjectAdd) | **POST** /customfield/project/ | Create a custom field for project |
| [**postCustomfieldSetProjectAdd()**](CustomFieldsProjectApi.md#postCustomfieldSetProjectAdd) | **POST** /customfield/group/project/ | Create a custom fields set for project |


## `getCustomfieldProject()`

```php
getCustomfieldProject($fields): \Planfix\Model\GetCustomfieldContact200Response
```

Get a list of custom project fields

This method lets you get a list of custom project fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name,names,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldProject($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsProjectApi->getCustomfieldProject: ', $e->getMessage(), PHP_EOL;
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

## `getCustomfieldSetsProject()`

```php
getCustomfieldSetsProject(): \Planfix\Model\GetCustomfieldSetsContact200Response
```

Get a list of a custom project fields set

This method lets you get a list of custom project fields sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCustomfieldSetsProject();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsProjectApi->getCustomfieldSetsProject: ', $e->getMessage(), PHP_EOL;
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

## `getCustomfieldsForProject()`

```php
getCustomfieldsForProject($id, $fields): \Planfix\Model\GetCustomfieldContact200Response
```

Get list of custom fields for project

This method lets you get a list of custom fields for project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of project
$fields = id,name,type,names; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldsForProject($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsProjectApi->getCustomfieldsForProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of project | |
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

## `postCustomfieldProjectAdd()`

```php
postCustomfieldProjectAdd($idempotencyKey, $customField): \Planfix\Model\PostContact201Response
```

Create a custom field for project

This method lets you create a custom field for project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$customField = {"name":"Line","names":{"en":"Line","fr":"Ligne"},"type":0,"groupId":1}; // \Planfix\Model\CustomField

try {
    $result = $apiInstance->postCustomfieldProjectAdd($idempotencyKey, $customField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsProjectApi->postCustomfieldProjectAdd: ', $e->getMessage(), PHP_EOL;
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

## `postCustomfieldSetProjectAdd()`

```php
postCustomfieldSetProjectAdd($idempotencyKey, $shortEntity): \Planfix\Model\PostContact201Response
```

Create a custom fields set for project

This method lets you create a custom fields set for project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$shortEntity = {"name":"My custom fields set for project"}; // \Planfix\Model\ShortEntity

try {
    $result = $apiInstance->postCustomfieldSetProjectAdd($idempotencyKey, $shortEntity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsProjectApi->postCustomfieldSetProjectAdd: ', $e->getMessage(), PHP_EOL;
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
