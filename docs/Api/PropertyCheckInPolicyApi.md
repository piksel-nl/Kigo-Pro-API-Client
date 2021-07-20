# Piksel\Kigo\PropertyCheckInPolicyApi

All URIs are relative to https://www.kigoapis.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**proV1ContentPropertiesIdCheckinpolicyGet()**](PropertyCheckInPolicyApi.md#proV1ContentPropertiesIdCheckinpolicyGet) | **GET** /pro/v1/content/properties/{id}/checkinpolicy | 
[**proV1ContentPropertiesIdCheckinpolicyPut()**](PropertyCheckInPolicyApi.md#proV1ContentPropertiesIdCheckinpolicyPut) | **PUT** /pro/v1/content/properties/{id}/checkinpolicy | 


## `proV1ContentPropertiesIdCheckinpolicyGet()`

```php
proV1ContentPropertiesIdCheckinpolicyGet($id): \Piksel\Kigo\ChannelsV2\Model\GetCheckInPolicyVm
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyCheckInPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->proV1ContentPropertiesIdCheckinpolicyGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyCheckInPolicyApi->proV1ContentPropertiesIdCheckinpolicyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\Kigo\ChannelsV2\Model\GetCheckInPolicyVm**](../Model/GetCheckInPolicyVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proV1ContentPropertiesIdCheckinpolicyPut()`

```php
proV1ContentPropertiesIdCheckinpolicyPut($id, $put_check_in_policy_command): \Piksel\Kigo\ChannelsV2\Model\BooleanCommandOkEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\PropertyCheckInPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$put_check_in_policy_command = new \Piksel\Kigo\ChannelsV2\Model\PutCheckInPolicyCommand(); // \Piksel\Kigo\ChannelsV2\Model\PutCheckInPolicyCommand

try {
    $result = $apiInstance->proV1ContentPropertiesIdCheckinpolicyPut($id, $put_check_in_policy_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyCheckInPolicyApi->proV1ContentPropertiesIdCheckinpolicyPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **put_check_in_policy_command** | [**\Piksel\Kigo\ChannelsV2\Model\PutCheckInPolicyCommand**](../Model/PutCheckInPolicyCommand.md)|  | [optional]

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
