# OpenAPI\Client\Bit4idPathgroupDevicesApi

All URIs are relative to *https://web.sandbox.signingtoday.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deviceAuthorizationDelete**](Bit4idPathgroupDevicesApi.md#deviceAuthorizationDelete) | **DELETE** /device/authorization | Clear a trusted device
[**deviceAuthorizationGet**](Bit4idPathgroupDevicesApi.md#deviceAuthorizationGet) | **GET** /device/authorization | Retrieve a challenge for authorizing a new trusted device
[**deviceAuthorizationPost**](Bit4idPathgroupDevicesApi.md#deviceAuthorizationPost) | **POST** /device/authorization | Register a new trusted device
[**devicesGet**](Bit4idPathgroupDevicesApi.md#devicesGet) | **GET** /devices | Get the list of trusted devices



## deviceAuthorizationDelete

> deviceAuthorizationDelete($device_id, $user_id)

Clear a trusted device

This APIs allows to deregister a _deviceId_ of a trusted device.  It also deletes any notification push-token associated to the trusted device.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$device_id = 05ea656f-df69-49b1-a12b-9bf640c427c2; // string | The _deviceId_ to deregister
$user_id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | Select the objects relative to the user specified by the parameter. If not specified will be used the id of the current authenticated user

try {
    $apiInstance->deviceAuthorizationDelete($device_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling Bit4idPathgroupDevicesApi->deviceAuthorizationDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **device_id** | **string**| The _deviceId_ to deregister |
 **user_id** | [**string**](../Model/.md)| Select the objects relative to the user specified by the parameter. If not specified will be used the id of the current authenticated user | [optional]

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


## deviceAuthorizationGet

> \OpenAPI\Client\Model\DeviceAuthorizationResponse deviceAuthorizationGet()

Retrieve a challenge for authorizing a new trusted device

This API allows to retrieve a challenge in order to authorize a new trusted device.   - If asked in image/png the challenge is given encoded as a QR-Code image.   - An invocation of the endpoint invalidate any previous challenge.   - The challenge lasts 10 minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->deviceAuthorizationGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Bit4idPathgroupDevicesApi->deviceAuthorizationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\DeviceAuthorizationResponse**](../Model/DeviceAuthorizationResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, image/png, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deviceAuthorizationPost

> string[] deviceAuthorizationPost($inline_object7)

Register a new trusted device

This API allows to register a new trusted device. If the device is already present, it returns the current associated Token and updates the name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$inline_object7 = new \OpenAPI\Client\Model\InlineObject7(); // \OpenAPI\Client\Model\InlineObject7 | 

try {
    $result = $apiInstance->deviceAuthorizationPost($inline_object7);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Bit4idPathgroupDevicesApi->deviceAuthorizationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object7** | [**\OpenAPI\Client\Model\InlineObject7**](../Model/InlineObject7.md)|  |

### Return type

**string[]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## devicesGet

> \OpenAPI\Client\Model\TrustedDevicesGetResponse devicesGet($user_id, $top, $skip, $count)

Get the list of trusted devices

The API allows to enumerate all the devices of a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupDevicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | Select the objects relative to the user specified by the parameter. If not specified will be used the id of the current authenticated user
$top = 32; // int | A number of results to return. Applied after **$skip**
$skip = 64; // int | An offset into the collection of results
$count = true; // bool | If true, the server includes the count of all the items in the response

try {
    $result = $apiInstance->devicesGet($user_id, $top, $skip, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Bit4idPathgroupDevicesApi->devicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | [**string**](../Model/.md)| Select the objects relative to the user specified by the parameter. If not specified will be used the id of the current authenticated user | [optional]
 **top** | **int**| A number of results to return. Applied after **$skip** | [optional]
 **skip** | **int**| An offset into the collection of results | [optional]
 **count** | **bool**| If true, the server includes the count of all the items in the response | [optional]

### Return type

[**\OpenAPI\Client\Model\TrustedDevicesGetResponse**](../Model/TrustedDevicesGetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

