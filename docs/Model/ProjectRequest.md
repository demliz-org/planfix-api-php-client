# ProjectRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceObjectId** | **string** | Unique identifier of the specific object in the third-party application or system. | [optional] 
**sourceDataVersion** | **string** | Version of the object data in the third-party application or system. | [optional] 
**name** | **string** | Project name. | [optional] 
**description** | **string** | Project description. | [optional] 
**status** | [**AllOfProjectRequestStatus**](AllOfProjectRequestStatus.md) | Project status. Specify an existing project status by id. | [optional] 
**owner** | [**AllOfProjectRequestOwner**](AllOfProjectRequestOwner.md) | Project owner. Specify an existing employee by number. | [optional] 
**parent** | [**AllOfProjectRequestParent**](AllOfProjectRequestParent.md) | Parent project. Specify an existing project by number. | [optional] 
**template** | [**AllOfProjectRequestTemplate**](AllOfProjectRequestTemplate.md) | Project template. Specify an existing project template by number. | [optional] 
**group** | [**AllOfProjectRequestGroup**](AllOfProjectRequestGroup.md) | Project group. Specify an existing group by id. | [optional] 
**counterparty** | [**AllOfProjectRequestCounterparty**](AllOfProjectRequestCounterparty.md) | Project counterparty. Specify an existing contact/company by number. | [optional] 
**startDate** | [**AllOfProjectRequestStartDate**](AllOfProjectRequestStartDate.md) | Project start date as TimePoint. | [optional] 
**endDate** | [**AllOfProjectRequestEndDate**](AllOfProjectRequestEndDate.md) | Project end date as TimePoint. | [optional] 
**hiddenForEmployees** | **bool** | Whether the project is hidden for employees. | [optional] 
**hiddenForClients** | **bool** | Whether the project is hidden for clients. | [optional] 
**overdue** | **bool** | Whether the project is marked as overdue. | [optional] 
**isCloseToDeadline** | **bool** | Whether the project is close to its deadline. | [optional] 
**assignees** | [**AllOfProjectRequestAssignees**](AllOfProjectRequestAssignees.md) | Project assignees. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional] 
**participants** | [**AllOfProjectRequestParticipants**](AllOfProjectRequestParticipants.md) | Project participants. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional] 
**auditors** | [**AllOfProjectRequestAuditors**](AllOfProjectRequestAuditors.md) | Project auditors. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional] 
**clientManagers** | [**AllOfProjectRequestClientManagers**](AllOfProjectRequestClientManagers.md) | Project client managers. Specify employees or contacts in users and groups in groups. Employee/contact identifiers must be prefixed, for example user:5 or contact:92. | [optional] 
**isDeleted** | **bool** | Whether the project is deleted. | [optional] 
**customFieldData** | [**\Planfix\Model\CustomFieldValueRequest[]**](CustomFieldValueRequest.md) | Custom field values for the project. Each item contains a custom field id in field.id and its value. | [optional] 
**files** | [**\Planfix\Model\FileRequest[]**](FileRequest.md) | Existing Planfix files attached to the project. Each item must contain an existing file id. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

