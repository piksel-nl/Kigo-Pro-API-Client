# Piksel\Kigo\PropertyGeneralInformationApi

All URIs are relative to https://www.kigoapis.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**proV1ContentPropertiesIdAddressGet()**](PropertyGeneralInformationApi.md#proV1ContentPropertiesIdAddressGet) | **GET** /pro/v1/content/properties/{id}/address | 
[**proV1ContentPropertiesIdAddressPut()**](PropertyGeneralInformationApi.md#proV1ContentPropertiesIdAddressPut) | **PUT** /pro/v1/content/properties/{id}/address | 
[**proV1ContentPropertiesIdDetailsGet()**](PropertyGeneralInformationApi.md#proV1ContentPropertiesIdDetailsGet) | **GET** /pro/v1/content/properties/{id}/details | 
[**proV1ContentPropertiesIdDetailsPut()**](PropertyGeneralInformationApi.md#proV1ContentPropertiesIdDetailsPut) | **PUT** /pro/v1/content/properties/{id}/details | 


## `proV1ContentPropertiesIdAddressGet()`

```php
proV1ContentPropertiesIdAddressGet($id): \Piksel\Kigo\ChannelsV2\Model\GetPropertyAddressVm
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyGeneralInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->proV1ContentPropertiesIdAddressGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGeneralInformationApi->proV1ContentPropertiesIdAddressGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\Kigo\ChannelsV2\Model\GetPropertyAddressVm**](../Model/GetPropertyAddressVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proV1ContentPropertiesIdAddressPut()`

```php
proV1ContentPropertiesIdAddressPut($id, $put_property_address_command): \Piksel\Kigo\ChannelsV2\Model\BooleanCommandOkEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyGeneralInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$put_property_address_command = new \Piksel\Kigo\ChannelsV2\Model\PutPropertyAddressCommand(); // \Piksel\Kigo\ChannelsV2\Model\PutPropertyAddressCommand

try {
    $result = $apiInstance->proV1ContentPropertiesIdAddressPut($id, $put_property_address_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGeneralInformationApi->proV1ContentPropertiesIdAddressPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **put_property_address_command** | [**\Piksel\Kigo\ChannelsV2\Model\PutPropertyAddressCommand**](../Model/PutPropertyAddressCommand.md)|  | [optional]

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

## `proV1ContentPropertiesIdDetailsGet()`

```php
proV1ContentPropertiesIdDetailsGet($id): \Piksel\Kigo\ChannelsV2\Model\GetPropertyDetailsVm
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyGeneralInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->proV1ContentPropertiesIdDetailsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGeneralInformationApi->proV1ContentPropertiesIdDetailsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\Kigo\ChannelsV2\Model\GetPropertyDetailsVm**](../Model/GetPropertyDetailsVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proV1ContentPropertiesIdDetailsPut()`

```php
proV1ContentPropertiesIdDetailsPut($id, $put_property_details_command): \Piksel\Kigo\ChannelsV2\Model\BooleanCommandOkEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyGeneralInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$put_property_details_command = new \Piksel\Kigo\ChannelsV2\Model\PutPropertyDetailsCommand(); // \Piksel\Kigo\ChannelsV2\Model\PutPropertyDetailsCommand

try {
    $result = $apiInstance->proV1ContentPropertiesIdDetailsPut($id, $put_property_details_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGeneralInformationApi->proV1ContentPropertiesIdDetailsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **put_property_details_command** | [**\Piksel\Kigo\ChannelsV2\Model\PutPropertyDetailsCommand**](../Model/PutPropertyDetailsCommand.md)|  | [optional]

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
