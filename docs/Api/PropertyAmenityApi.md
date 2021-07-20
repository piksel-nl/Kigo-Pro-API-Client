# Piksel\Kigo\PropertyAmenityApi

All URIs are relative to https://www.kigoapis.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**proV1ContentPropertiesAmenitiesGet()**](PropertyAmenityApi.md#proV1ContentPropertiesAmenitiesGet) | **GET** /pro/v1/content/properties/amenities | 
[**proV1ContentPropertiesIdAmenitiesGet()**](PropertyAmenityApi.md#proV1ContentPropertiesIdAmenitiesGet) | **GET** /pro/v1/content/properties/{id}/amenities | 
[**proV1ContentPropertiesIdAmenitiesPut()**](PropertyAmenityApi.md#proV1ContentPropertiesIdAmenitiesPut) | **PUT** /pro/v1/content/properties/{id}/amenities | 


## `proV1ContentPropertiesAmenitiesGet()`

```php
proV1ContentPropertiesAmenitiesGet(): \Piksel\Kigo\ChannelsV2\Model\GetAmenitiesMainAmenityVmListResourceList
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyAmenityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->proV1ContentPropertiesAmenitiesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyAmenityApi->proV1ContentPropertiesAmenitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Piksel\Kigo\ChannelsV2\Model\GetAmenitiesMainAmenityVmListResourceList**](../Model/GetAmenitiesMainAmenityVmListResourceList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proV1ContentPropertiesIdAmenitiesGet()`

```php
proV1ContentPropertiesIdAmenitiesGet($id): \Piksel\Kigo\ChannelsV2\Model\GetPropertyAmentiesVm
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyAmenityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->proV1ContentPropertiesIdAmenitiesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyAmenityApi->proV1ContentPropertiesIdAmenitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\Kigo\ChannelsV2\Model\GetPropertyAmentiesVm**](../Model/GetPropertyAmentiesVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proV1ContentPropertiesIdAmenitiesPut()`

```php
proV1ContentPropertiesIdAmenitiesPut($id, $put_property_amenities_command): \Piksel\Kigo\ChannelsV2\Model\BooleanCommandOkEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyAmenityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$put_property_amenities_command = new \Piksel\Kigo\ChannelsV2\Model\PutPropertyAmenitiesCommand(); // \Piksel\Kigo\ChannelsV2\Model\PutPropertyAmenitiesCommand

try {
    $result = $apiInstance->proV1ContentPropertiesIdAmenitiesPut($id, $put_property_amenities_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyAmenityApi->proV1ContentPropertiesIdAmenitiesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **put_property_amenities_command** | [**\Piksel\Kigo\ChannelsV2\Model\PutPropertyAmenitiesCommand**](../Model/PutPropertyAmenitiesCommand.md)|  | [optional]

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
