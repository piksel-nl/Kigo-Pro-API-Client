# Piksel\Kigo\PropertyMediaApi

All URIs are relative to https://www.kigoapis.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**proV1ContentPropertiesIdMediasGet()**](PropertyMediaApi.md#proV1ContentPropertiesIdMediasGet) | **GET** /pro/v1/content/properties/{id}/medias | 
[**proV1ContentPropertiesIdMediasImagesPost()**](PropertyMediaApi.md#proV1ContentPropertiesIdMediasImagesPost) | **POST** /pro/v1/content/properties/{id}/medias/images | 
[**proV1ContentPropertiesIdMediasMediaIdDelete()**](PropertyMediaApi.md#proV1ContentPropertiesIdMediasMediaIdDelete) | **DELETE** /pro/v1/content/properties/{id}/medias/{mediaId} | 
[**proV1ContentPropertiesIdMediasMediaIdPut()**](PropertyMediaApi.md#proV1ContentPropertiesIdMediasMediaIdPut) | **PUT** /pro/v1/content/properties/{id}/medias/{mediaId} | 
[**proV1ContentPropertiesMediatagsGet()**](PropertyMediaApi.md#proV1ContentPropertiesMediatagsGet) | **GET** /pro/v1/content/properties/mediatags | 


## `proV1ContentPropertiesIdMediasGet()`

```php
proV1ContentPropertiesIdMediasGet($id): \Piksel\Kigo\ChannelsV2\Model\GetPropertyMediaVm
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->proV1ContentPropertiesIdMediasGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyMediaApi->proV1ContentPropertiesIdMediasGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\Kigo\ChannelsV2\Model\GetPropertyMediaVm**](../Model/GetPropertyMediaVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proV1ContentPropertiesIdMediasImagesPost()`

```php
proV1ContentPropertiesIdMediasImagesPost($id, $post_property_media_command): \Piksel\Kigo\ChannelsV2\Model\Int32CommandOkEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$post_property_media_command = new \Piksel\Kigo\ChannelsV2\Model\PostPropertyMediaCommand(); // \Piksel\Kigo\ChannelsV2\Model\PostPropertyMediaCommand

try {
    $result = $apiInstance->proV1ContentPropertiesIdMediasImagesPost($id, $post_property_media_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyMediaApi->proV1ContentPropertiesIdMediasImagesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **post_property_media_command** | [**\Piksel\Kigo\ChannelsV2\Model\PostPropertyMediaCommand**](../Model/PostPropertyMediaCommand.md)|  | [optional]

### Return type

[**\Piksel\Kigo\ChannelsV2\Model\Int32CommandOkEnvelope**](../Model/Int32CommandOkEnvelope.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proV1ContentPropertiesIdMediasMediaIdDelete()`

```php
proV1ContentPropertiesIdMediasMediaIdDelete($id, $media_id): \Piksel\Kigo\ChannelsV2\Model\BooleanCommandOkEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$media_id = 56; // int

try {
    $result = $apiInstance->proV1ContentPropertiesIdMediasMediaIdDelete($id, $media_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyMediaApi->proV1ContentPropertiesIdMediasMediaIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **media_id** | **int**|  |

### Return type

[**\Piksel\Kigo\ChannelsV2\Model\BooleanCommandOkEnvelope**](../Model/BooleanCommandOkEnvelope.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proV1ContentPropertiesIdMediasMediaIdPut()`

```php
proV1ContentPropertiesIdMediasMediaIdPut($id, $media_id, $put_property_media_tags_and_order_command): \Piksel\Kigo\ChannelsV2\Model\BooleanCommandOkEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$media_id = 56; // int
$put_property_media_tags_and_order_command = new \Piksel\Kigo\ChannelsV2\Model\PutPropertyMediaTagsAndOrderCommand(); // \Piksel\Kigo\ChannelsV2\Model\PutPropertyMediaTagsAndOrderCommand

try {
    $result = $apiInstance->proV1ContentPropertiesIdMediasMediaIdPut($id, $media_id, $put_property_media_tags_and_order_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyMediaApi->proV1ContentPropertiesIdMediasMediaIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **media_id** | **int**|  |
 **put_property_media_tags_and_order_command** | [**\Piksel\Kigo\ChannelsV2\Model\PutPropertyMediaTagsAndOrderCommand**](../Model/PutPropertyMediaTagsAndOrderCommand.md)|  | [optional]

### Return type

[**\Piksel\Kigo\ChannelsV2\Model\BooleanCommandOkEnvelope**](../Model/BooleanCommandOkEnvelope.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proV1ContentPropertiesMediatagsGet()`

```php
proV1ContentPropertiesMediatagsGet(): \Piksel\Kigo\ChannelsV2\Model\GetMediaTagsTagVm[]
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->proV1ContentPropertiesMediatagsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyMediaApi->proV1ContentPropertiesMediatagsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Piksel\Kigo\ChannelsV2\Model\GetMediaTagsTagVm[]**](../Model/GetMediaTagsTagVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
