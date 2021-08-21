# # ChannelConnection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Channel Connection ID | [optional]
**channel_id** | **int** | Channel Id |
**account_id** | **int** | Account Id |
**name** | **string** | Group Name |
**listing_collection_id** | **int** | Listing Collection ID | [optional]
**is_enabled** | **bool** | True if the Channel Connection is enabled | [optional]
**aggregated_channel_connections** | [**\Piksel\KigoPro\Model\AggregatedChannelConnection[]**](AggregatedChannelConnection.md) | Aggregated Channel Connections | [optional]
**marketing_fee** | **double** | Marketing Fee | [optional]
**modified_date** | [**\DateTime**](\DateTime.md) | DateTime of the last change to this Channel Connection | [optional]
**account** | [**\Piksel\KigoPro\Model\Account**](Account.md) |  | [optional]
**external_id** | **string** | The Unique identifier of the channel connection from the PMS (e.g. SyncLinkID in KVRS) | [optional]
**metadata** | **object** | Channel connection metadata | [optional]
**requires_credit_card** | **bool** | If true, a Credit Card is required for a Booking | [optional]
**listing_collection_type** | **string** |  | [optional]
**website_url** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
