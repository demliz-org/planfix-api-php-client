# TaskResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**sourceObjectId** | **string** |  | [optional] 
**sourceDataVersion** | **string** |  | [optional] 
**name** | **string** |  | [optional] 
**description** | **string** |  | [optional] 
**priority** | **string** |  | [optional] 
**status** | [**\Planfix\Model\TaskStatus**](TaskStatus.md) |  | [optional] 
**processId** | **int** |  | [optional] 
**resultChecking** | **bool** |  | [optional] 
**type** | **string** |  | [optional] 
**assigner** | [**\Planfix\Model\PersonResponse**](PersonResponse.md) |  | [optional] 
**parent** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) |  | [optional] 
**template** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) |  | [optional] 
**project** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) |  | [optional] 
**counterparty** | [**\Planfix\Model\PersonResponse**](PersonResponse.md) |  | [optional] 
**dateTime** | [**\Planfix\Model\TimePoint**](TimePoint.md) |  | [optional] 
**startDateTime** | [**\Planfix\Model\TimePoint**](TimePoint.md) |  | [optional] 
**endDateTime** | [**\Planfix\Model\TimePoint**](TimePoint.md) |  | [optional] 
**hasStartDate** | **bool** |  | [optional] 
**hasEndDate** | **bool** |  | [optional] 
**hasStartTime** | **bool** |  | [optional] 
**hasEndTime** | **bool** |  | [optional] 
**delayedTillDate** | [**\Planfix\Model\TimePoint**](TimePoint.md) |  | [optional] 
**dateOfLastUpdate** | [**\Planfix\Model\TimePoint**](TimePoint.md) |  | [optional] 
**duration** | **int** |  | [optional] 
**durationUnit** | **string** |  | [optional] 
**durationType** | **string** |  | [optional] 
**overdue** | **bool** |  | [optional] 
**closeToDeadLine** | **bool** |  | [optional] 
**notAcceptedInTime** | **bool** |  | [optional] 
**inFavorites** | **bool** |  | [optional] 
**isSummary** | **bool** |  | [optional] 
**isSequential** | **bool** |  | [optional] 
**assignees** | [**\Planfix\Model\PeopleResponse**](PeopleResponse.md) |  | [optional] 
**participants** | [**\Planfix\Model\PeopleResponse**](PeopleResponse.md) |  | [optional] 
**auditors** | [**\Planfix\Model\PeopleResponse**](PeopleResponse.md) |  | [optional] 
**recurrence** | [**\Planfix\Model\Recurrence**](Recurrence.md) |  | [optional] 
**isDeleted** | **bool** |  | [optional] 
**customFieldData** | [**\Planfix\Model\CustomFieldValueResponse[]**](CustomFieldValueResponse.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
