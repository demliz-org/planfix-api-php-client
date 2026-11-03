# Planfix\ReportApi

Operations with reports

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**checkGetReportSaveByRequestId()**](ReportApi.md#checkGetReportSaveByRequestId) | **GET** /report/status/{requestId} | Check report status and get saved report by request identifier |
| [**generateReport()**](ReportApi.md#generateReport) | **POST** /report/{id}/generate | Generate report |
| [**getReportId()**](ReportApi.md#getReportId) | **GET** /report/{id} | Get report by identifier |
| [**getReportList()**](ReportApi.md#getReportList) | **POST** /report/list | Get list of reports |
| [**getReportSaveData()**](ReportApi.md#getReportSaveData) | **POST** /report/{id}/save/{saveId}/data | Get data from saved report |
| [**getReportSaveList()**](ReportApi.md#getReportSaveList) | **POST** /report/{id}/save/list | Get list of saved reports |


## `checkGetReportSaveByRequestId()`

```php
checkGetReportSaveByRequestId($requestId): \Planfix\Model\CheckGetReportSaveByRequestId200Response
```

Check report status and get saved report by request identifier

This method allows you to check the status of a report generation request. If the report is completed, it also returns the saved report data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestId = 'requestId_example'; // string | Request identifier

try {
    $result = $apiInstance->checkGetReportSaveByRequestId($requestId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->checkGetReportSaveByRequestId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestId** | **string**| Request identifier | |

### Return type

[**\Planfix\Model\CheckGetReportSaveByRequestId200Response**](../Model/CheckGetReportSaveByRequestId200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateReport()`

```php
generateReport($id, $idempotencyKey): \Planfix\Model\GenerateReport201Response
```

Generate report

This method lets you generate a report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Report identifier
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->generateReport($id, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->generateReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Report identifier | |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |

### Return type

[**\Planfix\Model\GenerateReport201Response**](../Model/GenerateReport201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportId()`

```php
getReportId($id, $fields): \Planfix\Model\GetReportId200Response
```

Get report by identifier

This method lets you get a report by its ID

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Report identifier
$fields = id,name,fields; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name, fields

try {
    $result = $apiInstance->getReportId($id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getReportId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Report identifier | |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name, fields | [optional] |

### Return type

[**\Planfix\Model\GetReportId200Response**](../Model/GetReportId200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportList()`

```php
getReportList($getReportListRequest): \Planfix\Model\GetReportList200Response
```

Get list of reports

This method lets you get a list of reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$getReportListRequest = {"offset":0,"pageSize":100,"fields":"id,name"}; // \Planfix\Model\GetReportListRequest

try {
    $result = $apiInstance->getReportList($getReportListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getReportList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **getReportListRequest** | [**\Planfix\Model\GetReportListRequest**](../Model/GetReportListRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\GetReportList200Response**](../Model/GetReportList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportSaveData()`

```php
getReportSaveData($id, $saveId, $chunk): \Planfix\Model\ReportSaveData
```

Get data from saved report

This method lets you get data from a saved report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Report identifier
$saveId = 56; // int | Saved report identifier
$chunk = 0; // int | Index of chunk from saved report data

try {
    $result = $apiInstance->getReportSaveData($id, $saveId, $chunk);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getReportSaveData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Report identifier | |
| **saveId** | **int**| Saved report identifier | |
| **chunk** | **int**| Index of chunk from saved report data | [optional] [default to 0] |

### Return type

[**\Planfix\Model\ReportSaveData**](../Model/ReportSaveData.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportSaveList()`

```php
getReportSaveList($id, $getReportSaveListRequest): \Planfix\Model\GetReportSaveList200Response
```

Get list of saved reports

This method lets you get a list of saved reports

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Report identifier
$getReportSaveListRequest = {"fields":"id,reportId,dateTime,name,chunks,chunksCount"}; // \Planfix\Model\GetReportSaveListRequest

try {
    $result = $apiInstance->getReportSaveList($id, $getReportSaveListRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->getReportSaveList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Report identifier | |
| **getReportSaveListRequest** | [**\Planfix\Model\GetReportSaveListRequest**](../Model/GetReportSaveListRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\GetReportSaveList200Response**](../Model/GetReportSaveList200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
