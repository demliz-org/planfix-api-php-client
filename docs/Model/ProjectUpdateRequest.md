# ProjectUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceObjectId** | **string** | Unique identifier of the specific object in the third-party application or system. | [optional]
**sourceDataVersion** | **string** | Version of the object data in the third-party application or system. | [optional]
**name** | **string** | Project name. | [optional]
**description** | **string** | Project description. | [optional]
**status** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) | Project status. Specify an existing project status by id. | [optional]
**owner** | [**\Planfix\Model\PersonRequest**](PersonRequest.md) | Project owner. Specify an existing employee by number. | [optional]
**parent** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) | Parent project. Specify an existing project by number. | [optional]
**template** | [**\Planfix\Model\BaseEntity**](BaseEntity.md) | Project template. Specify an existing project template by number. | [optional]
**group** | [**\Planfix\Model\GroupRequest**](GroupRequest.md) | Project group. Specify an existing group by id. | [optional]
**counterparty** | [**\Planfix\Model\PersonRequest**](PersonRequest.md) | Project counterparty. Specify an existing contact/company by number. | [optional]
**endDate** | [**\Planfix\Model\TimePoint**](TimePoint.md) | Project end date as TimePoint. | [optional]
**hasEndDate** | **bool** | Whether the project has an end date. | [optional]
**hiddenForEmployees** | **bool** | Whether the project is hidden for employees. | [optional]
**hiddenForClients** | **bool** | Whether the project is hidden for clients. | [optional]
**overdue** | **bool** | Whether the project is marked as overdue. | [optional]
**isCloseToDeadline** | **bool** | Whether the project is close to its deadline. | [optional]
**assignees** | [**\Planfix\Model\PeopleRequest**](PeopleRequest.md) | Project assignees. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional]
**participants** | [**\Planfix\Model\PeopleRequest**](PeopleRequest.md) | Project participants. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional]
**auditors** | [**\Planfix\Model\PeopleRequest**](PeopleRequest.md) | Project auditors. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional]
**clientManagers** | [**\Planfix\Model\PeopleRequest**](PeopleRequest.md) | Project client managers. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional]
**isDeleted** | **bool** | Whether the project is deleted. | [optional]
**customFieldData** | [**\Planfix\Model\CustomFieldValueRequest[]**](CustomFieldValueRequest.md) | Custom field values for the project. Each item contains a custom field id in field.id and its value. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
