# TaskStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Task status id. | [optional]
**name** | **string** | Task status name. | [optional]
**color** | **string** | Task status color. | [optional]
**isActive** | **bool** | Whether the task status is active. | [optional]
**hasDeadline** | **bool** | Whether deadlines are tracked for tasks in this status. If deadlines are tracked and a task remains in this status after its planned completion date, the task becomes overdue. | [optional]
**isAppliedIndividually** | **bool** | Whether this status is applied individually for each assignee instead of being applied to all participants. | [optional]
**texts** | [**\Planfix\Model\TaskStatusTextsInner[]**](TaskStatusTextsInner.md) | Task status information in available languages. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
