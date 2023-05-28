# Planfix REST API PHP client
Documentation for Planfix REST API.  
Generated [swagger.json](https://help.planfix.com/restapidocs/swagger.json)

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.3
- Package version: 1.0.3
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/demliz-org/planfix-api-php-client.git"
    }
  ],
  "require": {
    "demliz/planfix-api-client": "^1.0"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/.//vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new Planfix\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $apiInstance->deleteCommentId($id);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->deleteCommentId: ', $e->getMessage(), PHP_EOL;
}


$apiInstance = new Planfix\Api\CommentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | Number of comment
$fields = "fields_example"; // string | Fields returned - custom field identifiers, system field names, comma-delimited
$sourceId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | Unique identifier of external application

try {
    $result = $apiInstance->getCommentId($id, $fields, $sourceId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentsApi->getCommentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to *https://your-account.planfix.com/rest*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CommentsApi* | [**deleteCommentId**](docs/Api/CommentsApi.md#deletecommentid) | **DELETE** /comment/{id} | Delete comment
*CommentsApi* | [**getCommentId**](docs/Api/CommentsApi.md#getcommentid) | **GET** /comment/{id} | Get comment by number
*ContactApi* | [**getContactById**](docs/Api/ContactApi.md#getcontactbyid) | **GET** /contact/{id} | Get contact by number
*ContactApi* | [**getContactComments**](docs/Api/ContactApi.md#getcontactcomments) | **POST** /contact/{id}/comments/list | Get list of comments added to contact
*ContactApi* | [**getContactList**](docs/Api/ContactApi.md#getcontactlist) | **POST** /contact/list | Get list of contacts and companies
*ContactApi* | [**getContactListGroups**](docs/Api/ContactApi.md#getcontactlistgroups) | **GET** /contact/groups | Get list of contact groups
*ContactApi* | [**getContactListTemplates**](docs/Api/ContactApi.md#getcontactlisttemplates) | **GET** /contact/templates | Get list of contact or company templates
*ContactApi* | [**postContact**](docs/Api/ContactApi.md#postcontact) | **POST** /contact/ | Create contact or company
*ContactApi* | [**postContactAddComment**](docs/Api/ContactApi.md#postcontactaddcomment) | **POST** /contact/{id}/comments/ | Add comment
*ContactApi* | [**postContactAddDataTagEntryExistingComment**](docs/Api/ContactApi.md#postcontactadddatatagentryexistingcomment) | **POST** /contact/{id}/datatags/{commentId} | Add a data tag entry to an existing comment
*ContactApi* | [**postContactAddDataTagEntryNewComment**](docs/Api/ContactApi.md#postcontactadddatatagentrynewcomment) | **POST** /contact/{id}/datatags/ | Add a data tag entry with a new comment
*ContactApi* | [**postContactById**](docs/Api/ContactApi.md#postcontactbyid) | **POST** /contact/{id} | Update contact by number
*ContactApi* | [**postContactFilters**](docs/Api/ContactApi.md#postcontactfilters) | **POST** /contact/filters | Get list contact filters
*ContactApi* | [**postContactImport**](docs/Api/ContactApi.md#postcontactimport) | **POST** /contact/import | Import contact list
*ContactApi* | [**postContactUpdateComment**](docs/Api/ContactApi.md#postcontactupdatecomment) | **POST** /contact/{id}/comments/{commentId} | Update comment
*CustomFieldsApi* | [**getCustomfieldContact**](docs/Api/CustomFieldsApi.md#getcustomfieldcontact) | **GET** /customfield/contact | Get a list of a custom contact fields
*CustomFieldsApi* | [**getCustomfieldGeneric**](docs/Api/CustomFieldsApi.md#getcustomfieldgeneric) | **GET** /customfield/main | Get list of custom main fields
*CustomFieldsApi* | [**getCustomfieldProject**](docs/Api/CustomFieldsApi.md#getcustomfieldproject) | **GET** /customfield/project | Get a list of custom project fields
*CustomFieldsApi* | [**getCustomfieldTask**](docs/Api/CustomFieldsApi.md#getcustomfieldtask) | **GET** /customfield/task | Get list of custom task fields
*CustomFieldsApi* | [**getCustomfieldUser**](docs/Api/CustomFieldsApi.md#getcustomfielduser) | **GET** /customfield/user | Get list of custom employee fields
*CustomFieldsApi* | [**getCustomfieldsForContact**](docs/Api/CustomFieldsApi.md#getcustomfieldsforcontact) | **GET** /customfield/contact/{id} | Get a list of a custom fields for contact
*CustomFieldsApi* | [**getCustomfieldsForDatatag**](docs/Api/CustomFieldsApi.md#getcustomfieldsfordatatag) | **GET** /customfield/datatag/{id} | Get list of custom fields for data tag
*CustomFieldsApi* | [**getCustomfieldsForDirectory**](docs/Api/CustomFieldsApi.md#getcustomfieldsfordirectory) | **GET** /customfield/directory/{id} | Get list of custom fields for directory
*CustomFieldsApi* | [**getCustomfieldsForProject**](docs/Api/CustomFieldsApi.md#getcustomfieldsforproject) | **GET** /customfield/project/{id} | Get list of custom fields for project
*CustomFieldsApi* | [**getCustomfieldsForTask**](docs/Api/CustomFieldsApi.md#getcustomfieldsfortask) | **GET** /customfield/task/{id} | Get list of custom fields for task
*CustomFieldsApi* | [**getCustomfieldsForUser**](docs/Api/CustomFieldsApi.md#getcustomfieldsforuser) | **GET** /customfield/user/{id} | Get list of custom fields for employee
*DataTagsApi* | [**deleteDatatagEntryKey**](docs/Api/DataTagsApi.md#deletedatatagentrykey) | **DELETE** /datatag/entry/{key} | Delete data tag entry
*DataTagsApi* | [**getDataTags**](docs/Api/DataTagsApi.md#getdatatags) | **POST** /datatag/list | Get data tags
*DataTagsApi* | [**getDatatagEntryKey**](docs/Api/DataTagsApi.md#getdatatagentrykey) | **GET** /datatag/entry/{key} | Get data tag entry
*DataTagsApi* | [**getDatatagId**](docs/Api/DataTagsApi.md#getdatatagid) | **GET** /datatag/{id} | Get data tag by identifier
*DataTagsApi* | [**postListDataTagEntrys**](docs/Api/DataTagsApi.md#postlistdatatagentrys) | **POST** /datatag/{id}/entry/list | Get list of data tag entries
*DataTagsApi* | [**postUpdateDataTagEntry**](docs/Api/DataTagsApi.md#postupdatedatatagentry) | **POST** /datatag/entry/{key} | Update data tag entry
*DirectoryApi* | [**deleteDirectoryEntryKey**](docs/Api/DirectoryApi.md#deletedirectoryentrykey) | **DELETE** /directory/{id}/entry/{key} | Delete directory entry
*DirectoryApi* | [**getDirectoriesGroups**](docs/Api/DirectoryApi.md#getdirectoriesgroups) | **GET** /directory/groups | Get list of directory groups
*DirectoryApi* | [**getDirectoryById**](docs/Api/DirectoryApi.md#getdirectorybyid) | **GET** /directory/{id} | Get directory by identifier
*DirectoryApi* | [**getDirectoryIdEntryKey**](docs/Api/DirectoryApi.md#getdirectoryidentrykey) | **GET** /directory/{id}/entry/{key} | Get directory entry
*DirectoryApi* | [**getListDirectories**](docs/Api/DirectoryApi.md#getlistdirectories) | **POST** /directory/list | Get list of directories
*DirectoryApi* | [**postAddDirectoryEntry**](docs/Api/DirectoryApi.md#postadddirectoryentry) | **POST** /directory/{id}/entry/ | Add directory entry
*DirectoryApi* | [**postListDirectoryEntries**](docs/Api/DirectoryApi.md#postlistdirectoryentries) | **POST** /directory/{id}/entry/list | Get list of directory entries
*DirectoryApi* | [**postUpdateDirectoryEntry**](docs/Api/DirectoryApi.md#postupdatedirectoryentry) | **POST** /directory/{id}/entry/{key} | Update directory entry
*EmployeeApi* | [**getUserId**](docs/Api/EmployeeApi.md#getuserid) | **GET** /user/{id} | Get employee by number
*EmployeeApi* | [**getUserList**](docs/Api/EmployeeApi.md#getuserlist) | **POST** /user/list | Get list of employees
*EmployeeApi* | [**getUserListGroups**](docs/Api/EmployeeApi.md#getuserlistgroups) | **GET** /user/groups | Get list of employee groups
*EmployeeApi* | [**getUserPosts**](docs/Api/EmployeeApi.md#getuserposts) | **GET** /user/posts | Get list of employee posts
*EmployeeApi* | [**postUser**](docs/Api/EmployeeApi.md#postuser) | **POST** /user/ | Create employee
*EmployeeApi* | [**postUserId**](docs/Api/EmployeeApi.md#postuserid) | **POST** /user/{id} | Update employee by number
*FileApi* | [**deleteFileId**](docs/Api/FileApi.md#deletefileid) | **DELETE** /file/{id} | Delete file
*FileApi* | [**getFileId**](docs/Api/FileApi.md#getfileid) | **GET** /file/{id} | Get file by identifier
*FileApi* | [**getFileIdDownload**](docs/Api/FileApi.md#getfileiddownload) | **GET** /file/{id}/download | Download file
*FileApi* | [**postFileUpload**](docs/Api/FileApi.md#postfileupload) | **POST** /file/ | Upload file
*FileApi* | [**postFileUploadByUrl**](docs/Api/FileApi.md#postfileuploadbyurl) | **POST** /file/from-url/ | Upload file by link
*ProjectApi* | [**getProjectById**](docs/Api/ProjectApi.md#getprojectbyid) | **GET** /project/{id} | Get project by number
*ProjectApi* | [**getProjectList**](docs/Api/ProjectApi.md#getprojectlist) | **POST** /project/list | Get list of projects
*ProjectApi* | [**getProjectListTemplates**](docs/Api/ProjectApi.md#getprojectlisttemplates) | **GET** /project /templates | Get list of project templates
*ProjectApi* | [**getUserListGroups**](docs/Api/ProjectApi.md#getuserlistgroups) | **GET** /project/groups | Get list of project groups
*ProjectApi* | [**postProject**](docs/Api/ProjectApi.md#postproject) | **POST** /project/ | Create project
*ProjectApi* | [**postProjectById**](docs/Api/ProjectApi.md#postprojectbyid) | **POST** /project/{id} | Update project by number
*TaskApi* | [**getTaskById**](docs/Api/TaskApi.md#gettaskbyid) | **GET** /task/{id} | Get task by number
*TaskApi* | [**getTaskComments**](docs/Api/TaskApi.md#gettaskcomments) | **POST** /task/{id}/comments/list | Get task comments
*TaskApi* | [**getTaskList**](docs/Api/TaskApi.md#gettasklist) | **POST** /task/list | Get list of tasks
*TaskApi* | [**getTaskListTemplates**](docs/Api/TaskApi.md#gettasklisttemplates) | **GET** /task/templates | Get list of task templates
*TaskApi* | [**postTask**](docs/Api/TaskApi.md#posttask) | **POST** /task/ | Create task
*TaskApi* | [**postTaskAddComment**](docs/Api/TaskApi.md#posttaskaddcomment) | **POST** /task/{id}/comments/ | Add comment
*TaskApi* | [**postTaskAddDataTagEntryExistingComment**](docs/Api/TaskApi.md#posttaskadddatatagentryexistingcomment) | **POST** /task/{id}/datatags/{commentId} | Add a data tag entry to an existing comment
*TaskApi* | [**postTaskAddDataTagEntryNewComment**](docs/Api/TaskApi.md#posttaskadddatatagentrynewcomment) | **POST** /task/{id}/datatags/ | Add data tag entry as new comment
*TaskApi* | [**postTaskById**](docs/Api/TaskApi.md#posttaskbyid) | **POST** /task/{id} | Update task by number
*TaskApi* | [**postTaskFilters**](docs/Api/TaskApi.md#posttaskfilters) | **POST** /task/filters | Get list task filters
*TaskApi* | [**postTaskUpdateComment**](docs/Api/TaskApi.md#posttaskupdatecomment) | **POST** /task/{id}/comments/{commentId} | Updating comments

## Documentation For Models

 - [AnyOfComplexContactFilterValue](docs/Model/AnyOfComplexContactFilterValue.md)
 - [AnyOfComplexDataTagFilterValue](docs/Model/AnyOfComplexDataTagFilterValue.md)
 - [AnyOfComplexDirectoryFilterValue](docs/Model/AnyOfComplexDirectoryFilterValue.md)
 - [AnyOfComplexProjectFilterValue](docs/Model/AnyOfComplexProjectFilterValue.md)
 - [AnyOfComplexTaskFilterValue](docs/Model/AnyOfComplexTaskFilterValue.md)
 - [AnyOfComplexUserFilterValue](docs/Model/AnyOfComplexUserFilterValue.md)
 - [ApiResponseError](docs/Model/ApiResponseError.md)
 - [BaseEntity](docs/Model/BaseEntity.md)
 - [ChangeDate](docs/Model/ChangeDate.md)
 - [CommentCreateRequest](docs/Model/CommentCreateRequest.md)
 - [CommentResponse](docs/Model/CommentResponse.md)
 - [CommentResponseChangeStatus](docs/Model/CommentResponseChangeStatus.md)
 - [CommentResponseDataTag](docs/Model/CommentResponseDataTag.md)
 - [CommentResponseDataTags](docs/Model/CommentResponseDataTags.md)
 - [CommentUpdateRequest](docs/Model/CommentUpdateRequest.md)
 - [CommentsListBody](docs/Model/CommentsListBody.md)
 - [CommentsListBody1](docs/Model/CommentsListBody1.md)
 - [Company](docs/Model/Company.md)
 - [ComplexContactFilter](docs/Model/ComplexContactFilter.md)
 - [ComplexDataTagFilter](docs/Model/ComplexDataTagFilter.md)
 - [ComplexDirectoryFilter](docs/Model/ComplexDirectoryFilter.md)
 - [ComplexProjectFilter](docs/Model/ComplexProjectFilter.md)
 - [ComplexTaskFilter](docs/Model/ComplexTaskFilter.md)
 - [ComplexUserFilter](docs/Model/ComplexUserFilter.md)
 - [ContactImportBody](docs/Model/ContactImportBody.md)
 - [ContactListBody](docs/Model/ContactListBody.md)
 - [ContactRequest](docs/Model/ContactRequest.md)
 - [ContactRequestBirthDate](docs/Model/ContactRequestBirthDate.md)
 - [ContactResponse](docs/Model/ContactResponse.md)
 - [CustomField](docs/Model/CustomField.md)
 - [CustomFieldValueRequest](docs/Model/CustomFieldValueRequest.md)
 - [CustomFieldValueResponse](docs/Model/CustomFieldValueResponse.md)
 - [DataTag](docs/Model/DataTag.md)
 - [DataTagEntryCreateRequest](docs/Model/DataTagEntryCreateRequest.md)
 - [DataTagEntryCreateRequestItems](docs/Model/DataTagEntryCreateRequestItems.md)
 - [DataTagEntryResponse](docs/Model/DataTagEntryResponse.md)
 - [DataTagEntryUpdateRequest](docs/Model/DataTagEntryUpdateRequest.md)
 - [DatatagListBody](docs/Model/DatatagListBody.md)
 - [Directory](docs/Model/Directory.md)
 - [DirectoryEntryRequest](docs/Model/DirectoryEntryRequest.md)
 - [DirectoryEntryResponse](docs/Model/DirectoryEntryResponse.md)
 - [DirectoryListBody](docs/Model/DirectoryListBody.md)
 - [EntryListBody](docs/Model/EntryListBody.md)
 - [EntryListBody1](docs/Model/EntryListBody1.md)
 - [FileBody](docs/Model/FileBody.md)
 - [FileRequest](docs/Model/FileRequest.md)
 - [FileResponse](docs/Model/FileResponse.md)
 - [FileUploadRequest](docs/Model/FileUploadRequest.md)
 - [Filter](docs/Model/Filter.md)
 - [GroupRequest](docs/Model/GroupRequest.md)
 - [GroupResponse](docs/Model/GroupResponse.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse20014](docs/Model/InlineResponse20014.md)
 - [InlineResponse20015](docs/Model/InlineResponse20015.md)
 - [InlineResponse20016](docs/Model/InlineResponse20016.md)
 - [InlineResponse20017](docs/Model/InlineResponse20017.md)
 - [InlineResponse20018](docs/Model/InlineResponse20018.md)
 - [InlineResponse20019](docs/Model/InlineResponse20019.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse20020](docs/Model/InlineResponse20020.md)
 - [InlineResponse20021](docs/Model/InlineResponse20021.md)
 - [InlineResponse20022](docs/Model/InlineResponse20022.md)
 - [InlineResponse20023](docs/Model/InlineResponse20023.md)
 - [InlineResponse20024](docs/Model/InlineResponse20024.md)
 - [InlineResponse20025](docs/Model/InlineResponse20025.md)
 - [InlineResponse20026](docs/Model/InlineResponse20026.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse201](docs/Model/InlineResponse201.md)
 - [InlineResponse2011](docs/Model/InlineResponse2011.md)
 - [InlineResponse2012](docs/Model/InlineResponse2012.md)
 - [InlineResponse2013](docs/Model/InlineResponse2013.md)
 - [InlineResponse2014](docs/Model/InlineResponse2014.md)
 - [NotifiedRequest](docs/Model/NotifiedRequest.md)
 - [PeopleRequest](docs/Model/PeopleRequest.md)
 - [PeopleResponse](docs/Model/PeopleResponse.md)
 - [PersonRequest](docs/Model/PersonRequest.md)
 - [PersonResponse](docs/Model/PersonResponse.md)
 - [PhoneRequest](docs/Model/PhoneRequest.md)
 - [PhoneResponse](docs/Model/PhoneResponse.md)
 - [ProjectListBody](docs/Model/ProjectListBody.md)
 - [ProjectRequest](docs/Model/ProjectRequest.md)
 - [ProjectResponse](docs/Model/ProjectResponse.md)
 - [Recurrence](docs/Model/Recurrence.md)
 - [RecurrenceDaily](docs/Model/RecurrenceDaily.md)
 - [RecurrenceEndConditions](docs/Model/RecurrenceEndConditions.md)
 - [RecurrenceEndConditionsNotify](docs/Model/RecurrenceEndConditionsNotify.md)
 - [RecurrenceMonthly](docs/Model/RecurrenceMonthly.md)
 - [RecurrenceWeekly](docs/Model/RecurrenceWeekly.md)
 - [Reminder](docs/Model/Reminder.md)
 - [TaskCreateRequest](docs/Model/TaskCreateRequest.md)
 - [TaskListBody](docs/Model/TaskListBody.md)
 - [TaskResponse](docs/Model/TaskResponse.md)
 - [TaskStatus](docs/Model/TaskStatus.md)
 - [TaskStatusTexts](docs/Model/TaskStatusTexts.md)
 - [TaskUpdateRequest](docs/Model/TaskUpdateRequest.md)
 - [TimePoint](docs/Model/TimePoint.md)
 - [UserListBody](docs/Model/UserListBody.md)
 - [UserRequest](docs/Model/UserRequest.md)
 - [UserResponse](docs/Model/UserResponse.md)

## Documentation For Authorization


## rest_auth

- **Type**: HTTP bearer authentication


## Author
