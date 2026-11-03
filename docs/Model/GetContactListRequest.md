# GetContactListRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offset** | **int** | Offset from beginning of list | [optional] [default to 0]
**pageSize** | **int** | Size of requested list | [optional] [default to 100]
**filterId** | **string** | Id for contact filter, get list by method &#39;/contact/filters&#39; | [optional]
**filters** | [**\Planfix\Model\ComplexContactFilter[]**](ComplexContactFilter.md) |  | [optional]
**isCompany** | **bool** | True for companies / false for contacts | [optional] [default to false]
**onlyChanged** | **bool** | Flag for retrieving only data modified since last sync with external application | [optional] [default to false]
**prefixedId** | **bool** | Flag for retrieving id with a prefix | [optional]
**fields** | **string** | Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, template, name, midname, lastname, gender, description, address, site, email, additionalEmailAddresses, skype, taxId, telegramId, telegram, facebook, instagram, viberId, position, group, isCompany, isDeleted, birthDate, createdDate, dateOfLastUpdate, supervisors, phones, companies, contacts, files, sourceObjectId, sourceDataVersion | [optional]
**sourceId** | **string** | Unique identifier of the third-party application or system. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
