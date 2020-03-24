# OpenAPI\Client\RobotsApi

All URIs are relative to *https://web.sandbox.signingtoday.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**robotAuthenticationDelete**](RobotsApi.md#robotAuthenticationDelete) | **DELETE** /robot/authentication | Clear a Robot authentication lifetime token
[**robotAuthenticationGet**](RobotsApi.md#robotAuthenticationGet) | **GET** /robot/authentication | Retrieve the Robot authentication lifetime token
[**robotConfigurationGet**](RobotsApi.md#robotConfigurationGet) | **GET** /robot/configuration | Retrieve the Robot configuration
[**robotDSTsPost**](RobotsApi.md#robotDSTsPost) | **POST** /robot/DSTs | Create a new DST in one call
[**robotIdInstantiatePost**](RobotsApi.md#robotIdInstantiatePost) | **POST** /robot/{id}/instantiate | Instantiate a DST from a template by robot



## robotAuthenticationDelete

> robotAuthenticationDelete($username, $domain)

Clear a Robot authentication lifetime token

This API allows to clear the Robot authentication lifetime token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RobotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = thirdPartApp; // string | The _username_ associated to the account
$domain = demo; // string | The _domain_ associated to the account

try {
    $apiInstance->robotAuthenticationDelete($username, $domain);
} catch (Exception $e) {
    echo 'Exception when calling RobotsApi->robotAuthenticationDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The _username_ associated to the account | [optional]
 **domain** | **string**| The _domain_ associated to the account | [optional]

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


## robotAuthenticationGet

> \OpenAPI\Client\Model\RobotAuthenticationToken robotAuthenticationGet($username, $domain)

Retrieve the Robot authentication lifetime token

This API allows to generate or retrieves the Robot authentication lifetime token for the specified robot account, or the current logged in account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RobotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = thirdPartApp; // string | The _username_ associated to the account
$domain = demo; // string | The _domain_ associated to the account

try {
    $result = $apiInstance->robotAuthenticationGet($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RobotsApi->robotAuthenticationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The _username_ associated to the account | [optional]
 **domain** | **string**| The _domain_ associated to the account | [optional]

### Return type

[**\OpenAPI\Client\Model\RobotAuthenticationToken**](../Model/RobotAuthenticationToken.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## robotConfigurationGet

> \OpenAPI\Client\Model\RobotConfiguration robotConfigurationGet($username, $domain)

Retrieve the Robot configuration

This API allows to retrieve the Robot configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RobotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = thirdPartApp; // string | The _username_ associated to the account
$domain = demo; // string | The _domain_ associated to the account

try {
    $result = $apiInstance->robotConfigurationGet($username, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RobotsApi->robotConfigurationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The _username_ associated to the account | [optional]
 **domain** | **string**| The _domain_ associated to the account | [optional]

### Return type

[**\OpenAPI\Client\Model\RobotConfiguration**](../Model/RobotConfiguration.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## robotDSTsPost

> \OpenAPI\Client\Model\DigitalSignatureTransaction robotDSTsPost($create_digital_signature_transaction)

Create a new DST in one call

This API allows to create a new DST with a more convenient interface for client applications. The purpose is to provide a method for the creation of a DST in order to semplify the integration into third part applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RobotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_digital_signature_transaction = new \OpenAPI\Client\Model\CreateDigitalSignatureTransaction(); // \OpenAPI\Client\Model\CreateDigitalSignatureTransaction | description

try {
    $result = $apiInstance->robotDSTsPost($create_digital_signature_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RobotsApi->robotDSTsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_digital_signature_transaction** | [**\OpenAPI\Client\Model\CreateDigitalSignatureTransaction**](../Model/CreateDigitalSignatureTransaction.md)| description |

### Return type

[**\OpenAPI\Client\Model\DigitalSignatureTransaction**](../Model/DigitalSignatureTransaction.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## robotIdInstantiatePost

> \OpenAPI\Client\Model\DigitalSignatureTransaction robotIdInstantiatePost($id, $instantiate_dst_template)

Instantiate a DST from a template by robot

This API allows to instantiate a DST from a template patching parts of its data structure.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RobotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$instantiate_dst_template = new \OpenAPI\Client\Model\InstantiateDSTTemplate(); // \OpenAPI\Client\Model\InstantiateDSTTemplate | 

try {
    $result = $apiInstance->robotIdInstantiatePost($id, $instantiate_dst_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RobotsApi->robotIdInstantiatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **instantiate_dst_template** | [**\OpenAPI\Client\Model\InstantiateDSTTemplate**](../Model/InstantiateDSTTemplate.md)|  |

### Return type

[**\OpenAPI\Client\Model\DigitalSignatureTransaction**](../Model/DigitalSignatureTransaction.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

