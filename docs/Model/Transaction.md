# # Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Transaction Type | [optional]
**accounting_category** | **string** | Accounting Category | [optional]
**payment_method_type** | **string** | Payment Method Type | [optional]
**accounting_type** | **string** | Accounting Type | [optional]
**id** | **int** | Transaction ID | [optional]
**amount** | **double** | Safe Amount | [optional]
**quantity** | **double** | Safe Quantity | [optional]
**total** | **double** | Total | [optional]
**transaction_date** | [**\DateTime**](\DateTime.md) | Date of the Transaction. By default, current day | [optional]
**description** | **string** | Description for the Transaction | [optional]
**scheduled_date** | [**\DateTime**](\DateTime.md) | Due on date | [optional]
**payment_status** | **string** | Payment Status | [optional]
**schedule_transaction_id** | **int** | If the payment is coming from a schedule | [optional]
**is_past_due** | **bool** | If the payment is past due according to the local date | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
