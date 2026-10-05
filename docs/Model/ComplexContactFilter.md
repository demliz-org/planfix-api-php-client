# ComplexContactFilter

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **float** | Numeric identifier of the contact filter. | 
**operator** | **string** | Filter comparison operator. | 
**value** | [**AnyOfComplexContactFilterValue**](AnyOfComplexContactFilterValue.md) | Filter value. The value format depends on the filter type. For filter types 4152 and 4153, specify a custom field ID or a system field name, for example &#x60;phones&#x60;. | 
**field** | **int** | Custom field ID used for custom field filters. For data tag entry filters, this is the data tag field ID; for directory entry filters, this is the directory field ID. | [optional] 
**subfilter** | [**\Planfix\Model\ComplexCommentFilterSubfilter**](ComplexCommentFilterSubfilter.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

