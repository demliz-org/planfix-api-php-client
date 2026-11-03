# Planfix\ProjectApi

Operations with projects

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getProjectById()**](ProjectApi.md#getProjectById) | **GET** /project/{id} | Get project by number |
| [**getProjectFiles()**](ProjectApi.md#getProjectFiles) | **GET** /project/{id}/files | Get project files |
| [**getProjectGroups()**](ProjectApi.md#getProjectGroups) | **GET** /project/groups | Get list of project groups |
| [**getProjectList()**](ProjectApi.md#getProjectList) | **POST** /project/list | Get list of projects |
| [**getProjectListTemplates()**](ProjectApi.md#getProjectListTemplates) | **GET** /project/templates | Get list of project templates |
| [**postProject()**](ProjectApi.md#postProject) | **POST** /project/ | Create project |
| [**postProjectById()**](ProjectApi.md#postProjectById) | **POST** /project/{id} | Update project by number |


## `getProjectById()`

```php
getProjectById($id, $fields, $sourceId): \Planfix\Model\GetProjectById200Response
```

Get project by number

This method lets you get a project by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of project
$fields = id,name,description,10; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, description, status, owner, parent, template, group, counterparty, startDate, endDate, hiddenForEmployees, hiddenForClients, overdue, isCloseToDeadline, hasEndDate, assignees, participants, auditors, clientManagers, isDeleted, sourceObjectId, sourceDataVersion
$sourceId = 'sourceId_example'; // string | Unique identifier of the third-party application or system.

try {
    $result = $apiInstance->getProjectById($id, $fields, $sourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of project | |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, description, status, owner, parent, template, group, counterparty, startDate, endDate, hiddenForEmployees, hiddenForClients, overdue, isCloseToDeadline, hasEndDate, assignees, participants, auditors, clientManagers, isDeleted, sourceObjectId, sourceDataVersion | [optional] |
| **sourceId** | **string**| Unique identifier of the third-party application or system. | [optional] |

### Return type

[**\Planfix\Model\GetProjectById200Response**](../Model/GetProjectById200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectFiles()`

```php
getProjectFiles($id, $pageSize, $offset): \Planfix\Model\GetContactFiles200Response
```

Get project files

This method lets you get project files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | Number of project
$pageSize = 100; // float | Size of requested list
$offset = 0; // float | Offset from beginning of list

try {
    $result = $apiInstance->getProjectFiles($id, $pageSize, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of project | |
| **pageSize** | **float**| Size of requested list | [optional] [default to 100] |
| **offset** | **float**| Offset from beginning of list | [optional] [default to 0] |

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

## `getProjectGroups()`

```php
getProjectGroups($fields): \Planfix\Model\GetContactListGroups200Response
```

Get list of project groups

This method lets you get a list of project groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name

try {
    $result = $apiInstance->getProjectGroups($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name | [optional] |

### Return type

[**\Planfix\Model\GetContactListGroups200Response**](../Model/GetContactListGroups200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectList()`

```php
getProjectList($getProjectListRequest): \Planfix\Model\GetProjectList200Response
```

Get list of projects

This method lets you get a list of projects

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$getProjectListRequest = {"offset":0,"pageSize":100,"filters":[{"type":5001,"operator":"equal","value":"My project"}],"fields":"id,name,description"}; // \Planfix\Model\GetProjectListRequest

try {
    $result = $apiInstance->getProjectList($getProjectListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **getProjectListRequest** | [**\Planfix\Model\GetProjectListRequest**](../Model/GetProjectListRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\GetProjectList200Response**](../Model/GetProjectList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getProjectListTemplates()`

```php
getProjectListTemplates($offset, $pageSize, $sourceId, $fields): \Planfix\Model\GetProjectListTemplates200Response
```

Get list of project templates

This method lets you get a list of all project templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // float | Offset from beginning of list
$pageSize = 100; // float | Size of requested list
$sourceId = 'sourceId_example'; // string | Unique identifier of the third-party application or system.
$fields = name,description,10; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, description, status, owner, parent, template, group, counterparty, startDate, endDate, hiddenForEmployees, hiddenForClients, overdue, isCloseToDeadline, hasEndDate, assignees, participants, auditors, clientManagers, isDeleted, sourceObjectId, sourceDataVersion

try {
    $result = $apiInstance->getProjectListTemplates($offset, $pageSize, $sourceId, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectListTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **float**| Offset from beginning of list | [optional] [default to 0] |
| **pageSize** | **float**| Size of requested list | [optional] [default to 100] |
| **sourceId** | **string**| Unique identifier of the third-party application or system. | [optional] |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, description, status, owner, parent, template, group, counterparty, startDate, endDate, hiddenForEmployees, hiddenForClients, overdue, isCloseToDeadline, hasEndDate, assignees, participants, auditors, clientManagers, isDeleted, sourceObjectId, sourceDataVersion | [optional] |

### Return type

[**\Planfix\Model\GetProjectListTemplates200Response**](../Model/GetProjectListTemplates200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postProject()`

```php
postProject($idempotencyKey, $projectRequest): \Planfix\Model\PostContact201Response
```

Create project

This method lets you create a new project

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$projectRequest = {"name":"My new project","description":"Project description","status":{"id":1},"owner":{"id":"user:1"},"template":{"id":1},"group":{"id":5},"counterparty":{"id":"contact:3"},"assignees":{"users":[{"id":"user:3"}],"groups":[{"id":4}]},"participants":{"users":[{"id":"contact:5"},{"id":"user:5"}]},"clientManagers":{"users":[{"id":"user:1"}]},"customFieldData":[]}; // \Planfix\Model\ProjectRequest

try {
    $result = $apiInstance->postProject($idempotencyKey, $projectRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->postProject: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **projectRequest** | [**\Planfix\Model\ProjectRequest**](../Model/ProjectRequest.md)|  | [optional] |

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

## `postProjectById()`

```php
postProjectById($id, $silent, $projectUpdateRequest): \Planfix\Model\PostTaskById200Response
```

Update project by number

This method lets you update the project data by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Number of project
$silent = false; // bool | Silent mode
$projectUpdateRequest = {"name":"New project name"}; // \Planfix\Model\ProjectUpdateRequest

try {
    $result = $apiInstance->postProjectById($id, $silent, $projectUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->postProjectById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Number of project | |
| **silent** | **bool**| Silent mode | [optional] [default to false] |
| **projectUpdateRequest** | [**\Planfix\Model\ProjectUpdateRequest**](../Model/ProjectUpdateRequest.md)|  | [optional] |

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
