# Planfix\ContactApi

All URIs are relative to *https://your-account.planfix.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getContactById**](ContactApi.md#getcontactbyid) | **GET** /contact/{id} | Get contact by number
[**getContactComments**](ContactApi.md#getcontactcomments) | **POST** /contact/{id}/comments/list | Get list of comments added to contact
[**getContactFiles**](ContactApi.md#getcontactfiles) | **GET** /contact/{id}/files | Get contact files
[**getContactList**](ContactApi.md#getcontactlist) | **POST** /contact/list | Get list of contacts and companies
[**getContactListGroups**](ContactApi.md#getcontactlistgroups) | **GET** /contact/groups | Get list of contact groups
[**getContactListTemplates**](ContactApi.md#getcontactlisttemplates) | **GET** /contact/templates | Get list of contact or company templates
[**postContact**](ContactApi.md#postcontact) | **POST** /contact/ | Create contact or company
[**postContactAddComment**](ContactApi.md#postcontactaddcomment) | **POST** /contact/{id}/comments/ | Add comment
[**postContactAddDataTagEntryExistingComment**](ContactApi.md#postcontactadddatatagentryexistingcomment) | **POST** /contact/{id}/datatags/{commentId} | Add a data tag entry to an existing comment
[**postContactAddDataTagEntryNewComment**](ContactApi.md#postcontactadddatatagentrynewcomment) | **POST** /contact/{id}/datatags/ | Add a data tag entry with a new comment
[**postContactById**](ContactApi.md#postcontactbyid) | **POST** /contact/{id} | Update contact by number
[**postContactFilters**](ContactApi.md#postcontactfilters) | **POST** /contact/filters | Get list contact filters
[**postContactImport**](ContactApi.md#postcontactimport) | **POST** /contact/import | Import contact list
[**postContactRestore**](ContactApi.md#postcontactrestore) | **POST** /contact/restore/ | Restore contact from trash
[**postContactUpdateComment**](ContactApi.md#postcontactupdatecomment) | **POST** /contact/{id}/comments/{commentId} | Update comment

# **getContactById**
> \Planfix\Model\InlineResponse200 getContactById($id, $fields, $sourceId)

Get contact by number

This method lets you get a contact or company by number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of contact
$fields = "fields_example"; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, template, name, midname, lastname, gender, description, address, site, email, additionalEmailAddresses, skype, taxId, telegramId, telegram, facebook, instagram, viberId, position, group, isCompany, isDeleted, birthDate, createdDate, dateOfLastUpdate, supervisors, phones, companies, contacts, files, dataTags, avatarUrl, addedBy, languageCode, communicationLanguageCode, timezone, sourceObjectId, sourceDataVersion
$sourceId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Unique identifier of the third-party application or system.

try {
    $result = $apiInstance->getContactById($id, $fields, $sourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of contact |
 **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, template, name, midname, lastname, gender, description, address, site, email, additionalEmailAddresses, skype, taxId, telegramId, telegram, facebook, instagram, viberId, position, group, isCompany, isDeleted, birthDate, createdDate, dateOfLastUpdate, supervisors, phones, companies, contacts, files, dataTags, avatarUrl, addedBy, languageCode, communicationLanguageCode, timezone, sourceObjectId, sourceDataVersion | [optional]
 **sourceId** | [**string**](../Model/.md)| Unique identifier of the third-party application or system. | [optional]

### Return type

[**\Planfix\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactComments**
> \Planfix\Model\InlineResponse2003 getContactComments($id, $body)

Get list of comments added to contact

This method lets you get a list of comments added to a contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of contact
$body = new \Planfix\Model\CommentsListBody(); // \Planfix\Model\CommentsListBody | 

try {
    $result = $apiInstance->getContactComments($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactComments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of contact |
 **body** | [**\Planfix\Model\CommentsListBody**](../Model/CommentsListBody.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactFiles**
> \Planfix\Model\InlineResponse2004 getContactFiles($id, $onlyFromDescription)

Get contact files

This method lets you get contatc files

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of contact
$onlyFromDescription = false; // bool | Flag to get files from description only

try {
    $result = $apiInstance->getContactFiles($id, $onlyFromDescription);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactFiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of contact |
 **onlyFromDescription** | **bool**| Flag to get files from description only | [optional] [default to false]

### Return type

[**\Planfix\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactList**
> \Planfix\Model\InlineResponse2002 getContactList($body)

Get list of contacts and companies

This method lets you get a list of contacts and companies

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\ContactListBody(); // \Planfix\Model\ContactListBody | 

try {
    $result = $apiInstance->getContactList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\ContactListBody**](../Model/ContactListBody.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactListGroups**
> \Planfix\Model\InlineResponse2006 getContactListGroups($fields)

Get list of contact groups

This method lets you get a list of all company groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited description: <br>*Possible:* id, name

try {
    $result = $apiInstance->getContactListGroups($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactListGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Fields returned - system field names, comma-delimited description: &lt;br&gt;*Possible:* id, name | [optional]

### Return type

[**\Planfix\Model\InlineResponse2006**](../Model/InlineResponse2006.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactListTemplates**
> \Planfix\Model\InlineResponse2005 getContactListTemplates($offset, $pageSize, $isCompany, $sourceId, $fields)

Get list of contact or company templates

This method lets you get a list of all contact or company templates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 0; // float | Offset from beginning of list
$pageSize = 100; // float | Size of requested list
$isCompany = false; // bool | True for companies / false for contacts
$sourceId = "sourceId_example"; // string | Unique identifier of the third-party application or system.
$fields = "fields_example"; // string | Fields returned - custom field identifiers, system field names, comma-delimited. <br>*Possible for system fields:* id, template, object, name, midname, lastname, gender, description, address, site, email, additionalEmailAddresses, skype, telegramId, telegram, facebook, instagram, position, group, isCompany, isDeleted, birthDate, dateOfLastUpdate, supervisors, phones, companies, contacts, files, sourceObjectId, sourceDataVersion

try {
    $result = $apiInstance->getContactListTemplates($offset, $pageSize, $isCompany, $sourceId, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactListTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **float**| Offset from beginning of list | [optional] [default to 0]
 **pageSize** | **float**| Size of requested list | [optional] [default to 100]
 **isCompany** | **bool**| True for companies / false for contacts | [optional] [default to false]
 **sourceId** | **string**| Unique identifier of the third-party application or system. | [optional]
 **fields** | **string**| Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, template, object, name, midname, lastname, gender, description, address, site, email, additionalEmailAddresses, skype, telegramId, telegram, facebook, instagram, position, group, isCompany, isDeleted, birthDate, dateOfLastUpdate, supervisors, phones, companies, contacts, files, sourceObjectId, sourceDataVersion | [optional]

### Return type

[**\Planfix\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContact**
> \Planfix\Model\InlineResponse201 postContact($body, $idempotencyKey)

Create contact or company

This method lets you create a new contact or company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\ContactRequest(); // \Planfix\Model\ContactRequest | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postContact($body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\ContactRequest**](../Model/ContactRequest.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContactAddComment**
> \Planfix\Model\InlineResponse201 postContactAddComment($id, $body, $idempotencyKey)

Add comment

This method lets you add a new comment to a contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of contact
$body = new \Planfix\Model\CommentCreateRequest(); // \Planfix\Model\CommentCreateRequest | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postContactAddComment($id, $body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactAddComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of contact |
 **body** | [**\Planfix\Model\CommentCreateRequest**](../Model/CommentCreateRequest.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContactAddDataTagEntryExistingComment**
> \Planfix\Model\InlineResponse2012 postContactAddDataTagEntryExistingComment($id, $commentId, $body, $idempotencyKey)

Add a data tag entry to an existing comment

This method lets you add a data tag entry to an existing comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of contact
$commentId = 56; // int | Number of comment
$body = new \Planfix\Model\DataTagEntryCreateRequest(); // \Planfix\Model\DataTagEntryCreateRequest | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postContactAddDataTagEntryExistingComment($id, $commentId, $body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactAddDataTagEntryExistingComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of contact |
 **commentId** | **int**| Number of comment |
 **body** | [**\Planfix\Model\DataTagEntryCreateRequest**](../Model/DataTagEntryCreateRequest.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContactAddDataTagEntryNewComment**
> \Planfix\Model\InlineResponse2011 postContactAddDataTagEntryNewComment($id, $body, $idempotencyKey)

Add a data tag entry with a new comment

This method lets you add a data tag entry with a new comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of contact
$body = new \Planfix\Model\DataTagEntryCreateRequest(); // \Planfix\Model\DataTagEntryCreateRequest | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postContactAddDataTagEntryNewComment($id, $body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactAddDataTagEntryNewComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of contact |
 **body** | [**\Planfix\Model\DataTagEntryCreateRequest**](../Model/DataTagEntryCreateRequest.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContactById**
> \Planfix\Model\InlineResponse2001 postContactById($id, $body, $silent)

Update contact by number

This method lets you update a contact or company by number

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of contact
$body = new \Planfix\Model\ContactRequest(); // \Planfix\Model\ContactRequest | Successful operation
$silent = false; // bool | Silent mode

try {
    $result = $apiInstance->postContactById($id, $body, $silent);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of contact |
 **body** | [**\Planfix\Model\ContactRequest**](../Model/ContactRequest.md)| Successful operation | [optional]
 **silent** | **bool**| Silent mode | [optional] [default to false]

### Return type

[**\Planfix\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContactFilters**
> \Planfix\Model\InlineResponse2007 postContactFilters()

Get list contact filters

This method lets you get list contact filters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


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

# **postContactImport**
> postContactImport($body, $idempotencyKey)

Import contact list

This method lets you import a list of companies or contacts into Planfix

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\ContactImportBody(); // \Planfix\Model\ContactImportBody | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $apiInstance->postContactImport($body, $idempotencyKey);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactImport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\ContactImportBody**](../Model/ContactImportBody.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

void (empty response body)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContactRestore**
> \Planfix\Model\InlineResponse2008 postContactRestore($body)

Restore contact from trash

This method lets you restore a contact or company from the Recycle Bin. Requires the CONTACT_UPDATE scope.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\ContactRestoreBody(); // \Planfix\Model\ContactRestoreBody | 

try {
    $result = $apiInstance->postContactRestore($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactRestore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\ContactRestoreBody**](../Model/ContactRestoreBody.md)|  |

### Return type

[**\Planfix\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postContactUpdateComment**
> postContactUpdateComment($id, $commentId, $body, $silent)

Update comment

This method lets you update a comment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of contact
$commentId = 56; // int | Number of comment
$body = new \Planfix\Model\CommentUpdateRequest(); // \Planfix\Model\CommentUpdateRequest | 
$silent = false; // bool | Silent mode

try {
    $apiInstance->postContactUpdateComment($id, $commentId, $body, $silent);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContactUpdateComment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Number of contact |
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

