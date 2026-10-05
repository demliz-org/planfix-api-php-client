# Planfix\DataTagsApi

All URIs are relative to *https://your-account.planfix.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteDatatagEntryKey**](DataTagsApi.md#deletedatatagentrykey) | **DELETE** /datatag/entry/{key} | Delete data tag entry
[**getDataTags**](DataTagsApi.md#getdatatags) | **POST** /datatag/list | Get data tags
[**getDatatagEntryKey**](DataTagsApi.md#getdatatagentrykey) | **GET** /datatag/entry/{key} | Get data tag entry
[**getDatatagId**](DataTagsApi.md#getdatatagid) | **GET** /datatag/{id} | Get data tag by identifier
[**postListDataTagEntries**](DataTagsApi.md#postlistdatatagentries) | **POST** /datatag/{id}/entry/list | Get list of data tag entries
[**postUpdateDataTagEntry**](DataTagsApi.md#postupdatedatatagentry) | **POST** /datatag/entry/{key} | Update data tag entry

# **deleteDatatagEntryKey**
> deleteDatatagEntryKey($key)

Delete data tag entry

This method lets you delete a data tag entry by key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 56; // int | Key of the data tag entry

try {
    $apiInstance->deleteDatatagEntryKey($key);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->deleteDatatagEntryKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **int**| Key of the data tag entry |

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDataTags**
> \Planfix\Model\InlineResponse20017 getDataTags($body)

Get data tags

This method lets you get a list of data tags

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\DatatagListBody(); // \Planfix\Model\DatatagListBody | 

try {
    $result = $apiInstance->getDataTags($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->getDataTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\DatatagListBody**](../Model/DatatagListBody.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse20017**](../Model/InlineResponse20017.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDatatagEntryKey**
> \Planfix\Model\InlineResponse20018 getDatatagEntryKey($key, $fields)

Get data tag entry

This method lets you get a data tag entry by key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 56; // int | Key of the data tag entry
$fields = "fields_example"; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* dataTag, key, task, contact, commentId

try {
    $result = $apiInstance->getDatatagEntryKey($key, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->getDatatagEntryKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **int**| Key of the data tag entry |
 **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* dataTag, key, task, contact, commentId | [optional]

### Return type

[**\Planfix\Model\InlineResponse20018**](../Model/InlineResponse20018.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDatatagId**
> \Planfix\Model\InlineResponse20016 getDatatagId($id, $fields)

Get data tag by identifier

This method lets you get a data tag by its ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Data tag identifier
$fields = "fields_example"; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, group, fields

try {
    $result = $apiInstance->getDatatagId($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->getDatatagId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Data tag identifier |
 **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, group, fields | [optional]

### Return type

[**\Planfix\Model\InlineResponse20016**](../Model/InlineResponse20016.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postListDataTagEntries**
> \Planfix\Model\InlineResponse20019 postListDataTagEntries($id, $body)

Get list of data tag entries

This method lets you get a list of data tag entries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Identifier of data tag
$body = new \Planfix\Model\EntryListBody(); // \Planfix\Model\EntryListBody | 

try {
    $result = $apiInstance->postListDataTagEntries($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->postListDataTagEntries: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Identifier of data tag |
 **body** | [**\Planfix\Model\EntryListBody**](../Model/EntryListBody.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse20019**](../Model/InlineResponse20019.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUpdateDataTagEntry**
> postUpdateDataTagEntry($key, $body, $silent)

Update data tag entry

This method lets you update a data tag entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\DataTagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$key = 56; // int | Key of the data tag entry
$body = new \Planfix\Model\DataTagEntryUpdateRequest(); // \Planfix\Model\DataTagEntryUpdateRequest | 
$silent = false; // bool | Silent mode

try {
    $apiInstance->postUpdateDataTagEntry($key, $body, $silent);
} catch (Exception $e) {
    echo 'Exception when calling DataTagsApi->postUpdateDataTagEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **key** | **int**| Key of the data tag entry |
 **body** | [**\Planfix\Model\DataTagEntryUpdateRequest**](../Model/DataTagEntryUpdateRequest.md)|  | [optional]
 **silent** | **bool**| Silent mode | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

