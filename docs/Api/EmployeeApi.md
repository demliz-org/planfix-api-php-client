# Planfix\EmployeeApi

All URIs are relative to *https://your-account.planfix.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserGroups**](EmployeeApi.md#getusergroups) | **GET** /user/groups | Get list of employee groups
[**getUserId**](EmployeeApi.md#getuserid) | **GET** /user/{id} | Get employee by number
[**getUserList**](EmployeeApi.md#getuserlist) | **POST** /user/list | Get list of employees
[**postUser**](EmployeeApi.md#postuser) | **POST** /user/ | Create employee
[**postUserConvertToContact**](EmployeeApi.md#postuserconverttocontact) | **POST** /user/convert-to-contact/ | Convert employee to contact
[**postUserId**](EmployeeApi.md#postuserid) | **POST** /user/{id} | Update employee by number

# **getUserGroups**
> \Planfix\Model\InlineResponse2006 getUserGroups($fields)

Get list of employee groups

This method lets you get a list of employee groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name

try {
    $result = $apiInstance->getUserGroups($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->getUserGroups: ', $e->getMessage(), PHP_EOL;
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

# **getUserId**
> \Planfix\Model\InlineResponse20026 getUserId($id, $fields, $sourceId)

Get employee by number

This method lets you get an employee by number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of employee
$fields = "fields_example"; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, midname, lastname, gender, isDeleted, birthDate, groups, role, login, email, secondaryEmails, telegramId, telegram, status, phones, customFieldData, languageCode, communicationLanguageCode, timezone, position, workspace, personalManagers, avatarUrl, temporaryReplacement, sourceObjectId, sourceDataVersion
$sourceId = "sourceId_example"; // string | Unique identifier of the third-party application or system.

try {
    $result = $apiInstance->getUserId($id, $fields, $sourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->getUserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of employee |
 **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, midname, lastname, gender, isDeleted, birthDate, groups, role, login, email, secondaryEmails, telegramId, telegram, status, phones, customFieldData, languageCode, communicationLanguageCode, timezone, position, workspace, personalManagers, avatarUrl, temporaryReplacement, sourceObjectId, sourceDataVersion | [optional]
 **sourceId** | **string**| Unique identifier of the third-party application or system. | [optional]

### Return type

[**\Planfix\Model\InlineResponse20026**](../Model/InlineResponse20026.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserList**
> \Planfix\Model\InlineResponse20027 getUserList($body)

Get list of employees

This method lets you get a list of employees

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\UserListBody(); // \Planfix\Model\UserListBody | 

try {
    $result = $apiInstance->getUserList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->getUserList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\UserListBody**](../Model/UserListBody.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse20027**](../Model/InlineResponse20027.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUser**
> \Planfix\Model\InlineResponse201 postUser($body, $idempotencyKey)

Create employee

This method lets you create a new employee

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\UserRequest(); // \Planfix\Model\UserRequest | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postUser($body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->postUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\UserRequest**](../Model/UserRequest.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserConvertToContact**
> \Planfix\Model\InlineResponse20028 postUserConvertToContact($body, $idempotencyKey)

Convert employee to contact

This method lets you convert an employee to a contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\BaseEntity(); // \Planfix\Model\BaseEntity | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postUserConvertToContact($body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->postUserConvertToContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\BaseEntity**](../Model/BaseEntity.md)|  |
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse20028**](../Model/InlineResponse20028.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserId**
> \Planfix\Model\InlineResponse20010 postUserId($id, $body, $silent)

Update employee by number

This method lets you update an employee by number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of employee
$body = new \Planfix\Model\UserUpdateRequest(); // \Planfix\Model\UserUpdateRequest | 
$silent = false; // bool | Silent mode

try {
    $result = $apiInstance->postUserId($id, $body, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->postUserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of employee |
 **body** | [**\Planfix\Model\UserUpdateRequest**](../Model/UserUpdateRequest.md)|  | [optional]
 **silent** | **bool**| Silent mode | [optional] [default to false]

### Return type

[**\Planfix\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

