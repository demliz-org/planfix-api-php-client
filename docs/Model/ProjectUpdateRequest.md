# ProjectUpdateRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceObjectId** | **string** | Unique identifier of the specific object in the third-party application or system. | [optional] 
**sourceDataVersion** | **string** | Version of the object data in the third-party application or system. | [optional] 
**name** | **string** | Project name. | [optional] 
**description** | **string** | Project description. | [optional] 
**status** | [**AllOfProjectUpdateRequestStatus**](AllOfProjectUpdateRequestStatus.md) | Project status. Specify an existing project status by id. | [optional] 
**owner** | [**AllOfProjectUpdateRequestOwner**](AllOfProjectUpdateRequestOwner.md) | Project owner. Specify an existing employee by number. | [optional] 
**parent** | [**AllOfProjectUpdateRequestParent**](AllOfProjectUpdateRequestParent.md) | Parent project. Specify an existing project by number. | [optional] 
**template** | [**AllOfProjectUpdateRequestTemplate**](AllOfProjectUpdateRequestTemplate.md) | Project template. Specify an existing project template by number. | [optional] 
**group** | [**AllOfProjectUpdateRequestGroup**](AllOfProjectUpdateRequestGroup.md) | Project group. Specify an existing group by id. | [optional] 
**counterparty** | [**AllOfProjectUpdateRequestCounterparty**](AllOfProjectUpdateRequestCounterparty.md) | Project counterparty. Specify an existing contact/company by number. | [optional] 
**endDate** | [**AllOfProjectUpdateRequestEndDate**](AllOfProjectUpdateRequestEndDate.md) | Project end date as TimePoint. | [optional] 
**hasEndDate** | **bool** | Whether the project has an end date. | [optional] 
**hiddenForEmployees** | **bool** | Whether the project is hidden for employees. | [optional] 
**hiddenForClients** | **bool** | Whether the project is hidden for clients. | [optional] 
**overdue** | **bool** | Whether the project is marked as overdue. | [optional] 
**isCloseToDeadline** | **bool** | Whether the project is close to its deadline. | [optional] 
**assignees** | [**AllOfProjectUpdateRequestAssignees**](AllOfProjectUpdateRequestAssignees.md) | Project assignees. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional] 
**participants** | [**AllOfProjectUpdateRequestParticipants**](AllOfProjectUpdateRequestParticipants.md) | Project participants. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional] 
**auditors** | [**AllOfProjectUpdateRequestAuditors**](AllOfProjectUpdateRequestAuditors.md) | Project auditors. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional] 
**clientManagers** | [**AllOfProjectUpdateRequestClientManagers**](AllOfProjectUpdateRequestClientManagers.md) | Project client managers. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional] 
**isDeleted** | **bool** | Whether the project is deleted. | [optional] 
**customFieldData** | [**\Planfix\Model\CustomFieldValueRequest[]**](CustomFieldValueRequest.md) | Custom field values for the project. Each item contains a custom field id in field.id and its value. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

