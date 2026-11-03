# CommentUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceId** | **string** | Unique identifier of the third-party application or system. | [optional]
**sourceObjectId** | **string** | Unique identifier of the specific object in the third-party application or system. | [optional]
**sourceDataVersion** | **string** | Version of the object data in the third-party application or system. | [optional]
**description** | **string** | Updated comment text. | [optional]
**isPinned** | **bool** | Whether the comment is pinned. | [optional]
**isHidden** | **bool** | Whether the comment is hidden. | [optional]
**recipients** | [**\Planfix\Model\NotifiedRequest**](NotifiedRequest.md) | Comment notification recipients. Specify employees or contacts in users, existing groups in groups, and roles in roles. | [optional]
**files** | [**\Planfix\Model\FileRequest[]**](FileRequest.md) | Existing Planfix files attached to the comment. Each item must contain an existing file id. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
