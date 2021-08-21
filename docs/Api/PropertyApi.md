# Piksel\KigoPro\PropertyApi

All URIs are relative to https://www.kigoapis.com.

Method | HTTP request | Description
------------- | ------------- | -------------
[**proV1ContentPropertiesGet()**](PropertyApi.md#proV1ContentPropertiesGet) | **GET** /pro/v1/content/properties | 
[**proV1ContentPropertiesIdPropertysummaryGet()**](PropertyApi.md#proV1ContentPropertiesIdPropertysummaryGet) | **GET** /pro/v1/content/properties/{id}/propertysummary | 
[**proV1ContentPropertiesPagedPageNumGet()**](PropertyApi.md#proV1ContentPropertiesPagedPageNumGet) | **GET** /pro/v1/content/properties/paged/{pageNum} | 
[**proV1ContentPropertiesPagedPageNumPageSizeGet()**](PropertyApi.md#proV1ContentPropertiesPagedPageNumPageSizeGet) | **GET** /pro/v1/content/properties/paged/{pageNum}/{pageSize} | 
[**proV1ContentPropertiesPost()**](PropertyApi.md#proV1ContentPropertiesPost) | **POST** /pro/v1/content/properties | 


## `proV1ContentPropertiesGet()`

```php
proV1ContentPropertiesGet($page_num, $page_size)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_num = 56; // int
$page_size = 56; // int

try {
    $apiInstance->proV1ContentPropertiesGet($page_num, $page_size);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->proV1ContentPropertiesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_num** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proV1ContentPropertiesIdPropertysummaryGet()`

```php
proV1ContentPropertiesIdPropertysummaryGet($id): \Piksel\KigoPro\Model\GetPropertySummaryVm
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $result = $apiInstance->proV1ContentPropertiesIdPropertysummaryGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->proV1ContentPropertiesIdPropertysummaryGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

### Return type

[**\Piksel\KigoPro\Model\GetPropertySummaryVm**](../Model/GetPropertySummaryVm.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proV1ContentPropertiesPagedPageNumGet()`

```php
proV1ContentPropertiesPagedPageNumGet($page_num2, $page_num, $page_size)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_num2 = 'page_num_example'; // string
$page_num = 56; // int
$page_size = 56; // int

try {
    $apiInstance->proV1ContentPropertiesPagedPageNumGet($page_num2, $page_num, $page_size);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->proV1ContentPropertiesPagedPageNumGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_num2** | **string**|  |
 **page_num** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proV1ContentPropertiesPagedPageNumPageSizeGet()`

```php
proV1ContentPropertiesPagedPageNumPageSizeGet($page_num2, $page_size2, $page_num, $page_size)
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page_num2 = 'page_num_example'; // string
$page_size2 = 'page_size_example'; // string
$page_num = 56; // int
$page_size = 56; // int

try {
    $apiInstance->proV1ContentPropertiesPagedPageNumPageSizeGet($page_num2, $page_size2, $page_num, $page_size);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->proV1ContentPropertiesPagedPageNumPageSizeGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page_num2** | **string**|  |
 **page_size2** | **string**|  |
 **page_num** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `proV1ContentPropertiesPost()`

```php
proV1ContentPropertiesPost($create_property_command): \Piksel\KigoPro\Model\CreatePropertyResponseVmCommandOkEnvelope
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth2
$config = Piksel\KigoPro\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Piksel\KigoPro\Api\PropertyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_property_command = new \Piksel\KigoPro\Model\CreatePropertyCommand(); // \Piksel\KigoPro\Model\CreatePropertyCommand

try {
    $result = $apiInstance->proV1ContentPropertiesPost($create_property_command);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyApi->proV1ContentPropertiesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_property_command** | [**\Piksel\KigoPro\Model\CreatePropertyCommand**](../Model/CreatePropertyCommand.md)|  | [optional]

### Return type

[**\Piksel\KigoPro\Model\CreatePropertyResponseVmCommandOkEnvelope**](../Model/CreatePropertyResponseVmCommandOkEnvelope.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `text/json`, `application/_*+json`
- **Accept**: `text/plain`, `application/json`, `text/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
