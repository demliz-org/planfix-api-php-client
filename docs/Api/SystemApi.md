# Planfix\SystemApi

All URIs are relative to *https://your-account.planfix.com/rest*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getUserInfo**](SystemApi.md#getuserinfo) | **GET** /userinfo | Get information about the authenticated user
[**getUserPositions**](SystemApi.md#getuserpositions) | **GET** /user/positions/ | Get list of employee positions
[**getWorkspaces**](SystemApi.md#getworkspaces) | **GET** /workspace/list | Get list of workspaces
[**postIntegrationTelegramBotWebhook**](SystemApi.md#postintegrationtelegrambotwebhook) | **POST** /integration/telegram/bots/{botId}/webhook | Update Telegram bot webhook settings
[**postUserPositions**](SystemApi.md#postuserpositions) | **POST** /user/positions/ | Create employee position
[**postUserPositionsId**](SystemApi.md#postuserpositionsid) | **POST** /user/positions/{id} | Update employee position

# **getUserInfo**
> \Planfix\Model\UserInfoResponse getUserInfo()

Get information about the authenticated user

Returns the profile associated with the current bearer token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getUserInfo();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getUserInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Planfix\Model\UserInfoResponse**](../Model/UserInfoResponse.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserPositions**
> \Planfix\Model\InlineResponse20045 getUserPositions($fields)

Get list of employee positions

This method lets you get a list of employee positions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = "fields_example"; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name

try {
    $result = $apiInstance->getUserPositions($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getUserPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name | [optional]

### Return type

[**\Planfix\Model\InlineResponse20045**](../Model/InlineResponse20045.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkspaces**
> \Planfix\Model\InlineResponse20044 getWorkspaces()

Get list of workspaces

This method allows you to retrieve a list of available workspaces

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorkspaces();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getWorkspaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Planfix\Model\InlineResponse20044**](../Model/InlineResponse20044.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postIntegrationTelegramBotWebhook**
> \Planfix\Model\TelegramWebhookSettingsResponse postIntegrationTelegramBotWebhook($body, $botId)

Update Telegram bot webhook settings

This method lets an account administrator configure the secret token used to verify Telegram webhook updates for a Telegram bot. Use it when the Telegram webhook is managed by an external server and updates are forwarded to Planfix. The secret token is saved in Planfix and is never returned in responses. The REST token must allow access to system settings.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\TelegramWebhookSettingsRequest(); // \Planfix\Model\TelegramWebhookSettingsRequest | 
$botId = 789; // int | Telegram bot identifier

try {
    $result = $apiInstance->postIntegrationTelegramBotWebhook($body, $botId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->postIntegrationTelegramBotWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\TelegramWebhookSettingsRequest**](../Model/TelegramWebhookSettingsRequest.md)|  |
 **botId** | **int**| Telegram bot identifier |

### Return type

[**\Planfix\Model\TelegramWebhookSettingsResponse**](../Model/TelegramWebhookSettingsResponse.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserPositions**
> \Planfix\Model\InlineResponse2017 postUserPositions($body, $idempotencyKey)

Create employee position

This method lets you create a new employee position

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Planfix\Model\UserPositionsBody(); // \Planfix\Model\UserPositionsBody | 
$idempotencyKey = "idempotencyKey_example"; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000

try {
    $result = $apiInstance->postUserPositions($body, $idempotencyKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->postUserPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Planfix\Model\UserPositionsBody**](../Model/UserPositionsBody.md)|  | [optional]
 **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional]

### Return type

[**\Planfix\Model\InlineResponse2017**](../Model/InlineResponse2017.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postUserPositionsId**
> object postUserPositionsId($id, $body)

Update employee position

This method lets you update an existing employee position by its identifier

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: rest_auth
    $config = Planfix\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Position identifier
$body = new \Planfix\Model\PositionsIdBody(); // \Planfix\Model\PositionsIdBody | 

try {
    $result = $apiInstance->postUserPositionsId($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->postUserPositionsId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Position identifier |
 **body** | [**\Planfix\Model\PositionsIdBody**](../Model/PositionsIdBody.md)|  | [optional]

### Return type

**object**

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

