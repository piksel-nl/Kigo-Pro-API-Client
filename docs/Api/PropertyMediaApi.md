# Piksel\KigoPro\PropertyMediaApi

All URIs are relative to *https://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proV1ContentPropertiesIdMediasGet**](PropertyMediaApi.md#proV1ContentPropertiesIdMediasGet) | **GET** /pro/v1/content/properties/{id}/medias | 
[**proV1ContentPropertiesIdMediasImagesPost**](PropertyMediaApi.md#proV1ContentPropertiesIdMediasImagesPost) | **POST** /pro/v1/content/properties/{id}/medias/images | 
[**proV1ContentPropertiesIdMediasMediaIdDelete**](PropertyMediaApi.md#proV1ContentPropertiesIdMediasMediaIdDelete) | **DELETE** /pro/v1/content/properties/{id}/medias/{mediaId} | 
[**proV1ContentPropertiesIdMediasMediaIdPut**](PropertyMediaApi.md#proV1ContentPropertiesIdMediasMediaIdPut) | **PUT** /pro/v1/content/properties/{id}/medias/{mediaId} | 
[**proV1ContentPropertiesMediatagsGet**](PropertyMediaApi.md#proV1ContentPropertiesMediatagsGet) | **GET** /pro/v1/content/properties/mediatags | 



## proV1ContentPropertiesIdMediasGet

> \Piksel\KigoPro\Model\GetPropertyMediaVm proV1ContentPropertiesIdMediasGet($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdMediasGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyMediaApi->proV1ContentPropertiesIdMediasGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\KigoPro\Model\GetPropertyMediaVm**](../Model/GetPropertyMediaVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## proV1ContentPropertiesIdMediasImagesPost

> \Piksel\KigoPro\Model\Int32CommandOkEnvelope proV1ContentPropertiesIdMediasImagesPost($id, $post_property_media_command)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$post_property_media_command = new \Piksel\KigoPro\Model\PostPropertyMediaCommand(); // \Piksel\KigoPro\Model\PostPropertyMediaCommand | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdMediasImagesPost($id, $post_property_media_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyMediaApi->proV1ContentPropertiesIdMediasImagesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **post_property_media_command** | [**\Piksel\KigoPro\Model\PostPropertyMediaCommand**](../Model/PostPropertyMediaCommand.md)|  | [optional]

### Return type

[**\Piksel\KigoPro\Model\Int32CommandOkEnvelope**](../Model/Int32CommandOkEnvelope.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## proV1ContentPropertiesIdMediasMediaIdDelete

> \Piksel\KigoPro\Model\BooleanCommandOkEnvelope proV1ContentPropertiesIdMediasMediaIdDelete($id, $media_id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$media_id = 56; // int | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdMediasMediaIdDelete($id, $media_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyMediaApi->proV1ContentPropertiesIdMediasMediaIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **media_id** | **int**|  |

### Return type

[**\Piksel\KigoPro\Model\BooleanCommandOkEnvelope**](../Model/BooleanCommandOkEnvelope.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## proV1ContentPropertiesIdMediasMediaIdPut

> \Piksel\KigoPro\Model\BooleanCommandOkEnvelope proV1ContentPropertiesIdMediasMediaIdPut($id, $media_id, $put_property_media_tags_and_order_command)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$media_id = 56; // int | 
$put_property_media_tags_and_order_command = new \Piksel\KigoPro\Model\PutPropertyMediaTagsAndOrderCommand(); // \Piksel\KigoPro\Model\PutPropertyMediaTagsAndOrderCommand | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdMediasMediaIdPut($id, $media_id, $put_property_media_tags_and_order_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyMediaApi->proV1ContentPropertiesIdMediasMediaIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **media_id** | **int**|  |
 **put_property_media_tags_and_order_command** | [**\Piksel\KigoPro\Model\PutPropertyMediaTagsAndOrderCommand**](../Model/PutPropertyMediaTagsAndOrderCommand.md)|  | [optional]

### Return type

[**\Piksel\KigoPro\Model\BooleanCommandOkEnvelope**](../Model/BooleanCommandOkEnvelope.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## proV1ContentPropertiesMediatagsGet

> \Piksel\KigoPro\Model\GetMediaTagsTagVm[] proV1ContentPropertiesMediatagsGet()



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyMediaApi(
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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Piksel\KigoPro\Model\GetMediaTagsTagVm[]**](../Model/GetMediaTagsTagVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

