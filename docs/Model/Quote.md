# # Quote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**guid** | **string** | Guid used for referencing the Quote in the call for book | [optional]
**success** | **bool** | If the Quote is valid | [optional]
**error_message** | **string** | Error Message | [optional]
**error_code** | **string** | Error Code | [optional]
**currency** | **string** | Currency | [optional]
**accepted_payment_methods** | **string[]** |  | [optional]
**valid_until** | [**\DateTime**](\DateTime.md) | Last date the Quote may be converted to a Booking | [optional]
**plans** | [**\Piksel\Kigo\ChannelsV2\Model\QuotePlan[]**](QuotePlan.md) |  | [optional]
**payment_gateway** | [**\Piksel\Kigo\ChannelsV2\Model\PaymentGateway**](PaymentGateway.md) |  | [optional]
**listing_id** | **int** | Listing ID | [optional]
**check_in_date** | [**\DateTime**](\DateTime.md) | Check-In Date | [optional]
**check_out_date** | [**\DateTime**](\DateTime.md) | Check-Out Date | [optional]
**num_adults** | **int** | Number of Adults | [optional]
**num_children** | **int** | Number of Children | [optional]
**booked_on_date** | [**\DateTime**](\DateTime.md) | Booking Date (optional, UTC) | [optional]
**requested_optional_fees** | [**\Piksel\Kigo\ChannelsV2\Model\OptionalFee[]**](OptionalFee.md) | Guid(s) of the optional fee(s) that you want to consider in the quote | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
