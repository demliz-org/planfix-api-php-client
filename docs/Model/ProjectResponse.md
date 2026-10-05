# ProjectResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Project number. | [optional] 
**sourceObjectId** | **string** | Unique identifier of the specific object in the third-party application or system. | [optional] 
**sourceDataVersion** | **string** | Version of the object data in the third-party application or system. | [optional] 
**name** | **string** | Project name. | [optional] 
**description** | **string** | Project description. | [optional] 
**status** | [**AllOfProjectResponseStatus**](AllOfProjectResponseStatus.md) | Project status. | [optional] 
**owner** | [**AllOfProjectResponseOwner**](AllOfProjectResponseOwner.md) | Project owner. | [optional] 
**parent** | [**AllOfProjectResponseParent**](AllOfProjectResponseParent.md) | Parent project. | [optional] 
**template** | [**AllOfProjectResponseTemplate**](AllOfProjectResponseTemplate.md) | Project template. | [optional] 
**group** | [**AllOfProjectResponseGroup**](AllOfProjectResponseGroup.md) | Project group. | [optional] 
**counterparty** | [**AllOfProjectResponseCounterparty**](AllOfProjectResponseCounterparty.md) | Project counterparty contact/company. | [optional] 
**startDate** | [**AllOfProjectResponseStartDate**](AllOfProjectResponseStartDate.md) | Project start date as TimePoint. | [optional] 
**endDate** | [**AllOfProjectResponseEndDate**](AllOfProjectResponseEndDate.md) | Project end date as TimePoint. | [optional] 
**hasEndDate** | **bool** | Whether the project has an end date. | [optional] 
**hiddenForEmployees** | **bool** | Whether the project is hidden for employees. | [optional] 
**hiddenForClients** | **bool** | Whether the project is hidden for clients. | [optional] 
**overdue** | **bool** | Whether the project is overdue. | [optional] 
**isCloseToDeadline** | **bool** | Whether the project is close to its deadline. | [optional] 
**assignees** | [**AllOfProjectResponseAssignees**](AllOfProjectResponseAssignees.md) | Project assignees. | [optional] 
**participants** | [**AllOfProjectResponseParticipants**](AllOfProjectResponseParticipants.md) | Project participants. | [optional] 
**auditors** | [**AllOfProjectResponseAuditors**](AllOfProjectResponseAuditors.md) | Project auditors. | [optional] 
**clientManagers** | [**AllOfProjectResponseClientManagers**](AllOfProjectResponseClientManagers.md) | Project client managers. | [optional] 
**isDeleted** | **bool** | Whether the project is deleted. | [optional] 
**customFieldData** | [**\Planfix\Model\CustomFieldValueResponse[]**](CustomFieldValueResponse.md) | Custom field values of the project. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

