# OpenAPI\Client\SigningServicesApi

All URIs are relative to *https://web.sandbox.signingtoday.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**signServiceOpen**](SigningServicesApi.md#signServiceOpen) | **POST** /sign-service/open | sign-service open post
[**signServiceOpenId**](SigningServicesApi.md#signServiceOpenId) | **POST** /sign-service/open/{transaction-id} | sign-service-open-transaction-id post
[**signatureIdPerformIdPost**](SigningServicesApi.md#signatureIdPerformIdPost) | **POST** /sign-service/{signature-id}/perform/{identity-id} | sign-service-signature-id-perform-identity-id post



## signServiceOpen

> object signServiceOpen()

sign-service open post

description bla bla

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SigningServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->signServiceOpen();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningServicesApi->signServiceOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## signServiceOpenId

> object signServiceOpenId($transaction_id)

sign-service-open-transaction-id post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SigningServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = 'transaction_id_example'; // string | 

try {
    $result = $apiInstance->signServiceOpenId($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningServicesApi->signServiceOpenId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transaction_id** | **string**|  |

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## signatureIdPerformIdPost

> object signatureIdPerformIdPost($signature_id, $identity_id, $inline_object8)

sign-service-signature-id-perform-identity-id post

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\SigningServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_id = 'signature_id_example'; // string | 
$identity_id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | 
$inline_object8 = new \OpenAPI\Client\Model\InlineObject8(); // \OpenAPI\Client\Model\InlineObject8 | 

try {
    $result = $apiInstance->signatureIdPerformIdPost($signature_id, $identity_id, $inline_object8);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SigningServicesApi->signatureIdPerformIdPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_id** | **string**|  |
 **identity_id** | **string**|  |
 **inline_object8** | [**\OpenAPI\Client\Model\InlineObject8**](../Model/InlineObject8.md)|  | [optional]

### Return type

**object**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

