# Piksel\KigoPro\PropertyHouseRulesApi

All URIs are relative to *https://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**proV1ContentPropertiesIdHouserulesGet**](PropertyHouseRulesApi.md#proV1ContentPropertiesIdHouserulesGet) | **GET** /pro/v1/content/properties/{id}/houserules | 
[**proV1ContentPropertiesIdHouserulesPut**](PropertyHouseRulesApi.md#proV1ContentPropertiesIdHouserulesPut) | **PUT** /pro/v1/content/properties/{id}/houserules | 



## proV1ContentPropertiesIdHouserulesGet

> \Piksel\KigoPro\Model\GetHouseRulesVm proV1ContentPropertiesIdHouserulesGet($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyHouseRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdHouserulesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyHouseRulesApi->proV1ContentPropertiesIdHouserulesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\KigoPro\Model\GetHouseRulesVm**](../Model/GetHouseRulesVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## proV1ContentPropertiesIdHouserulesPut

> \Piksel\KigoPro\Model\BooleanCommandOkEnvelope proV1ContentPropertiesIdHouserulesPut($id, $put_house_rules_command)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyHouseRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 
$put_house_rules_command = new \Piksel\KigoPro\Model\PutHouseRulesCommand(); // \Piksel\KigoPro\Model\PutHouseRulesCommand | 

try {
    $result = $apiInstance->proV1ContentPropertiesIdHouserulesPut($id, $put_house_rules_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyHouseRulesApi->proV1ContentPropertiesIdHouserulesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **put_house_rules_command** | [**\Piksel\KigoPro\Model\PutHouseRulesCommand**](../Model/PutHouseRulesCommand.md)|  | [optional]

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

