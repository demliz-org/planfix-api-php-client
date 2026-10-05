# EntryListBody1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**offset** | **int** | Offset from beginning of list | [optional] [default to 0]
**pageSize** | **int** | Size of requested list | [optional] [default to 100]
**fields** | **string** | Fields returned - names, comma-delimited | [optional] 
**groupId** | **int** | Group identifier | [optional] 
**groupsOnly** | **bool** | If true, only groups are returned | [optional] 
**entriesOnly** | **bool** | If true, only entries (excluding groups) are returned | [optional] 
**filterId** | **string** | Id for directory entries filter, get list by method &#x27;/directory/{id}/filters&#x27; | [optional] 
**filters** | [**\Planfix\Model\ComplexDirectoryFilter[]**](ComplexDirectoryFilter.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

