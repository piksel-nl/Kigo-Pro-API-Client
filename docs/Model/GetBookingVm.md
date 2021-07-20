# # GetBookingVm

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**external_key** | **string** |  | [optional]
**confirmation_number** | **string** |  | [optional]
**account_id** | **int** |  | [optional]
**property_id** | **int** |  | [optional]
**unit_id** | **int** |  | [optional]
**booking_source_code** | **string** |  | [optional]
**point_of_sale_code** | **string** |  | [optional]
**short_code** | **string** |  | [optional]
**booked_on_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**check_in_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**check_out_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**type** | **string** | Keep in sync with VRX.Prod.Entities LocationBooking Types | [optional]
**num_adults** | **int** |  | [optional]
**num_children** | **int** |  | [optional]
**status** | **string** | Keep in sync with VRX.Prod.Entities.LocationBooking.Statuses  Commented statuses are not used in CM | [optional]
**cancellation_date** | [**\DateTime**](\DateTime.md) |  | [optional]
**cancellation_source** | **string** |  | [optional]
**cancelled_by_role** | **string** |  | [optional]
**cancelled_by_user_id** | **int** |  | [optional]
**cancellation_reason** | **string** |  | [optional]
**cancellation_policy** | [**\Piksel\Kigo\ChannelsV2\Model\CancellationPolicyDto**](CancellationPolicyDto.md) |  | [optional]
**total_amount** | **double** |  | [optional]
**currency** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
