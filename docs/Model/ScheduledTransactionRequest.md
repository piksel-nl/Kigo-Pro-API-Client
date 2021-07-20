# # ScheduledTransactionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **double** | Scheduled Amount | [optional]
**scheduled_date** | [**\DateTime**](\DateTime.md) | If PaymentCollectionMode is VirtualCC then the money will be released on this date.  So we have to schedule the transaction to this date or fall back to the payment plan if it&#39;s not provided. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
