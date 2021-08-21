# Piksel\KigoPro\ReferenceDataApi

All URIs are relative to *https://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelsV2AmenitiesGet**](ReferenceDataApi.md#channelsV2AmenitiesGet) | **GET** /channels/v2/amenities | Get supported amenities
[**channelsV2CountriesGet**](ReferenceDataApi.md#channelsV2CountriesGet) | **GET** /channels/v2/countries | Get supported countries
[**channelsV2MediatagsGet**](ReferenceDataApi.md#channelsV2MediatagsGet) | **GET** /channels/v2/mediatags | Get supported tags



## channelsV2AmenitiesGet

> \Piksel\KigoPro\Model\AmenityListResourceList channelsV2AmenitiesGet($options)

Get supported amenities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\ReferenceDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$options = 'options_example'; // string | 

try {
    $result = $apiInstance->channelsV2AmenitiesGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceDataApi->channelsV2AmenitiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options** | **string**|  | [optional]

### Return type

[**\Piksel\KigoPro\Model\AmenityListResourceList**](../Model/AmenityListResourceList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## channelsV2CountriesGet

> \Piksel\KigoPro\Model\CountryListResourceList channelsV2CountriesGet()

Get supported countries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\ReferenceDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->channelsV2CountriesGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceDataApi->channelsV2CountriesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Piksel\KigoPro\Model\CountryListResourceList**](../Model/CountryListResourceList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## channelsV2MediatagsGet

> \Piksel\KigoPro\Model\TagListResourceList channelsV2MediatagsGet()

Get supported tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\ReferenceDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->channelsV2MediatagsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceDataApi->channelsV2MediatagsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Piksel\KigoPro\Model\TagListResourceList**](../Model/TagListResourceList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

