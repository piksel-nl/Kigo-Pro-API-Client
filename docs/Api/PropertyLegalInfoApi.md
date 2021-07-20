# Piksel\Kigo\PropertyLegalInfoApi

All URIs are relative to https://www.kigoapis.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**proV1ContentPropertiesIdLegalinfoGet()**](PropertyLegalInfoApi.md#proV1ContentPropertiesIdLegalinfoGet) | **GET** /pro/v1/content/properties/{id}/legalinfo | 
[**proV1ContentPropertiesIdLegalinfoPut()**](PropertyLegalInfoApi.md#proV1ContentPropertiesIdLegalinfoPut) | **PUT** /pro/v1/content/properties/{id}/legalinfo | 


## `proV1ContentPropertiesIdLegalinfoGet()`

```php
proV1ContentPropertiesIdLegalinfoGet($id): \Piksel\Kigo\ChannelsV2\Model\GetLegalInfoVm
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyLegalInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->proV1ContentPropertiesIdLegalinfoGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyLegalInfoApi->proV1ContentPropertiesIdLegalinfoGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\Kigo\ChannelsV2\Model\GetLegalInfoVm**](../Model/GetLegalInfoVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proV1ContentPropertiesIdLegalinfoPut()`

```php
proV1ContentPropertiesIdLegalinfoPut($id, $put_legal_info_command): \Piksel\Kigo\ChannelsV2\Model\BooleanCommandOkEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyLegalInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$put_legal_info_command = new \Piksel\Kigo\ChannelsV2\Model\PutLegalInfoCommand(); // \Piksel\Kigo\ChannelsV2\Model\PutLegalInfoCommand

try {
    $result = $apiInstance->proV1ContentPropertiesIdLegalinfoPut($id, $put_legal_info_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyLegalInfoApi->proV1ContentPropertiesIdLegalinfoPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **put_legal_info_command** | [**\Piksel\Kigo\ChannelsV2\Model\PutLegalInfoCommand**](../Model/PutLegalInfoCommand.md)|  | [optional]

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
