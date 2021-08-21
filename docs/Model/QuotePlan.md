# # QuotePlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**guid** | **string** | Guid | [optional]
**name** | **string** | Name | [optional]
**is_default** | **bool** | True if it is the default plan setting, false otherwise | [optional]
**availability** | [**\Piksel\KigoPro\Model\CheckAvailabilityOutput**](CheckAvailabilityOutput.md) |  | [optional]
**statement** | [**\Piksel\KigoPro\Model\PackedStatement**](PackedStatement.md) |  | [optional]
**deposits** | [**\Piksel\KigoPro\Model\DepositStatement**](DepositStatement.md) |  | [optional]
**deposit_schedule** | [**\Piksel\KigoPro\Model\ScheduledTransaction[]**](ScheduledTransaction.md) | A collection of refundable payments | [optional]
**payment_schedule** | [**\Piksel\KigoPro\Model\PaymentSchedule**](PaymentSchedule.md) |  | [optional]
**cancellation_policy** | [**\Piksel\KigoPro\Model\CancellationPolicy**](CancellationPolicy.md) |  | [optional]
**rental_agreement_url** | **string** | Terms And Conditions Url (Taken from Contract Plan) | [optional]
**coupon** | [**\Piksel\KigoPro\Model\PromotionCoupon**](PromotionCoupon.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
