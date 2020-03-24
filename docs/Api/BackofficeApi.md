# OpenAPI\Client\BackofficeApi

All URIs are relative to *https://web.sandbox.signingtoday.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**organizationIdAlfrescoSyncGet**](BackofficeApi.md#organizationIdAlfrescoSyncGet) | **GET** /organization/{id}/alfrescoSync | Sync all completed DSTs on Alfresco
[**organizationIdAlfrescoSyncPost**](BackofficeApi.md#organizationIdAlfrescoSyncPost) | **POST** /organization/{id}/alfrescoSync | Sync all completed DSTs on Alfresco
[**organizationIdDelete**](BackofficeApi.md#organizationIdDelete) | **DELETE** /organization/{id} | Enable or disable an Organization account.
[**organizationIdGet**](BackofficeApi.md#organizationIdGet) | **GET** /organization/{id} | Retrieve info on one organization
[**organizationIdPublicGet**](BackofficeApi.md#organizationIdPublicGet) | **GET** /organization/public | Retrieve public resources
[**organizationIdPut**](BackofficeApi.md#organizationIdPut) | **PUT** /organization/{id} | Update info on one organization
[**organizationIdResourceGet**](BackofficeApi.md#organizationIdResourceGet) | **GET** /organization/{id}/resource | Get an organization resource
[**organizationIdResourcePut**](BackofficeApi.md#organizationIdResourcePut) | **PUT** /organization/{id}/resource | Create or overwrite an organization resource
[**organizationResourceIdDelete**](BackofficeApi.md#organizationResourceIdDelete) | **DELETE** /organization/{id}/resource | Delete an organization resource
[**organizationResourcesGet**](BackofficeApi.md#organizationResourcesGet) | **GET** /organization/{id}/resources | List all the organization resources
[**organizationTagsGet**](BackofficeApi.md#organizationTagsGet) | **GET** /organization/tags | Retrieve organization tags
[**organizationsGet**](BackofficeApi.md#organizationsGet) | **GET** /organizations | Get the list of organizations
[**organizationsPost**](BackofficeApi.md#organizationsPost) | **POST** /organizations | Create a new organization



## organizationIdAlfrescoSyncGet

> \OpenAPI\Client\Model\AlfrescoSync organizationIdAlfrescoSyncGet($id)

Sync all completed DSTs on Alfresco

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = test_id; // string | The value of the unique id

try {
    $result = $apiInstance->organizationIdAlfrescoSyncGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackofficeApi->organizationIdAlfrescoSyncGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The value of the unique id |

### Return type

[**\OpenAPI\Client\Model\AlfrescoSync**](../Model/AlfrescoSync.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## organizationIdAlfrescoSyncPost

> organizationIdAlfrescoSyncPost($id, $alfresco_sync)

Sync all completed DSTs on Alfresco

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = test_id; // string | The value of the unique id
$alfresco_sync = new \OpenAPI\Client\Model\AlfrescoSync(); // \OpenAPI\Client\Model\AlfrescoSync | Domain associated to the account.

try {
    $apiInstance->organizationIdAlfrescoSyncPost($id, $alfresco_sync);
} catch (Exception $e) {
    echo 'Exception when calling BackofficeApi->organizationIdAlfrescoSyncPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The value of the unique id |
 **alfresco_sync** | [**\OpenAPI\Client\Model\AlfrescoSync**](../Model/AlfrescoSync.md)| Domain associated to the account. |

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


## organizationIdDelete

> organizationIdDelete($id, $enabled)

Enable or disable an Organization account.

Enable or disable an Organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = test_id; // string | The value of the unique id
$enabled = false; // bool | New status to set

try {
    $apiInstance->organizationIdDelete($id, $enabled);
} catch (Exception $e) {
    echo 'Exception when calling BackofficeApi->organizationIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The value of the unique id |
 **enabled** | **bool**| New status to set | [optional] [default to false]

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


## organizationIdGet

> \OpenAPI\Client\Model\Organization organizationIdGet($id)

Retrieve info on one organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = test_id; // string | The value of the unique id

try {
    $result = $apiInstance->organizationIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackofficeApi->organizationIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The value of the unique id |

### Return type

[**\OpenAPI\Client\Model\Organization**](../Model/Organization.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## organizationIdPublicGet

> \SplFileObject organizationIdPublicGet($res, $id)

Retrieve public resources

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\BackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$res = logo; // string | resource id
$id = 05ea656f-df69-49b1-a12b-9bf640c427c2; // string | organization id

try {
    $result = $apiInstance->organizationIdPublicGet($res, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackofficeApi->organizationIdPublicGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **res** | **string**| resource id |
 **id** | **string**| organization id | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/octet-stream, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## organizationIdPut

> organizationIdPut($id, $organization)

Update info on one organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = test_id; // string | The value of the unique id
$organization = new \OpenAPI\Client\Model\Organization(); // \OpenAPI\Client\Model\Organization | 

try {
    $apiInstance->organizationIdPut($id, $organization);
} catch (Exception $e) {
    echo 'Exception when calling BackofficeApi->organizationIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The value of the unique id |
 **organization** | [**\OpenAPI\Client\Model\Organization**](../Model/Organization.md)|  | [optional]

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


## organizationIdResourceGet

> \SplFileObject organizationIdResourceGet($id, $res_path)

Get an organization resource

Get an organization resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = test_id; // string | The value of the unique id
$res_path = 05ea656f-df69-49b1-a12b-9bf640c427c2; // string | 

try {
    $result = $apiInstance->organizationIdResourceGet($id, $res_path);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackofficeApi->organizationIdResourceGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The value of the unique id |
 **res_path** | **string**|  |

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


## organizationIdResourcePut

> organizationIdResourcePut($id, $res_path, $file)

Create or overwrite an organization resource

Create or overwrite an organization resource

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = test_id; // string | The value of the unique id
$res_path = 05ea656f-df69-49b1-a12b-9bf640c427c2; // string | 
$file = "/path/to/file.txt"; // \SplFileObject | The file to upload.

try {
    $apiInstance->organizationIdResourcePut($id, $res_path, $file);
} catch (Exception $e) {
    echo 'Exception when calling BackofficeApi->organizationIdResourcePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The value of the unique id |
 **res_path** | **string**|  |
 **file** | **\SplFileObject****\SplFileObject**| The file to upload. |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## organizationResourceIdDelete

> organizationResourceIdDelete($id, $res_path)

Delete an organization resource

Deletes a Resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = test_id; // string | The value of the unique id
$res_path = 05ea656f-df69-49b1-a12b-9bf640c427c2; // string | 

try {
    $apiInstance->organizationResourceIdDelete($id, $res_path);
} catch (Exception $e) {
    echo 'Exception when calling BackofficeApi->organizationResourceIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The value of the unique id |
 **res_path** | **string**|  |

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


## organizationResourcesGet

> string[] organizationResourcesGet($id)

List all the organization resources

List all the organization resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = test_id; // string | The value of the unique id

try {
    $result = $apiInstance->organizationResourcesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackofficeApi->organizationResourcesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The value of the unique id |

### Return type

**string[]**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## organizationTagsGet

> string[] organizationTagsGet()

Retrieve organization tags

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->organizationTagsGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackofficeApi->organizationTagsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**string[]**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## organizationsGet

> \OpenAPI\Client\Model\OrganizationsGetResponse organizationsGet($top, $skip, $count, $filter)

Get the list of organizations

Get the list of organizations

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 32; // int | A number of results to return. Applied after **$skip**
$skip = 64; // int | An offset into the collection of results
$count = true; // bool | If true, the server includes the count of all the items in the response
$filter = $filter=name=="Milk"; // string | A filter definition (eg. $filter=name == \"Milk\" or surname == \"Bread\")

try {
    $result = $apiInstance->organizationsGet($top, $skip, $count, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackofficeApi->organizationsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **top** | **int**| A number of results to return. Applied after **$skip** | [optional]
 **skip** | **int**| An offset into the collection of results | [optional]
 **count** | **bool**| If true, the server includes the count of all the items in the response | [optional]
 **filter** | **string**| A filter definition (eg. $filter&#x3D;name &#x3D;&#x3D; \&quot;Milk\&quot; or surname &#x3D;&#x3D; \&quot;Bread\&quot;) | [optional]

### Return type

[**\OpenAPI\Client\Model\OrganizationsGetResponse**](../Model/OrganizationsGetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## organizationsPost

> organizationsPost($organization)

Create a new organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BackofficeApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization = new \OpenAPI\Client\Model\Organization(); // \OpenAPI\Client\Model\Organization | 

try {
    $apiInstance->organizationsPost($organization);
} catch (Exception $e) {
    echo 'Exception when calling BackofficeApi->organizationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization** | [**\OpenAPI\Client\Model\Organization**](../Model/Organization.md)|  | [optional]

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

