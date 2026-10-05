# Planfix\CommentsApi

All URIs are relative to *https://your-account.planfix.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCommentId**](CommentsApi.md#deletecommentid) | **DELETE** /comment/{id} | Delete comment
[**getCommentId**](CommentsApi.md#getcommentid) | **GET** /comment/{id} | Get comment by number
[**getCommentList**](CommentsApi.md#getcommentlist) | **POST** /comment/list | Get list of comments

# **deleteCommentId**
> deleteCommentId($id)

Delete comment

This method lets you delete a comment by number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of comment

try {
    $apiInstance->deleteCommentId($id);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->deleteCommentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of comment |

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommentId**
> \Planfix\Model\InlineResponse20015 getCommentId($id, $fields, $sourceId)

Get comment by number

This method lets you get a comment by number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of comment
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, dateTime, type, fromType, description, additionalDescriptionData, task, project, contact, owner, isDeleted, isPinned, isHidden, isNotRead, recipients, reminders, dataTags, files, changeTaskStartDate, changeTaskExpectDate, changeStatus, sourceObjectId, sourceDataVersion
$sourceId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Unique identifier of the third-party application or system.

try {
    $result = $apiInstance->getCommentId($id, $fields, $sourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->getCommentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of comment |
 **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, dateTime, type, fromType, description, additionalDescriptionData, task, project, contact, owner, isDeleted, isPinned, isHidden, isNotRead, recipients, reminders, dataTags, files, changeTaskStartDate, changeTaskExpectDate, changeStatus, sourceObjectId, sourceDataVersion | [optional]
 **sourceId** | [**string**](../Model/.md)| Unique identifier of the third-party application or system. | [optional]

### Return type

[**\Planfix\Model\InlineResponse20015**](../Model/InlineResponse20015.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommentList**
> \Planfix\Model\InlineResponse2003 getCommentList($body)

Get list of comments

This method lets you get a list of comments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\CommentListBody(); // \Planfix\Model\CommentListBody | 

try {
    $result = $apiInstance->getCommentList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->getCommentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\CommentListBody**](../Model/CommentListBody.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

