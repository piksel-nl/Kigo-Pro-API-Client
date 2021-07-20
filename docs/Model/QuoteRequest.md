# # QuoteRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**listing_id** | **int** | Listing ID |
**check_in_date** | [**\DateTime**](\DateTime.md) | Check-In Date |
**check_out_date** | [**\DateTime**](\DateTime.md) | Check-Out Date |
**coupon_code** | **string** | Coupon code of the promotion | [optional]
**num_adults** | **int** | Number of Adults |
**num_children** | **int** | Number of Children | [optional]
**compute_default_plan_only** | **bool** | Whether all plans or just the default one should be given (optional, defaults to false) | [optional]
**requested_optional_fees** | [**\Piksel\Kigo\ChannelsV2\Model\OptionalFee[]**](OptionalFee.md) | The optional fee(s) that you want to consider in the quote | [optional]
**lead_guid** | **string** | Optional Lead (Guid) reference | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
