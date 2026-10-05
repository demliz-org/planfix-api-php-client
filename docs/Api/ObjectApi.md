# Planfix\ObjectApi

All URIs are relative to *https://your-account.planfix.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getObjectById**](ObjectApi.md#getobjectbyid) | **GET** /object/{id} | Get object by number
[**getObjectList**](ObjectApi.md#getobjectlist) | **POST** /object/list | Get list of objects
[**getObjectTaskStatusList**](ObjectApi.md#getobjecttaskstatuslist) | **GET** /object/{id}/statuses | Get list of task statuses for object

# **getObjectById**
> \Planfix\Model\InlineResponse20047 getObjectById($id)

Get object by number

This method lets you get a object by number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Number of object

try {
    $result = $apiInstance->getObjectById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->getObjectById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Number of object |

### Return type

[**\Planfix\Model\InlineResponse20047**](../Model/InlineResponse20047.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getObjectList**
> \Planfix\Model\InlineResponse20048 getObjectList($body)

Get list of objects

This method lets you get a list of objects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\ObjectListBody(); // \Planfix\Model\ObjectListBody | 

try {
    $result = $apiInstance->getObjectList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->getObjectList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\ObjectListBody**](../Model/ObjectListBody.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse20048**](../Model/InlineResponse20048.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getObjectTaskStatusList**
> \Planfix\Model\InlineResponse20038 getObjectTaskStatusList($id, $fields)

Get list of task statuses for object

This method lets you get a list of task statuses for object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ObjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Number of object
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, color, isActive, hasDeadline, isAppliedIndividually, texts

try {
    $result = $apiInstance->getObjectTaskStatusList($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectApi->getObjectTaskStatusList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Number of object |
 **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, color, isActive, hasDeadline, isAppliedIndividually, texts | [optional]

### Return type

[**\Planfix\Model\InlineResponse20038**](../Model/InlineResponse20038.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

