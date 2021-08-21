# Piksel\KigoPro\PropertyAmenityApi

All URIs are relative to *https://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proV1ContentPropertiesAmenitiesGet**](PropertyAmenityApi.md#proV1ContentPropertiesAmenitiesGet) | **GET** /pro/v1/content/properties/amenities | 
[**proV1ContentPropertiesIdAmenitiesGet**](PropertyAmenityApi.md#proV1ContentPropertiesIdAmenitiesGet) | **GET** /pro/v1/content/properties/{id}/amenities | 
[**proV1ContentPropertiesIdAmenitiesPut**](PropertyAmenityApi.md#proV1ContentPropertiesIdAmenitiesPut) | **PUT** /pro/v1/content/properties/{id}/amenities | 



## proV1ContentPropertiesAmenitiesGet

> \Piksel\KigoPro\Model\GetAmenitiesMainAmenityVmListResourceList proV1ContentPropertiesAmenitiesGet()



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyAmenityApi(
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
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Piksel\KigoPro\Model\GetAmenitiesMainAmenityVmListResourceList**](../Model/GetAmenitiesMainAmenityVmListResourceList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## proV1ContentPropertiesIdAmenitiesGet

> \Piksel\KigoPro\Model\GetPropertyAmentiesVm proV1ContentPropertiesIdAmenitiesGet($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyAmenityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdAmenitiesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyAmenityApi->proV1ContentPropertiesIdAmenitiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\KigoPro\Model\GetPropertyAmentiesVm**](../Model/GetPropertyAmentiesVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## proV1ContentPropertiesIdAmenitiesPut

> \Piksel\KigoPro\Model\BooleanCommandOkEnvelope proV1ContentPropertiesIdAmenitiesPut($id, $put_property_amenities_command)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyAmenityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$put_property_amenities_command = new \Piksel\KigoPro\Model\PutPropertyAmenitiesCommand(); // \Piksel\KigoPro\Model\PutPropertyAmenitiesCommand | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdAmenitiesPut($id, $put_property_amenities_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyAmenityApi->proV1ContentPropertiesIdAmenitiesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **put_property_amenities_command** | [**\Piksel\KigoPro\Model\PutPropertyAmenitiesCommand**](../Model/PutPropertyAmenitiesCommand.md)|  | [optional]

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

