# Piksel\KigoPro\ChannelConnectionApi

All URIs are relative to *https://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelsV2ConnectionsGet**](ChannelConnectionApi.md#channelsV2ConnectionsGet) | **GET** /channels/v2/connections | Get Channel Connection



## channelsV2ConnectionsGet

> \Piksel\KigoPro\Model\ChannelConnectionResource channelsV2ConnectionsGet($options)

Get Channel Connection

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\ChannelConnectionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$options = array('options_example'); // string[] | 

try {
    $result = $apiInstance->channelsV2ConnectionsGet($options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChannelConnectionApi->channelsV2ConnectionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **options** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Piksel\KigoPro\Model\ChannelConnectionResource**](../Model/ChannelConnectionResource.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

