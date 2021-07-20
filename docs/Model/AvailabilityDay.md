# # AvailabilityDay

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**date** | [**\DateTime**](\DateTime.md) | Date | [optional]
**unit_count** | [**\Piksel\Kigo\ChannelsV2\Model\AvailabilityDayUnitCount**](AvailabilityDayUnitCount.md) |  | [optional]
**closed_to_arrival** | **bool** | Is closed to Arrival (check-in not allowed) (but it can be still available) | [optional]
**closed_to_departure** | **bool** | Is closed to the departure (check-out not allowed) (but it can be still available) | [optional]
**min_nights** | **int** | Min Nights | [optional]
**max_nights** | **int** | Max Nights | [optional]
**is_available** | **bool** | True if the day is available for booking, false otherwise | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
