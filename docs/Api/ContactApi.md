# Planfix\ContactApi

Operations with contacts

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getContactById()**](ContactApi.md#getContactById) | **GET** /contact/{id} | Get contact by number |
| [**getContactComments()**](ContactApi.md#getContactComments) | **POST** /contact/{id}/comments/list | Get list of comments added to contact |
| [**getContactFiles()**](ContactApi.md#getContactFiles) | **GET** /contact/{id}/files | Get contact files |
| [**getContactList()**](ContactApi.md#getContactList) | **POST** /contact/list | Get list of contacts and companies |
| [**getContactListGroups()**](ContactApi.md#getContactListGroups) | **GET** /contact/groups | Get list of contact groups |
| [**getContactListTemplates()**](ContactApi.md#getContactListTemplates) | **GET** /contact/templates | Get list of contact or company templates |
| [**postContact()**](ContactApi.md#postContact) | **POST** /contact/ | Create contact or company |
| [**postContactAddComment()**](ContactApi.md#postContactAddComment) | **POST** /contact/{id}/comments/ | Add comment |
| [**postContactAddDataTagEntryExistingComment()**](ContactApi.md#postContactAddDataTagEntryExistingComment) | **POST** /contact/{id}/datatags/{commentId} | Add a data tag entry to an existing comment |
| [**postContactAddDataTagEntryNewComment()**](ContactApi.md#postContactAddDataTagEntryNewComment) | **POST** /contact/{id}/datatags/ | Add a data tag entry with a new comment |
| [**postContactById()**](ContactApi.md#postContactById) | **POST** /contact/{id} | Update contact by number |
| [**postContactFilters()**](ContactApi.md#postContactFilters) | **POST** /contact/filters | Get list contact filters |
| [**postContactImport()**](ContactApi.md#postContactImport) | **POST** /contact/import | Import contact list |
| [**postContactRestore()**](ContactApi.md#postContactRestore) | **POST** /contact/restore/ | Restore contact from trash |
| [**postContactUpdateComment()**](ContactApi.md#postContactUpdateComment) | **POST** /contact/{id}/comments/{commentId} | Update comment |


## `getContactById()`

```php
getContactById($id, $fields, $sourceId): \Planfix\Model\GetContactById200Response
```

Get contact by number

This method lets you get a contact or company by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$fields = id,name,midname,lastname,description,10; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, template, name, midname, lastname, gender, description, address, site, email, additionalEmailAddresses, skype, taxId, telegramId, telegram, facebook, instagram, viberId, position, group, isCompany, isDeleted, birthDate, createdDate, dateOfLastUpdate, supervisors, phones, companies, contacts, files, dataTags, avatarUrl, addedBy, languageCode, communicationLanguageCode, timezone, sourceObjectId, sourceDataVersion
$sourceId = 'sourceId_example'; // string | Unique identifier of the third-party application or system.

try {
    $result = $apiInstance->getContactById($id, $fields, $sourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, template, name, midname, lastname, gender, description, address, site, email, additionalEmailAddresses, skype, taxId, telegramId, telegram, facebook, instagram, viberId, position, group, isCompany, isDeleted, birthDate, createdDate, dateOfLastUpdate, supervisors, phones, companies, contacts, files, dataTags, avatarUrl, addedBy, languageCode, communicationLanguageCode, timezone, sourceObjectId, sourceDataVersion | [optional] |
| **sourceId** | **string**| Unique identifier of the third-party application or system. | [optional] |

### Return type

[**\Planfix\Model\GetContactById200Response**](../Model/GetContactById200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactComments()`

```php
getContactComments($id, $getContactCommentsRequest): \Planfix\Model\GetContactComments200Response
```

Get list of comments added to contact

This method lets you get a list of comments added to a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$getContactCommentsRequest = {"offset":0,"pageSize":100,"fields":"id,description,recipients","typeList":"Comments","resultOrder":[{"field":"dateTime","direction":"Desc"},{"field":"id","direction":"Desc"}]}; // \Planfix\Model\GetContactCommentsRequest

try {
    $result = $apiInstance->getContactComments($id, $getContactCommentsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
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

## `getContactFiles()`

```php
getContactFiles($id, $onlyFromDescription): \Planfix\Model\GetContactFiles200Response
```

Get contact files

This method lets you get contatc files

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$onlyFromDescription = false; // bool | Flag to get files from description only

try {
    $result = $apiInstance->getContactFiles($id, $onlyFromDescription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
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

## `getContactList()`

```php
getContactList($getContactListRequest): \Planfix\Model\GetContactList200Response
```

Get list of contacts and companies

This method lets you get a list of contacts and companies

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$getContactListRequest = {"offset":0,"pageSize":100,"fields":"id,name,midname,lastname,description","sourceId":"797f5a94-3689-4ac8-82fd-d749511ea2b2"}; // \Planfix\Model\GetContactListRequest | 

try {
    $result = $apiInstance->getContactList($getContactListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **getContactListRequest** | [**\Planfix\Model\GetContactListRequest**](../Model/GetContactListRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\GetContactList200Response**](../Model/GetContactList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactListGroups()`

```php
getContactListGroups($fields): \Planfix\Model\GetContactListGroups200Response
```

Get list of contact groups

This method lets you get a list of all company groups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name; // string | Fields returned - system field names, comma-delimited description: <br>*Possible:* id, name

try {
    $result = $apiInstance->getContactListGroups($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactListGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited description: &lt;br&gt;*Possible:* id, name | [optional] |

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

## `getContactListTemplates()`

```php
getContactListTemplates($offset, $pageSize, $isCompany, $sourceId, $fields): \Planfix\Model\GetContactListTemplates200Response
```

Get list of contact or company templates

This method lets you get a list of all contact or company templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // float | Offset from beginning of list
$pageSize = 100; // float | Size of requested list
$isCompany = false; // bool | True for companies / false for contacts
$sourceId = 'sourceId_example'; // string | Unique identifier of the third-party application or system.
$fields = 'fields_example'; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, template, object, name, midname, lastname, gender, description, address, site, email, additionalEmailAddresses, skype, telegramId, telegram, facebook, instagram, position, group, isCompany, isDeleted, birthDate, dateOfLastUpdate, supervisors, phones, companies, contacts, files, sourceObjectId, sourceDataVersion

try {
    $result = $apiInstance->getContactListTemplates($offset, $pageSize, $isCompany, $sourceId, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactListTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **float**| Offset from beginning of list | [optional] [default to 0] |
| **pageSize** | **float**| Size of requested list | [optional] [default to 100] |
| **isCompany** | **bool**| True for companies / false for contacts | [optional] [default to false] |
| **sourceId** | **string**| Unique identifier of the third-party application or system. | [optional] |
| **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, template, object, name, midname, lastname, gender, description, address, site, email, additionalEmailAddresses, skype, telegramId, telegram, facebook, instagram, position, group, isCompany, isDeleted, birthDate, dateOfLastUpdate, supervisors, phones, companies, contacts, files, sourceObjectId, sourceDataVersion | [optional] |

### Return type

[**\Planfix\Model\GetContactListTemplates200Response**](../Model/GetContactListTemplates200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContact()`

```php
postContact($idempotencyKey, $contactRequest): \Planfix\Model\PostContact201Response
```

Create contact or company

This method lets you create a new contact or company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$contactRequest = {"template":{"id":1},"sourceObjectId":"0c091b1f-a735-44e9-a56c-43435e7a40b6","sourceDataVersion":"AADJIgAAAAA=","name":"Ivan","midname":"Ivanovich","lastname":"Ivanov","gender":"Male","description":"Descritption for contact","address":"Cosima 123 High Street, Apt. 16 City, ST 12345","site":"https://ivan.ivanow.com","email":"ivan@mail.com","skype":"ivan-ivanov","position":"sales manager","languageCode":"En","communicationLanguageCode":"En","group":{"id":1},"isCompany":false,"isDeleted":false,"birthDate":{"date":"01-12-1990"},"phones":[{"number":"89643752416","type":1}],"companies":[],"contacts":[],"customFieldData":[]}; // \Planfix\Model\ContactRequest

try {
    $result = $apiInstance->postContact($idempotencyKey, $contactRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **contactRequest** | [**\Planfix\Model\ContactRequest**](../Model/ContactRequest.md)|  | [optional] |

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

## `postContactAddComment()`

```php
postContactAddComment($id, $idempotencyKey, $commentCreateRequest): \Planfix\Model\PostContact201Response
```

Add comment

This method lets you add a new comment to a contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$commentCreateRequest = {"sourceId":"797f5a94-3689-4ac8-82fd-d749511ea2b2","sourceObjectId":"0c091b1f-a735-44e9-a56c-43435e7a40b6","sourceDataVersion":"AADJIgAAAAA=","dateTime":{"date":"12-06-2022","time":"12:15","datetime":"2022-06-12T12:15Z"},"description":"New comment text","owner":{"id":"user:1"},"isPinned":true,"isHidden":false,"recipients":{"users":[{"id":"contact:10"}],"groups":[{"id":1}]}}; // \Planfix\Model\CommentCreateRequest

try {
    $result = $apiInstance->postContactAddComment($id, $idempotencyKey, $commentCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactAddComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
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

## `postContactAddDataTagEntryExistingComment()`

```php
postContactAddDataTagEntryExistingComment($id, $commentId, $idempotencyKey, $dataTagEntryCreateRequest): \Planfix\Model\PostContactAddDataTagEntryExistingComment201Response
```

Add a data tag entry to an existing comment

This method lets you add a data tag entry to an existing comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$commentId = 56; // int | Number of comment
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$dataTagEntryCreateRequest = {"dataTag":{"id":1},"items":[{"customFieldData":[{"field":{"id":20},"value":99}]}]}; // \Planfix\Model\DataTagEntryCreateRequest

try {
    $result = $apiInstance->postContactAddDataTagEntryExistingComment($id, $commentId, $idempotencyKey, $dataTagEntryCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactAddDataTagEntryExistingComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
| **commentId** | **int**| Number of comment | |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **dataTagEntryCreateRequest** | [**\Planfix\Model\DataTagEntryCreateRequest**](../Model/DataTagEntryCreateRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostContactAddDataTagEntryExistingComment201Response**](../Model/PostContactAddDataTagEntryExistingComment201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContactAddDataTagEntryNewComment()`

```php
postContactAddDataTagEntryNewComment($id, $idempotencyKey, $dataTagEntryCreateRequest): \Planfix\Model\PostContactAddDataTagEntryNewComment201Response
```

Add a data tag entry with a new comment

This method lets you add a data tag entry with a new comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$dataTagEntryCreateRequest = {"dataTag":{"id":4},"items":[{"customFieldData":[{"field":{"id":10},"value":"Test value"}]}]}; // \Planfix\Model\DataTagEntryCreateRequest

try {
    $result = $apiInstance->postContactAddDataTagEntryNewComment($id, $idempotencyKey, $dataTagEntryCreateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactAddDataTagEntryNewComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **dataTagEntryCreateRequest** | [**\Planfix\Model\DataTagEntryCreateRequest**](../Model/DataTagEntryCreateRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostContactAddDataTagEntryNewComment201Response**](../Model/PostContactAddDataTagEntryNewComment201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContactById()`

```php
postContactById($id, $silent, $contactRequest): \Planfix\Model\PostContactById200Response
```

Update contact by number

This method lets you update a contact or company by number

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$silent = false; // bool | Silent mode
$contactRequest = {"sourceObjectId":"0c091b1f-a735-44e9-a56c-43435e7a40b6","sourceDataVersion":"AADJIgAAAAA=","name":"New Name","midname":"New Midname","lastname":"New Lastname"}; // \Planfix\Model\ContactRequest | Successful operation

try {
    $result = $apiInstance->postContactById($id, $silent, $contactRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
| **silent** | **bool**| Silent mode | [optional] [default to false] |
| **contactRequest** | [**\Planfix\Model\ContactRequest**](../Model/ContactRequest.md)| Successful operation | [optional] |

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

## `postContactFilters()`

```php
postContactFilters(): \Planfix\Model\PostContactFilters200Response
```

Get list contact filters

This method lets you get list contact filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->postContactFilters();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactFilters: ', $e->getMessage(), PHP_EOL;
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

## `postContactImport()`

```php
postContactImport($idempotencyKey, $postContactImportRequest)
```

Import contact list

This method lets you import a list of companies or contacts into Planfix

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$postContactImportRequest = {"silent":"false,","contactTemplateId":1,"companyTemplateId":2,"optionImportDuplicate":"update","optionImportUniqueField":"custom:36","optionImportUniqueDefaultField":"name","contacts":[{"sourceObjectId":"0c091b1f-a735-44e9-a56c-43435e7a40b6","sourceDataVersion":"AADJIgAAAAA=","name":"Ivan","midname":"Ivanovich","lastname":"Ivanov","gender":"Male","description":"Description for contact","address":"Cosima 123 High Street, Apt. 16 City, ST 12345","site":"https://ivan.ivanow.com","email":"ivan@mail.com","skype":"ivan-ivanov","position":"manager","group":{"id":1},"isCompany":false,"isDeleted":false,"birthDate":{"date":"01-12-1900"},"phones":[{"number":"89643752416","type":1}]}]}; // \Planfix\Model\PostContactImportRequest

try {
    $apiInstance->postContactImport($idempotencyKey, $postContactImportRequest);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactImport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **postContactImportRequest** | [**\Planfix\Model\PostContactImportRequest**](../Model/PostContactImportRequest.md)|  | [optional] |

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

## `postContactRestore()`

```php
postContactRestore($postContactRestoreRequest): \Planfix\Model\PostContactRestore200Response
```

Restore contact from trash

This method lets you restore a contact or company from the Recycle Bin. Requires the CONTACT_UPDATE scope.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$postContactRestoreRequest = {"id":123}; // \Planfix\Model\PostContactRestoreRequest

try {
    $result = $apiInstance->postContactRestore($postContactRestoreRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactRestore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **postContactRestoreRequest** | [**\Planfix\Model\PostContactRestoreRequest**](../Model/PostContactRestoreRequest.md)|  | |

### Return type

[**\Planfix\Model\PostContactRestore200Response**](../Model/PostContactRestore200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContactUpdateComment()`

```php
postContactUpdateComment($id, $commentId, $silent, $commentUpdateRequest)
```

Update comment

This method lets you update a comment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = contact:12 OR 12; // string | Number of contact
$commentId = 56; // int | Number of comment
$silent = false; // bool | Silent mode
$commentUpdateRequest = {"description":"New text","isPinned":true,"recipients":{"users":[{"id":"contact:10"}],"groups":[{"id":1}]},"files":[{"id":115234}]}; // \Planfix\Model\CommentUpdateRequest

try {
    $apiInstance->postContactUpdateComment($id, $commentId, $silent, $commentUpdateRequest);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactUpdateComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Number of contact | |
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
