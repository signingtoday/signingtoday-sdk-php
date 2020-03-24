# OpenAPI\Client\NotificationsApi

All URIs are relative to *https://web.sandbox.signingtoday.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**notificationsDstIdDelete**](NotificationsApi.md#notificationsDstIdDelete) | **DELETE** /notifications/dst/{id} | Clear Notifications for a DST
[**notificationsDstsGet**](NotificationsApi.md#notificationsDstsGet) | **GET** /notifications/dsts | Get latest DST Notifications
[**notificationsPushTokenDelete**](NotificationsApi.md#notificationsPushTokenDelete) | **DELETE** /notifications/push-token | Clear a registered push notification token
[**notificationsPushTokenPost**](NotificationsApi.md#notificationsPushTokenPost) | **POST** /notifications/push-token | Register a token for push notifications



## notificationsDstIdDelete

> notificationsDstIdDelete($id)

Clear Notifications for a DST

This API notifies that a user consumed all active notifications for a DST.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $apiInstance->notificationsDstIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationsDstIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## notificationsDstsGet

> \OpenAPI\Client\Model\NotificationsResponse notificationsDstsGet($top, $skip, $count)

Get latest DST Notifications

This APIs allows to get latest user Notifications for DSTs sorted desc by time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 32; // int | A number of results to return. Applied after **$skip**
$skip = 64; // int | An offset into the collection of results
$count = true; // bool | If true, the server includes the count of all the items in the response

try {
    $result = $apiInstance->notificationsDstsGet($top, $skip, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationsDstsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **top** | **int**| A number of results to return. Applied after **$skip** | [optional]
 **skip** | **int**| An offset into the collection of results | [optional]
 **count** | **bool**| If true, the server includes the count of all the items in the response | [optional]

### Return type

[**\OpenAPI\Client\Model\NotificationsResponse**](../Model/NotificationsResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## notificationsPushTokenDelete

> notificationsPushTokenDelete($device_id)

Clear a registered push notification token

This API deregister a deviceId from the push notifications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_id = 05ea656f-df69-49b1-a12b-9bf640c427c2; // string | The _deviceId_ to deregister

try {
    $apiInstance->notificationsPushTokenDelete($device_id);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationsPushTokenDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| The _deviceId_ to deregister |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## notificationsPushTokenPost

> notificationsPushTokenPost($inline_object6)

Register a token for push notifications

This API allows to register a token for push notifications. Only trusted deviceId can be registered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object6 = new \OpenAPI\Client\Model\InlineObject6(); // \OpenAPI\Client\Model\InlineObject6 | 

try {
    $apiInstance->notificationsPushTokenPost($inline_object6);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->notificationsPushTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object6** | [**\OpenAPI\Client\Model\InlineObject6**](../Model/InlineObject6.md)|  |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

