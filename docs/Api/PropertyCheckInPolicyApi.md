# Piksel\KigoPro\PropertyCheckInPolicyApi

All URIs are relative to *https://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proV1ContentPropertiesIdCheckinpolicyGet**](PropertyCheckInPolicyApi.md#proV1ContentPropertiesIdCheckinpolicyGet) | **GET** /pro/v1/content/properties/{id}/checkinpolicy | 
[**proV1ContentPropertiesIdCheckinpolicyPut**](PropertyCheckInPolicyApi.md#proV1ContentPropertiesIdCheckinpolicyPut) | **PUT** /pro/v1/content/properties/{id}/checkinpolicy | 



## proV1ContentPropertiesIdCheckinpolicyGet

> \Piksel\KigoPro\Model\GetCheckInPolicyVm proV1ContentPropertiesIdCheckinpolicyGet($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyCheckInPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdCheckinpolicyGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyCheckInPolicyApi->proV1ContentPropertiesIdCheckinpolicyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\KigoPro\Model\GetCheckInPolicyVm**](../Model/GetCheckInPolicyVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## proV1ContentPropertiesIdCheckinpolicyPut

> \Piksel\KigoPro\Model\BooleanCommandOkEnvelope proV1ContentPropertiesIdCheckinpolicyPut($id, $put_check_in_policy_command)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyCheckInPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$put_check_in_policy_command = new \Piksel\KigoPro\Model\PutCheckInPolicyCommand(); // \Piksel\KigoPro\Model\PutCheckInPolicyCommand | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdCheckinpolicyPut($id, $put_check_in_policy_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyCheckInPolicyApi->proV1ContentPropertiesIdCheckinpolicyPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **put_check_in_policy_command** | [**\Piksel\KigoPro\Model\PutCheckInPolicyCommand**](../Model/PutCheckInPolicyCommand.md)|  | [optional]

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

