# NotifiedRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**users** | [**\Planfix\Model\PersonRequest[]**](PersonRequest.md) | Employees or contacts to notify. Each item must use a prefixed number, for example user:5 or contact:92. | [optional] 
**groups** | [**\Planfix\Model\GroupRequest[]**](GroupRequest.md) | Groups to notify. Each item must contain an existing group id. | [optional] 
**roles** | **string[]** | Recipient roles to notify. Values are assignee, participant, auditor, or assigner. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

