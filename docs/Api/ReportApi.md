# Planfix\ReportApi

All URIs are relative to *https://your-account.planfix.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkGetReportSaveByRequestId**](ReportApi.md#checkgetreportsavebyrequestid) | **GET** /report/status/{requestId} | Check report status and get saved report by request identifier
[**generateReport**](ReportApi.md#generatereport) | **POST** /report/{id}/generate | Generate report
[**getReportId**](ReportApi.md#getreportid) | **GET** /report/{id} | Get report by identifier
[**getReportList**](ReportApi.md#getreportlist) | **POST** /report/list | Get list of reports
[**getReportSaveData**](ReportApi.md#getreportsavedata) | **POST** /report/{id}/save/{saveId}/data | Get data from saved report
[**getReportSaveList**](ReportApi.md#getreportsavelist) | **POST** /report/{id}/save/list | Get list of saved reports

# **checkGetReportSaveByRequestId**
> \Planfix\Model\InlineResponse20043 checkGetReportSaveByRequestId($requestId)

Check report status and get saved report by request identifier

This method allows you to check the status of a report generation request. If the report is completed, it also returns the saved report data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestId = "requestId_example"; // string | Request identifier

try {
    $result = $apiInstance->checkGetReportSaveByRequestId($requestId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->checkGetReportSaveByRequestId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestId** | **string**| Request identifier |

### Return type

[**\Planfix\Model\InlineResponse20043**](../Model/InlineResponse20043.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateReport**
> \Planfix\Model\InlineResponse2016 generateReport($id, $idempotencyKey)

Generate report

This method lets you generate a report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Report identifier
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->generateReport($id, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->generateReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Report identifier |
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse2016**](../Model/InlineResponse2016.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportId**
> \Planfix\Model\InlineResponse20040 getReportId($id, $fields)

Get report by identifier

This method lets you get a report by its ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Report identifier
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, fields

try {
    $result = $apiInstance->getReportId($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getReportId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Report identifier |
 **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, fields | [optional]

### Return type

[**\Planfix\Model\InlineResponse20040**](../Model/InlineResponse20040.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportList**
> \Planfix\Model\InlineResponse20041 getReportList($body)

Get list of reports

This method lets you get a list of reports

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\ReportListBody(); // \Planfix\Model\ReportListBody | 

try {
    $result = $apiInstance->getReportList($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getReportList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\ReportListBody**](../Model/ReportListBody.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse20041**](../Model/InlineResponse20041.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportSaveData**
> \Planfix\Model\ReportSaveData getReportSaveData($id, $saveId, $chunk)

Get data from saved report

This method lets you get data from a saved report

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Report identifier
$saveId = 789; // int | Saved report identifier
$chunk = 0; // int | Index of chunk from saved report data

try {
    $result = $apiInstance->getReportSaveData($id, $saveId, $chunk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getReportSaveData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Report identifier |
 **saveId** | **int**| Saved report identifier |
 **chunk** | **int**| Index of chunk from saved report data | [optional] [default to 0]

### Return type

[**\Planfix\Model\ReportSaveData**](../Model/ReportSaveData.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportSaveList**
> \Planfix\Model\InlineResponse20042 getReportSaveList($id, $body)

Get list of saved reports

This method lets you get a list of saved reports

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | Report identifier
$body = new \Planfix\Model\SaveListBody(); // \Planfix\Model\SaveListBody | 

try {
    $result = $apiInstance->getReportSaveList($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getReportSaveList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Report identifier |
 **body** | [**\Planfix\Model\SaveListBody**](../Model/SaveListBody.md)|  | [optional]

### Return type

[**\Planfix\Model\InlineResponse20042**](../Model/InlineResponse20042.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

