# UserResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Employee number. | [optional] 
**sourceObjectId** | **string** | Unique identifier of the specific object in the third-party application or system. | [optional] 
**sourceDataVersion** | **string** | Version of the object data in the third-party application or system. | [optional] 
**name** | **string** | First name of the employee. | [optional] 
**midname** | **string** | Middle name of the employee. | [optional] 
**lastname** | **string** | Last name of the employee. | [optional] 
**gender** | **string** | Employee gender. Values are Female, Male, or NotDefined. | [optional] 
**isDeleted** | **bool** | Whether the employee is deleted. | [optional] 
**birthDate** | [**AllOfUserResponseBirthDate**](AllOfUserResponseBirthDate.md) | Employee birth date as TimePoint. | [optional] 
**groups** | [**\Planfix\Model\GroupResponse[]**](GroupResponse.md) | Employee groups. | [optional] 
**role** | **string** | Employee role in Planfix. | [optional] 
**login** | **string** | Employee login. | [optional] 
**email** | **string** | Primary email address of the employee. | [optional] 
**secondaryEmails** | **string[]** | Additional email addresses of the employee. | [optional] 
**telegramId** | **string** | Telegram identifier associated with the employee. | [optional] 
**telegram** | **string** | Telegram username or profile link. | [optional] 
**status** | **string** | Employee status in Planfix. | [optional] 
**phones** | [**\Planfix\Model\PhoneResponse[]**](PhoneResponse.md) | Employee phone numbers. | [optional] 
**customFieldData** | [**\Planfix\Model\CustomFieldValueResponse[]**](CustomFieldValueResponse.md) | Custom field values of the employee. | [optional] 
**languageCode** | **string** | Planfix interface language code for the employee. | [optional] 
**communicationLanguageCode** | **string** | Preferred communication language code. | [optional] 
**timezone** | **string** | IANA Time Zone Database identifier (TZID). | [optional] 
**position** | [**AllOfUserResponsePosition**](AllOfUserResponsePosition.md) | Employee position. | [optional] 
**workspace** | [**AllOfUserResponseWorkspace**](AllOfUserResponseWorkspace.md) | Employee workspace. | [optional] 
**personalManagers** | [**\Planfix\Model\PersonResponse[]**](PersonResponse.md) | Employee personal managers. | [optional] 
**avatarUrl** | **string** | URL of the employee avatar. | [optional] 
**temporaryReplacement** | [**AllOfUserResponseTemporaryReplacement**](AllOfUserResponseTemporaryReplacement.md) | Employee temporary replacement. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

