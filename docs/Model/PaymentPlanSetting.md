# # PaymentPlanSetting

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Payment Plan ID | [optional]
**name** | **string** | Name | [optional]
**days_prior_to_checkin_to_collect_remainder** | **int** | How many days before the check-in a remainder should be sent | [optional]
**is_refundable** | **bool** | True if refundable, false otherwise | [optional]
**percent_price_multiplier** | **double** | Price multiplier in percentage | [optional]
**is_default** | **bool** | True if it is the default plan setting, false otherwise | [optional]
**rate_collected_at_time_of_booking** | [**\Piksel\Kigo\ChannelsV2\Model\Rate**](Rate.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
