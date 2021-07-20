# # QuotePlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**guid** | **string** | Guid | [optional]
**name** | **string** | Name | [optional]
**is_default** | **bool** | True if it is the default plan setting, false otherwise | [optional]
**availability** | [**\Piksel\Kigo\ChannelsV2\Model\CheckAvailabilityOutput**](CheckAvailabilityOutput.md) |  | [optional]
**statement** | [**\Piksel\Kigo\ChannelsV2\Model\PackedStatement**](PackedStatement.md) |  | [optional]
**deposits** | [**\Piksel\Kigo\ChannelsV2\Model\DepositStatement**](DepositStatement.md) |  | [optional]
**deposit_schedule** | [**\Piksel\Kigo\ChannelsV2\Model\ScheduledTransaction[]**](ScheduledTransaction.md) | A collection of refundable payments | [optional]
**payment_schedule** | [**\Piksel\Kigo\ChannelsV2\Model\PaymentSchedule**](PaymentSchedule.md) |  | [optional]
**cancellation_policy** | [**\Piksel\Kigo\ChannelsV2\Model\CancellationPolicy**](CancellationPolicy.md) |  | [optional]
**rental_agreement_url** | **string** | Terms And Conditions Url (Taken from Contract Plan) | [optional]
**coupon** | [**\Piksel\Kigo\ChannelsV2\Model\PromotionCoupon**](PromotionCoupon.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
