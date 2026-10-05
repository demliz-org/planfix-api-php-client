# Planfix\ChecklistApi

All URIs are relative to *https://your-account.planfix.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getChecklistItemById**](ChecklistApi.md#getchecklistitembyid) | **GET** /task/{id}/checklist/{itemId} | Get checklist item by number
[**getTaskChecklist**](ChecklistApi.md#gettaskchecklist) | **POST** /task/{id}/checklist/list | Get task checklist items
[**postChecklistItem**](ChecklistApi.md#postchecklistitem) | **POST** /task/{id}/checklist | Create checklist item
[**postChecklistItemById**](ChecklistApi.md#postchecklistitembyid) | **POST** /task/{id}/checklist/{itemId} | Update checklist item

# **getChecklistItemById**
> \Planfix\Model\InlineResponse20014 getChecklistItemById($id, $itemId, $fields)

Get checklist item by number

This method lets you get a checklist item by number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ChecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Number of task
$itemId = 789; // int | Number of checklist item
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, isDone, parent, dateTime, assignees

try {
    $result = $apiInstance->getChecklistItemById($id, $itemId, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistApi->getChecklistItemById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Number of task |
 **itemId** | **int**| Number of checklist item |
 **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, isDone, parent, dateTime, assignees | [optional]

### Return type

[**\Planfix\Model\InlineResponse20014**](../Model/InlineResponse20014.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskChecklist**
> \Planfix\Model\InlineResponse20013 getTaskChecklist($id, $body)

Get task checklist items

This method lets you get task checklist items

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ChecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Number of task
$body = new \Planfix\Model\ChecklistListBody(); // \Planfix\Model\ChecklistListBody | 

try {
    $result = $apiInstance->getTaskChecklist($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistApi->getTaskChecklist: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Number of task |
 **body** | [**\Planfix\Model\ChecklistListBody**](../Model/ChecklistListBody.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse20013**](../Model/InlineResponse20013.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postChecklistItem**
> \Planfix\Model\InlineResponse2015 postChecklistItem($id, $body, $idempotencyKey)

Create checklist item

This method lets you create a new checklist item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ChecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Number of task
$body = new \Planfix\Model\ChecklistItemCreateRequest(); // \Planfix\Model\ChecklistItemCreateRequest | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postChecklistItem($id, $body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistApi->postChecklistItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Number of task |
 **body** | [**\Planfix\Model\ChecklistItemCreateRequest**](../Model/ChecklistItemCreateRequest.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse2015**](../Model/InlineResponse2015.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postChecklistItemById**
> \Planfix\Model\InlineResponse2001 postChecklistItemById($id, $itemId, $body)

Update checklist item

This method lets you update a checklist item by number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ChecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Number of task
$itemId = 789; // int | Number of checklist item
$body = new \Planfix\Model\ChecklistItemUpdateRequest(); // \Planfix\Model\ChecklistItemUpdateRequest | 

try {
    $result = $apiInstance->postChecklistItemById($id, $itemId, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistApi->postChecklistItemById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Number of task |
 **itemId** | **int**| Number of checklist item |
 **body** | [**\Planfix\Model\ChecklistItemUpdateRequest**](../Model/ChecklistItemUpdateRequest.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

