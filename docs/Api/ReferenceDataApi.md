# Piksel\Kigo\ReferenceDataApi

All URIs are relative to https://www.kigoapis.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelsV2AmenitiesGet()**](ReferenceDataApi.md#channelsV2AmenitiesGet) | **GET** /channels/v2/amenities | Get supported amenities
[**channelsV2CountriesGet()**](ReferenceDataApi.md#channelsV2CountriesGet) | **GET** /channels/v2/countries | Get supported countries
[**channelsV2MediatagsGet()**](ReferenceDataApi.md#channelsV2MediatagsGet) | **GET** /channels/v2/mediatags | Get supported tags


## `channelsV2AmenitiesGet()`

```php
channelsV2AmenitiesGet($options): \Piksel\Kigo\ChannelsV2\Model\AmenityListResourceList
```

Get supported amenities

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\ReferenceDataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$options = 'options_example'; // string

try {
    $result = $apiInstance->channelsV2AmenitiesGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReferenceDataApi->channelsV2AmenitiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options** | **string**|  | [optional]

### Return type

[**\Piksel\Kigo\ChannelsV2\Model\AmenityListResourceList**](../Model/AmenityListResourceList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelsV2CountriesGet()`

```php
channelsV2CountriesGet(): \Piksel\Kigo\ChannelsV2\Model\CountryListResourceList
```

Get supported countries

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\ReferenceDataApi(
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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Piksel\Kigo\ChannelsV2\Model\CountryListResourceList**](../Model/CountryListResourceList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelsV2MediatagsGet()`

```php
channelsV2MediatagsGet(): \Piksel\Kigo\ChannelsV2\Model\TagListResourceList
```

Get supported tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\ReferenceDataApi(
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
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Piksel\Kigo\ChannelsV2\Model\TagListResourceList**](../Model/TagListResourceList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
