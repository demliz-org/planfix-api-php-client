# Planfix\CustomFieldsApi

All URIs are relative to *https://your-account.planfix.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomfieldGeneric**](CustomFieldsApi.md#getcustomfieldgeneric) | **GET** /customfield/main | Get list of custom main fields
[**getCustomfieldTypes**](CustomFieldsApi.md#getcustomfieldtypes) | **GET** /customfield/type | Get a list of a custom field types
[**getCustomfieldsForDatatag**](CustomFieldsApi.md#getcustomfieldsfordatatag) | **GET** /customfield/datatag/{id} | Get list of custom fields for data tag
[**getCustomfieldsForDirectory**](CustomFieldsApi.md#getcustomfieldsfordirectory) | **GET** /customfield/directory/{id} | Get list of custom fields for directory
[**postCustomfieldMainAdd**](CustomFieldsApi.md#postcustomfieldmainadd) | **POST** /customfield/main/ | Create a custom main field
[**postCustomfieldMainUpdate**](CustomFieldsApi.md#postcustomfieldmainupdate) | **POST** /customfield/main/{id} | Update a custom main field

# **getCustomfieldGeneric**
> \Planfix\Model\InlineResponse20034 getCustomfieldGeneric($fields)

Get list of custom main fields

This method lets you get a list of custom main fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, directoryId, directoryFields, enumValues, listValuesColors, mainValue

try {
    $result = $apiInstance->getCustomfieldGeneric($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldGeneric: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, directoryId, directoryFields, enumValues, listValuesColors, mainValue | [optional]

### Return type

[**\Planfix\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomfieldTypes**
> \Planfix\Model\InlineResponse20033 getCustomfieldTypes()

Get a list of a custom field types

This method lets you get a list of custom field types

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Planfix\Model\InlineResponse20033**](../Model/InlineResponse20033.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomfieldsForDatatag**
> \Planfix\Model\InlineResponse20034 getCustomfieldsForDatatag($id, $fields)

Get list of custom fields for data tag

This method lets you get a list of custom fields for data tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Data tag identifier
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldsForDatatag($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldsForDatatag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Data tag identifier |
 **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors | [optional]

### Return type

[**\Planfix\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomfieldsForDirectory**
> \Planfix\Model\InlineResponse20034 getCustomfieldsForDirectory($id, $fields)

Get list of custom fields for directory

This method lets you get a list of custom fields for directory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Directory identifier
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldsForDirectory($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->getCustomfieldsForDirectory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Directory identifier |
 **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors | [optional]

### Return type

[**\Planfix\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomfieldMainAdd**
> \Planfix\Model\InlineResponse201 postCustomfieldMainAdd($body)

Create a custom main field

This method lets you create a custom main field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\CustomField(); // \Planfix\Model\CustomField | 

try {
    $result = $apiInstance->postCustomfieldMainAdd($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->postCustomfieldMainAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\CustomField**](../Model/CustomField.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomfieldMainUpdate**
> \Planfix\Model\InlineResponse20036 postCustomfieldMainUpdate($id, $body)

Update a custom main field

This method lets you update a custom main field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Main field identifier
$body = new \Planfix\Model\CustomField(); // \Planfix\Model\CustomField | 

try {
    $result = $apiInstance->postCustomfieldMainUpdate($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->postCustomfieldMainUpdate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Main field identifier |
 **body** | [**\Planfix\Model\CustomField**](../Model/CustomField.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse20036**](../Model/InlineResponse20036.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

