# Planfix\CustomFieldsContactApi

All URIs are relative to *https://your-account.planfix.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomfieldContact**](CustomFieldsContactApi.md#getcustomfieldcontact) | **GET** /customfield/contact | Get a list of a custom contact fields
[**getCustomfieldSetsContact**](CustomFieldsContactApi.md#getcustomfieldsetscontact) | **GET** /customfield/group/contact | Get a list of a custom contact fields set
[**getCustomfieldsForContact**](CustomFieldsContactApi.md#getcustomfieldsforcontact) | **GET** /customfield/contact/{id} | Get a list of a custom fields for contact
[**postCustomfieldAdd**](CustomFieldsContactApi.md#postcustomfieldadd) | **POST** /customfield/contact/ | Create a custom field for contact
[**postCustomfieldSetAdd**](CustomFieldsContactApi.md#postcustomfieldsetadd) | **POST** /customfield/group/contact/ | Create a custom fields set for contact

# **getCustomfieldContact**
> \Planfix\Model\InlineResponse20034 getCustomfieldContact($fields)

Get a list of a custom contact fields

This method lets you get a list of custom contact and company fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldContact($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsContactApi->getCustomfieldContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors | [optional]

### Return type

[**\Planfix\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomfieldSetsContact**
> \Planfix\Model\InlineResponse20035 getCustomfieldSetsContact()

Get a list of a custom contact fields set

This method lets you get a list of custom contact and company fields sets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Planfix\Model\InlineResponse20035**](../Model/InlineResponse20035.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomfieldsForContact**
> \Planfix\Model\InlineResponse20034 getCustomfieldsForContact($id, $fields)

Get a list of a custom fields for contact

This method lets you get a list of custom fields for contact or company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of contact
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldsForContact($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsContactApi->getCustomfieldsForContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of contact |
 **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors | [optional]

### Return type

[**\Planfix\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomfieldAdd**
> \Planfix\Model\InlineResponse201 postCustomfieldAdd($body, $idempotencyKey)

Create a custom field for contact

This method lets you create a custom field for contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\CustomField(); // \Planfix\Model\CustomField | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postCustomfieldAdd($body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsContactApi->postCustomfieldAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\CustomField**](../Model/CustomField.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomfieldSetAdd**
> \Planfix\Model\InlineResponse201 postCustomfieldSetAdd($body, $idempotencyKey)

Create a custom fields set for contact

This method lets you create a custom fields set for contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\ShortEntity(); // \Planfix\Model\ShortEntity | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postCustomfieldSetAdd($body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsContactApi->postCustomfieldSetAdd: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\ShortEntity**](../Model/ShortEntity.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

