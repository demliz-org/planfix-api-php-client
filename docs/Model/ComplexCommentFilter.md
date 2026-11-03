# ComplexCommentFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **float** | Numeric identifier of the comment filter type. |
**operator** | **string** | Filter comparison operator. |
**value** | [**AnyOf**](AnyOf.md) | Filter value. The value format depends on the filter type. |
**field** | **int** | Custom field ID used for custom field filters. For data tag entry filters, this is the data tag field ID; for directory entry filters, this is the directory field ID. | [optional]
**subfilter** | [**\Planfix\Model\ComplexCommentFilterSubfilter**](ComplexCommentFilterSubfilter.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
