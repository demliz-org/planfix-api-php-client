# Planfix\DirectoryApi

Operations with directories

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteDirectoryEntryKey()**](DirectoryApi.md#deleteDirectoryEntryKey) | **DELETE** /directory/{id}/entry/{key} | Delete directory entry |
| [**getDirectoriesGroups()**](DirectoryApi.md#getDirectoriesGroups) | **GET** /directory/groups | Get list of directory groups |
| [**getDirectoryById()**](DirectoryApi.md#getDirectoryById) | **GET** /directory/{id} | Get directory by identifier |
| [**getDirectoryIdEntryKey()**](DirectoryApi.md#getDirectoryIdEntryKey) | **GET** /directory/{id}/entry/{key} | Get directory entry |
| [**getListDirectories()**](DirectoryApi.md#getListDirectories) | **POST** /directory/list | Get list of directories |
| [**postAddDirectoryEntry()**](DirectoryApi.md#postAddDirectoryEntry) | **POST** /directory/{id}/entry/ | Add directory entry |
| [**postDirectoryEntriesFilters()**](DirectoryApi.md#postDirectoryEntriesFilters) | **POST** /directory/{id}/filters | Get list directory entries filters |
| [**postListDirectoryEntries()**](DirectoryApi.md#postListDirectoryEntries) | **POST** /directory/{id}/entry/list | Get list of directory entries |
| [**postUpdateDirectoryEntry()**](DirectoryApi.md#postUpdateDirectoryEntry) | **POST** /directory/{id}/entry/{key} | Update directory entry |


## `deleteDirectoryEntryKey()`

```php
deleteDirectoryEntryKey($key, $id)
```

Delete directory entry

This method lets you delete a directory entry by key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 56; // int | Key of the directory entry
$id = 'id_example'; // string | Directory identifier

try {
    $apiInstance->deleteDirectoryEntryKey($key, $id);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->deleteDirectoryEntryKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **int**| Key of the directory entry | |
| **id** | **string**| Directory identifier | |

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

## `getDirectoriesGroups()`

```php
getDirectoriesGroups($fields): \Planfix\Model\GetContactListGroups200Response
```

Get list of directory groups

This method lets you get a list of directory groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name

try {
    $result = $apiInstance->getDirectoriesGroups($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->getDirectoriesGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name | [optional] |

### Return type

[**\Planfix\Model\GetContactListGroups200Response**](../Model/GetContactListGroups200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectoryById()`

```php
getDirectoryById($id, $fields): \Planfix\Model\GetDirectoryById200Response
```

Get directory by identifier

This method lets you get a directory from its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Directory identifier
$fields = id,name,fields; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, group, fields, sourceObjectId, sourceDataVersion

try {
    $result = $apiInstance->getDirectoryById($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->getDirectoryById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Directory identifier | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, group, fields, sourceObjectId, sourceDataVersion | [optional] |

### Return type

[**\Planfix\Model\GetDirectoryById200Response**](../Model/GetDirectoryById200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDirectoryIdEntryKey()`

```php
getDirectoryIdEntryKey($id, $key, $fields): \Planfix\Model\GetDirectoryIdEntryKey200Response
```

Get directory entry

This method lets you geta directory entry by its key

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Directory identifier
$key = 56; // int | Key of the directory entry
$fields = directory,parentKey,key,archived,isGroup,1296,1298; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* directory, key, parentKey, archived, isGroup

try {
    $result = $apiInstance->getDirectoryIdEntryKey($id, $key, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->getDirectoryIdEntryKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Directory identifier | |
| **key** | **int**| Key of the directory entry | |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* directory, key, parentKey, archived, isGroup | [optional] |

### Return type

[**\Planfix\Model\GetDirectoryIdEntryKey200Response**](../Model/GetDirectoryIdEntryKey200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getListDirectories()`

```php
getListDirectories($getListDirectoriesRequest): \Planfix\Model\GetListDirectories200Response
```

Get list of directories

This method lets you get a list of directories

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$getListDirectoriesRequest = {"offset":0,"pageSize":100,"fields":"id,name,group,fields"}; // \Planfix\Model\GetListDirectoriesRequest | 

try {
    $result = $apiInstance->getListDirectories($getListDirectoriesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->getListDirectories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **getListDirectoriesRequest** | [**\Planfix\Model\GetListDirectoriesRequest**](../Model/GetListDirectoriesRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\GetListDirectories200Response**](../Model/GetListDirectories200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAddDirectoryEntry()`

```php
postAddDirectoryEntry($id, $idempotencyKey, $directoryEntryRequest)
```

Add directory entry

This method lets you add a directory entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Directory identifier
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$directoryEntryRequest = {"parentKey":0,"name":"New group","isGroup":true}; // \Planfix\Model\DirectoryEntryRequest

try {
    $apiInstance->postAddDirectoryEntry($id, $idempotencyKey, $directoryEntryRequest);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->postAddDirectoryEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Directory identifier | |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **directoryEntryRequest** | [**\Planfix\Model\DirectoryEntryRequest**](../Model/DirectoryEntryRequest.md)|  | [optional] |

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

## `postDirectoryEntriesFilters()`

```php
postDirectoryEntriesFilters($id): \Planfix\Model\PostContactFilters200Response
```

Get list directory entries filters

This method lets you get list directory entries filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Directory identifier

try {
    $result = $apiInstance->postDirectoryEntriesFilters($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->postDirectoryEntriesFilters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Directory identifier | |

### Return type

[**\Planfix\Model\PostContactFilters200Response**](../Model/PostContactFilters200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postListDirectoryEntries()`

```php
postListDirectoryEntries($id, $postListDirectoryEntriesRequest): \Planfix\Model\PostListDirectoryEntries200Response
```

Get list of directory entries

This method lets you to get a list of directory entries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Directory identifier
$postListDirectoryEntriesRequest = {"offset":0,"pageSize":100,"filters":[{"type":6006,"operator":"equal","value":5}],"fields":"directory,parentKey,name,key"}; // \Planfix\Model\PostListDirectoryEntriesRequest

try {
    $result = $apiInstance->postListDirectoryEntries($id, $postListDirectoryEntriesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->postListDirectoryEntries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Directory identifier | |
| **postListDirectoryEntriesRequest** | [**\Planfix\Model\PostListDirectoryEntriesRequest**](../Model/PostListDirectoryEntriesRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostListDirectoryEntries200Response**](../Model/PostListDirectoryEntries200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUpdateDirectoryEntry()`

```php
postUpdateDirectoryEntry($key, $id, $silent, $directoryEntryRequest)
```

Update directory entry

This method lets you update a directory entry

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 56; // int | Key of the directory entry
$id = 'id_example'; // string | Directory identifier
$silent = false; // bool | Silent mode
$directoryEntryRequest = {"parentKey":2,"name":"Changed group","isGroup":true}; // \Planfix\Model\DirectoryEntryRequest

try {
    $apiInstance->postUpdateDirectoryEntry($key, $id, $silent, $directoryEntryRequest);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->postUpdateDirectoryEntry: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **key** | **int**| Key of the directory entry | |
| **id** | **string**| Directory identifier | |
| **silent** | **bool**| Silent mode | [optional] [default to false] |
| **directoryEntryRequest** | [**\Planfix\Model\DirectoryEntryRequest**](../Model/DirectoryEntryRequest.md)|  | [optional] |

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
