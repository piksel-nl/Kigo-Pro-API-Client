# # ListingFeeRule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**guid** | **string** | Rule ID | [optional]
**name** | **string** | Name | [optional]
**public_name** | **string** | Name | [optional]
**type** | **string** | Listing Fee Rule Type | [optional]
**application** | **string** | Application | [optional]
**qualification** | **string** | Qualification | [optional]
**calculation_mode** | **string** | Calculation mode | [optional]
**rate_value** | **double** | Rate Value | [optional]
**is_mandatory** | **bool** | Is Mandatory | [optional]
**guest_range_min** | **int** | Guest Range min (INCLUSIVE)  In ExtraPerson Fee, starting from this number a person is considered Extra | [optional]
**guest_range_max** | **int** | Guest Range max (INCLUSIVE) | [optional]
**los_min** | **int** | It is used to define a range of nights in which the fee applies (e.g.: Night Tax will be applied if your LOS is at  least 2 nights) | [optional]
**los_max** | **int** | It is used to define a range of nights in which the fee applies (e.g.: Night Tax won&#39;t be applied if your LOS is  more than 7 nights) | [optional]
**payee_id** | **int** | Vendor or Recipient ID | [optional]
**max_quantity** | **int** | Max Quantity | [optional]
**is_commissionable** | **bool** | Is Commissionable | [optional]
**is_taxable** | **bool** | Is Taxable | [optional]
**type_application** | **string** | Type application:      Rent      Rent + Fees | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
