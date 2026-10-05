# ChecklistItemCreateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the checklist item. | 
**assignees** | [**AllOfChecklistItemCreateRequestAssignees**](AllOfChecklistItemCreateRequestAssignees.md) | Checklist item assignees. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional] 
**isDone** | **bool** | Mark checklist item as completed (true) or in progress (false). | [optional] 
**parent** | [**AllOfChecklistItemCreateRequestParent**](AllOfChecklistItemCreateRequestParent.md) | Parent checklist item. Specify an existing checklist item by number. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

