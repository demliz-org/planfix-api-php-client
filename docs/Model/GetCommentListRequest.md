# GetCommentListRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offset** | **int** | Offset from beginning of list | [optional] [default to 0]
**pageSize** | **int** | Size of requested list | [optional] [default to 100]
**filters** | [**\Planfix\Model\ComplexCommentFilter[]**](ComplexCommentFilter.md) |  | [optional]
**fields** | **string** | Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, dateTime, type, fromType, description, additionalDescriptionData, task, project, contact, owner, isDeleted, isPinned, isHidden, isNotRead, recipients, reminders, dataTags, files, changeTaskStartDate, changeTaskExpectDate, changeStatus, sourceObjectId, sourceDataVersion | [optional]
**typeList** | **string** |  | [optional]
**resultOrder** | [**\Planfix\Model\GetContactCommentsRequestResultOrderInner[]**](GetContactCommentsRequestResultOrderInner.md) |  | [optional]
**sourceId** | **string** | Unique identifier of the third-party application or system. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
