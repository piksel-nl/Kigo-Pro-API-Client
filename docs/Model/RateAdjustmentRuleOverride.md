# # RateAdjustmentRuleOverride

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the override | [optional]
**start_date** | [**\DateTime**](\DateTime.md) | Start date of the period when the rule is applied | [optional]
**end_date** | [**\DateTime**](\DateTime.md) | End date of the period when the rule is applied | [optional]
**rate_adjustments** | [**\Piksel\Kigo\ChannelsV2\Model\RateAdjustmentRule[]**](RateAdjustmentRule.md) | Rate adjustments | [optional]
**closed_to_arrival** | **string[]** | Days of the week when cannot check in | [optional]
**closed_to_departure** | **string[]** | Days of the week when cannot check out | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
