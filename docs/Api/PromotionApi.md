# Piksel\KigoPro\PromotionApi

All URIs are relative to https://www.kigoapis.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelsV2PromotionsAssignmentGet()**](PromotionApi.md#channelsV2PromotionsAssignmentGet) | **GET** /channels/v2/promotions/assignment | Get Promotions with assigned listing ids for active and shared listings on a given channel.


## `channelsV2PromotionsAssignmentGet()`

```php
channelsV2PromotionsAssignmentGet($cc_id): \Piksel\KigoPro\Model\PromotionSettingWithAssociatedListingsListResourceList
```

Get Promotions with assigned listing ids for active and shared listings on a given channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PromotionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cc_id = 56; // int

try {
    $result = $apiInstance->channelsV2PromotionsAssignmentGet($cc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PromotionApi->channelsV2PromotionsAssignmentGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cc_id** | **int**|  | [optional]

### Return type

[**\Piksel\KigoPro\Model\PromotionSettingWithAssociatedListingsListResourceList**](../Model/PromotionSettingWithAssociatedListingsListResourceList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
