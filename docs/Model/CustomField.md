# CustomField

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Custom field id. | [optional]
**name** | **string** | Custom field name. | [optional]
**names** | **array<string,string>** | Localized custom field names by language code. | [optional]
**type** | **int** | Custom field type. The numeric value defines the expected value format. | [optional]
**objectType** | **int** | Object type where the custom field is used. | [optional]
**groupId** | **int** | Custom field group id. | [optional]
**directoryId** | **int** | Directory id for custom fields that use directory entries. | [optional]
**directoryFields** | **int[]** | Directory field ids used by the custom field. | [optional]
**enumValues** | **string[]** | Available values for list-type custom fields. | [optional]
**listValuesColors** | [**array<string,\Planfix\Model\CustomFieldListValuesColorsValue>**](CustomFieldListValuesColorsValue.md) | Text and background colors for each available value. Returned only for custom fields of type List (8) or Set of values (20). Object keys are values from enumValues. | [optional] [readonly]
**mainValue** | **string** | Value used only for main fields. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
