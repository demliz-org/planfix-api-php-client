# Planfix\CustomFieldsContactApi



All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomfieldContact()**](CustomFieldsContactApi.md#getCustomfieldContact) | **GET** /customfield/contact | Get a list of a custom contact fields |
| [**getCustomfieldSetsContact()**](CustomFieldsContactApi.md#getCustomfieldSetsContact) | **GET** /customfield/group/contact | Get a list of a custom contact fields set |
| [**getCustomfieldsForContact()**](CustomFieldsContactApi.md#getCustomfieldsForContact) | **GET** /customfield/contact/{id} | Get a list of a custom fields for contact |
| [**postCustomfieldAdd()**](CustomFieldsContactApi.md#postCustomfieldAdd) | **POST** /customfield/contact/ | Create a custom field for contact |
| [**postCustomfieldSetAdd()**](CustomFieldsContactApi.md#postCustomfieldSetAdd) | **POST** /customfield/group/contact/ | Create a custom fields set for contact |


## `getCustomfieldContact()`

```php
getCustomfieldContact($fields): \Planfix\Model\GetCustomfieldContact200Response
```

Get a list of a custom contact fields

This method lets you get a list of custom contact and company fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name,names,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldContact($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsContactApi->getCustomfieldContact: ', $e->getMessage(), PHP_EOL;
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

## `getCustomfieldSetsContact()`

```php
getCustomfieldSetsContact(): \Planfix\Model\GetCustomfieldSetsContact200Response
```

Get a list of a custom contact fields set

This method lets you get a list of custom contact and company fields sets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCustomfieldSetsContact();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsContactApi->getCustomfieldSetsContact: ', $e->getMessage(), PHP_EOL;
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

## `getCustomfieldsForContact()`

```php
getCustomfieldsForContact($id, $fields): \Planfix\Model\GetCustomfieldContact200Response
```

Get a list of a custom fields for contact

This method lets you get a list of custom fields for contact or company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$fields = id,name,names,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldsForContact($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsContactApi->getCustomfieldsForContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
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

## `postCustomfieldAdd()`

```php
postCustomfieldAdd($idempotencyKey, $customField): \Planfix\Model\PostContact201Response
```

Create a custom field for contact

This method lets you create a custom field for contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$customField = {"name":"Line","names":{"en":"Line","fr":"Ligne"},"type":0,"groupId":1}; // \Planfix\Model\CustomField

try {
    $result = $apiInstance->postCustomfieldAdd($idempotencyKey, $customField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsContactApi->postCustomfieldAdd: ', $e->getMessage(), PHP_EOL;
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

## `postCustomfieldSetAdd()`

```php
postCustomfieldSetAdd($idempotencyKey, $shortEntity): \Planfix\Model\PostContact201Response
```

Create a custom fields set for contact

This method lets you create a custom fields set for contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$shortEntity = {"name":"My custom fields set for contacts"}; // \Planfix\Model\ShortEntity

try {
    $result = $apiInstance->postCustomfieldSetAdd($idempotencyKey, $shortEntity);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsContactApi->postCustomfieldSetAdd: ', $e->getMessage(), PHP_EOL;
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
