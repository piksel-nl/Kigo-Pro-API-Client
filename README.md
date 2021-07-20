# Kigo API Client

This PHP API Client supports the following Kigo API's.

- https://www.kigoapis.com/pro/v1/swagger/?urls.primaryName=Channel%20Manager%20API%20v2


## Installation & Usage

### Requirements

PHP 7.2 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/piksel-nl/Kigo-Pro-API-Client.git"
    }
  ],
  "require": {
    "piksel-nl/Kigo-Pro-API-Client": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/Kigo-Pro-API-Client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\Kigo\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\Kigo\ChannelsV2\Api\BookingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start Date
$channel_connection_id = 56; // int | Channel Connection ID
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | End Date

try {
    $result = $apiInstance->channelsV2BookingsDiffGet($start_date, $channel_connection_id, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BookingApi->channelsV2BookingsDiffGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://www.kigoapis.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BookingApi* | [**channelsV2BookingsDiffGet**](docs/Api/BookingApi.md#channelsv2bookingsdiffget) | **GET** /channels/v2/bookings/diff | Get ID and Date Last Updated of all Bookings that were created/modified within the specified date range
*BookingApi* | [**channelsV2BookingsIdCancelPut**](docs/Api/BookingApi.md#channelsv2bookingsidcancelput) | **PUT** /channels/v2/bookings/{id}/cancel | Cancel a Booking
*BookingApi* | [**channelsV2BookingsIdCreditcardsPost**](docs/Api/BookingApi.md#channelsv2bookingsidcreditcardspost) | **POST** /channels/v2/bookings/{id}/creditcards | Save and try to authorize/charge a Credit Card for a Booking
*BookingApi* | [**channelsV2BookingsIdEventsPost**](docs/Api/BookingApi.md#channelsv2bookingsideventspost) | **POST** /channels/v2/bookings/{id}/events | Create a Booking Event
*BookingApi* | [**channelsV2BookingsIdGet**](docs/Api/BookingApi.md#channelsv2bookingsidget) | **GET** /channels/v2/bookings/{id} | Get a Booking
*BookingApi* | [**channelsV2BookingsIdPut**](docs/Api/BookingApi.md#channelsv2bookingsidput) | **PUT** /channels/v2/bookings/{id} | Update a Booking
*BookingApi* | [**channelsV2BookingsPost**](docs/Api/BookingApi.md#channelsv2bookingspost) | **POST** /channels/v2/bookings | Create a new Booking
*BookingApi* | [**proV1BookingsGet**](docs/Api/BookingApi.md#prov1bookingsget) | **GET** /pro/v1/bookings | 
*BookingApi* | [**proV1BookingsIdGet**](docs/Api/BookingApi.md#prov1bookingsidget) | **GET** /pro/v1/bookings/{id} | 
*ChannelConnectionApi* | [**channelsV2ConnectionsGet**](docs/Api/ChannelConnectionApi.md#channelsv2connectionsget) | **GET** /channels/v2/connections | Get Channel Connection
*ListingApi* | [**channelsV2ListingsDiffGet**](docs/Api/ListingApi.md#channelsv2listingsdiffget) | **GET** /channels/v2/listings/diff | Get all the Listings where Price, Availability or Content has changed, after a given time
*ListingApi* | [**channelsV2ListingsGet**](docs/Api/ListingApi.md#channelsv2listingsget) | **GET** /channels/v2/listings | Get all listings associated to a requested channel
*ListingApi* | [**channelsV2ListingsIdAvailabilityGet**](docs/Api/ListingApi.md#channelsv2listingsidavailabilityget) | **GET** /channels/v2/listings/{id}/availability | Get Availability Feed
*ListingApi* | [**channelsV2ListingsIdCheckavailabilityGet**](docs/Api/ListingApi.md#channelsv2listingsidcheckavailabilityget) | **GET** /channels/v2/listings/{id}/checkavailability | Check if a Listing is available
*ListingApi* | [**channelsV2ListingsIdGet**](docs/Api/ListingApi.md#channelsv2listingsidget) | **GET** /channels/v2/listings/{id} | Get a listing
*ListingApi* | [**channelsV2ListingsIdLospricingCsvGet**](docs/Api/ListingApi.md#channelsv2listingsidlospricingcsvget) | **GET** /channels/v2/listings/{id}/lospricing.csv | 
*ListingApi* | [**channelsV2ListingsIdRatesGet**](docs/Api/ListingApi.md#channelsv2listingsidratesget) | **GET** /channels/v2/listings/{id}/rates | Get contract-aware Rates Feed
*MessagingApi* | [**channelsV2MessagingMessagesGet**](docs/Api/MessagingApi.md#channelsv2messagingmessagesget) | **GET** /channels/v2/messaging/messages | Get Messages
*MessagingApi* | [**channelsV2MessagingThreadsPost**](docs/Api/MessagingApi.md#channelsv2messagingthreadspost) | **POST** /channels/v2/messaging/threads | Create a new Thread
*MessagingApi* | [**channelsV2MessagingThreadsTidMessagesIdPut**](docs/Api/MessagingApi.md#channelsv2messagingthreadstidmessagesidput) | **PUT** /channels/v2/messaging/threads/{tid}/messages/{id} | Update a Message
*MessagingApi* | [**channelsV2MessagingThreadsTidMessagesPost**](docs/Api/MessagingApi.md#channelsv2messagingthreadstidmessagespost) | **POST** /channels/v2/messaging/threads/{tid}/messages | Create a new Message
*MessagingApi* | [**channelsV2MessagingThreadsTidPut**](docs/Api/MessagingApi.md#channelsv2messagingthreadstidput) | **PUT** /channels/v2/messaging/threads/{tid} | Update a Thread
*PromotionApi* | [**channelsV2PromotionsAssignmentGet**](docs/Api/PromotionApi.md#channelsv2promotionsassignmentget) | **GET** /channels/v2/promotions/assignment | Get Promotions with assigned listing ids for active and shared listings on a given channel.
*PropertyApi* | [**proV1ContentPropertiesGet**](docs/Api/PropertyApi.md#prov1contentpropertiesget) | **GET** /pro/v1/content/properties | 
*PropertyApi* | [**proV1ContentPropertiesIdPropertysummaryGet**](docs/Api/PropertyApi.md#prov1contentpropertiesidpropertysummaryget) | **GET** /pro/v1/content/properties/{id}/propertysummary | 
*PropertyApi* | [**proV1ContentPropertiesPagedPageNumGet**](docs/Api/PropertyApi.md#prov1contentpropertiespagedpagenumget) | **GET** /pro/v1/content/properties/paged/{pageNum} | 
*PropertyApi* | [**proV1ContentPropertiesPagedPageNumPageSizeGet**](docs/Api/PropertyApi.md#prov1contentpropertiespagedpagenumpagesizeget) | **GET** /pro/v1/content/properties/paged/{pageNum}/{pageSize} | 
*PropertyApi* | [**proV1ContentPropertiesPost**](docs/Api/PropertyApi.md#prov1contentpropertiespost) | **POST** /pro/v1/content/properties | 
*PropertyAmenityApi* | [**proV1ContentPropertiesAmenitiesGet**](docs/Api/PropertyAmenityApi.md#prov1contentpropertiesamenitiesget) | **GET** /pro/v1/content/properties/amenities | 
*PropertyAmenityApi* | [**proV1ContentPropertiesIdAmenitiesGet**](docs/Api/PropertyAmenityApi.md#prov1contentpropertiesidamenitiesget) | **GET** /pro/v1/content/properties/{id}/amenities | 
*PropertyAmenityApi* | [**proV1ContentPropertiesIdAmenitiesPut**](docs/Api/PropertyAmenityApi.md#prov1contentpropertiesidamenitiesput) | **PUT** /pro/v1/content/properties/{id}/amenities | 
*PropertyCheckInPolicyApi* | [**proV1ContentPropertiesIdCheckinpolicyGet**](docs/Api/PropertyCheckInPolicyApi.md#prov1contentpropertiesidcheckinpolicyget) | **GET** /pro/v1/content/properties/{id}/checkinpolicy | 
*PropertyCheckInPolicyApi* | [**proV1ContentPropertiesIdCheckinpolicyPut**](docs/Api/PropertyCheckInPolicyApi.md#prov1contentpropertiesidcheckinpolicyput) | **PUT** /pro/v1/content/properties/{id}/checkinpolicy | 
*PropertyDescriptionsApi* | [**proV1ContentPropertiesIdDescriptionsGet**](docs/Api/PropertyDescriptionsApi.md#prov1contentpropertiesiddescriptionsget) | **GET** /pro/v1/content/properties/{id}/descriptions | 
*PropertyDescriptionsApi* | [**proV1ContentPropertiesIdDescriptionsPut**](docs/Api/PropertyDescriptionsApi.md#prov1contentpropertiesiddescriptionsput) | **PUT** /pro/v1/content/properties/{id}/descriptions | 
*PropertyGeneralInformationApi* | [**proV1ContentPropertiesIdAddressGet**](docs/Api/PropertyGeneralInformationApi.md#prov1contentpropertiesidaddressget) | **GET** /pro/v1/content/properties/{id}/address | 
*PropertyGeneralInformationApi* | [**proV1ContentPropertiesIdAddressPut**](docs/Api/PropertyGeneralInformationApi.md#prov1contentpropertiesidaddressput) | **PUT** /pro/v1/content/properties/{id}/address | 
*PropertyGeneralInformationApi* | [**proV1ContentPropertiesIdDetailsGet**](docs/Api/PropertyGeneralInformationApi.md#prov1contentpropertiesiddetailsget) | **GET** /pro/v1/content/properties/{id}/details | 
*PropertyGeneralInformationApi* | [**proV1ContentPropertiesIdDetailsPut**](docs/Api/PropertyGeneralInformationApi.md#prov1contentpropertiesiddetailsput) | **PUT** /pro/v1/content/properties/{id}/details | 
*PropertyHouseRulesApi* | [**proV1ContentPropertiesIdHouserulesGet**](docs/Api/PropertyHouseRulesApi.md#prov1contentpropertiesidhouserulesget) | **GET** /pro/v1/content/properties/{id}/houserules | 
*PropertyHouseRulesApi* | [**proV1ContentPropertiesIdHouserulesPut**](docs/Api/PropertyHouseRulesApi.md#prov1contentpropertiesidhouserulesput) | **PUT** /pro/v1/content/properties/{id}/houserules | 
*PropertyLegalInfoApi* | [**proV1ContentPropertiesIdLegalinfoGet**](docs/Api/PropertyLegalInfoApi.md#prov1contentpropertiesidlegalinfoget) | **GET** /pro/v1/content/properties/{id}/legalinfo | 
*PropertyLegalInfoApi* | [**proV1ContentPropertiesIdLegalinfoPut**](docs/Api/PropertyLegalInfoApi.md#prov1contentpropertiesidlegalinfoput) | **PUT** /pro/v1/content/properties/{id}/legalinfo | 
*PropertyMediaApi* | [**proV1ContentPropertiesIdMediasGet**](docs/Api/PropertyMediaApi.md#prov1contentpropertiesidmediasget) | **GET** /pro/v1/content/properties/{id}/medias | 
*PropertyMediaApi* | [**proV1ContentPropertiesIdMediasImagesPost**](docs/Api/PropertyMediaApi.md#prov1contentpropertiesidmediasimagespost) | **POST** /pro/v1/content/properties/{id}/medias/images | 
*PropertyMediaApi* | [**proV1ContentPropertiesIdMediasMediaIdDelete**](docs/Api/PropertyMediaApi.md#prov1contentpropertiesidmediasmediaiddelete) | **DELETE** /pro/v1/content/properties/{id}/medias/{mediaId} | 
*PropertyMediaApi* | [**proV1ContentPropertiesIdMediasMediaIdPut**](docs/Api/PropertyMediaApi.md#prov1contentpropertiesidmediasmediaidput) | **PUT** /pro/v1/content/properties/{id}/medias/{mediaId} | 
*PropertyMediaApi* | [**proV1ContentPropertiesMediatagsGet**](docs/Api/PropertyMediaApi.md#prov1contentpropertiesmediatagsget) | **GET** /pro/v1/content/properties/mediatags | 
*PropertyRoomApi* | [**proV1ContentPropertiesIdRoomsGet**](docs/Api/PropertyRoomApi.md#prov1contentpropertiesidroomsget) | **GET** /pro/v1/content/properties/{id}/rooms | 
*PropertyRoomApi* | [**proV1ContentPropertiesIdRoomsPut**](docs/Api/PropertyRoomApi.md#prov1contentpropertiesidroomsput) | **PUT** /pro/v1/content/properties/{id}/rooms | 
*QuoteApi* | [**channelsV2QuotesPost**](docs/Api/QuoteApi.md#channelsv2quotespost) | **POST** /channels/v2/quotes | Generate a quote given a desired QuoteContext
*QuoteApi* | [**channelsV2QuotesQuoteGuidBookPost**](docs/Api/QuoteApi.md#channelsv2quotesquoteguidbookpost) | **POST** /channels/v2/quotes/{quoteGuid}/book | Convert a Quote into a Booking
*RateApi* | [**proV1PropertiesIdRatesGet**](docs/Api/RateApi.md#prov1propertiesidratesget) | **GET** /pro/v1/properties/{id}/rates | 
*RateApi* | [**proV1PropertiesIdRatesPost**](docs/Api/RateApi.md#prov1propertiesidratespost) | **POST** /pro/v1/properties/{id}/rates | 
*ReferenceDataApi* | [**channelsV2AmenitiesGet**](docs/Api/ReferenceDataApi.md#channelsv2amenitiesget) | **GET** /channels/v2/amenities | Get supported amenities
*ReferenceDataApi* | [**channelsV2CountriesGet**](docs/Api/ReferenceDataApi.md#channelsv2countriesget) | **GET** /channels/v2/countries | Get supported countries
*ReferenceDataApi* | [**channelsV2MediatagsGet**](docs/Api/ReferenceDataApi.md#channelsv2mediatagsget) | **GET** /channels/v2/mediatags | Get supported tags

## Models

- [Account](docs/Model/Account.md)
- [Address](docs/Model/Address.md)
- [AggregatedChannelConnection](docs/Model/AggregatedChannelConnection.md)
- [Amenity](docs/Model/Amenity.md)
- [AmenityListResourceList](docs/Model/AmenityListResourceList.md)
- [ApiError](docs/Model/ApiError.md)
- [ApiErrorModel](docs/Model/ApiErrorModel.md)
- [Availability](docs/Model/Availability.md)
- [AvailabilityDay](docs/Model/AvailabilityDay.md)
- [AvailabilityDayUnitCount](docs/Model/AvailabilityDayUnitCount.md)
- [AvailabilityResource](docs/Model/AvailabilityResource.md)
- [BlockedOutNightsSettings](docs/Model/BlockedOutNightsSettings.md)
- [Booking](docs/Model/Booking.md)
- [BookingDiffOutput](docs/Model/BookingDiffOutput.md)
- [BookingDiffOutputListResourceList](docs/Model/BookingDiffOutputListResourceList.md)
- [BookingEvent](docs/Model/BookingEvent.md)
- [BookingResource](docs/Model/BookingResource.md)
- [BooleanCommandOkEnvelope](docs/Model/BooleanCommandOkEnvelope.md)
- [CancellationPolicy](docs/Model/CancellationPolicy.md)
- [CancellationPolicyDto](docs/Model/CancellationPolicyDto.md)
- [ChannelConnection](docs/Model/ChannelConnection.md)
- [ChannelConnectionListing](docs/Model/ChannelConnectionListing.md)
- [ChannelConnectionResource](docs/Model/ChannelConnectionResource.md)
- [CheckAvailabilityOutput](docs/Model/CheckAvailabilityOutput.md)
- [CheckAvailabilityOutputResource](docs/Model/CheckAvailabilityOutputResource.md)
- [CheckInInstruction](docs/Model/CheckInInstruction.md)
- [CheckInLocation](docs/Model/CheckInLocation.md)
- [CheckInPolicy](docs/Model/CheckInPolicy.md)
- [ContractSettings](docs/Model/ContractSettings.md)
- [ContractVersion](docs/Model/ContractVersion.md)
- [ContractualTerms](docs/Model/ContractualTerms.md)
- [Country](docs/Model/Country.md)
- [CountryListResourceList](docs/Model/CountryListResourceList.md)
- [CreatePropertyCommand](docs/Model/CreatePropertyCommand.md)
- [CreatePropertyResponseVm](docs/Model/CreatePropertyResponseVm.md)
- [CreatePropertyResponseVmCommandOkEnvelope](docs/Model/CreatePropertyResponseVmCommandOkEnvelope.md)
- [CreditCard](docs/Model/CreditCard.md)
- [CreditCardAuthorizationError](docs/Model/CreditCardAuthorizationError.md)
- [CreditCardAuthorizationResponse](docs/Model/CreditCardAuthorizationResponse.md)
- [CreditCardResponse](docs/Model/CreditCardResponse.md)
- [DepositStatement](docs/Model/DepositStatement.md)
- [FeeSettings](docs/Model/FeeSettings.md)
- [GetAmenitiesMainAmenityVm](docs/Model/GetAmenitiesMainAmenityVm.md)
- [GetAmenitiesMainAmenityVmListResourceList](docs/Model/GetAmenitiesMainAmenityVmListResourceList.md)
- [GetBookingVm](docs/Model/GetBookingVm.md)
- [GetCheckInPolicyInstructions](docs/Model/GetCheckInPolicyInstructions.md)
- [GetCheckInPolicyLocationDto](docs/Model/GetCheckInPolicyLocationDto.md)
- [GetCheckInPolicyVm](docs/Model/GetCheckInPolicyVm.md)
- [GetDiffResult](docs/Model/GetDiffResult.md)
- [GetHouseRulesVm](docs/Model/GetHouseRulesVm.md)
- [GetLegalInfoVm](docs/Model/GetLegalInfoVm.md)
- [GetListingsResult](docs/Model/GetListingsResult.md)
- [GetListingsResultListResourceList](docs/Model/GetListingsResultListResourceList.md)
- [GetMediaTagsTagVm](docs/Model/GetMediaTagsTagVm.md)
- [GetPropertyAddressVm](docs/Model/GetPropertyAddressVm.md)
- [GetPropertyAmentiesVm](docs/Model/GetPropertyAmentiesVm.md)
- [GetPropertyDescriptionsDescriptionVm](docs/Model/GetPropertyDescriptionsDescriptionVm.md)
- [GetPropertyDescriptionsVm](docs/Model/GetPropertyDescriptionsVm.md)
- [GetPropertyDetailsPublicNameDto](docs/Model/GetPropertyDetailsPublicNameDto.md)
- [GetPropertyDetailsVm](docs/Model/GetPropertyDetailsVm.md)
- [GetPropertyMediaVm](docs/Model/GetPropertyMediaVm.md)
- [GetPropertyMediasMediaDto](docs/Model/GetPropertyMediasMediaDto.md)
- [GetPropertyRateVm](docs/Model/GetPropertyRateVm.md)
- [GetPropertyRoomsBedDto](docs/Model/GetPropertyRoomsBedDto.md)
- [GetPropertyRoomsRoomDto](docs/Model/GetPropertyRoomsRoomDto.md)
- [GetPropertyRoomsVm](docs/Model/GetPropertyRoomsVm.md)
- [GetPropertySummaryAddressDto](docs/Model/GetPropertySummaryAddressDto.md)
- [GetPropertySummaryVm](docs/Model/GetPropertySummaryVm.md)
- [GetUserMessageResponse](docs/Model/GetUserMessageResponse.md)
- [GetUserMessageResponseResource](docs/Model/GetUserMessageResponseResource.md)
- [GuestStatement](docs/Model/GuestStatement.md)
- [GuestStatementDetail](docs/Model/GuestStatementDetail.md)
- [Int32CommandOkEnvelope](docs/Model/Int32CommandOkEnvelope.md)
- [Listing](docs/Model/Listing.md)
- [ListingBlockedOutNightRule](docs/Model/ListingBlockedOutNightRule.md)
- [ListingBookingWindowRule](docs/Model/ListingBookingWindowRule.md)
- [ListingDiffImpact](docs/Model/ListingDiffImpact.md)
- [ListingFeeRule](docs/Model/ListingFeeRule.md)
- [ListingImpact](docs/Model/ListingImpact.md)
- [ListingMaxStayRule](docs/Model/ListingMaxStayRule.md)
- [ListingRateAdjustment](docs/Model/ListingRateAdjustment.md)
- [ListingResource](docs/Model/ListingResource.md)
- [Location](docs/Model/Location.md)
- [Media](docs/Model/Media.md)
- [OptionalFee](docs/Model/OptionalFee.md)
- [PackedStatement](docs/Model/PackedStatement.md)
- [PaymentGateway](docs/Model/PaymentGateway.md)
- [PaymentPlanSetting](docs/Model/PaymentPlanSetting.md)
- [PaymentResponse](docs/Model/PaymentResponse.md)
- [PaymentSchedule](docs/Model/PaymentSchedule.md)
- [PaymentScheduleRequest](docs/Model/PaymentScheduleRequest.md)
- [Person](docs/Model/Person.md)
- [PostBookingCreditCardResponse](docs/Model/PostBookingCreditCardResponse.md)
- [PostBookingFromQuoteRequest](docs/Model/PostBookingFromQuoteRequest.md)
- [PostBookingRequest](docs/Model/PostBookingRequest.md)
- [PostBookingResponse](docs/Model/PostBookingResponse.md)
- [PostPersonRequest](docs/Model/PostPersonRequest.md)
- [PostPropertyMediaCommand](docs/Model/PostPropertyMediaCommand.md)
- [PostThreadRequest](docs/Model/PostThreadRequest.md)
- [PostThreadResponse](docs/Model/PostThreadResponse.md)
- [PostThreadResponseResource](docs/Model/PostThreadResponseResource.md)
- [PostUserMessageRequest](docs/Model/PostUserMessageRequest.md)
- [PostUserMessageResponse](docs/Model/PostUserMessageResponse.md)
- [PostUserMessageResponseResource](docs/Model/PostUserMessageResponseResource.md)
- [PromotionCoupon](docs/Model/PromotionCoupon.md)
- [PromotionSetting](docs/Model/PromotionSetting.md)
- [PromotionSettingWithAssociatedListings](docs/Model/PromotionSettingWithAssociatedListings.md)
- [PromotionSettingWithAssociatedListingsListResourceList](docs/Model/PromotionSettingWithAssociatedListingsListResourceList.md)
- [PropertyAddress](docs/Model/PropertyAddress.md)
- [PropertyDescription](docs/Model/PropertyDescription.md)
- [PutBookingRequest](docs/Model/PutBookingRequest.md)
- [PutBookingResponse](docs/Model/PutBookingResponse.md)
- [PutCheckInPolicyCheckInInstructionsDto](docs/Model/PutCheckInPolicyCheckInInstructionsDto.md)
- [PutCheckInPolicyCommand](docs/Model/PutCheckInPolicyCommand.md)
- [PutCheckInPolicyLocationDto](docs/Model/PutCheckInPolicyLocationDto.md)
- [PutHouseRulesCommand](docs/Model/PutHouseRulesCommand.md)
- [PutLegalInfoCommand](docs/Model/PutLegalInfoCommand.md)
- [PutPropertyAddressCommand](docs/Model/PutPropertyAddressCommand.md)
- [PutPropertyAmenitiesCommand](docs/Model/PutPropertyAmenitiesCommand.md)
- [PutPropertyDescriptionsCommand](docs/Model/PutPropertyDescriptionsCommand.md)
- [PutPropertyDescriptionsDescriptionDto](docs/Model/PutPropertyDescriptionsDescriptionDto.md)
- [PutPropertyDetailsCommand](docs/Model/PutPropertyDetailsCommand.md)
- [PutPropertyDetailsPublicNameDto](docs/Model/PutPropertyDetailsPublicNameDto.md)
- [PutPropertyMediaTagsAndOrderCommand](docs/Model/PutPropertyMediaTagsAndOrderCommand.md)
- [PutPropertyRoomsBedDto](docs/Model/PutPropertyRoomsBedDto.md)
- [PutPropertyRoomsCommand](docs/Model/PutPropertyRoomsCommand.md)
- [PutPropertyRoomsRoomDto](docs/Model/PutPropertyRoomsRoomDto.md)
- [PutUserMessageRequest](docs/Model/PutUserMessageRequest.md)
- [PutUserMessageResponse](docs/Model/PutUserMessageResponse.md)
- [PutUserMessageResponseResource](docs/Model/PutUserMessageResponseResource.md)
- [Quote](docs/Model/Quote.md)
- [QuotePlan](docs/Model/QuotePlan.md)
- [QuoteRequest](docs/Model/QuoteRequest.md)
- [QuoteResource](docs/Model/QuoteResource.md)
- [Rate](docs/Model/Rate.md)
- [RateAdjustmentRule](docs/Model/RateAdjustmentRule.md)
- [RateAdjustmentRuleOverride](docs/Model/RateAdjustmentRuleOverride.md)
- [RateSchedule](docs/Model/RateSchedule.md)
- [RateScheduleNight](docs/Model/RateScheduleNight.md)
- [RateScheduleResource](docs/Model/RateScheduleResource.md)
- [Review](docs/Model/Review.md)
- [Room](docs/Model/Room.md)
- [RoomAmenity](docs/Model/RoomAmenity.md)
- [RoomList](docs/Model/RoomList.md)
- [ScheduledTransaction](docs/Model/ScheduledTransaction.md)
- [ScheduledTransactionRequest](docs/Model/ScheduledTransactionRequest.md)
- [SetPropertyRateDto](docs/Model/SetPropertyRateDto.md)
- [StatementDetail](docs/Model/StatementDetail.md)
- [StaySettings](docs/Model/StaySettings.md)
- [Tag](docs/Model/Tag.md)
- [TagListResourceList](docs/Model/TagListResourceList.md)
- [ThreadModelResponse](docs/Model/ThreadModelResponse.md)
- [TimeBetweenReservationsRule](docs/Model/TimeBetweenReservationsRule.md)
- [Transaction](docs/Model/Transaction.md)
- [UserMessage](docs/Model/UserMessage.md)
- [UserMessageAttachment](docs/Model/UserMessageAttachment.md)
- [UserMessageDetail](docs/Model/UserMessageDetail.md)
- [ValidationErrorException](docs/Model/ValidationErrorException.md)
- [ValidationErrorItem](docs/Model/ValidationErrorItem.md)

## Authorization

### oauth2

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: `https://auth.kigo.net/connect/authorize`
- **Scopes**: 
    - **cm.api**: Kigo Pro - Channel Manager API Access
    - **automation.api**: Kigo Pro - Automation API Access
    - **developer.api**: Kigo Pro - Developer API Access
    - **pro.api**: (deprecated) Kigo Pro API Access

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `channels-v2`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
