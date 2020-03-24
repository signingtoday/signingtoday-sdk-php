# OpenAPI\Client\DigitalSignatureTransactionsApi

All URIs are relative to *https://web.sandbox.signingtoday.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dSTIdAuditGet**](DigitalSignatureTransactionsApi.md#dSTIdAuditGet) | **GET** /DST/{id}/audit | Retrieve the audit records associated to the DST
[**dSTIdDelete**](DigitalSignatureTransactionsApi.md#dSTIdDelete) | **DELETE** /DST/{id} | Delete a DST
[**dSTIdFillPatch**](DigitalSignatureTransactionsApi.md#dSTIdFillPatch) | **PATCH** /DST/{id}/fill | Fill a form of a DST
[**dSTIdGet**](DigitalSignatureTransactionsApi.md#dSTIdGet) | **GET** /DST/{id} | Retrieve a DST
[**dSTIdInstantiatePost**](DigitalSignatureTransactionsApi.md#dSTIdInstantiatePost) | **POST** /DST/{id}/instantiate | Instantiate a DST from a template
[**dSTIdModifyPost**](DigitalSignatureTransactionsApi.md#dSTIdModifyPost) | **POST** /DST/{id}/modify | Modify a published DST template
[**dSTIdNotifyPost**](DigitalSignatureTransactionsApi.md#dSTIdNotifyPost) | **POST** /DST/{id}/notify | Send notifications for a DST
[**dSTIdPublishPost**](DigitalSignatureTransactionsApi.md#dSTIdPublishPost) | **POST** /DST/{id}/publish | Publish a DST
[**dSTIdPut**](DigitalSignatureTransactionsApi.md#dSTIdPut) | **PUT** /DST/{id} | Update a DST
[**dSTIdReplacePost**](DigitalSignatureTransactionsApi.md#dSTIdReplacePost) | **POST** /DST/{id}/replace | Replace a rejected DST
[**dSTIdSignDocIdSignIdGet**](DigitalSignatureTransactionsApi.md#dSTIdSignDocIdSignIdGet) | **GET** /DST/{id}/sign/{docId}/{signId} | Return the address for signing
[**dSTIdTemplatizePost**](DigitalSignatureTransactionsApi.md#dSTIdTemplatizePost) | **POST** /DST/{id}/templatize | Create a template from a DST
[**dSTsGet**](DigitalSignatureTransactionsApi.md#dSTsGet) | **GET** /DSTs | Retrieve DSTs
[**dSTsPost**](DigitalSignatureTransactionsApi.md#dSTsPost) | **POST** /DSTs | Create a new DST



## dSTIdAuditGet

> \OpenAPI\Client\Model\AuditRecord[] dSTIdAuditGet($id)

Retrieve the audit records associated to the DST

This API allows to retrieves the audit records associated to the DST.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DigitalSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $result = $apiInstance->dSTIdAuditGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureTransactionsApi->dSTIdAuditGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |

### Return type

[**\OpenAPI\Client\Model\AuditRecord[]**](../Model/AuditRecord.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## dSTIdDelete

> dSTIdDelete($id)

Delete a DST

This API allows to delete a DST. Actually the DST is marked as deleted thus not displayed anymore into the organization, but it will still be present in the database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DigitalSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $apiInstance->dSTIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureTransactionsApi->dSTIdDelete: ', $e->getMessage(), PHP_EOL;
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


## dSTIdFillPatch

> \OpenAPI\Client\Model\DigitalSignatureTransaction dSTIdFillPatch($id, $fillable_form)

Fill a form of a DST

This API allows to fill a form of a DST.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DigitalSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$fillable_form = new \OpenAPI\Client\Model\FillableForm(); // \OpenAPI\Client\Model\FillableForm | The form filled by the user.

try {
    $result = $apiInstance->dSTIdFillPatch($id, $fillable_form);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureTransactionsApi->dSTIdFillPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **fillable_form** | [**\OpenAPI\Client\Model\FillableForm**](../Model/FillableForm.md)| The form filled by the user. |

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


## dSTIdGet

> \OpenAPI\Client\Model\DigitalSignatureTransaction dSTIdGet($id)

Retrieve a DST

This API allows to retrieve a DST.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DigitalSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $result = $apiInstance->dSTIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureTransactionsApi->dSTIdGet: ', $e->getMessage(), PHP_EOL;
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


## dSTIdInstantiatePost

> \OpenAPI\Client\Model\DigitalSignatureTransaction dSTIdInstantiatePost($id)

Instantiate a DST from a template

This API allows to instantiate a DST from a template by specifying the template Id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DigitalSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $result = $apiInstance->dSTIdInstantiatePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureTransactionsApi->dSTIdInstantiatePost: ', $e->getMessage(), PHP_EOL;
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


## dSTIdModifyPost

> \OpenAPI\Client\Model\DigitalSignatureTransaction dSTIdModifyPost($id)

Modify a published DST template

This API allows to move a published DST to DRAFT, allowing the modification. This way is possible to modify a _DST Template_.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DigitalSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $result = $apiInstance->dSTIdModifyPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureTransactionsApi->dSTIdModifyPost: ', $e->getMessage(), PHP_EOL;
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


## dSTIdNotifyPost

> dSTIdNotifyPost($id)

Send notifications for a DST

This API allows to send notifications to pending users for an active _DST_.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DigitalSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $apiInstance->dSTIdNotifyPost($id);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureTransactionsApi->dSTIdNotifyPost: ', $e->getMessage(), PHP_EOL;
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


## dSTIdPublishPost

> \OpenAPI\Client\Model\DigitalSignatureTransaction dSTIdPublishPost($id)

Publish a DST

This API allows to publish a DST, the new state becomes published. It will automatically evolve to a new state where it will be filled or signed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DigitalSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $result = $apiInstance->dSTIdPublishPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureTransactionsApi->dSTIdPublishPost: ', $e->getMessage(), PHP_EOL;
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


## dSTIdPut

> \OpenAPI\Client\Model\DigitalSignatureTransaction dSTIdPut($id, $digital_signature_transaction)

Update a DST

This API allows to update a DST.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DigitalSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$digital_signature_transaction = new \OpenAPI\Client\Model\DigitalSignatureTransaction(); // \OpenAPI\Client\Model\DigitalSignatureTransaction | DST replacing current object.

try {
    $result = $apiInstance->dSTIdPut($id, $digital_signature_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureTransactionsApi->dSTIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **digital_signature_transaction** | [**\OpenAPI\Client\Model\DigitalSignatureTransaction**](../Model/DigitalSignatureTransaction.md)| DST replacing current object. |

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


## dSTIdReplacePost

> \OpenAPI\Client\Model\DigitalSignatureTransaction dSTIdReplacePost($id)

Replace a rejected DST

This API allows to replace a rejected DST instantiating a new one. The replacing DST is created in DRAFT state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DigitalSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $result = $apiInstance->dSTIdReplacePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureTransactionsApi->dSTIdReplacePost: ', $e->getMessage(), PHP_EOL;
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


## dSTIdSignDocIdSignIdGet

> \OpenAPI\Client\Model\DSTSigningAddressResponse dSTIdSignDocIdSignIdGet($id, $doc_id, $sign_id)

Return the address for signing

This API returns the address to perform the signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DigitalSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$doc_id = 3; // int | Reference to _docId_ has to be signed
$sign_id = 2; // int | Reference to the signature request id

try {
    $result = $apiInstance->dSTIdSignDocIdSignIdGet($id, $doc_id, $sign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureTransactionsApi->dSTIdSignDocIdSignIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **doc_id** | **int**| Reference to _docId_ has to be signed |
 **sign_id** | **int**| Reference to the signature request id |

### Return type

[**\OpenAPI\Client\Model\DSTSigningAddressResponse**](../Model/DSTSigningAddressResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## dSTIdTemplatizePost

> \OpenAPI\Client\Model\DigitalSignatureTransaction dSTIdTemplatizePost($id)

Create a template from a DST

This API allows to creates a new template starting from a DST. Currently implemented only for published DST templates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DigitalSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $result = $apiInstance->dSTIdTemplatizePost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureTransactionsApi->dSTIdTemplatizePost: ', $e->getMessage(), PHP_EOL;
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


## dSTsGet

> \OpenAPI\Client\Model\DSTsGetResponse dSTsGet($template, $user_id, $top, $skip, $count, $order_by, $filter)

Retrieve DSTs

This API allows to list the DSTs of an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DigitalSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$template = false; // bool | Select templates or instances
$user_id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | Select the objects relative to the user specified by the parameter. If not specified will be used the id of the current authenticated user
$top = 32; // int | A number of results to return. Applied after **$skip**
$skip = 64; // int | An offset into the collection of results
$count = true; // bool | If true, the server includes the count of all the items in the response
$order_by = $orderBy=updatedAt; // string | An ordering definition (eg. $orderBy=updatedAt,desc)
$filter = $filter=name=="Milk"; // string | A filter definition (eg. $filter=name == \"Milk\" or surname == \"Bread\")

try {
    $result = $apiInstance->dSTsGet($template, $user_id, $top, $skip, $count, $order_by, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureTransactionsApi->dSTsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **template** | **bool**| Select templates or instances | [optional] [default to false]
 **user_id** | [**string**](../Model/.md)| Select the objects relative to the user specified by the parameter. If not specified will be used the id of the current authenticated user | [optional]
 **top** | **int**| A number of results to return. Applied after **$skip** | [optional]
 **skip** | **int**| An offset into the collection of results | [optional]
 **count** | **bool**| If true, the server includes the count of all the items in the response | [optional]
 **order_by** | **string**| An ordering definition (eg. $orderBy&#x3D;updatedAt,desc) | [optional]
 **filter** | **string**| A filter definition (eg. $filter&#x3D;name &#x3D;&#x3D; \&quot;Milk\&quot; or surname &#x3D;&#x3D; \&quot;Bread\&quot;) | [optional]

### Return type

[**\OpenAPI\Client\Model\DSTsGetResponse**](../Model/DSTsGetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## dSTsPost

> \OpenAPI\Client\Model\DigitalSignatureTransaction dSTsPost($digital_signature_transaction)

Create a new DST

This API allows to creates a new DST. A DST is created in the Draft state and then updated using PUT. Example of creation request:  ``` {   status: \"draft\",   publishedAt: null,   tags: [],   urgent: false,   template: false } ```  To add documents use the Resources Patch endpoint `/DST/{id}/resources`.  If the *template* flag is set true the DST is a Template. If the *publicTemplate* flag is set true the Template is visible to all users with rights to create a DST.  A DST is made made available to users using *publish* end point. A template generates a DST with the *instantiate* endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DigitalSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$digital_signature_transaction = new \OpenAPI\Client\Model\DigitalSignatureTransaction(); // \OpenAPI\Client\Model\DigitalSignatureTransaction | DST to append to the current resources.

try {
    $result = $apiInstance->dSTsPost($digital_signature_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DigitalSignatureTransactionsApi->dSTsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **digital_signature_transaction** | [**\OpenAPI\Client\Model\DigitalSignatureTransaction**](../Model/DigitalSignatureTransaction.md)| DST to append to the current resources. |

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

