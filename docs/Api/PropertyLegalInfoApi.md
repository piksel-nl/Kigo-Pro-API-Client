# Piksel\KigoPro\PropertyLegalInfoApi

All URIs are relative to *https://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proV1ContentPropertiesIdLegalinfoGet**](PropertyLegalInfoApi.md#proV1ContentPropertiesIdLegalinfoGet) | **GET** /pro/v1/content/properties/{id}/legalinfo | 
[**proV1ContentPropertiesIdLegalinfoPut**](PropertyLegalInfoApi.md#proV1ContentPropertiesIdLegalinfoPut) | **PUT** /pro/v1/content/properties/{id}/legalinfo | 



## proV1ContentPropertiesIdLegalinfoGet

> \Piksel\KigoPro\Model\GetLegalInfoVm proV1ContentPropertiesIdLegalinfoGet($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyLegalInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdLegalinfoGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyLegalInfoApi->proV1ContentPropertiesIdLegalinfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\KigoPro\Model\GetLegalInfoVm**](../Model/GetLegalInfoVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## proV1ContentPropertiesIdLegalinfoPut

> \Piksel\KigoPro\Model\BooleanCommandOkEnvelope proV1ContentPropertiesIdLegalinfoPut($id, $put_legal_info_command)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyLegalInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$put_legal_info_command = new \Piksel\KigoPro\Model\PutLegalInfoCommand(); // \Piksel\KigoPro\Model\PutLegalInfoCommand | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdLegalinfoPut($id, $put_legal_info_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyLegalInfoApi->proV1ContentPropertiesIdLegalinfoPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **put_legal_info_command** | [**\Piksel\KigoPro\Model\PutLegalInfoCommand**](../Model/PutLegalInfoCommand.md)|  | [optional]

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

