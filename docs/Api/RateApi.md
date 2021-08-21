# Piksel\KigoPro\RateApi

All URIs are relative to *https://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proV1PropertiesIdRatesGet**](RateApi.md#proV1PropertiesIdRatesGet) | **GET** /pro/v1/properties/{id}/rates | 
[**proV1PropertiesIdRatesPost**](RateApi.md#proV1PropertiesIdRatesPost) | **POST** /pro/v1/properties/{id}/rates | 



## proV1PropertiesIdRatesGet

> \Piksel\KigoPro\Model\GetPropertyRateVm[] proV1PropertiesIdRatesGet($id, $start_date, $end_date)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\RateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->proV1PropertiesIdRatesGet($id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RateApi->proV1PropertiesIdRatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

### Return type

[**\Piksel\KigoPro\Model\GetPropertyRateVm[]**](../Model/GetPropertyRateVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## proV1PropertiesIdRatesPost

> \Piksel\KigoPro\Model\BooleanCommandOkEnvelope proV1PropertiesIdRatesPost($id, $set_property_rate_dto)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\RateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$set_property_rate_dto = array(new \Piksel\KigoPro\Model\SetPropertyRateDto()); // \Piksel\KigoPro\Model\SetPropertyRateDto[] | 

try {
    $result = $apiInstance->proV1PropertiesIdRatesPost($id, $set_property_rate_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RateApi->proV1PropertiesIdRatesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **set_property_rate_dto** | [**\Piksel\KigoPro\Model\SetPropertyRateDto[]**](../Model/SetPropertyRateDto.md)|  | [optional]

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

