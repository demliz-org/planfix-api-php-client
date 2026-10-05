# ComplexTaskFilter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **float** | Numeric identifier of the task filter type. | 
**operator** | **string** | Filter comparison operator. | 
**value** | [**AnyOfComplexTaskFilterValue**](AnyOfComplexTaskFilterValue.md) | Filter value. The value format depends on the filter type. For filter types 152 and 153, specify a custom field ID or a system field name, for example &#x60;description&#x60;. | 
**field** | **int** | Custom field ID used for custom field filters. For data tag entry filters, this is the data tag field ID; for directory entry filters, this is the directory field ID. | [optional] 
**subfilter** | [**\Planfix\Model\ComplexCommentFilterSubfilter**](ComplexCommentFilterSubfilter.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

