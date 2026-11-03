# Planfix\DataTagsApi



All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDatatagEntryKey()**](DataTagsApi.md#deleteDatatagEntryKey) | **DELETE** /datatag/entry/{key} | Delete data tag entry |
| [**getDataTags()**](DataTagsApi.md#getDataTags) | **POST** /datatag/list | Get data tags |
| [**getDatatagEntryKey()**](DataTagsApi.md#getDatatagEntryKey) | **GET** /datatag/entry/{key} | Get data tag entry |
| [**getDatatagId()**](DataTagsApi.md#getDatatagId) | **GET** /datatag/{id} | Get data tag by identifier |
| [**postListDataTagEntries()**](DataTagsApi.md#postListDataTagEntries) | **POST** /datatag/{id}/entry/list | Get list of data tag entries |
| [**postUpdateDataTagEntry()**](DataTagsApi.md#postUpdateDataTagEntry) | **POST** /datatag/entry/{key} | Update data tag entry |


## `deleteDatatagEntryKey()`

```php
deleteDatatagEntryKey($key)
```

Delete data tag entry

This method lets you delete a data tag entry by key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 155; // int | Key of the data tag entry

try {
    $apiInstance->deleteDatatagEntryKey($key);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->deleteDatatagEntryKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **int**| Key of the data tag entry | |

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDataTags()`

```php
getDataTags($getDataTagsRequest): \Planfix\Model\GetDataTags200Response
```

Get data tags

This method lets you get a list of data tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$getDataTagsRequest = {"offset":0,"pageSize":100,"fields":"id,name,group,fields"}; // \Planfix\Model\GetDataTagsRequest

try {
    $result = $apiInstance->getDataTags($getDataTagsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->getDataTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **getDataTagsRequest** | [**\Planfix\Model\GetDataTagsRequest**](../Model/GetDataTagsRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\GetDataTags200Response**](../Model/GetDataTags200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDatatagEntryKey()`

```php
getDatatagEntryKey($key, $fields): \Planfix\Model\GetDatatagEntryKey200Response
```

Get data tag entry

This method lets you get a data tag entry by key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 155; // int | Key of the data tag entry
$fields = key,dataTag,10,11; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* dataTag, key, task, contact, commentId

try {
    $result = $apiInstance->getDatatagEntryKey($key, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->getDatatagEntryKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **int**| Key of the data tag entry | |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* dataTag, key, task, contact, commentId | [optional] |

### Return type

[**\Planfix\Model\GetDatatagEntryKey200Response**](../Model/GetDatatagEntryKey200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDatatagId()`

```php
getDatatagId($id, $fields): \Planfix\Model\GetDatatagId200Response
```

Get data tag by identifier

This method lets you get a data tag by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Data tag identifier
$fields = id,name,group,fields; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, group, fields

try {
    $result = $apiInstance->getDatatagId($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->getDatatagId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Data tag identifier | |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, group, fields | [optional] |

### Return type

[**\Planfix\Model\GetDatatagId200Response**](../Model/GetDatatagId200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postListDataTagEntries()`

```php
postListDataTagEntries($id, $postListDataTagEntriesRequest): \Planfix\Model\PostListDataTagEntries200Response
```

Get list of data tag entries

This method lets you get a list of data tag entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of data tag
$postListDataTagEntriesRequest = {"offset":0,"pageSize":100,"fields":"dataTag,key,commentId,task,contact,10"}; // \Planfix\Model\PostListDataTagEntriesRequest

try {
    $result = $apiInstance->postListDataTagEntries($id, $postListDataTagEntriesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->postListDataTagEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Identifier of data tag | |
| **postListDataTagEntriesRequest** | [**\Planfix\Model\PostListDataTagEntriesRequest**](../Model/PostListDataTagEntriesRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostListDataTagEntries200Response**](../Model/PostListDataTagEntries200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUpdateDataTagEntry()`

```php
postUpdateDataTagEntry($key, $silent, $dataTagEntryUpdateRequest)
```

Update data tag entry

This method lets you update a data tag entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 155; // int | Key of the data tag entry
$silent = false; // bool | Silent mode
$dataTagEntryUpdateRequest = {"customFieldData":[{"field":{"id":10},"value":"Test value"}]}; // \Planfix\Model\DataTagEntryUpdateRequest

try {
    $apiInstance->postUpdateDataTagEntry($key, $silent, $dataTagEntryUpdateRequest);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->postUpdateDataTagEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **int**| Key of the data tag entry | |
| **silent** | **bool**| Silent mode | [optional] [default to false] |
| **dataTagEntryUpdateRequest** | [**\Planfix\Model\DataTagEntryUpdateRequest**](../Model/DataTagEntryUpdateRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
