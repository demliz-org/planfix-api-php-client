# ChecklistItemResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Checklist item id. | [optional]
**name** | **string** | Checklist item name. | [optional]
**isDone** | **bool** | Mark checklist item as completed (true) or in progress (false). | [optional]
**parent** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) | Parent checklist item. | [optional]
**dateTime** | [**\Planfix\Model\TimePoint**](TimePoint.md) | Checklist item date and time as TimePoint. | [optional]
**assignees** | [**\Planfix\Model\PeopleResponse**](PeopleResponse.md) | Checklist item assignees. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
