# # PutBookingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**check_in_date** | [**\DateTime**](\DateTime.md) | Check In Date |
**check_out_date** | [**\DateTime**](\DateTime.md) | Check Out Date |
**check_in_minutes_from_midnight** | **int** | Check In Minutes From Midnight | [optional]
**check_out_minutes_from_midnight** | **int** | Check Out Minutes From Midnight | [optional]
**num_adults** | **int** | Number of adults |
**num_children** | **int** | Number of children | [optional]
**notes** | **string** | Notes  If passed, the system will overwrite the existing value.  If null, the system will keep the existing value. | [optional]
**special_needs** | **string** | Special Needs  If passed, the system will overwrite the existing value.  If null, the system will keep the existing value. | [optional]
**listing_id** | **int** | Listing ID  If passed, the system will be forced to use this.  If null, the system will use the current listing. | [optional]
**location_id** | **int** | Location ID.  If passed, the system will be forced to use this.  If null, the system will find the first available unit, giving preference to the current one but can end up in change of unit. | [optional]
**total_amount** | **double** |  | [optional]
**renter** | [**\Piksel\Kigo\ChannelsV2\Model\Person**](Person.md) |  | [optional]
**payment_collection_mode** | **string** |  | [optional]
**payment_collection_scheduled_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**payment_schedule** | [**\Piksel\Kigo\ChannelsV2\Model\PaymentScheduleRequest**](PaymentScheduleRequest.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
