# # PostBookingCreditCardResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**added_payments** | [**\Piksel\Kigo\ChannelsV2\Model\PaymentResponse[]**](PaymentResponse.md) | Payments that were processed only for this request  We stop at the first process error, so this will include all successful and at most 1 failed payment attempt | [optional]
**past_due_scheduled_installment_amount** | **double** | Sum of Pending Past Scheduled Installment Payments | [optional]
**past_due_initiated_payments** | **double** | Sum of Initiated Payments | [optional]
**past_due_scheduled_deposit_amount** | **double** | Sum of Pending Past Schedule Deposit Payments | [optional]
**past_due_scheduled_amount** | **double** | Sum All Pending Past Scheduled Payments | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
