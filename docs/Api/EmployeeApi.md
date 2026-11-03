# Planfix\EmployeeApi

Operations with employees

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserGroups()**](EmployeeApi.md#getUserGroups) | **GET** /user/groups | Get list of employee groups |
| [**getUserId()**](EmployeeApi.md#getUserId) | **GET** /user/{id} | Get employee by number |
| [**getUserList()**](EmployeeApi.md#getUserList) | **POST** /user/list | Get list of employees |
| [**postUser()**](EmployeeApi.md#postUser) | **POST** /user/ | Create employee |
| [**postUserConvertToContact()**](EmployeeApi.md#postUserConvertToContact) | **POST** /user/convert-to-contact/ | Convert employee to contact |
| [**postUserId()**](EmployeeApi.md#postUserId) | **POST** /user/{id} | Update employee by number |


## `getUserGroups()`

```php
getUserGroups($fields): \Planfix\Model\GetContactListGroups200Response
```

Get list of employee groups

This method lets you get a list of employee groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name

try {
    $result = $apiInstance->getUserGroups($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->getUserGroups: ', $e->getMessage(), PHP_EOL;
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

## `getUserId()`

```php
getUserId($id, $fields, $sourceId): \Planfix\Model\GetUserId200Response
```

Get employee by number

This method lets you get an employee by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = user:1 OR 1; // string | Number of employee
$fields = id,name,lastname,10; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, name, midname, lastname, gender, isDeleted, birthDate, groups, role, login, email, secondaryEmails, telegramId, telegram, status, phones, customFieldData, languageCode, communicationLanguageCode, timezone, position, workspace, personalManagers, avatarUrl, temporaryReplacement, sourceObjectId, sourceDataVersion
$sourceId = 'sourceId_example'; // string | Unique identifier of the third-party application or system.

try {
    $result = $apiInstance->getUserId($id, $fields, $sourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->getUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of employee | |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, midname, lastname, gender, isDeleted, birthDate, groups, role, login, email, secondaryEmails, telegramId, telegram, status, phones, customFieldData, languageCode, communicationLanguageCode, timezone, position, workspace, personalManagers, avatarUrl, temporaryReplacement, sourceObjectId, sourceDataVersion | [optional] |
| **sourceId** | **string**| Unique identifier of the third-party application or system. | [optional] |

### Return type

[**\Planfix\Model\GetUserId200Response**](../Model/GetUserId200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserList()`

```php
getUserList($getUserListRequest): \Planfix\Model\GetUserList200Response
```

Get list of employees

This method lets you get a list of employees

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$getUserListRequest = {"offset":0,"pageSize":100,"fields":"id,name,midname,lastname"}; // \Planfix\Model\GetUserListRequest

try {
    $result = $apiInstance->getUserList($getUserListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->getUserList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **getUserListRequest** | [**\Planfix\Model\GetUserListRequest**](../Model/GetUserListRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\GetUserList200Response**](../Model/GetUserList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUser()`

```php
postUser($idempotencyKey, $userRequest): \Planfix\Model\PostContact201Response
```

Create employee

This method lets you create a new employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$userRequest = {"name":"Ivan","midname":"Ivanovich","lastname":"Ivanov","gender":"Male","languageCode":"En","communicationLanguageCode":"En","timezone":"America/New_York","workspace":{"id":1},"birthDate":{"date":"01-12-2000","time":"00:00","datetime":"2000-12-01T00:00Z"},"groups":[{"id":1}],"role":"User","login":"test","password":"testpass","email":"test@test.com","secondaryEmails":[],"status":"Active","phones":[{"number":"Test phone","maskedNumber":"+123456789","type":0}],"position":{"id":23,"name":"manager"},"personalManagers":[{"id":"user:1"},{"id":"user:5"}]}; // \Planfix\Model\UserRequest

try {
    $result = $apiInstance->postUser($idempotencyKey, $userRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->postUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **userRequest** | [**\Planfix\Model\UserRequest**](../Model/UserRequest.md)|  | [optional] |

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

## `postUserConvertToContact()`

```php
postUserConvertToContact($baseEntity, $idempotencyKey): \Planfix\Model\PostUserConvertToContact200Response
```

Convert employee to contact

This method lets you convert an employee to a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$baseEntity = {"id":123}; // \Planfix\Model\BaseEntity
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postUserConvertToContact($baseEntity, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->postUserConvertToContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **baseEntity** | [**\Planfix\Model\BaseEntity**](../Model/BaseEntity.md)|  | |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |

### Return type

[**\Planfix\Model\PostUserConvertToContact200Response**](../Model/PostUserConvertToContact200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserId()`

```php
postUserId($id, $silent, $userUpdateRequest): \Planfix\Model\PostTaskById200Response
```

Update employee by number

This method lets you update an employee by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\EmployeeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = user:1 OR 1; // string | Number of employee
$silent = false; // bool | Silent mode
$userUpdateRequest = {"name":"Ivan","groups":[{"id":2}],"role":"User","email":"new@example.com"}; // \Planfix\Model\UserUpdateRequest

try {
    $result = $apiInstance->postUserId($id, $silent, $userUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmployeeApi->postUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of employee | |
| **silent** | **bool**| Silent mode | [optional] [default to false] |
| **userUpdateRequest** | [**\Planfix\Model\UserUpdateRequest**](../Model/UserUpdateRequest.md)|  | [optional] |

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
