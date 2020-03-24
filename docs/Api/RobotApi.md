# OpenAPI\Client\RobotApi

All URIs are relative to *https://web.sandbox.signingtoday.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**robotConfigurationPut**](RobotApi.md#robotConfigurationPut) | **PUT** /robot/configuration | Edit the Robot configuration



## robotConfigurationPut

> robotConfigurationPut($robot_configuration, $username, $domain)

Edit the Robot configuration

This API allows to edit the Robot configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\RobotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$robot_configuration = new \OpenAPI\Client\Model\RobotConfiguration(); // \OpenAPI\Client\Model\RobotConfiguration | RobotConfiguration.
$username = thirdPartApp; // string | The _username_ associated to the account
$domain = demo; // string | The _domain_ associated to the account

try {
    $apiInstance->robotConfigurationPut($robot_configuration, $username, $domain);
} catch (Exception $e) {
    echo 'Exception when calling RobotApi->robotConfigurationPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **robot_configuration** | [**\OpenAPI\Client\Model\RobotConfiguration**](../Model/RobotConfiguration.md)| RobotConfiguration. |
 **username** | **string**| The _username_ associated to the account | [optional]
 **domain** | **string**| The _domain_ associated to the account | [optional]

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

