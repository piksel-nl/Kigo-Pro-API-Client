# Piksel\KigoPro\PropertyDescriptionsApi

All URIs are relative to *https://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proV1ContentPropertiesIdDescriptionsGet**](PropertyDescriptionsApi.md#proV1ContentPropertiesIdDescriptionsGet) | **GET** /pro/v1/content/properties/{id}/descriptions | 
[**proV1ContentPropertiesIdDescriptionsPut**](PropertyDescriptionsApi.md#proV1ContentPropertiesIdDescriptionsPut) | **PUT** /pro/v1/content/properties/{id}/descriptions | 



## proV1ContentPropertiesIdDescriptionsGet

> \Piksel\KigoPro\Model\GetPropertyDescriptionsVm proV1ContentPropertiesIdDescriptionsGet($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyDescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdDescriptionsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyDescriptionsApi->proV1ContentPropertiesIdDescriptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\KigoPro\Model\GetPropertyDescriptionsVm**](../Model/GetPropertyDescriptionsVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## proV1ContentPropertiesIdDescriptionsPut

> \Piksel\KigoPro\Model\BooleanCommandOkEnvelope proV1ContentPropertiesIdDescriptionsPut($id, $put_property_descriptions_command)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyDescriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$put_property_descriptions_command = new \Piksel\KigoPro\Model\PutPropertyDescriptionsCommand(); // \Piksel\KigoPro\Model\PutPropertyDescriptionsCommand | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdDescriptionsPut($id, $put_property_descriptions_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyDescriptionsApi->proV1ContentPropertiesIdDescriptionsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **put_property_descriptions_command** | [**\Piksel\KigoPro\Model\PutPropertyDescriptionsCommand**](../Model/PutPropertyDescriptionsCommand.md)|  | [optional]

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

