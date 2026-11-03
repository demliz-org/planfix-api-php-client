# TaskCreateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Task number. For create requests this field is usually omitted. | [optional]
**sourceObjectId** | **string** | Unique identifier of the specific object in the third-party application or system. | [optional]
**sourceDataVersion** | **string** | Version of the object data in the third-party application or system. | [optional]
**name** | **string** | Task name. | [optional]
**description** | **string** | Task description. | [optional]
**priority** | **string** | Task priority. Use Urgent for urgent tasks and NotUrgent for regular priority tasks. | [optional]
**status** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) | Task status. Specify an existing task status by id. | [optional]
**processId** | **int** | Task process id. | [optional]
**resultChecking** | **bool** | Whether the task requires mandatory result checking. | [optional]
**assigner** | [**\Planfix\Model\PersonRequest**](PersonRequest.md) | Task assigner. Specify an existing employee by number. | [optional]
**parent** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) | Parent task. Specify an existing task by number. | [optional]
**template** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) | Task template. Specify an existing task template by number. | [optional]
**object** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) | Task object. Specify an existing object by number. | [optional]
**project** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) | Project where the task belongs. Specify an existing project by number. | [optional]
**counterparty** | [**\Planfix\Model\PersonRequest**](PersonRequest.md) | Task counterparty. Specify an existing contact/company by number. | [optional]
**dateTime** | [**\Planfix\Model\TimePoint**](TimePoint.md) | Task creation date and time as TimePoint. | [optional]
**startDateTime** | [**\Planfix\Model\TimePoint**](TimePoint.md) | Task start date and time as TimePoint. | [optional]
**endDateTime** | [**\Planfix\Model\TimePoint**](TimePoint.md) | Task due date and time as TimePoint. | [optional]
**delayedTillDate** | [**\Planfix\Model\TimePoint**](TimePoint.md) | Date and time until which the task is delayed/postponed as TimePoint. | [optional]
**hasStartDate** | **bool** | Whether the task has a start date. | [optional]
**hasEndDate** | **bool** | Whether the task has a due date. | [optional]
**duration** | **int** | Task duration value. The unit is defined by durationUnit. | [optional]
**durationUnit** | **string** | Unit for task duration: Minute, Hour, Day, Week, or Month. | [optional]
**durationType** | **string** | How duration is calculated: CalendarDays for calendar days or WorkerDays for working days. | [optional]
**overdue** | **bool** | Whether the task is marked as overdue. | [optional]
**closeToDeadLine** | **bool** | Whether the task is close to its deadline. | [optional]
**notAcceptedInTime** | **bool** | Whether the task was not accepted in time. | [optional]
**inFavorites** | **bool** | Whether the task is in favorites. | [optional]
**isSummary** | **bool** | Whether the task is a summary task. | [optional]
**isSequential** | **bool** | Whether the task is marked as sequential, meaning it participates in a sequential task/subtask chain where the next task is activated after the previous one is completed or becomes inactive. | [optional]
**assignees** | [**\Planfix\Model\PeopleRequest**](PeopleRequest.md) | Task assignees. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional]
**participants** | [**\Planfix\Model\PeopleRequest**](PeopleRequest.md) | Task participants. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional]
**auditors** | [**\Planfix\Model\PeopleRequest**](PeopleRequest.md) | Task auditors. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional]
**isDeleted** | **bool** | Whether the task is deleted. | [optional]
**customFieldData** | [**\Planfix\Model\CustomFieldValueRequest[]**](CustomFieldValueRequest.md) | Custom field values for the task. Each item contains a custom field id in field.id and its value. | [optional]
**files** | [**\Planfix\Model\FileRequest[]**](FileRequest.md) | Existing Planfix files attached to the task. Each item must contain an existing file id. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
