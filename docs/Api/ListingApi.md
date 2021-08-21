# Piksel\KigoPro\ListingApi

All URIs are relative to https://www.kigoapis.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelsV2ListingsDiffGet()**](ListingApi.md#channelsV2ListingsDiffGet) | **GET** /channels/v2/listings/diff | Get all the Listings where Price, Availability or Content has changed, after a given time
[**channelsV2ListingsGet()**](ListingApi.md#channelsV2ListingsGet) | **GET** /channels/v2/listings | Get all listings associated to a requested channel
[**channelsV2ListingsIdAvailabilityGet()**](ListingApi.md#channelsV2ListingsIdAvailabilityGet) | **GET** /channels/v2/listings/{id}/availability | Get Availability Feed
[**channelsV2ListingsIdCheckavailabilityGet()**](ListingApi.md#channelsV2ListingsIdCheckavailabilityGet) | **GET** /channels/v2/listings/{id}/checkavailability | Check if a Listing is available
[**channelsV2ListingsIdGet()**](ListingApi.md#channelsV2ListingsIdGet) | **GET** /channels/v2/listings/{id} | Get a listing
[**channelsV2ListingsIdLospricingCsvGet()**](ListingApi.md#channelsV2ListingsIdLospricingCsvGet) | **GET** /channels/v2/listings/{id}/lospricing.csv | 
[**channelsV2ListingsIdRatesGet()**](ListingApi.md#channelsV2ListingsIdRatesGet) | **GET** /channels/v2/listings/{id}/rates | Get contract-aware Rates Feed


## `channelsV2ListingsDiffGet()`

```php
channelsV2ListingsDiffGet($modified_after, $options): \Piksel\KigoPro\Model\GetDiffResult
```

Get all the Listings where Price, Availability or Content has changed, after a given time

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$modified_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Last date after which changes took place
$options = array('options_example'); // string[] | Specify if info on Price, Availability or Content changes are desired. If none specified, it will  return all of them

try {
    $result = $apiInstance->channelsV2ListingsDiffGet($modified_after, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->channelsV2ListingsDiffGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **modified_after** | **\DateTime**| Last date after which changes took place |
 **options** | [**string[]**](../Model/string.md)| Specify if info on Price, Availability or Content changes are desired. If none specified, it will  return all of them | [optional]

### Return type

[**\Piksel\KigoPro\Model\GetDiffResult**](../Model/GetDiffResult.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelsV2ListingsGet()`

```php
channelsV2ListingsGet($cc_id): \Piksel\KigoPro\Model\GetListingsResultListResourceList
```

Get all listings associated to a requested channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cc_id = 56; // int | Optional Channel Connection ID

try {
    $result = $apiInstance->channelsV2ListingsGet($cc_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->channelsV2ListingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cc_id** | **int**| Optional Channel Connection ID | [optional]

### Return type

[**\Piksel\KigoPro\Model\GetListingsResultListResourceList**](../Model/GetListingsResultListResourceList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelsV2ListingsIdAvailabilityGet()`

```php
channelsV2ListingsIdAvailabilityGet($id, $start_date, $end_date): \Piksel\KigoPro\Model\AvailabilityResource
```

Get Availability Feed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Listing ID
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start Date
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End Date

try {
    $result = $apiInstance->channelsV2ListingsIdAvailabilityGet($id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->channelsV2ListingsIdAvailabilityGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Listing ID |
 **start_date** | **\DateTime**| Start Date |
 **end_date** | **\DateTime**| End Date |

### Return type

[**\Piksel\KigoPro\Model\AvailabilityResource**](../Model/AvailabilityResource.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelsV2ListingsIdCheckavailabilityGet()`

```php
channelsV2ListingsIdCheckavailabilityGet($id, $check_in_date, $check_out_date, $num_adults, $num_children): \Piksel\KigoPro\Model\CheckAvailabilityOutputResource
```

Check if a Listing is available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$check_in_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Check-In Date
$check_out_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Check-Out Date
$num_adults = 56; // int | Number of Adults
$num_children = 56; // int | Number of Children

try {
    $result = $apiInstance->channelsV2ListingsIdCheckavailabilityGet($id, $check_in_date, $check_out_date, $num_adults, $num_children);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->channelsV2ListingsIdCheckavailabilityGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **check_in_date** | **\DateTime**| Check-In Date |
 **check_out_date** | **\DateTime**| Check-Out Date |
 **num_adults** | **int**| Number of Adults |
 **num_children** | **int**| Number of Children | [optional]

### Return type

[**\Piksel\KigoPro\Model\CheckAvailabilityOutputResource**](../Model/CheckAvailabilityOutputResource.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelsV2ListingsIdGet()`

```php
channelsV2ListingsIdGet($id, $options): \Piksel\KigoPro\Model\ListingResource
```

Get a listing

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Listing ID
$options = array('options_example'); // string[] | Options to return selected Listing Settings. Notice: IncludeRateScheduleNights is for internal use only, please use channels/v2/listings/{id}/rates

try {
    $result = $apiInstance->channelsV2ListingsIdGet($id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->channelsV2ListingsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Listing ID |
 **options** | [**string[]**](../Model/string.md)| Options to return selected Listing Settings. Notice: IncludeRateScheduleNights is for internal use only, please use channels/v2/listings/{id}/rates | [optional]

### Return type

[**\Piksel\KigoPro\Model\ListingResource**](../Model/ListingResource.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelsV2ListingsIdLospricingCsvGet()`

```php
channelsV2ListingsIdLospricingCsvGet($id, $start_date, $end_date, $payment_plan_setting_id, $options)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$payment_plan_setting_id = 'payment_plan_setting_id_example'; // string
$options = array('options_example'); // string[]

try {
    $apiInstance->channelsV2ListingsIdLospricingCsvGet($id, $start_date, $end_date, $payment_plan_setting_id, $options);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->channelsV2ListingsIdLospricingCsvGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **payment_plan_setting_id** | [**string**](../Model/.md)|  | [optional]
 **options** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `channelsV2ListingsIdRatesGet()`

```php
channelsV2ListingsIdRatesGet($id, $start_date, $end_date, $payment_plan_guid): \Piksel\KigoPro\Model\RateScheduleResource
```

Get contract-aware Rates Feed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\ListingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Listing ID
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start Date
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End Date
$payment_plan_guid = 'payment_plan_guid_example'; // string | Payment Plan Guid (optional)

try {
    $result = $apiInstance->channelsV2ListingsIdRatesGet($id, $start_date, $end_date, $payment_plan_guid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListingApi->channelsV2ListingsIdRatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Listing ID |
 **start_date** | **\DateTime**| Start Date |
 **end_date** | **\DateTime**| End Date |
 **payment_plan_guid** | [**string**](../Model/.md)| Payment Plan Guid (optional) | [optional]

### Return type

[**\Piksel\KigoPro\Model\RateScheduleResource**](../Model/RateScheduleResource.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
