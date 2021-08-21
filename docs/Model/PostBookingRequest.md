# # PostBookingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**listing_id** | **int** | Listing ID |
**total_amount** | **double** | Total Amount |
**check_in_date** | [**\DateTime**](\DateTime.md) | Check In Date |
**check_out_date** | [**\DateTime**](\DateTime.md) | Check Out Date |
**renter** | [**\Piksel\KigoPro\Model\PostPersonRequest**](PostPersonRequest.md) |  |
**num_adults** | **int** | Number of Adults |
**num_children** | **int** | Number of Children | [optional]
**payment_plan_guid** | **string** | Payment Plan Guid | [optional]
**location_id** | **int** | Location ID. If passed, the system will be forced to use this. | [optional]
**notes** | **string** | Notes | [optional]
**special_needs** | **string** | Special Needs | [optional]
**external_booking_id** | **string** | External identifier set by the Channel (KVRS AltID) | [optional]
**credit_card** | [**\Piksel\KigoPro\Model\CreditCard**](CreditCard.md) |  | [optional]
**channel_collected** | **bool** | Tells if the channel will process the payments | [optional]
**point_of_sale_code** | **string** | Point of Sale (code) | [optional]
**payment_collection_mode** | **string** | Defines how the booking will be paid | [optional]
**payment_collection_scheduled_date** | [**\DateTime**](\DateTime.md) | If PaymentCollectionMode is VirtualCC then the money will be released on this date.  So we have to schedule the transaction to this date or fall back to the payment plan if it&#39;s not provided. | [optional]
**payment_schedule** | [**\Piksel\KigoPro\Model\PaymentScheduleRequest**](PaymentScheduleRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
