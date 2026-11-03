# Planfix\CommentsApi

Operations with comments

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCommentId()**](CommentsApi.md#deleteCommentId) | **DELETE** /comment/{id} | Delete comment |
| [**getCommentId()**](CommentsApi.md#getCommentId) | **GET** /comment/{id} | Get comment by number |
| [**getCommentList()**](CommentsApi.md#getCommentList) | **POST** /comment/list | Get list of comments |


## `deleteCommentId()`

```php
deleteCommentId($id)
```

Delete comment

This method lets you delete a comment by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4251; // string | Number of comment

try {
    $apiInstance->deleteCommentId($id);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->deleteCommentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of comment | |

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentId()`

```php
getCommentId($id, $fields, $sourceId): \Planfix\Model\GetCommentId200Response
```

Get comment by number

This method lets you get a comment by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 4251; // string | Number of comment
$fields = description,dateTime,10; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, dateTime, type, fromType, description, additionalDescriptionData, task, project, contact, owner, isDeleted, isPinned, isHidden, isNotRead, recipients, reminders, dataTags, files, changeTaskStartDate, changeTaskExpectDate, changeStatus, sourceObjectId, sourceDataVersion
$sourceId = 'sourceId_example'; // string | Unique identifier of the third-party application or system.

try {
    $result = $apiInstance->getCommentId($id, $fields, $sourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->getCommentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of comment | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, dateTime, type, fromType, description, additionalDescriptionData, task, project, contact, owner, isDeleted, isPinned, isHidden, isNotRead, recipients, reminders, dataTags, files, changeTaskStartDate, changeTaskExpectDate, changeStatus, sourceObjectId, sourceDataVersion | [optional] |
| **sourceId** | **string**| Unique identifier of the third-party application or system. | [optional] |

### Return type

[**\Planfix\Model\GetCommentId200Response**](../Model/GetCommentId200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCommentList()`

```php
getCommentList($getCommentListRequest): \Planfix\Model\GetContactComments200Response
```

Get list of comments

This method lets you get a list of comments

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$getCommentListRequest = {"offset":0,"pageSize":100,"fields":"id,dateTime,description,owner","typeList":"Comments","resultOrder":[{"field":"dateTime","direction":"Desc"}]}; // \Planfix\Model\GetCommentListRequest | 

try {
    $result = $apiInstance->getCommentList($getCommentListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->getCommentList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **getCommentListRequest** | [**\Planfix\Model\GetCommentListRequest**](../Model/GetCommentListRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\GetContactComments200Response**](../Model/GetContactComments200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
