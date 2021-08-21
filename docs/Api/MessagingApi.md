# Piksel\KigoPro\MessagingApi

All URIs are relative to https://www.kigoapis.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelsV2MessagingMessagesGet()**](MessagingApi.md#channelsV2MessagingMessagesGet) | **GET** /channels/v2/messaging/messages | Get Messages
[**channelsV2MessagingThreadsPost()**](MessagingApi.md#channelsV2MessagingThreadsPost) | **POST** /channels/v2/messaging/threads | Create a new Thread
[**channelsV2MessagingThreadsTidMessagesIdPut()**](MessagingApi.md#channelsV2MessagingThreadsTidMessagesIdPut) | **PUT** /channels/v2/messaging/threads/{tid}/messages/{id} | Update a Message
[**channelsV2MessagingThreadsTidMessagesPost()**](MessagingApi.md#channelsV2MessagingThreadsTidMessagesPost) | **POST** /channels/v2/messaging/threads/{tid}/messages | Create a new Message
[**channelsV2MessagingThreadsTidPut()**](MessagingApi.md#channelsV2MessagingThreadsTidPut) | **PUT** /channels/v2/messaging/threads/{tid} | Update a Thread


## `channelsV2MessagingMessagesGet()`

```php
channelsV2MessagingMessagesGet(): \Piksel\KigoPro\Model\GetUserMessageResponseResource
```

Get Messages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->channelsV2MessagingMessagesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->channelsV2MessagingMessagesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Piksel\KigoPro\Model\GetUserMessageResponseResource**](../Model/GetUserMessageResponseResource.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelsV2MessagingThreadsPost()`

```php
channelsV2MessagingThreadsPost($post_thread_request): \Piksel\KigoPro\Model\PostThreadResponseResource
```

Create a new Thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_thread_request = new \Piksel\KigoPro\Model\PostThreadRequest(); // \Piksel\KigoPro\Model\PostThreadRequest | Thread object

try {
    $result = $apiInstance->channelsV2MessagingThreadsPost($post_thread_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->channelsV2MessagingThreadsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_thread_request** | [**\Piksel\KigoPro\Model\PostThreadRequest**](../Model/PostThreadRequest.md)| Thread object | [optional]

### Return type

[**\Piksel\KigoPro\Model\PostThreadResponseResource**](../Model/PostThreadResponseResource.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelsV2MessagingThreadsTidMessagesIdPut()`

```php
channelsV2MessagingThreadsTidMessagesIdPut($tid, $id, $put_user_message_request): \Piksel\KigoPro\Model\PutUserMessageResponseResource
```

Update a Message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tid = 56; // int | Thread ID
$id = 56; // int | Message ID
$put_user_message_request = new \Piksel\KigoPro\Model\PutUserMessageRequest(); // \Piksel\KigoPro\Model\PutUserMessageRequest | Message object

try {
    $result = $apiInstance->channelsV2MessagingThreadsTidMessagesIdPut($tid, $id, $put_user_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->channelsV2MessagingThreadsTidMessagesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tid** | **int**| Thread ID |
 **id** | **int**| Message ID |
 **put_user_message_request** | [**\Piksel\KigoPro\Model\PutUserMessageRequest**](../Model/PutUserMessageRequest.md)| Message object | [optional]

### Return type

[**\Piksel\KigoPro\Model\PutUserMessageResponseResource**](../Model/PutUserMessageResponseResource.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelsV2MessagingThreadsTidMessagesPost()`

```php
channelsV2MessagingThreadsTidMessagesPost($tid, $post_user_message_request): \Piksel\KigoPro\Model\PostUserMessageResponseResource
```

Create a new Message

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tid = 56; // int | Thread ID
$post_user_message_request = new \Piksel\KigoPro\Model\PostUserMessageRequest(); // \Piksel\KigoPro\Model\PostUserMessageRequest | Message object

try {
    $result = $apiInstance->channelsV2MessagingThreadsTidMessagesPost($tid, $post_user_message_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->channelsV2MessagingThreadsTidMessagesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tid** | **int**| Thread ID |
 **post_user_message_request** | [**\Piksel\KigoPro\Model\PostUserMessageRequest**](../Model/PostUserMessageRequest.md)| Message object | [optional]

### Return type

[**\Piksel\KigoPro\Model\PostUserMessageResponseResource**](../Model/PostUserMessageResponseResource.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelsV2MessagingThreadsTidPut()`

```php
channelsV2MessagingThreadsTidPut($tid, $post_thread_request): \Piksel\KigoPro\Model\PostThreadResponseResource
```

Update a Thread

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\MessagingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tid = 56; // int | Thread object
$post_thread_request = new \Piksel\KigoPro\Model\PostThreadRequest(); // \Piksel\KigoPro\Model\PostThreadRequest | Thread object

try {
    $result = $apiInstance->channelsV2MessagingThreadsTidPut($tid, $post_thread_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagingApi->channelsV2MessagingThreadsTidPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tid** | **int**| Thread object |
 **post_thread_request** | [**\Piksel\KigoPro\Model\PostThreadRequest**](../Model/PostThreadRequest.md)| Thread object | [optional]

### Return type

[**\Piksel\KigoPro\Model\PostThreadResponseResource**](../Model/PostThreadResponseResource.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
