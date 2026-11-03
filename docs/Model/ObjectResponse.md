# ObjectResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Object number. | [optional]
**sourceObjectId** | **string** | Unique identifier of the specific object in the third-party application or system. | [optional]
**sourceDataVersion** | **string** | Version of the object data in the third-party application or system. | [optional]
**name** | **string** | Object name. | [optional]
**description** | **string** | Object description. | [optional]
**priority** | **string** | Object priority. Values are Urgent for urgent objects and NotUrgent for regular priority objects. | [optional]
**status** | [**\Planfix\Model\TaskStatus**](TaskStatus.md) | Object status. | [optional]
**resultChecking** | **bool** | Whether the task requires mandatory result checking. | [optional]
**assigner** | [**\Planfix\Model\PersonResponse**](PersonResponse.md) | Object assigner. | [optional]
**parent** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) | Parent object. | [optional]
**project** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) | Project where the object belongs. | [optional]
**counterparty** | [**\Planfix\Model\PersonResponse**](PersonResponse.md) | Object counterparty contact/company. | [optional]
**dateTime** | [**\Planfix\Model\TimePoint**](TimePoint.md) | Object creation date and time as TimePoint. | [optional]
**startDateTime** | [**\Planfix\Model\TimePoint**](TimePoint.md) | Object start date and time as TimePoint. | [optional]
**endDateTime** | [**\Planfix\Model\TimePoint**](TimePoint.md) | Object due date and time as TimePoint. | [optional]
**hasStartDate** | **bool** | Whether the object has a start date. | [optional]
**hasEndDate** | **bool** | Whether the object has a due date. | [optional]
**hasStartTime** | **bool** | Whether the object start date includes a time. | [optional]
**hasEndTime** | **bool** | Whether the object due date includes a time. | [optional]
**dateOfLastUpdate** | [**\Planfix\Model\TimePoint**](TimePoint.md) | Date and time of the last object update as TimePoint. | [optional]
**duration** | **int** | Object duration value. The unit is defined by durationUnit. | [optional]
**durationUnit** | **string** | Unit for object duration: Minute, Hour, Day, Week, or Month. | [optional]
**durationType** | **string** | How duration is calculated: CalendarDays for calendar days or WorkerDays for working days. | [optional]
**inFavorites** | **bool** | Whether the object is in favorites. | [optional]
**isSummary** | **bool** | Whether the object is a summary object. | [optional]
**isSequential** | **bool** | Whether the object is marked as sequential, meaning it participates in a sequential task/subtask chain where the next task is activated after the previous one is completed or becomes inactive. | [optional]
**assignees** | [**\Planfix\Model\PeopleResponse**](PeopleResponse.md) | Object assignees. | [optional]
**participants** | [**\Planfix\Model\PeopleResponse**](PeopleResponse.md) | Object participants. | [optional]
**auditors** | [**\Planfix\Model\PeopleResponse**](PeopleResponse.md) | Object auditors. | [optional]
**isDeleted** | **bool** | Whether the object is deleted. | [optional]
**customFieldData** | [**\Planfix\Model\CustomFieldValueResponse[]**](CustomFieldValueResponse.md) | Custom field values of the object. | [optional]
**files** | [**\Planfix\Model\FileResponse[]**](FileResponse.md) | Planfix files attached to the object. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
