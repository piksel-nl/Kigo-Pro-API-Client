# # PostBookingFromQuoteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**listing_id** | **int** | Listing ID |
**payment_plan_guid** | **string** | Payment Plan Guid |
**renter** | [**\Piksel\Kigo\ChannelsV2\Model\PostPersonRequest**](PostPersonRequest.md) |  |
**credit_card** | [**\Piksel\Kigo\ChannelsV2\Model\CreditCard**](CreditCard.md) |  | [optional]
**external_booking_id** | **string** | External ID coming from the Channel | [optional]
**notes** | **string** | Notes | [optional]
**special_needs** | **string** | Special Needs | [optional]
**point_of_sale_code** | **string** | Point of Sale (code) | [optional]
**payment_collection_mode** | **string** | Defines how the booking will be paid | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)