# # PostBookingResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_type** | **string** | Error Type | [optional]
**booking_error** | **string** | Booking Error Code | [optional]
**setup_error** | **string** | Setup Error Code | [optional]
**constraint_error** | **string** | Constraint Error Code | [optional]
**quote_error** | **string** | Quote Error Code | [optional]
**error_message** | **string** | Error Message | [optional]
**payment_plan_guid** | **string** | Payment Plan Guid | [optional]
**zero_dollar_authorization_status** | **string** | Card Authorization Status | [optional]
**zero_dollar_authorization_response** | [**\Piksel\Kigo\ChannelsV2\Model\CreditCardAuthorizationResponse**](CreditCardAuthorizationResponse.md) |  | [optional]
**advance_payment_status** | **string** | Advance Payment Status | [optional]
**advance_payment_response** | [**\Piksel\Kigo\ChannelsV2\Model\CreditCardAuthorizationResponse**](CreditCardAuthorizationResponse.md) |  | [optional]
**value** | [**\Piksel\Kigo\ChannelsV2\Model\Booking**](Booking.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)