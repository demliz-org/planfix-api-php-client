# CommentResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Comment id. | [optional] 
**sourceObjectId** | **string** | Unique identifier of the specific object in the third-party application or system. | [optional] 
**sourceDataVersion** | **string** | Version of the object data in the third-party application or system. | [optional] 
**dateTime** | [**AllOfCommentResponseDateTime**](AllOfCommentResponseDateTime.md) | Comment date and time as TimePoint. | [optional] 
**type** | **string** | Comment record type. Values are Comment, Reminder, or None. | [optional] 
**fromType** | **string** | Source channel of the comment. | [optional] 
**description** | **string** | Comment text. | [optional] 
**additionalDescriptionData** | **string** | Additional comment description data. | [optional] 
**task** | [**AllOfCommentResponseTask**](AllOfCommentResponseTask.md) | Task linked to the comment. Contains the task number. | [optional] 
**project** | [**AllOfCommentResponseProject**](AllOfCommentResponseProject.md) | Project linked to the comment. Contains the project number. | [optional] 
**contact** | [**AllOfCommentResponseContact**](AllOfCommentResponseContact.md) | Contact/company linked to the comment. | [optional] 
**owner** | [**AllOfCommentResponseOwner**](AllOfCommentResponseOwner.md) | Comment author. | [optional] 
**isDeleted** | **bool** | Whether the comment is deleted. | [optional] 
**isPinned** | **bool** | Whether the comment is pinned. | [optional] 
**isHidden** | **bool** | Whether the comment is hidden. | [optional] 
**isNotRead** | **bool** | Whether the comment is unread for the current user. | [optional] 
**recipients** | [**AllOfCommentResponseRecipients**](AllOfCommentResponseRecipients.md) | Comment notification recipients. | [optional] 
**reminders** | [**\Planfix\Model\Reminder[]**](Reminder.md) | Reminders linked to the comment. | [optional] 
**dataTags** | [**\Planfix\Model\ContactResponseDataTags[]**](ContactResponseDataTags.md) | Data tag entries added to the comment. | [optional] 
**files** | [**\Planfix\Model\FileResponse[]**](FileResponse.md) | Planfix files attached to the comment. | [optional] 
**changeTaskStartDate** | [**AllOfCommentResponseChangeTaskStartDate**](AllOfCommentResponseChangeTaskStartDate.md) | Task start date change recorded by the comment as ChangeDate. | [optional] 
**changeTaskExpectDate** | [**AllOfCommentResponseChangeTaskExpectDate**](AllOfCommentResponseChangeTaskExpectDate.md) | Task due date change recorded by the comment as ChangeDate. | [optional] 
**changeStatus** | [**\Planfix\Model\CommentResponseChangeStatus**](CommentResponseChangeStatus.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

