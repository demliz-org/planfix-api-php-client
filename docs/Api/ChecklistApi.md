# Planfix\ChecklistApi

Operations with checklists

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getChecklistItemById()**](ChecklistApi.md#getChecklistItemById) | **GET** /task/{id}/checklist/{itemId} | Get checklist item by number |
| [**getTaskChecklist()**](ChecklistApi.md#getTaskChecklist) | **POST** /task/{id}/checklist/list | Get task checklist items |
| [**postChecklistItem()**](ChecklistApi.md#postChecklistItem) | **POST** /task/{id}/checklist | Create checklist item |
| [**postChecklistItemById()**](ChecklistApi.md#postChecklistItemById) | **POST** /task/{id}/checklist/{itemId} | Update checklist item |


## `getChecklistItemById()`

```php
getChecklistItemById($id, $itemId, $fields): \Planfix\Model\GetChecklistItemById200Response
```

Get checklist item by number

This method lets you get a checklist item by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ChecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$itemId = 56; // int | Number of checklist item
$fields = id,name,isDone; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, isDone, parent, dateTime, assignees

try {
    $result = $apiInstance->getChecklistItemById($id, $itemId, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistApi->getChecklistItemById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **itemId** | **int**| Number of checklist item | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, isDone, parent, dateTime, assignees | [optional] |

### Return type

[**\Planfix\Model\GetChecklistItemById200Response**](../Model/GetChecklistItemById200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskChecklist()`

```php
getTaskChecklist($id, $getTaskChecklistRequest): \Planfix\Model\GetTaskChecklist200Response
```

Get task checklist items

This method lets you get task checklist items

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ChecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$getTaskChecklistRequest = new \Planfix\Model\GetTaskChecklistRequest(); // \Planfix\Model\GetTaskChecklistRequest

try {
    $result = $apiInstance->getTaskChecklist($id, $getTaskChecklistRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistApi->getTaskChecklist: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **getTaskChecklistRequest** | [**\Planfix\Model\GetTaskChecklistRequest**](../Model/GetTaskChecklistRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\GetTaskChecklist200Response**](../Model/GetTaskChecklist200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postChecklistItem()`

```php
postChecklistItem($id, $idempotencyKey, $checklistItemCreateRequest): \Planfix\Model\PostChecklistItem201Response
```

Create checklist item

This method lets you create a new checklist item

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ChecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$checklistItemCreateRequest = {"name":"New checklist item","assignees":{"users":[{"id":"user:1"},{"id":"user:3"}],"groups":[]}}; // \Planfix\Model\ChecklistItemCreateRequest

try {
    $result = $apiInstance->postChecklistItem($id, $idempotencyKey, $checklistItemCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistApi->postChecklistItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **checklistItemCreateRequest** | [**\Planfix\Model\ChecklistItemCreateRequest**](../Model/ChecklistItemCreateRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostChecklistItem201Response**](../Model/PostChecklistItem201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postChecklistItemById()`

```php
postChecklistItemById($id, $itemId, $checklistItemUpdateRequest): \Planfix\Model\PostContactById200Response
```

Update checklist item

This method lets you update a checklist item by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ChecklistApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$itemId = 56; // int | Number of checklist item
$checklistItemUpdateRequest = {"name":"Updated name"}; // \Planfix\Model\ChecklistItemUpdateRequest

try {
    $result = $apiInstance->postChecklistItemById($id, $itemId, $checklistItemUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChecklistApi->postChecklistItemById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **itemId** | **int**| Number of checklist item | |
| **checklistItemUpdateRequest** | [**\Planfix\Model\ChecklistItemUpdateRequest**](../Model/ChecklistItemUpdateRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostContactById200Response**](../Model/PostContactById200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
