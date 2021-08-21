# Piksel\KigoPro\PropertyGeneralInformationApi

All URIs are relative to *https://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proV1ContentPropertiesIdAddressGet**](PropertyGeneralInformationApi.md#proV1ContentPropertiesIdAddressGet) | **GET** /pro/v1/content/properties/{id}/address | 
[**proV1ContentPropertiesIdAddressPut**](PropertyGeneralInformationApi.md#proV1ContentPropertiesIdAddressPut) | **PUT** /pro/v1/content/properties/{id}/address | 
[**proV1ContentPropertiesIdDetailsGet**](PropertyGeneralInformationApi.md#proV1ContentPropertiesIdDetailsGet) | **GET** /pro/v1/content/properties/{id}/details | 
[**proV1ContentPropertiesIdDetailsPut**](PropertyGeneralInformationApi.md#proV1ContentPropertiesIdDetailsPut) | **PUT** /pro/v1/content/properties/{id}/details | 



## proV1ContentPropertiesIdAddressGet

> \Piksel\KigoPro\Model\GetPropertyAddressVm proV1ContentPropertiesIdAddressGet($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyGeneralInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdAddressGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGeneralInformationApi->proV1ContentPropertiesIdAddressGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\KigoPro\Model\GetPropertyAddressVm**](../Model/GetPropertyAddressVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## proV1ContentPropertiesIdAddressPut

> \Piksel\KigoPro\Model\BooleanCommandOkEnvelope proV1ContentPropertiesIdAddressPut($id, $put_property_address_command)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyGeneralInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$put_property_address_command = new \Piksel\KigoPro\Model\PutPropertyAddressCommand(); // \Piksel\KigoPro\Model\PutPropertyAddressCommand | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdAddressPut($id, $put_property_address_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGeneralInformationApi->proV1ContentPropertiesIdAddressPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **put_property_address_command** | [**\Piksel\KigoPro\Model\PutPropertyAddressCommand**](../Model/PutPropertyAddressCommand.md)|  | [optional]

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


## proV1ContentPropertiesIdDetailsGet

> \Piksel\KigoPro\Model\GetPropertyDetailsVm proV1ContentPropertiesIdDetailsGet($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyGeneralInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdDetailsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGeneralInformationApi->proV1ContentPropertiesIdDetailsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\KigoPro\Model\GetPropertyDetailsVm**](../Model/GetPropertyDetailsVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## proV1ContentPropertiesIdDetailsPut

> \Piksel\KigoPro\Model\BooleanCommandOkEnvelope proV1ContentPropertiesIdDetailsPut($id, $put_property_details_command)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyGeneralInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$put_property_details_command = new \Piksel\KigoPro\Model\PutPropertyDetailsCommand(); // \Piksel\KigoPro\Model\PutPropertyDetailsCommand | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdDetailsPut($id, $put_property_details_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyGeneralInformationApi->proV1ContentPropertiesIdDetailsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **put_property_details_command** | [**\Piksel\KigoPro\Model\PutPropertyDetailsCommand**](../Model/PutPropertyDetailsCommand.md)|  | [optional]

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

