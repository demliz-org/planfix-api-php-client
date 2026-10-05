# Planfix\ProjectApi

All URIs are relative to *https://your-account.planfix.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getProjectById**](ProjectApi.md#getprojectbyid) | **GET** /project/{id} | Get project by number
[**getProjectFiles**](ProjectApi.md#getprojectfiles) | **GET** /project/{id}/files | Get project files
[**getProjectGroups**](ProjectApi.md#getprojectgroups) | **GET** /project/groups | Get list of project groups
[**getProjectList**](ProjectApi.md#getprojectlist) | **POST** /project/list | Get list of projects
[**getProjectListTemplates**](ProjectApi.md#getprojectlisttemplates) | **GET** /project/templates | Get list of project templates
[**postProject**](ProjectApi.md#postproject) | **POST** /project/ | Create project
[**postProjectById**](ProjectApi.md#postprojectbyid) | **POST** /project/{id} | Update project by number

# **getProjectById**
> \Planfix\Model\InlineResponse20023 getProjectById($id, $fields, $sourceId)

Get project by number

This method lets you get a project by number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Number of project
$fields = "fields_example"; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, description, status, owner, parent, template, group, counterparty, startDate, endDate, hiddenForEmployees, hiddenForClients, overdue, isCloseToDeadline, hasEndDate, assignees, participants, auditors, clientManagers, isDeleted, sourceObjectId, sourceDataVersion
$sourceId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Unique identifier of the third-party application or system.

try {
    $result = $apiInstance->getProjectById($id, $fields, $sourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Number of project |
 **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, description, status, owner, parent, template, group, counterparty, startDate, endDate, hiddenForEmployees, hiddenForClients, overdue, isCloseToDeadline, hasEndDate, assignees, participants, auditors, clientManagers, isDeleted, sourceObjectId, sourceDataVersion | [optional]
 **sourceId** | [**string**](../Model/.md)| Unique identifier of the third-party application or system. | [optional]

### Return type

[**\Planfix\Model\InlineResponse20023**](../Model/InlineResponse20023.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectFiles**
> \Planfix\Model\InlineResponse2004 getProjectFiles($id, $pageSize, $offset)

Get project files

This method lets you get project files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of project
$pageSize = 100; // float | Size of requested list
$offset = 0; // float | Offset from beginning of list

try {
    $result = $apiInstance->getProjectFiles($id, $pageSize, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of project |
 **pageSize** | **float**| Size of requested list | [optional] [default to 100]
 **offset** | **float**| Offset from beginning of list | [optional] [default to 0]

### Return type

[**\Planfix\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectGroups**
> \Planfix\Model\InlineResponse2006 getProjectGroups($fields)

Get list of project groups

This method lets you get a list of project groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name

try {
    $result = $apiInstance->getProjectGroups($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name | [optional]

### Return type

[**\Planfix\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectList**
> \Planfix\Model\InlineResponse20024 getProjectList($body)

Get list of projects

This method lets you get a list of projects

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\ProjectListBody(); // \Planfix\Model\ProjectListBody | 

try {
    $result = $apiInstance->getProjectList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\ProjectListBody**](../Model/ProjectListBody.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse20024**](../Model/InlineResponse20024.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProjectListTemplates**
> \Planfix\Model\InlineResponse20025 getProjectListTemplates($offset, $pageSize, $sourceId, $fields)

Get list of project templates

This method lets you get a list of all project templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // float | Offset from beginning of list
$pageSize = 100; // float | Size of requested list
$sourceId = "sourceId_example"; // string | Unique identifier of the third-party application or system.
$fields = "fields_example"; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, description, status, owner, parent, template, group, counterparty, startDate, endDate, hiddenForEmployees, hiddenForClients, overdue, isCloseToDeadline, hasEndDate, assignees, participants, auditors, clientManagers, isDeleted, sourceObjectId, sourceDataVersion

try {
    $result = $apiInstance->getProjectListTemplates($offset, $pageSize, $sourceId, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->getProjectListTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **float**| Offset from beginning of list | [optional] [default to 0]
 **pageSize** | **float**| Size of requested list | [optional] [default to 100]
 **sourceId** | **string**| Unique identifier of the third-party application or system. | [optional]
 **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, description, status, owner, parent, template, group, counterparty, startDate, endDate, hiddenForEmployees, hiddenForClients, overdue, isCloseToDeadline, hasEndDate, assignees, participants, auditors, clientManagers, isDeleted, sourceObjectId, sourceDataVersion | [optional]

### Return type

[**\Planfix\Model\InlineResponse20025**](../Model/InlineResponse20025.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProject**
> \Planfix\Model\InlineResponse201 postProject($body, $idempotencyKey)

Create project

This method lets you create a new project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\ProjectRequest(); // \Planfix\Model\ProjectRequest | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postProject($body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->postProject: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\ProjectRequest**](../Model/ProjectRequest.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postProjectById**
> \Planfix\Model\InlineResponse20010 postProjectById($id, $body, $silent)

Update project by number

This method lets you update the project data by number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Number of project
$body = new \Planfix\Model\ProjectUpdateRequest(); // \Planfix\Model\ProjectUpdateRequest | 
$silent = false; // bool | Silent mode

try {
    $result = $apiInstance->postProjectById($id, $body, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->postProjectById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Number of project |
 **body** | [**\Planfix\Model\ProjectUpdateRequest**](../Model/ProjectUpdateRequest.md)|  | [optional]
 **silent** | **bool**| Silent mode | [optional] [default to false]

### Return type

[**\Planfix\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

