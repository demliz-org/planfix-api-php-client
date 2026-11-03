# UserRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceObjectId** | **string** | Unique identifier of the specific object in the third-party application or system. | [optional]
**sourceDataVersion** | **string** | Version of the object data in the third-party application or system. | [optional]
**name** | **string** | First name of the employee. | [optional]
**midname** | **string** | Middle name of the employee. | [optional]
**lastname** | **string** | Last name of the employee. | [optional]
**gender** | **string** | Employee gender. Use Female, Male, or NotDefined. | [optional]
**isDeleted** | **bool** | Whether the employee is deleted. | [optional]
**birthDate** | [**\Planfix\Model\TimePoint**](TimePoint.md) | Employee birth date as TimePoint. | [optional]
**groups** | [**\Planfix\Model\GroupRequest[]**](GroupRequest.md) | Employee groups. Each item must contain an existing group id. | [optional]
**role** | **string** | Employee role in Planfix. | [optional]
**login** | **string** | Employee login. | [optional]
**password** | **string** | Employee password. | [optional]
**email** | **string** | Primary email address of the employee. | [optional]
**secondaryEmails** | **string[]** | Additional email addresses of the employee. | [optional]
**status** | **string** | Employee status in Planfix. | [optional]
**phones** | [**\Planfix\Model\PhoneRequest[]**](PhoneRequest.md) | Employee phone numbers. | [optional]
**customFieldData** | [**\Planfix\Model\CustomFieldValueRequest[]**](CustomFieldValueRequest.md) | Custom field values for the employee. Each item contains a custom field id in field.id and its value. | [optional]
**languageCode** | **string** | Planfix interface language code for the employee. | [optional]
**communicationLanguageCode** | **string** | Preferred communication language code. | [optional]
**timezone** | **string** | IANA Time Zone Database identifier (TZID). | [optional]
**position** | [**\Planfix\Model\PositionEntity**](PositionEntity.md) | Employee position. | [optional]
**workspace** | [**\Planfix\Model\ShortEntity**](ShortEntity.md) | Employee workspace. | [optional]
**personalManagers** | [**\Planfix\Model\PersonRequest[]**](PersonRequest.md) | Employee personal managers. Specify existing employees by number. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
