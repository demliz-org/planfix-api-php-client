# Planfix\SystemApi

Operations with system settings

All URIs are relative to https://your-account.planfix.com/rest, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserInfo()**](SystemApi.md#getUserInfo) | **GET** /userinfo | Get information about the authenticated user |
| [**getUserPositions()**](SystemApi.md#getUserPositions) | **GET** /user/positions/ | Get list of employee positions |
| [**getWorkspaces()**](SystemApi.md#getWorkspaces) | **GET** /workspace/list | Get list of workspaces |
| [**postIntegrationTelegramBotWebhook()**](SystemApi.md#postIntegrationTelegramBotWebhook) | **POST** /integration/telegram/bots/{botId}/webhook | Update Telegram bot webhook settings |
| [**postUserPositions()**](SystemApi.md#postUserPositions) | **POST** /user/positions/ | Create employee position |
| [**postUserPositionsId()**](SystemApi.md#postUserPositionsId) | **POST** /user/positions/{id} | Update employee position |


## `getUserInfo()`

```php
getUserInfo(): \Planfix\Model\UserInfoResponse
```

Get information about the authenticated user

Returns the profile associated with the current bearer token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Planfix\Model\UserInfoResponse**](../Model/UserInfoResponse.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserPositions()`

```php
getUserPositions($fields): \Planfix\Model\GetUserPositions200Response
```

Get list of employee positions

This method lets you get a list of employee positions

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fields = id,name; // string | Fields returned - system field names, comma-delimited. <br>*Possible for system fields:* id, name

try {
    $result = $apiInstance->getUserPositions($fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->getUserPositions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fields** | **string**| Fields returned - system field names, comma-delimited. &lt;br&gt;*Possible for system fields:* id, name | [optional] |

### Return type

[**\Planfix\Model\GetUserPositions200Response**](../Model/GetUserPositions200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkspaces()`

```php
getWorkspaces(): \Planfix\Model\GetWorkspaces200Response
```

Get list of workspaces

This method allows you to retrieve a list of available workspaces

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Planfix\Model\GetWorkspaces200Response**](../Model/GetWorkspaces200Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postIntegrationTelegramBotWebhook()`

```php
postIntegrationTelegramBotWebhook($botId, $telegramWebhookSettingsRequest): \Planfix\Model\TelegramWebhookSettingsResponse
```

Update Telegram bot webhook settings

This method lets an account administrator configure the secret token used to verify Telegram webhook updates for a Telegram bot. Use it when the Telegram webhook is managed by an external server and updates are forwarded to Planfix. The secret token is saved in Planfix and is never returned in responses. The REST token must allow access to system settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$botId = 12345; // int | Telegram bot identifier
$telegramWebhookSettingsRequest = {"secretToken":"qB4YuT_IzRRhNTz3y5B0Vzt23y24ddVM","webhookManagedExternally":true}; // \Planfix\Model\TelegramWebhookSettingsRequest

try {
    $result = $apiInstance->postIntegrationTelegramBotWebhook($botId, $telegramWebhookSettingsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->postIntegrationTelegramBotWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **botId** | **int**| Telegram bot identifier | |
| **telegramWebhookSettingsRequest** | [**\Planfix\Model\TelegramWebhookSettingsRequest**](../Model/TelegramWebhookSettingsRequest.md)|  | |

### Return type

[**\Planfix\Model\TelegramWebhookSettingsResponse**](../Model/TelegramWebhookSettingsResponse.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserPositions()`

```php
postUserPositions($idempotencyKey, $postUserPositionsRequest): \Planfix\Model\PostUserPositions201Response
```

Create employee position

This method lets you create a new employee position

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idempotencyKey = 'idempotencyKey_example'; // string | Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000
$postUserPositionsRequest = {"name":"Project Manager"}; // \Planfix\Model\PostUserPositionsRequest

try {
    $result = $apiInstance->postUserPositions($idempotencyKey, $postUserPositionsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->postUserPositions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **idempotencyKey** | **string**| Optional key used to make repeated requests idempotent. Example: 550e8400-e29b-41d4-a716-446655440000 | [optional] |
| **postUserPositionsRequest** | [**\Planfix\Model\PostUserPositionsRequest**](../Model/PostUserPositionsRequest.md)|  | [optional] |

### Return type

[**\Planfix\Model\PostUserPositions201Response**](../Model/PostUserPositions201Response.md)

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postUserPositionsId()`

```php
postUserPositionsId($id, $postUserPositionsIdRequest): object
```

Update employee position

This method lets you update an existing employee position by its identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: rest_auth
$config = Planfix\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Planfix\Api\SystemApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 123; // int | Position identifier
$postUserPositionsIdRequest = {"name":"Senior Project Manager"}; // \Planfix\Model\PostUserPositionsIdRequest

try {
    $result = $apiInstance->postUserPositionsId($id, $postUserPositionsIdRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SystemApi->postUserPositionsId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| Position identifier | |
| **postUserPositionsIdRequest** | [**\Planfix\Model\PostUserPositionsIdRequest**](../Model/PostUserPositionsIdRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[rest_auth](../../README.md#rest_auth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
