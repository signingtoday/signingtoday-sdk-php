# OpenAPI\Client\Bit4idPathgroupSignatureTransactionsApi

All URIs are relative to *https://sandbox.signingtoday.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelDST**](Bit4idPathgroupSignatureTransactionsApi.md#cancelDST) | **POST** /{organization-id}/signature-transactions/{dst-id}/cancel | Mark a DST as canceled
[**createDST**](Bit4idPathgroupSignatureTransactionsApi.md#createDST) | **POST** /{organization-id}/signature-transactions | Create a Digital Signature Transaction
[**deleteDST**](Bit4idPathgroupSignatureTransactionsApi.md#deleteDST) | **DELETE** /{organization-id}/signature-transactions/{dst-id} | Delete a Digital Signature Transaction
[**deleteDSTResources**](Bit4idPathgroupSignatureTransactionsApi.md#deleteDSTResources) | **DELETE** /{organization-id}/signature-transactions/{dst-id}/resources | Delete the resources of a DST
[**getDST**](Bit4idPathgroupSignatureTransactionsApi.md#getDST) | **GET** /{organization-id}/signature-transactions/{dst-id} | Get information about a DST
[**getDocument**](Bit4idPathgroupSignatureTransactionsApi.md#getDocument) | **GET** /{organization-id}/documents/{document-id}/download | Download a document from a DST
[**listDSTs**](Bit4idPathgroupSignatureTransactionsApi.md#listDSTs) | **GET** /{organization-id}/signature-transactions | List the DSTs of an organization



## cancelDST

> \OpenAPI\Client\Model\InlineResponse2013 cancelDST($organization_id, $dst_id, $inline_object2)

Mark a DST as canceled

This API allows to mark a Digital Signature Transaction as canceled providing a reason.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$dst_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **dst-id** is the uuid code that identifies a digital signature transaction. It is used as a path parameter to filter the requested operation to the specified **dst**
$inline_object2 = new \OpenAPI\Client\Model\InlineObject2(); // \OpenAPI\Client\Model\InlineObject2 | 

try {
    $result = $apiInstance->cancelDST($organization_id, $dst_id, $inline_object2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Bit4idPathgroupSignatureTransactionsApi->cancelDST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **dst_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **dst-id** is the uuid code that identifies a digital signature transaction. It is used as a path parameter to filter the requested operation to the specified **dst** |
 **inline_object2** | [**\OpenAPI\Client\Model\InlineObject2**](../Model/InlineObject2.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createDST

> \OpenAPI\Client\Model\InlineResponse2013 createDST($organization_id, $create_signature_transaction)

Create a Digital Signature Transaction

This API allows to create a Digital Signature Transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$create_signature_transaction = new \OpenAPI\Client\Model\CreateSignatureTransaction(); // \OpenAPI\Client\Model\CreateSignatureTransaction | The new DST to create

try {
    $result = $apiInstance->createDST($organization_id, $create_signature_transaction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Bit4idPathgroupSignatureTransactionsApi->createDST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **create_signature_transaction** | [**\OpenAPI\Client\Model\CreateSignatureTransaction**](../Model/CreateSignatureTransaction.md)| The new DST to create |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteDST

> \OpenAPI\Client\Model\InlineResponse2009 deleteDST($organization_id, $dst_id)

Delete a Digital Signature Transaction

This API allows to delete a Digital Signature Transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$dst_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **dst-id** is the uuid code that identifies a digital signature transaction. It is used as a path parameter to filter the requested operation to the specified **dst**

try {
    $result = $apiInstance->deleteDST($organization_id, $dst_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Bit4idPathgroupSignatureTransactionsApi->deleteDST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **dst_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **dst-id** is the uuid code that identifies a digital signature transaction. It is used as a path parameter to filter the requested operation to the specified **dst** |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2009**](../Model/InlineResponse2009.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteDSTResources

> \OpenAPI\Client\Model\InlineResponse20010 deleteDSTResources($organization_id, $dst_id)

Delete the resources of a DST

This API allows to delete the resources of a Digital Signature Transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$dst_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **dst-id** is the uuid code that identifies a digital signature transaction. It is used as a path parameter to filter the requested operation to the specified **dst**

try {
    $result = $apiInstance->deleteDSTResources($organization_id, $dst_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Bit4idPathgroupSignatureTransactionsApi->deleteDSTResources: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **dst_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **dst-id** is the uuid code that identifies a digital signature transaction. It is used as a path parameter to filter the requested operation to the specified **dst** |

### Return type

[**\OpenAPI\Client\Model\InlineResponse20010**](../Model/InlineResponse20010.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDST

> \OpenAPI\Client\Model\InlineResponse2013 getDST($organization_id, $dst_id)

Get information about a DST

This API allows to get information about a Digital Signature Transaction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$dst_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **dst-id** is the uuid code that identifies a digital signature transaction. It is used as a path parameter to filter the requested operation to the specified **dst**

try {
    $result = $apiInstance->getDST($organization_id, $dst_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Bit4idPathgroupSignatureTransactionsApi->getDST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **dst_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **dst-id** is the uuid code that identifies a digital signature transaction. It is used as a path parameter to filter the requested operation to the specified **dst** |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2013**](../Model/InlineResponse2013.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getDocument

> \SplFileObject getDocument($organization_id, $document_id)

Download a document from a DST

This API allows to download a document from a digital signature transaction. The document can be downloaded before or after one or every signature have been performed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$document_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **document-id** is the uuid code that identifies a document of a digital signature transaction. This parameter is usually used in order to download a document from a digital signature transaction

try {
    $result = $apiInstance->getDocument($organization_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Bit4idPathgroupSignatureTransactionsApi->getDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **document_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **document-id** is the uuid code that identifies a document of a digital signature transaction. This parameter is usually used in order to download a document from a digital signature transaction |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listDSTs

> \OpenAPI\Client\Model\InlineResponse2008 listDSTs($organization_id, $where_signer, $where_status, $where_title, $where_created_by, $where_created, $where_signature_status, $where_document_name, $where_reason, $where_signature_name, $where_signer_group, $page, $count, $where_order)

List the DSTs of an organization

This API allows to list the Digital Signature Transactions of an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupSignatureTransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$where_signer = jdo; // string | Returns the Digital Signature Transactions where the specified user is a signer, searched by its id
$where_status = performed; // string | Returns the Digital Signature Transactions with the specified status
$where_title = Signature of a document; // string | Returns the Digital Signature Transactions that have the specified title
$where_created_by = jdo@example; // string | Returns the Digital Signature Transactions created by the specified user
$where_created = 2019-11-24T12:24:17.430Z; // string | Returns the Digital Signature Transactions created before, after or in the declared range
$where_signature_status = pending; // string | Returns the Digital Signature Transactions where at least one of the signers has the queried status
$where_document_name = Document of example; // string | Returns the Digital Signature Transactions that have into its documents the queried one
$where_reason = 'where_reason_example'; // string | Returns the Digital Signature Transactions with the specified reason
$where_signature_name = John Doe; // string | Returns the Digital Signature Transactions where the specified user is a signer, searched by its name
$where_signer_group = @administrators; // string | Returns the Digital Signature Transactions that have the specified group of signers
$page = 1; // int | Restricts the search to the chosen page
$count = 100; // int | Sets the number of users per page to display
$where_order = where_first_name; // string | The **where_order** query parameter takes one or more values separated by a comma and a space. The result will be ordered by the first value (ascending order is implied; a \"**-**\" in front of the value indicates descending order), then the second value and so on

try {
    $result = $apiInstance->listDSTs($organization_id, $where_signer, $where_status, $where_title, $where_created_by, $where_created, $where_signature_status, $where_document_name, $where_reason, $where_signature_name, $where_signer_group, $page, $count, $where_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Bit4idPathgroupSignatureTransactionsApi->listDSTs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **where_signer** | **string**| Returns the Digital Signature Transactions where the specified user is a signer, searched by its id | [optional]
 **where_status** | **string**| Returns the Digital Signature Transactions with the specified status | [optional]
 **where_title** | **string**| Returns the Digital Signature Transactions that have the specified title | [optional]
 **where_created_by** | **string**| Returns the Digital Signature Transactions created by the specified user | [optional]
 **where_created** | **string**| Returns the Digital Signature Transactions created before, after or in the declared range | [optional]
 **where_signature_status** | **string**| Returns the Digital Signature Transactions where at least one of the signers has the queried status | [optional]
 **where_document_name** | **string**| Returns the Digital Signature Transactions that have into its documents the queried one | [optional]
 **where_reason** | **string**| Returns the Digital Signature Transactions with the specified reason | [optional]
 **where_signature_name** | **string**| Returns the Digital Signature Transactions where the specified user is a signer, searched by its name | [optional]
 **where_signer_group** | **string**| Returns the Digital Signature Transactions that have the specified group of signers | [optional]
 **page** | **int**| Restricts the search to the chosen page | [optional]
 **count** | **int**| Sets the number of users per page to display | [optional] [default to 100]
 **where_order** | **string**| The **where_order** query parameter takes one or more values separated by a comma and a space. The result will be ordered by the first value (ascending order is implied; a \&quot;**-**\&quot; in front of the value indicates descending order), then the second value and so on | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2008**](../Model/InlineResponse2008.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

