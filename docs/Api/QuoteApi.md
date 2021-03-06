# Piksel\KigoPro\QuoteApi

All URIs are relative to *https://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelsV2QuotesPost**](QuoteApi.md#channelsV2QuotesPost) | **POST** /channels/v2/quotes | Generate a quote given a desired QuoteContext
[**channelsV2QuotesQuoteGuidBookPost**](QuoteApi.md#channelsV2QuotesQuoteGuidBookPost) | **POST** /channels/v2/quotes/{quoteGuid}/book | Convert a Quote into a Booking



## channelsV2QuotesPost

> \Piksel\KigoPro\Model\QuoteResource channelsV2QuotesPost($quote_request)

Generate a quote given a desired QuoteContext

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quote_request = new \Piksel\KigoPro\Model\QuoteRequest(); // \Piksel\KigoPro\Model\QuoteRequest | Quote Request

try {
    $result = $apiInstance->channelsV2QuotesPost($quote_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->channelsV2QuotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quote_request** | [**\Piksel\KigoPro\Model\QuoteRequest**](../Model/QuoteRequest.md)| Quote Request | [optional]

### Return type

[**\Piksel\KigoPro\Model\QuoteResource**](../Model/QuoteResource.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## channelsV2QuotesQuoteGuidBookPost

> \Piksel\KigoPro\Model\PostBookingResponse channelsV2QuotesQuoteGuidBookPost($quote_guid, $post_booking_from_quote_request)

Convert a Quote into a Booking

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\QuoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$quote_guid = 'quote_guid_example'; // string | Quote Guid to
$post_booking_from_quote_request = new \Piksel\KigoPro\Model\PostBookingFromQuoteRequest(); // \Piksel\KigoPro\Model\PostBookingFromQuoteRequest | Booking Request (from a pre-existing Quote)

try {
    $result = $apiInstance->channelsV2QuotesQuoteGuidBookPost($quote_guid, $post_booking_from_quote_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuoteApi->channelsV2QuotesQuoteGuidBookPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **quote_guid** | [**string**](../Model/.md)| Quote Guid to |
 **post_booking_from_quote_request** | [**\Piksel\KigoPro\Model\PostBookingFromQuoteRequest**](../Model/PostBookingFromQuoteRequest.md)| Booking Request (from a pre-existing Quote) | [optional]

### Return type

[**\Piksel\KigoPro\Model\PostBookingResponse**](../Model/PostBookingResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

