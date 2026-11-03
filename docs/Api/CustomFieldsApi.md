# Planfix\CustomFieldsApi



All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCustomfieldGeneric()**](CustomFieldsApi.md#getCustomfieldGeneric) | **GET** /customfield/main | Get list of custom main fields |
| [**getCustomfieldTypes()**](CustomFieldsApi.md#getCustomfieldTypes) | **GET** /customfield/type | Get a list of a custom field types |
| [**getCustomfieldsForDatatag()**](CustomFieldsApi.md#getCustomfieldsForDatatag) | **GET** /customfield/datatag/{id} | Get list of custom fields for data tag |
| [**getCustomfieldsForDirectory()**](CustomFieldsApi.md#getCustomfieldsForDirectory) | **GET** /customfield/directory/{id} | Get list of custom fields for directory |
| [**postCustomfieldMainAdd()**](CustomFieldsApi.md#postCustomfieldMainAdd) | **POST** /customfield/main/ | Create a custom main field |
| [**postCustomfieldMainUpdate()**](CustomFieldsApi.md#postCustomfieldMainUpdate) | **POST** /customfield/main/{id} | Update a custom main field |


## `getCustomfieldGeneric()`

```php
getCustomfieldGeneric($fields): \Planfix\Model\GetCustomfieldContact200Response
```

Get list of custom main fields

This method lets you get a list of custom main fields

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name,group,type,objectType,directoryId,mainValue; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, directoryId, directoryFields, enumValues, listValuesColors, mainValue

try {
    $result = $apiInstance->getCustomfieldGeneric($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldGeneric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, directoryId, directoryFields, enumValues, listValuesColors, mainValue | [optional] |

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

## `getCustomfieldTypes()`

```php
getCustomfieldTypes(): \Planfix\Model\GetCustomfieldTypes200Response
```

Get a list of a custom field types

This method lets you get a list of custom field types

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getCustomfieldTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Planfix\Model\GetCustomfieldTypes200Response**](../Model/GetCustomfieldTypes200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomfieldsForDatatag()`

```php
getCustomfieldsForDatatag($id, $fields): \Planfix\Model\GetCustomfieldContact200Response
```

Get list of custom fields for data tag

This method lets you get a list of custom fields for data tag

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Data tag identifier
$fields = id,name,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldsForDatatag($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldsForDatatag: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Data tag identifier | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors | [optional] |

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

## `getCustomfieldsForDirectory()`

```php
getCustomfieldsForDirectory($id, $fields): \Planfix\Model\GetCustomfieldContact200Response
```

Get list of custom fields for directory

This method lets you get a list of custom fields for directory

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Directory identifier
$fields = id,name,type; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldsForDirectory($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldsForDirectory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Directory identifier | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors | [optional] |

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

## `postCustomfieldMainAdd()`

```php
postCustomfieldMainAdd($customField): \Planfix\Model\PostContact201Response
```

Create a custom main field

This method lets you create a custom main field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customField = {"name":"Main field - Line","names":{"de":"Hauptfeld - Linie","fr":"Champ principal - Ligne"},"type":0,"mainValue":"Test string value"}; // \Planfix\Model\CustomField

try {
    $result = $apiInstance->postCustomfieldMainAdd($customField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->postCustomfieldMainAdd: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `postCustomfieldMainUpdate()`

```php
postCustomfieldMainUpdate($id, $customField): \Planfix\Model\PostCustomfieldMainUpdate200Response
```

Update a custom main field

This method lets you update a custom main field

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Main field identifier
$customField = {"name":"Main field - New"}; // \Planfix\Model\CustomField

try {
    $result = $apiInstance->postCustomfieldMainUpdate($id, $customField);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->postCustomfieldMainUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Main field identifier | |
| **customField** | [**\Planfix\Model\CustomField**](../Model/CustomField.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostCustomfieldMainUpdate200Response**](../Model/PostCustomfieldMainUpdate200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
