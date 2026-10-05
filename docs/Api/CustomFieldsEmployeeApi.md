# Planfix\CustomFieldsEmployeeApi

All URIs are relative to *https://your-account.planfix.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCustomfieldSetsUser**](CustomFieldsEmployeeApi.md#getcustomfieldsetsuser) | **GET** /customfield/group/user | Get a list of a custom user fields set
[**getCustomfieldUser**](CustomFieldsEmployeeApi.md#getcustomfielduser) | **GET** /customfield/user | Get list of custom employee fields
[**getCustomfieldsForUser**](CustomFieldsEmployeeApi.md#getcustomfieldsforuser) | **GET** /customfield/user/{id} | Get list of custom fields for employee
[**postCustomfieldSetUserAdd**](CustomFieldsEmployeeApi.md#postcustomfieldsetuseradd) | **POST** /customfield/group/user/ | Create a custom fields set for user
[**postCustomfieldUserAdd**](CustomFieldsEmployeeApi.md#postcustomfielduseradd) | **POST** /customfield/user/ | Create a custom field for user

# **getCustomfieldSetsUser**
> \Planfix\Model\InlineResponse20035 getCustomfieldSetsUser()

Get a list of a custom user fields set

This method lets you get a list of custom user fields sets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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

# **getCustomfieldUser**
> \Planfix\Model\InlineResponse20034 getCustomfieldUser($fields)

Get list of custom employee fields

This method lets you get a list of custom employee fields

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsEmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldUser($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsEmployeeApi->getCustomfieldUser: ', $e->getMessage(), PHP_EOL;
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

# **getCustomfieldsForUser**
> \Planfix\Model\InlineResponse20034 getCustomfieldsForUser($id, $fields)

Get list of custom fields for employee

This method lets you get a list of custom fields for employee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsEmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of employee
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors

try {
    $result = $apiInstance->getCustomfieldsForUser($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsEmployeeApi->getCustomfieldsForUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of employee |
 **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, names, type, objectType, groupId, directoryId, directoryFields, enumValues, listValuesColors | [optional]

### Return type

[**\Planfix\Model\InlineResponse20034**](../Model/InlineResponse20034.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postCustomfieldSetUserAdd**
> \Planfix\Model\InlineResponse201 postCustomfieldSetUserAdd($body, $idempotencyKey)

Create a custom fields set for user

This method lets you create a custom fields set for user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsEmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\ShortEntity(); // \Planfix\Model\ShortEntity | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postCustomfieldSetUserAdd($body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsEmployeeApi->postCustomfieldSetUserAdd: ', $e->getMessage(), PHP_EOL;
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

# **postCustomfieldUserAdd**
> \Planfix\Model\InlineResponse201 postCustomfieldUserAdd($body, $idempotencyKey)

Create a custom field for user

This method lets you create a custom field for user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CustomFieldsEmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\CustomField(); // \Planfix\Model\CustomField | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postCustomfieldUserAdd($body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsEmployeeApi->postCustomfieldUserAdd: ', $e->getMessage(), PHP_EOL;
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

