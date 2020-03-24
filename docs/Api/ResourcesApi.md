# OpenAPI\Client\ResourcesApi

All URIs are relative to *https://web.sandbox.signingtoday.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dSTIdResourcesGet**](ResourcesApi.md#dSTIdResourcesGet) | **GET** /DST/{id}/resources | Retrieve all resources associated to a DST
[**dSTIdResourcesPatch**](ResourcesApi.md#dSTIdResourcesPatch) | **PATCH** /DST/{id}/resources | Append a new resource to a DST
[**dSTResourceIdDelete**](ResourcesApi.md#dSTResourceIdDelete) | **DELETE** /DST/resource/{id} | Delete a Resource
[**resourceIdGet**](ResourcesApi.md#resourceIdGet) | **GET** /resource/{id} | Retrieve a Resource
[**resourceIdPut**](ResourcesApi.md#resourceIdPut) | **PUT** /resource/{id} | Update a Resource
[**userIdIdentityIdentityIdAppearanceDelete**](ResourcesApi.md#userIdIdentityIdentityIdAppearanceDelete) | **DELETE** /user/{id}/identity/{identity-id}/appearance | Delete a user appearance resource.
[**userIdIdentityIdentityIdAppearanceGet**](ResourcesApi.md#userIdIdentityIdentityIdAppearanceGet) | **GET** /user/{id}/identity/{identity-id}/appearance | Download an identity appearance resource
[**userIdIdentityIdentityIdAppearancePost**](ResourcesApi.md#userIdIdentityIdentityIdAppearancePost) | **POST** /user/{id}/identity/{identity-id}/appearance | Add a graphical appearance to a user&#39;s identity



## dSTIdResourcesGet

> \SplFileObject dSTIdResourcesGet($id)

Retrieve all resources associated to a DST

This API allows to retrieve all resources associated to a DST.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $result = $apiInstance->dSTIdResourcesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->dSTIdResourcesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## dSTIdResourcesPatch

> \OpenAPI\Client\Model\DigitalSignatureTransaction dSTIdResourcesPatch($id, $file, $filename, $resource_type, $title)

Append a new resource to a DST

This API allows to append a new Resource to a DST.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$file = "/path/to/file.txt"; // \SplFileObject | The file to upload
$filename = 'filename_example'; // string | The name of the file
$resource_type = 'resource_type_example'; // string | 
$title = 'title_example'; // string | User-defined title of the resource.

try {
    $result = $apiInstance->dSTIdResourcesPatch($id, $file, $filename, $resource_type, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->dSTIdResourcesPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **file** | **\SplFileObject****\SplFileObject**| The file to upload |
 **filename** | **string**| The name of the file |
 **resource_type** | **string**|  |
 **title** | **string**| User-defined title of the resource. | [optional]

### Return type

[**\OpenAPI\Client\Model\DigitalSignatureTransaction**](../Model/DigitalSignatureTransaction.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## dSTResourceIdDelete

> \OpenAPI\Client\Model\DigitalSignatureTransaction dSTResourceIdDelete($id)

Delete a Resource

This API allows to delete a Resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $result = $apiInstance->dSTResourceIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->dSTResourceIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |

### Return type

[**\OpenAPI\Client\Model\DigitalSignatureTransaction**](../Model/DigitalSignatureTransaction.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## resourceIdGet

> \SplFileObject resourceIdGet($id)

Retrieve a Resource

This API allows to retrieve a Resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $result = $apiInstance->resourceIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourceIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## resourceIdPut

> resourceIdPut($id, $lf_resource)

Update a Resource

This API allows to update a Resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$lf_resource = new \OpenAPI\Client\Model\LFResource(); // \OpenAPI\Client\Model\LFResource | Resource replacing current object.

try {
    $apiInstance->resourceIdPut($id, $lf_resource);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->resourceIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **lf_resource** | [**\OpenAPI\Client\Model\LFResource**](../Model/LFResource.md)| Resource replacing current object. |

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


## userIdIdentityIdentityIdAppearanceDelete

> userIdIdentityIdentityIdAppearanceDelete($id, $identity_id)

Delete a user appearance resource.

This API allows to delete an identity appearance resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$identity_id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The unique id of the _Identity_

try {
    $apiInstance->userIdIdentityIdentityIdAppearanceDelete($id, $identity_id);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->userIdIdentityIdentityIdAppearanceDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **identity_id** | [**string**](../Model/.md)| The unique id of the _Identity_ |

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


## userIdIdentityIdentityIdAppearanceGet

> \SplFileObject userIdIdentityIdentityIdAppearanceGet($id, $identity_id)

Download an identity appearance resource

This API allows to get the identity appearance resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$identity_id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The unique id of the _Identity_

try {
    $result = $apiInstance->userIdIdentityIdentityIdAppearanceGet($id, $identity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->userIdIdentityIdentityIdAppearanceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **identity_id** | [**string**](../Model/.md)| The unique id of the _Identity_ |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userIdIdentityIdentityIdAppearancePost

> \OpenAPI\Client\Model\LFResource userIdIdentityIdentityIdAppearancePost($id, $identity_id, $file, $filename, $resource_type, $title)

Add a graphical appearance to a user's identity

This API allows to add a graphical appearance to the identity of a user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ResourcesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$identity_id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The unique id of the _Identity_
$file = "/path/to/file.txt"; // \SplFileObject | The path of the file to upload
$filename = 'filename_example'; // string | The name of the file
$resource_type = 'resource_type_example'; // string | The type of the resource
$title = 'title_example'; // string | User-defined title of the resource

try {
    $result = $apiInstance->userIdIdentityIdentityIdAppearancePost($id, $identity_id, $file, $filename, $resource_type, $title);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ResourcesApi->userIdIdentityIdentityIdAppearancePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **identity_id** | [**string**](../Model/.md)| The unique id of the _Identity_ |
 **file** | **\SplFileObject****\SplFileObject**| The path of the file to upload |
 **filename** | **string**| The name of the file |
 **resource_type** | **string**| The type of the resource |
 **title** | **string**| User-defined title of the resource | [optional]

### Return type

[**\OpenAPI\Client\Model\LFResource**](../Model/LFResource.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

