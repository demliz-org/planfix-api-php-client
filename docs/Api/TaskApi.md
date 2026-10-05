# Planfix\TaskApi

All URIs are relative to *https://your-account.planfix.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTaskById**](TaskApi.md#gettaskbyid) | **GET** /task/{id} | Get task by number
[**getTaskComments**](TaskApi.md#gettaskcomments) | **POST** /task/{id}/comments/list | Get task comments
[**getTaskFiles**](TaskApi.md#gettaskfiles) | **GET** /task/{id}/files | Get task files
[**getTaskList**](TaskApi.md#gettasklist) | **POST** /task/list | Get list of tasks
[**getTaskListRecurring**](TaskApi.md#gettasklistrecurring) | **GET** /task/recurring | Get a list of recurring tasks
[**getTaskListTemplates**](TaskApi.md#gettasklisttemplates) | **GET** /task/templates | Get list of task templates
[**postTask**](TaskApi.md#posttask) | **POST** /task/ | Create task
[**postTaskAddComment**](TaskApi.md#posttaskaddcomment) | **POST** /task/{id}/comments/ | Add comment
[**postTaskAddDataTagEntryExistingComment**](TaskApi.md#posttaskadddatatagentryexistingcomment) | **POST** /task/{id}/datatags/{commentId} | Add a data tag entry to an existing comment
[**postTaskAddDataTagEntryNewComment**](TaskApi.md#posttaskadddatatagentrynewcomment) | **POST** /task/{id}/datatags/ | Add data tag entry as new comment
[**postTaskById**](TaskApi.md#posttaskbyid) | **POST** /task/{id} | Update task by number
[**postTaskFilters**](TaskApi.md#posttaskfilters) | **POST** /task/filters | Get list task filters
[**postTaskUpdateComment**](TaskApi.md#posttaskupdatecomment) | **POST** /task/{id}/comments/{commentId} | Updating comments

# **getTaskById**
> \Planfix\Model\InlineResponse2009 getTaskById($id, $fields, $sourceId)

Get task by number

This method lets you get a task by number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Number of task
$fields = "fields_example"; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, description, additionalDescriptionData, priority, status, processId, resultChecking, type, assigner, parent, object, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, actualCompletionDate, dateOfLastUpdate, dateOfLastComment, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, projectAuditors, recurrence, isDeleted, files, dataTags, sourceObjectId, sourceDataVersion
$sourceId = "sourceId_example"; // string | Unique identifier of the third-party application or system.

try {
    $result = $apiInstance->getTaskById($id, $fields, $sourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Number of task |
 **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, description, additionalDescriptionData, priority, status, processId, resultChecking, type, assigner, parent, object, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, actualCompletionDate, dateOfLastUpdate, dateOfLastComment, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, projectAuditors, recurrence, isDeleted, files, dataTags, sourceObjectId, sourceDataVersion | [optional]
 **sourceId** | **string**| Unique identifier of the third-party application or system. | [optional]

### Return type

[**\Planfix\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskComments**
> \Planfix\Model\InlineResponse2003 getTaskComments($id, $body)

Get task comments

This method lets you get a list of comments on a task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Number of task
$body = new \Planfix\Model\CommentsListBody1(); // \Planfix\Model\CommentsListBody1 | 

try {
    $result = $apiInstance->getTaskComments($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Number of task |
 **body** | [**\Planfix\Model\CommentsListBody1**](../Model/CommentsListBody1.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskFiles**
> \Planfix\Model\InlineResponse2004 getTaskFiles($id, $onlyFromDescription)

Get task files

This method lets you get task files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of task
$onlyFromDescription = false; // bool | Flag to get files from description only

try {
    $result = $apiInstance->getTaskFiles($id, $onlyFromDescription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of task |
 **onlyFromDescription** | **bool**| Flag to get files from description only | [optional] [default to false]

### Return type

[**\Planfix\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskList**
> \Planfix\Model\InlineResponse20011 getTaskList($body)

Get list of tasks

This method lets you get a list of tasks

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\TaskListBody(); // \Planfix\Model\TaskListBody | 

try {
    $result = $apiInstance->getTaskList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\TaskListBody**](../Model/TaskListBody.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskListRecurring**
> \Planfix\Model\InlineResponse20011 getTaskListRecurring($offset, $pageSize, $sourceId, $fields)

Get a list of recurring tasks

This method allows you to get a list of recurring tasks.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // float | Offset from beginning of list
$pageSize = 100; // float | Size of requested list
$sourceId = "sourceId_example"; // string | Unique identifier of the third-party application or system.
$fields = "fields_example"; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, description, priority, status, processId, resultChecking, type, assigner, parent, object, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, dateOfLastUpdate, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, recurrence, isDeleted, files, sourceObjectId, sourceDataVersion

try {
    $result = $apiInstance->getTaskListRecurring($offset, $pageSize, $sourceId, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskListRecurring: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **float**| Offset from beginning of list | [optional] [default to 0]
 **pageSize** | **float**| Size of requested list | [optional] [default to 100]
 **sourceId** | **string**| Unique identifier of the third-party application or system. | [optional]
 **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, description, priority, status, processId, resultChecking, type, assigner, parent, object, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, dateOfLastUpdate, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, recurrence, isDeleted, files, sourceObjectId, sourceDataVersion | [optional]

### Return type

[**\Planfix\Model\InlineResponse20011**](../Model/InlineResponse20011.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaskListTemplates**
> \Planfix\Model\InlineResponse20012 getTaskListTemplates($offset, $pageSize, $sourceId, $fields)

Get list of task templates

This method lets you get a list of all task templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // float | Offset from beginning of list
$pageSize = 100; // float | Size of requested list
$sourceId = "sourceId_example"; // string | Unique identifier of the third-party application or system.
$fields = "fields_example"; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, description, priority, status, processId, resultChecking, type, assigner, parent, object, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, dateOfLastUpdate, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, recurrence, isDeleted, files, sourceObjectId, sourceDataVersion

try {
    $result = $apiInstance->getTaskListTemplates($offset, $pageSize, $sourceId, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskListTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **float**| Offset from beginning of list | [optional] [default to 0]
 **pageSize** | **float**| Size of requested list | [optional] [default to 100]
 **sourceId** | **string**| Unique identifier of the third-party application or system. | [optional]
 **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, description, priority, status, processId, resultChecking, type, assigner, parent, object, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, dateOfLastUpdate, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, recurrence, isDeleted, files, sourceObjectId, sourceDataVersion | [optional]

### Return type

[**\Planfix\Model\InlineResponse20012**](../Model/InlineResponse20012.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTask**
> \Planfix\Model\InlineResponse201 postTask($body, $idempotencyKey)

Create task

This method lets you create a new task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\TaskCreateRequest(); // \Planfix\Model\TaskCreateRequest | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postTask($body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\TaskCreateRequest**](../Model/TaskCreateRequest.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTaskAddComment**
> \Planfix\Model\InlineResponse201 postTaskAddComment($id, $body, $idempotencyKey, $silent)

Add comment

This method lets you add a new comment to a task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$body = new \Planfix\Model\CommentCreateRequest(); // \Planfix\Model\CommentCreateRequest | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$silent = false; // bool | Silent mode

try {
    $result = $apiInstance->postTaskAddComment($id, $body, $idempotencyKey, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskAddComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Number of task |
 **body** | [**\Planfix\Model\CommentCreateRequest**](../Model/CommentCreateRequest.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]
 **silent** | **bool**| Silent mode | [optional] [default to false]

### Return type

[**\Planfix\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTaskAddDataTagEntryExistingComment**
> \Planfix\Model\InlineResponse2014 postTaskAddDataTagEntryExistingComment($id, $commentId, $body, $idempotencyKey)

Add a data tag entry to an existing comment

This method lets you add a data tag entry to an existing comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$commentId = 56; // int | Number of comment
$body = new \Planfix\Model\DataTagEntryCreateRequest(); // \Planfix\Model\DataTagEntryCreateRequest | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postTaskAddDataTagEntryExistingComment($id, $commentId, $body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskAddDataTagEntryExistingComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Number of task |
 **commentId** | **int**| Number of comment |
 **body** | [**\Planfix\Model\DataTagEntryCreateRequest**](../Model/DataTagEntryCreateRequest.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse2014**](../Model/InlineResponse2014.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTaskAddDataTagEntryNewComment**
> \Planfix\Model\InlineResponse2013 postTaskAddDataTagEntryNewComment($id, $body, $idempotencyKey)

Add data tag entry as new comment

This method lets you add data tag entry as new comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$body = new \Planfix\Model\DataTagEntryCreateRequest(); // \Planfix\Model\DataTagEntryCreateRequest | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postTaskAddDataTagEntryNewComment($id, $body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskAddDataTagEntryNewComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Number of task |
 **body** | [**\Planfix\Model\DataTagEntryCreateRequest**](../Model/DataTagEntryCreateRequest.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTaskById**
> \Planfix\Model\InlineResponse20010 postTaskById($id, $body, $silent)

Update task by number

This method lets you update a task by number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Number of task
$body = new \Planfix\Model\TaskUpdateRequest(); // \Planfix\Model\TaskUpdateRequest | 
$silent = false; // bool | Silent mode

try {
    $result = $apiInstance->postTaskById($id, $body, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Number of task |
 **body** | [**\Planfix\Model\TaskUpdateRequest**](../Model/TaskUpdateRequest.md)|  | [optional]
 **silent** | **bool**| Silent mode | [optional] [default to false]

### Return type

[**\Planfix\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTaskFilters**
> \Planfix\Model\InlineResponse2007 postTaskFilters()

Get list task filters

This method lets you get list task filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->postTaskFilters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskFilters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Planfix\Model\InlineResponse2007**](../Model/InlineResponse2007.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postTaskUpdateComment**
> postTaskUpdateComment($id, $commentId, $body, $silent)

Updating comments

This method lets you update a comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$commentId = 56; // int | Number of comment
$body = new \Planfix\Model\CommentUpdateRequest(); // \Planfix\Model\CommentUpdateRequest | 
$silent = false; // bool | Silent mode

try {
    $apiInstance->postTaskUpdateComment($id, $commentId, $body, $silent);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskUpdateComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Number of task |
 **commentId** | **int**| Number of comment |
 **body** | [**\Planfix\Model\CommentUpdateRequest**](../Model/CommentUpdateRequest.md)|  | [optional]
 **silent** | **bool**| Silent mode | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

