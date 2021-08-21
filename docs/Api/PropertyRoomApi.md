# Piksel\KigoPro\PropertyRoomApi

All URIs are relative to https://www.kigoapis.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**proV1ContentPropertiesIdRoomsGet()**](PropertyRoomApi.md#proV1ContentPropertiesIdRoomsGet) | **GET** /pro/v1/content/properties/{id}/rooms | 
[**proV1ContentPropertiesIdRoomsPut()**](PropertyRoomApi.md#proV1ContentPropertiesIdRoomsPut) | **PUT** /pro/v1/content/properties/{id}/rooms | 


## `proV1ContentPropertiesIdRoomsGet()`

```php
proV1ContentPropertiesIdRoomsGet($id): \Piksel\KigoPro\Model\GetPropertyRoomsVm
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyRoomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->proV1ContentPropertiesIdRoomsGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyRoomApi->proV1ContentPropertiesIdRoomsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\KigoPro\Model\GetPropertyRoomsVm**](../Model/GetPropertyRoomsVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proV1ContentPropertiesIdRoomsPut()`

```php
proV1ContentPropertiesIdRoomsPut($id, $put_property_rooms_command): \Piksel\KigoPro\Model\BooleanCommandOkEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyRoomApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int
$put_property_rooms_command = new \Piksel\KigoPro\Model\PutPropertyRoomsCommand(); // \Piksel\KigoPro\Model\PutPropertyRoomsCommand

try {
    $result = $apiInstance->proV1ContentPropertiesIdRoomsPut($id, $put_property_rooms_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyRoomApi->proV1ContentPropertiesIdRoomsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |
 **put_property_rooms_command** | [**\Piksel\KigoPro\Model\PutPropertyRoomsCommand**](../Model/PutPropertyRoomsCommand.md)|  | [optional]

### Return type

[**\Piksel\KigoPro\Model\BooleanCommandOkEnvelope**](../Model/BooleanCommandOkEnvelope.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
