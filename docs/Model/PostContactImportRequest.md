# PostContactImportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**silent** | **bool** | Silent mode | [optional] [default to false]
**sourceId** | **string** | Unique identifier of the third-party application or system. | [optional]
**contactTemplateId** | **int** |  | [optional]
**companyTemplateId** | **int** |  | [optional]
**optionImportDuplicate** | **string** | Enum: ignore, update, none | [optional]
**optionImportUniqueField** | **string** | Enum: email-phone-name-ifnot, email-phone-name, email-phone, phone, name, email-and-phone-and-name, number, custom  OR custom:{fieldId} | [optional]
**optionImportUniqueDefaultField** | **string** | Enum: name, email-phone-name | [optional]
**contacts** | [**\Planfix\Model\ContactRequest[]**](ContactRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
