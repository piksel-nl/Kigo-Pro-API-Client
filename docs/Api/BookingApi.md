# Piksel\KigoPro\BookingApi

All URIs are relative to *https://www.kigoapis.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**channelsV2BookingsDiffGet**](BookingApi.md#channelsV2BookingsDiffGet) | **GET** /channels/v2/bookings/diff | Get ID and Date Last Updated of all Bookings that were created/modified within the specified date range
[**channelsV2BookingsIdCancelPut**](BookingApi.md#channelsV2BookingsIdCancelPut) | **PUT** /channels/v2/bookings/{id}/cancel | Cancel a Booking
[**channelsV2BookingsIdCreditcardsPost**](BookingApi.md#channelsV2BookingsIdCreditcardsPost) | **POST** /channels/v2/bookings/{id}/creditcards | Save and try to authorize/charge a Credit Card for a Booking
[**channelsV2BookingsIdEventsPost**](BookingApi.md#channelsV2BookingsIdEventsPost) | **POST** /channels/v2/bookings/{id}/events | Create a Booking Event
[**channelsV2BookingsIdGet**](BookingApi.md#channelsV2BookingsIdGet) | **GET** /channels/v2/bookings/{id} | Get a Booking
[**channelsV2BookingsIdPut**](BookingApi.md#channelsV2BookingsIdPut) | **PUT** /channels/v2/bookings/{id} | Update a Booking
[**channelsV2BookingsPost**](BookingApi.md#channelsV2BookingsPost) | **POST** /channels/v2/bookings | Create a new Booking
[**proV1BookingsGet**](BookingApi.md#proV1BookingsGet) | **GET** /pro/v1/bookings | 
[**proV1BookingsIdGet**](BookingApi.md#proV1BookingsIdGet) | **GET** /pro/v1/bookings/{id} | 



## channelsV2BookingsDiffGet

> \Piksel\KigoPro\Model\BookingDiffOutputListResourceList channelsV2BookingsDiffGet($start_date, $channel_connection_id, $end_date)

Get ID and Date Last Updated of all Bookings that were created/modified within the specified date range

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start Date
$channel_connection_id = 56; // int | Channel Connection ID
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End Date

try {
    $result = $apiInstance->channelsV2BookingsDiffGet($start_date, $channel_connection_id, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->channelsV2BookingsDiffGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**| Start Date |
 **channel_connection_id** | **int**| Channel Connection ID | [optional]
 **end_date** | **\DateTime**| End Date | [optional]

### Return type

[**\Piksel\KigoPro\Model\BookingDiffOutputListResourceList**](../Model/BookingDiffOutputListResourceList.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## channelsV2BookingsIdCancelPut

> channelsV2BookingsIdCancelPut($id, $cancelled_by_role, $cancellation_reason)

Cancel a Booking

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Booking ID
$cancelled_by_role = 'cancelled_by_role_example'; // string | User's Role that cancelled the Booking
$cancellation_reason = 'cancellation_reason_example'; // string | Optional Reason for Cancellation

try {
    $apiInstance->channelsV2BookingsIdCancelPut($id, $cancelled_by_role, $cancellation_reason);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->channelsV2BookingsIdCancelPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Booking ID |
 **cancelled_by_role** | **string**| User&#39;s Role that cancelled the Booking | [optional]
 **cancellation_reason** | **string**| Optional Reason for Cancellation | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## channelsV2BookingsIdCreditcardsPost

> \Piksel\KigoPro\Model\PostBookingCreditCardResponse channelsV2BookingsIdCreditcardsPost($id, $credit_card)

Save and try to authorize/charge a Credit Card for a Booking

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of the Booking
$credit_card = new \Piksel\KigoPro\Model\CreditCard(); // \Piksel\KigoPro\Model\CreditCard | Credit Card object

try {
    $result = $apiInstance->channelsV2BookingsIdCreditcardsPost($id, $credit_card);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->channelsV2BookingsIdCreditcardsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the Booking |
 **credit_card** | [**\Piksel\KigoPro\Model\CreditCard**](../Model/CreditCard.md)| Credit Card object | [optional]

### Return type

[**\Piksel\KigoPro\Model\PostBookingCreditCardResponse**](../Model/PostBookingCreditCardResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## channelsV2BookingsIdEventsPost

> channelsV2BookingsIdEventsPost($id, $booking_event)

Create a Booking Event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Booking ID
$booking_event = new \Piksel\KigoPro\Model\BookingEvent(); // \Piksel\KigoPro\Model\BookingEvent | Booking Event

try {
    $apiInstance->channelsV2BookingsIdEventsPost($id, $booking_event);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->channelsV2BookingsIdEventsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Booking ID |
 **booking_event** | [**\Piksel\KigoPro\Model\BookingEvent**](../Model/BookingEvent.md)| Booking Event | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## channelsV2BookingsIdGet

> \Piksel\KigoPro\Model\BookingResource channelsV2BookingsIdGet($id, $options)

Get a Booking

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of the Booking
$options = array('options_example'); // string[] | Booking Options

try {
    $result = $apiInstance->channelsV2BookingsIdGet($id, $options);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->channelsV2BookingsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of the Booking |
 **options** | [**string[]**](../Model/string.md)| Booking Options | [optional]

### Return type

[**\Piksel\KigoPro\Model\BookingResource**](../Model/BookingResource.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## channelsV2BookingsIdPut

> \Piksel\KigoPro\Model\PutBookingResponse channelsV2BookingsIdPut($id, $put_booking_request)

Update a Booking

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | Booking ID
$put_booking_request = new \Piksel\KigoPro\Model\PutBookingRequest(); // \Piksel\KigoPro\Model\PutBookingRequest | Booking object to be updated

try {
    $result = $apiInstance->channelsV2BookingsIdPut($id, $put_booking_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->channelsV2BookingsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Booking ID |
 **put_booking_request** | [**\Piksel\KigoPro\Model\PutBookingRequest**](../Model/PutBookingRequest.md)| Booking object to be updated | [optional]

### Return type

[**\Piksel\KigoPro\Model\PutBookingResponse**](../Model/PutBookingResponse.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: application/json-patch+json, application/json, text/json, application/_*+json
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## channelsV2BookingsPost

> \Piksel\KigoPro\Model\PostBookingResponse channelsV2BookingsPost($post_booking_request)

Create a new Booking

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_booking_request = new \Piksel\KigoPro\Model\PostBookingRequest(); // \Piksel\KigoPro\Model\PostBookingRequest | Booking object

try {
    $result = $apiInstance->channelsV2BookingsPost($post_booking_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->channelsV2BookingsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_booking_request** | [**\Piksel\KigoPro\Model\PostBookingRequest**](../Model/PostBookingRequest.md)| Booking object | [optional]

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


## proV1BookingsGet

> \Piksel\KigoPro\Model\GetBookingVm proV1BookingsGet($start_date, $account_id, $end_date, $property_id, $channel)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$account_id = 56; // int | 
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$property_id = 56; // int | 
$channel = 'channel_example'; // string | 

try {
    $result = $apiInstance->proV1BookingsGet($start_date, $account_id, $end_date, $property_id, $channel);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->proV1BookingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **account_id** | **int**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]
 **property_id** | **int**|  | [optional]
 **channel** | **string**|  | [optional]

### Return type

[**\Piksel\KigoPro\Model\GetBookingVm**](../Model/GetBookingVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## proV1BookingsIdGet

> \Piksel\KigoPro\Model\GetBookingVm proV1BookingsIdGet($id)



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | 

try {
    $result = $apiInstance->proV1BookingsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->proV1BookingsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\KigoPro\Model\GetBookingVm**](../Model/GetBookingVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

