# Planfix\DirectoryApi

All URIs are relative to *https://your-account.planfix.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDirectoryEntryKey**](DirectoryApi.md#deletedirectoryentrykey) | **DELETE** /directory/{id}/entry/{key} | Delete directory entry
[**getDirectoriesGroups**](DirectoryApi.md#getdirectoriesgroups) | **GET** /directory/groups | Get list of directory groups
[**getDirectoryById**](DirectoryApi.md#getdirectorybyid) | **GET** /directory/{id} | Get directory by identifier
[**getDirectoryIdEntryKey**](DirectoryApi.md#getdirectoryidentrykey) | **GET** /directory/{id}/entry/{key} | Get directory entry
[**getListDirectories**](DirectoryApi.md#getlistdirectories) | **POST** /directory/list | Get list of directories
[**postAddDirectoryEntry**](DirectoryApi.md#postadddirectoryentry) | **POST** /directory/{id}/entry/ | Add directory entry
[**postDirectoryEntriesFilters**](DirectoryApi.md#postdirectoryentriesfilters) | **POST** /directory/{id}/filters | Get list directory entries filters
[**postListDirectoryEntries**](DirectoryApi.md#postlistdirectoryentries) | **POST** /directory/{id}/entry/list | Get list of directory entries
[**postUpdateDirectoryEntry**](DirectoryApi.md#postupdatedirectoryentry) | **POST** /directory/{id}/entry/{key} | Update directory entry

# **deleteDirectoryEntryKey**
> deleteDirectoryEntryKey($key, $id)

Delete directory entry

This method lets you delete a directory entry by key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 56; // int | Key of the directory entry
$id = "id_example"; // string | Directory identifier

try {
    $apiInstance->deleteDirectoryEntryKey($key, $id);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->deleteDirectoryEntryKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **int**| Key of the directory entry |
 **id** | **string**| Directory identifier |

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDirectoriesGroups**
> \Planfix\Model\InlineResponse2006 getDirectoriesGroups($fields)

Get list of directory groups

This method lets you get a list of directory groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name

try {
    $result = $apiInstance->getDirectoriesGroups($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->getDirectoriesGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name | [optional]

### Return type

[**\Planfix\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDirectoryById**
> \Planfix\Model\InlineResponse20029 getDirectoryById($id, $fields)

Get directory by identifier

This method lets you get a directory from its ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Directory identifier
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, group, fields, sourceObjectId, sourceDataVersion

try {
    $result = $apiInstance->getDirectoryById($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->getDirectoryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Directory identifier |
 **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, group, fields, sourceObjectId, sourceDataVersion | [optional]

### Return type

[**\Planfix\Model\InlineResponse20029**](../Model/InlineResponse20029.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDirectoryIdEntryKey**
> \Planfix\Model\InlineResponse20031 getDirectoryIdEntryKey($id, $key, $fields)

Get directory entry

This method lets you geta directory entry by its key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Directory identifier
$key = 56; // int | Key of the directory entry
$fields = "fields_example"; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* directory, key, parentKey, archived, isGroup

try {
    $result = $apiInstance->getDirectoryIdEntryKey($id, $key, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->getDirectoryIdEntryKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Directory identifier |
 **key** | **int**| Key of the directory entry |
 **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* directory, key, parentKey, archived, isGroup | [optional]

### Return type

[**\Planfix\Model\InlineResponse20031**](../Model/InlineResponse20031.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListDirectories**
> \Planfix\Model\InlineResponse20030 getListDirectories($body)

Get list of directories

This method lets you get a list of directories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\DirectoryListBody(); // \Planfix\Model\DirectoryListBody | 

try {
    $result = $apiInstance->getListDirectories($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->getListDirectories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\DirectoryListBody**](../Model/DirectoryListBody.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse20030**](../Model/InlineResponse20030.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postAddDirectoryEntry**
> postAddDirectoryEntry($id, $body, $idempotencyKey)

Add directory entry

This method lets you add a directory entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Directory identifier
$body = new \Planfix\Model\DirectoryEntryRequest(); // \Planfix\Model\DirectoryEntryRequest | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $apiInstance->postAddDirectoryEntry($id, $body, $idempotencyKey);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->postAddDirectoryEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Directory identifier |
 **body** | [**\Planfix\Model\DirectoryEntryRequest**](../Model/DirectoryEntryRequest.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDirectoryEntriesFilters**
> \Planfix\Model\InlineResponse2007 postDirectoryEntriesFilters($id)

Get list directory entries filters

This method lets you get list directory entries filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Directory identifier

try {
    $result = $apiInstance->postDirectoryEntriesFilters($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->postDirectoryEntriesFilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Directory identifier |

### Return type

[**\Planfix\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postListDirectoryEntries**
> \Planfix\Model\InlineResponse20032 postListDirectoryEntries($id, $body)

Get list of directory entries

This method lets you to get a list of directory entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Directory identifier
$body = new \Planfix\Model\EntryListBody1(); // \Planfix\Model\EntryListBody1 | 

try {
    $result = $apiInstance->postListDirectoryEntries($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->postListDirectoryEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Directory identifier |
 **body** | [**\Planfix\Model\EntryListBody1**](../Model/EntryListBody1.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse20032**](../Model/InlineResponse20032.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUpdateDirectoryEntry**
> postUpdateDirectoryEntry($key, $id, $body, $silent)

Update directory entry

This method lets you update a directory entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 56; // int | Key of the directory entry
$id = "id_example"; // string | Directory identifier
$body = new \Planfix\Model\DirectoryEntryRequest(); // \Planfix\Model\DirectoryEntryRequest | 
$silent = false; // bool | Silent mode

try {
    $apiInstance->postUpdateDirectoryEntry($key, $id, $body, $silent);
} catch (Exception $e) {
    echo 'Exception when calling DirectoryApi->postUpdateDirectoryEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **int**| Key of the directory entry |
 **id** | **string**| Directory identifier |
 **body** | [**\Planfix\Model\DirectoryEntryRequest**](../Model/DirectoryEntryRequest.md)|  | [optional]
 **silent** | **bool**| Silent mode | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

