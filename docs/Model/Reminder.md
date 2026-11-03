# Reminder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Reminder id. | [optional]
**commentId** | **int** | Comment id linked to the reminder. | [optional]
**recurrenceId** | **int** | Recurrence id linked to the reminder. | [optional]
**dataTagEntryKey** | **int** | Data tag entry key linked to the reminder. | [optional]
**reminderDate** | [**\Planfix\Model\TimePoint**](TimePoint.md) | Reminder date and time as TimePoint. | [optional]
**reminderDateToCreate** | [**\Planfix\Model\TimePoint**](TimePoint.md) | Date and time for creating the reminder as TimePoint. | [optional]
**reminded** | **bool** | Whether the reminder has already been sent. | [optional]
**text** | **string** | Reminder text. | [optional]
**type** | **string** | Reminder type. Values are Exact, Before, or None. | [optional]
**subtype** | **string** | Reminder subtype. Defines whether the reminder is before a task or data tag start/end date. | [optional]
**owner** | [**\Planfix\Model\PersonResponse**](PersonResponse.md) | Reminder owner. | [optional]
**recipientsRoles** | **string[]** | Recipient roles for the reminder. | [optional]
**recipientsPeople** | [**\Planfix\Model\PeopleResponse**](PeopleResponse.md) | People and groups who receive the reminder. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
