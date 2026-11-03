# ProjectResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Project number. | [optional]
**sourceObjectId** | **string** | Unique identifier of the specific object in the third-party application or system. | [optional]
**sourceDataVersion** | **string** | Version of the object data in the third-party application or system. | [optional]
**name** | **string** | Project name. | [optional]
**description** | **string** | Project description. | [optional]
**status** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) | Project status. | [optional]
**owner** | [**\Planfix\Model\PersonResponse**](PersonResponse.md) | Project owner. | [optional]
**parent** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) | Parent project. | [optional]
**template** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) | Project template. | [optional]
**group** | [**\Planfix\Model\GroupResponse**](GroupResponse.md) | Project group. | [optional]
**counterparty** | [**\Planfix\Model\PersonResponse**](PersonResponse.md) | Project counterparty contact/company. | [optional]
**startDate** | [**\Planfix\Model\TimePoint**](TimePoint.md) | Project start date as TimePoint. | [optional]
**endDate** | [**\Planfix\Model\TimePoint**](TimePoint.md) | Project end date as TimePoint. | [optional]
**hasEndDate** | **bool** | Whether the project has an end date. | [optional]
**hiddenForEmployees** | **bool** | Whether the project is hidden for employees. | [optional]
**hiddenForClients** | **bool** | Whether the project is hidden for clients. | [optional]
**overdue** | **bool** | Whether the project is overdue. | [optional]
**isCloseToDeadline** | **bool** | Whether the project is close to its deadline. | [optional]
**assignees** | [**\Planfix\Model\PeopleResponse**](PeopleResponse.md) | Project assignees. | [optional]
**participants** | [**\Planfix\Model\PeopleResponse**](PeopleResponse.md) | Project participants. | [optional]
**auditors** | [**\Planfix\Model\PeopleResponse**](PeopleResponse.md) | Project auditors. | [optional]
**clientManagers** | [**\Planfix\Model\PeopleResponse**](PeopleResponse.md) | Project client managers. | [optional]
**isDeleted** | **bool** | Whether the project is deleted. | [optional]
**customFieldData** | [**\Planfix\Model\CustomFieldValueResponse[]**](CustomFieldValueResponse.md) | Custom field values of the project. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
