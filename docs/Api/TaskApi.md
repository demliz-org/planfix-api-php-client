# Planfix\TaskApi

Operations with tasks

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getTaskById()**](TaskApi.md#getTaskById) | **GET** /task/{id} | Get task by number |
| [**getTaskComments()**](TaskApi.md#getTaskComments) | **POST** /task/{id}/comments/list | Get task comments |
| [**getTaskFiles()**](TaskApi.md#getTaskFiles) | **GET** /task/{id}/files | Get task files |
| [**getTaskList()**](TaskApi.md#getTaskList) | **POST** /task/list | Get list of tasks |
| [**getTaskListRecurring()**](TaskApi.md#getTaskListRecurring) | **GET** /task/recurring | Get a list of recurring tasks |
| [**getTaskListTemplates()**](TaskApi.md#getTaskListTemplates) | **GET** /task/templates | Get list of task templates |
| [**postTask()**](TaskApi.md#postTask) | **POST** /task/ | Create task |
| [**postTaskAddComment()**](TaskApi.md#postTaskAddComment) | **POST** /task/{id}/comments/ | Add comment |
| [**postTaskAddDataTagEntryExistingComment()**](TaskApi.md#postTaskAddDataTagEntryExistingComment) | **POST** /task/{id}/datatags/{commentId} | Add a data tag entry to an existing comment |
| [**postTaskAddDataTagEntryNewComment()**](TaskApi.md#postTaskAddDataTagEntryNewComment) | **POST** /task/{id}/datatags/ | Add data tag entry as new comment |
| [**postTaskById()**](TaskApi.md#postTaskById) | **POST** /task/{id} | Update task by number |
| [**postTaskFilters()**](TaskApi.md#postTaskFilters) | **POST** /task/filters | Get list task filters |
| [**postTaskUpdateComment()**](TaskApi.md#postTaskUpdateComment) | **POST** /task/{id}/comments/{commentId} | Updating comments |


## `getTaskById()`

```php
getTaskById($id, $fields, $sourceId): \Planfix\Model\GetTaskById200Response
```

Get task by number

This method lets you get a task by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$fields = id,name,description,101,115; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, description, additionalDescriptionData, priority, status, processId, resultChecking, type, assigner, parent, object, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, actualCompletionDate, dateOfLastUpdate, dateOfLastComment, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, projectAuditors, recurrence, isDeleted, files, dataTags, sourceObjectId, sourceDataVersion
$sourceId = 'sourceId_example'; // string | Unique identifier of the third-party application or system.

try {
    $result = $apiInstance->getTaskById($id, $fields, $sourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, description, additionalDescriptionData, priority, status, processId, resultChecking, type, assigner, parent, object, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, actualCompletionDate, dateOfLastUpdate, dateOfLastComment, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, projectAuditors, recurrence, isDeleted, files, dataTags, sourceObjectId, sourceDataVersion | [optional] |
| **sourceId** | **string**| Unique identifier of the third-party application or system. | [optional] |

### Return type

[**\Planfix\Model\GetTaskById200Response**](../Model/GetTaskById200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskComments()`

```php
getTaskComments($id, $getContactCommentsRequest): \Planfix\Model\GetContactComments200Response
```

Get task comments

This method lets you get a list of comments on a task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$getContactCommentsRequest = {"offset":0,"pageSize":100,"fields":"id,description,recipients","typeList":"Comments","resultOrder":[{"field":"dateTime","direction":"Desc"},{"field":"id","direction":"Desc"}]}; // \Planfix\Model\GetContactCommentsRequest

try {
    $result = $apiInstance->getTaskComments($id, $getContactCommentsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **getContactCommentsRequest** | [**\Planfix\Model\GetContactCommentsRequest**](../Model/GetContactCommentsRequest.md)|  | [optional] |

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

## `getTaskFiles()`

```php
getTaskFiles($id, $onlyFromDescription): \Planfix\Model\GetContactFiles200Response
```

Get task files

This method lets you get task files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Number of task
$onlyFromDescription = false; // bool | Flag to get files from description only

try {
    $result = $apiInstance->getTaskFiles($id, $onlyFromDescription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of task | |
| **onlyFromDescription** | **bool**| Flag to get files from description only | [optional] [default to false] |

### Return type

[**\Planfix\Model\GetContactFiles200Response**](../Model/GetContactFiles200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskList()`

```php
getTaskList($getTaskListRequest): \Planfix\Model\GetTaskList200Response
```

Get list of tasks

This method lets you get a list of tasks

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$getTaskListRequest = {"offset":0,"pageSize":100,"fields":"id,name,description","sourceId":"797f5a94-3689-4ac8-82fd-d749511ea2b2"}; // \Planfix\Model\GetTaskListRequest

try {
    $result = $apiInstance->getTaskList($getTaskListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **getTaskListRequest** | [**\Planfix\Model\GetTaskListRequest**](../Model/GetTaskListRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\GetTaskList200Response**](../Model/GetTaskList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskListRecurring()`

```php
getTaskListRecurring($offset, $pageSize, $sourceId, $fields): \Planfix\Model\GetTaskList200Response
```

Get a list of recurring tasks

This method allows you to get a list of recurring tasks.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // float | Offset from beginning of list
$pageSize = 100; // float | Size of requested list
$sourceId = 'sourceId_example'; // string | Unique identifier of the third-party application or system.
$fields = 'fields_example'; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, description, priority, status, processId, resultChecking, type, assigner, parent, object, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, dateOfLastUpdate, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, recurrence, isDeleted, files, sourceObjectId, sourceDataVersion

try {
    $result = $apiInstance->getTaskListRecurring($offset, $pageSize, $sourceId, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskListRecurring: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **float**| Offset from beginning of list | [optional] [default to 0] |
| **pageSize** | **float**| Size of requested list | [optional] [default to 100] |
| **sourceId** | **string**| Unique identifier of the third-party application or system. | [optional] |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, description, priority, status, processId, resultChecking, type, assigner, parent, object, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, dateOfLastUpdate, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, recurrence, isDeleted, files, sourceObjectId, sourceDataVersion | [optional] |

### Return type

[**\Planfix\Model\GetTaskList200Response**](../Model/GetTaskList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaskListTemplates()`

```php
getTaskListTemplates($offset, $pageSize, $sourceId, $fields): \Planfix\Model\GetTaskListTemplates200Response
```

Get list of task templates

This method lets you get a list of all task templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // float | Offset from beginning of list
$pageSize = 100; // float | Size of requested list
$sourceId = 'sourceId_example'; // string | Unique identifier of the third-party application or system.
$fields = 'fields_example'; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, description, priority, status, processId, resultChecking, type, assigner, parent, object, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, dateOfLastUpdate, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, recurrence, isDeleted, files, sourceObjectId, sourceDataVersion

try {
    $result = $apiInstance->getTaskListTemplates($offset, $pageSize, $sourceId, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTaskListTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **float**| Offset from beginning of list | [optional] [default to 0] |
| **pageSize** | **float**| Size of requested list | [optional] [default to 100] |
| **sourceId** | **string**| Unique identifier of the third-party application or system. | [optional] |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, description, priority, status, processId, resultChecking, type, assigner, parent, object, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, dateOfLastUpdate, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, recurrence, isDeleted, files, sourceObjectId, sourceDataVersion | [optional] |

### Return type

[**\Planfix\Model\GetTaskListTemplates200Response**](../Model/GetTaskListTemplates200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTask()`

```php
postTask($idempotencyKey, $taskCreateRequest): \Planfix\Model\PostContact201Response
```

Create task

This method lets you create a new task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$taskCreateRequest = {"name":"New task name","description":"Task description"}; // \Planfix\Model\TaskCreateRequest

try {
    $result = $apiInstance->postTask($idempotencyKey, $taskCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTask: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **taskCreateRequest** | [**\Planfix\Model\TaskCreateRequest**](../Model/TaskCreateRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostContact201Response**](../Model/PostContact201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTaskAddComment()`

```php
postTaskAddComment($id, $idempotencyKey, $silent, $commentCreateRequest): \Planfix\Model\PostContact201Response
```

Add comment

This method lets you add a new comment to a task

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$silent = false; // bool | Silent mode
$commentCreateRequest = {"description":"New comment text","recipients":{"users":[{"id":"user:5"},{"id":"contact:10"}]}}; // \Planfix\Model\CommentCreateRequest

try {
    $result = $apiInstance->postTaskAddComment($id, $idempotencyKey, $silent, $commentCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskAddComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **silent** | **bool**| Silent mode | [optional] [default to false] |
| **commentCreateRequest** | [**\Planfix\Model\CommentCreateRequest**](../Model/CommentCreateRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostContact201Response**](../Model/PostContact201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTaskAddDataTagEntryExistingComment()`

```php
postTaskAddDataTagEntryExistingComment($id, $commentId, $idempotencyKey, $dataTagEntryCreateRequest): \Planfix\Model\PostTaskAddDataTagEntryExistingComment201Response
```

Add a data tag entry to an existing comment

This method lets you add a data tag entry to an existing comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$commentId = 56; // int | Number of comment
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$dataTagEntryCreateRequest = {"dataTag":{"id":1},"items":[{"customFieldData":[{"field":{"id":20},"value":99}]}]}; // \Planfix\Model\DataTagEntryCreateRequest

try {
    $result = $apiInstance->postTaskAddDataTagEntryExistingComment($id, $commentId, $idempotencyKey, $dataTagEntryCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskAddDataTagEntryExistingComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **commentId** | **int**| Number of comment | |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **dataTagEntryCreateRequest** | [**\Planfix\Model\DataTagEntryCreateRequest**](../Model/DataTagEntryCreateRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostTaskAddDataTagEntryExistingComment201Response**](../Model/PostTaskAddDataTagEntryExistingComment201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTaskAddDataTagEntryNewComment()`

```php
postTaskAddDataTagEntryNewComment($id, $idempotencyKey, $dataTagEntryCreateRequest): \Planfix\Model\PostTaskAddDataTagEntryNewComment201Response
```

Add data tag entry as new comment

This method lets you add data tag entry as new comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$dataTagEntryCreateRequest = {"dataTag":{"id":4},"items":[{"customFieldData":[{"field":{"id":10},"value":"Test value"}]}]}; // \Planfix\Model\DataTagEntryCreateRequest | 

try {
    $result = $apiInstance->postTaskAddDataTagEntryNewComment($id, $idempotencyKey, $dataTagEntryCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskAddDataTagEntryNewComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **dataTagEntryCreateRequest** | [**\Planfix\Model\DataTagEntryCreateRequest**](../Model/DataTagEntryCreateRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostTaskAddDataTagEntryNewComment201Response**](../Model/PostTaskAddDataTagEntryNewComment201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTaskById()`

```php
postTaskById($id, $silent, $taskUpdateRequest): \Planfix\Model\PostTaskById200Response
```

Update task by number

This method lets you update a task by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$silent = false; // bool | Silent mode
$taskUpdateRequest = {"name":"New task name"}; // \Planfix\Model\TaskUpdateRequest

try {
    $result = $apiInstance->postTaskById($id, $silent, $taskUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **silent** | **bool**| Silent mode | [optional] [default to false] |
| **taskUpdateRequest** | [**\Planfix\Model\TaskUpdateRequest**](../Model/TaskUpdateRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostTaskById200Response**](../Model/PostTaskById200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTaskFilters()`

```php
postTaskFilters(): \Planfix\Model\PostContactFilters200Response
```

Get list task filters

This method lets you get list task filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Planfix\Model\PostContactFilters200Response**](../Model/PostContactFilters200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTaskUpdateComment()`

```php
postTaskUpdateComment($id, $commentId, $silent, $commentUpdateRequest)
```

Updating comments

This method lets you update a comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\TaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of task
$commentId = 56; // int | Number of comment
$silent = false; // bool | Silent mode
$commentUpdateRequest = {"description":"Text updated","isPinned":true,"recipients":{"users":[{"id":"user:5"}],"groups":[{"id":5}]},"files":[{"id":115234}]}; // \Planfix\Model\CommentUpdateRequest

try {
    $apiInstance->postTaskUpdateComment($id, $commentId, $silent, $commentUpdateRequest);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->postTaskUpdateComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of task | |
| **commentId** | **int**| Number of comment | |
| **silent** | **bool**| Silent mode | [optional] [default to false] |
| **commentUpdateRequest** | [**\Planfix\Model\CommentUpdateRequest**](../Model/CommentUpdateRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
