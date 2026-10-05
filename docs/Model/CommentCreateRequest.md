# CommentCreateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceId** | **string** | Unique identifier of the third-party application or system. | [optional] 
**sourceObjectId** | **string** | Unique identifier of the specific object in the third-party application or system. | [optional] 
**sourceDataVersion** | **string** | Version of the object data in the third-party application or system. | [optional] 
**dateTime** | [**AllOfCommentCreateRequestDateTime**](AllOfCommentCreateRequestDateTime.md) | Comment date and time as TimePoint. | [optional] 
**description** | **string** | Comment text. | [optional] 
**owner** | [**AllOfCommentCreateRequestOwner**](AllOfCommentCreateRequestOwner.md) | Comment author. Specify an existing employee or contact/company with a prefixed number, for example user:5 or contact:92. | [optional] 
**isPinned** | **bool** | Whether the comment is pinned. | [optional] 
**isHidden** | **bool** | Whether the comment is hidden. | [optional] 
**recipients** | [**AllOfCommentCreateRequestRecipients**](AllOfCommentCreateRequestRecipients.md) | Comment notification recipients. Specify employees or contacts in users, existing groups in groups, and roles in roles. | [optional] 
**files** | [**\Planfix\Model\FileRequest[]**](FileRequest.md) | Existing Planfix files attached to the comment. Each item must contain an existing file id. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

