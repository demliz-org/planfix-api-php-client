# TaskListBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offset** | **int** | Offset from beginning of list | [optional] [default to 0]
**pageSize** | **int** | Size of requested list | [optional] [default to 100]
**filterId** | **string** | Id for task filter, get list by method &#x27;/task/filters&#x27; | [optional] 
**runAsUserId** | **string** | The employee or contact number with prefix on whose behalf the request will be executed if the token owner is an administrator. | [optional] 
**filters** | [**\Planfix\Model\ComplexTaskFilter[]**](ComplexTaskFilter.md) |  | [optional] 
**fields** | **string** | Fields returned - custom field identifiers, system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, description, priority, status, processId, resultChecking, type, assigner, parent, object, template, project, counterparty, dateTime, startDateTime, endDateTime, hasStartDate, hasEndDate, hasStartTime, hasEndTime, delayedTillDate, actualCompletionDate, dateOfLastUpdate, dateOfLastComment, duration, durationUnit, durationType, overdue, closeToDeadLine, notAcceptedInTime, inFavorites, isSummary, isSequential, assignees, participants, auditors, recurrence, isDeleted, files, sourceObjectId, sourceDataVersion | [optional] 
**sourceId** | **string** | Unique identifier of the third-party application or system. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

