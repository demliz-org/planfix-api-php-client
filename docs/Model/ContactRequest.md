# ContactRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Contact/company number. For create requests this field is usually omitted. | [optional]
**template** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) | Contact/company template. Specify an existing contact template by number. | [optional]
**sourceObjectId** | **string** | Unique identifier of the specific object in the third-party application or system. | [optional]
**sourceDataVersion** | **string** | Version of the object data in the third-party application or system. | [optional]
**name** | **string** | First name of a contact or name of a company. | [optional]
**midname** | **string** | Middle name of the contact. | [optional]
**lastname** | **string** | Last name of the contact. | [optional]
**gender** | **string** | Contact gender. Use Female, Male, or NotDefined. | [optional]
**description** | **string** | Description or notes for the contact/company. | [optional]
**address** | **string** | Postal address of the contact/company. | [optional]
**site** | **string** | Website URL of the contact/company. | [optional]
**email** | **string** | Primary email address of the contact or company. | [optional]
**skype** | **string** | Skype username. | [optional]
**taxId** | **string** | Tax identification number of the contact/company. | [optional]
**telegramId** | **string** | Telegram identifier associated with the contact/company. | [optional]
**telegram** | **string** | Telegram username or profile link. | [optional]
**facebook** | **string** | Facebook profile/page link. | [optional]
**instagram** | **string** | Instagram profile link. | [optional]
**viberId** | **string** | Viber identifier associated with the contact/company. | [optional]
**position** | **string** | Job title or position of the contact. | [optional]
**languageCode** | **string** | Planfix interface language code for the contact/company. | [optional]
**communicationLanguageCode** | **string** | Preferred communication language code. | [optional]
**timezone** | **string** | IANA Time Zone Database identifier (TZID). | [optional]
**group** | [**\Planfix\Model\GroupRequest**](GroupRequest.md) | Contact group. Specify an existing group by id. | [optional]
**isCompany** | **bool** | Whether the record is a company rather than an individual contact. | [optional]
**isDeleted** | **bool** | Whether the contact/company is deleted. | [optional]
**birthDate** | [**\Planfix\Model\ContactRequestBirthDate**](ContactRequestBirthDate.md) |  | [optional]
**supervisors** | [**\Planfix\Model\PeopleRequest**](PeopleRequest.md) | Contact supervisors. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional]
**phones** | [**\Planfix\Model\PhoneRequest[]**](PhoneRequest.md) | Contact phone numbers. Each phone contains a number and phone type. | [optional]
**companies** | [**\Planfix\Model\BaseEntity[]**](BaseEntity.md) | Companies linked to this contact. Specify existing contact/company numbers. | [optional]
**contacts** | [**\Planfix\Model\BaseEntity[]**](BaseEntity.md) | Contacts linked to this company. Specify existing contact/company numbers. | [optional]
**customFieldData** | [**\Planfix\Model\CustomFieldValueRequest[]**](CustomFieldValueRequest.md) | Custom field values for the contact/company. Each item contains a custom field id in field.id and its value. | [optional]
**files** | [**\Planfix\Model\FileRequest[]**](FileRequest.md) | Existing Planfix files attached to the contact/company. Each item must contain an existing file id. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
