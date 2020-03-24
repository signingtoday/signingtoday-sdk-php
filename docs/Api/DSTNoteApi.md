# OpenAPI\Client\DSTNoteApi

All URIs are relative to *https://web.sandbox.signingtoday.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dSTIdNoteGet**](DSTNoteApi.md#dSTIdNoteGet) | **GET** /DST/{id}/note | Retrieve the DSTNotes associated to the DST
[**dSTIdNoteNoteIdDelete**](DSTNoteApi.md#dSTIdNoteNoteIdDelete) | **DELETE** /DST/{id}/note/{noteId} | Delete a DSTNote
[**dSTIdNoteNoteIdPut**](DSTNoteApi.md#dSTIdNoteNoteIdPut) | **PUT** /DST/{id}/note/{noteId} | Edit a DSTNote
[**dSTIdNotePost**](DSTNoteApi.md#dSTIdNotePost) | **POST** /DST/{id}/note | Append a new DSTNote



## dSTIdNoteGet

> \OpenAPI\Client\Model\DSTNote[] dSTIdNoteGet($id)

Retrieve the DSTNotes associated to the DST

This API allows to retrieve the DST Notes associated to the DST.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DSTNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $result = $apiInstance->dSTIdNoteGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSTNoteApi->dSTIdNoteGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |

### Return type

[**\OpenAPI\Client\Model\DSTNote[]**](../Model/DSTNote.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## dSTIdNoteNoteIdDelete

> dSTIdNoteNoteIdDelete($id, $note_id)

Delete a DSTNote

This API allows to delete a DSTNote.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DSTNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$note_id = 14; // int | The reference of a DSTNote

try {
    $apiInstance->dSTIdNoteNoteIdDelete($id, $note_id);
} catch (Exception $e) {
    echo 'Exception when calling DSTNoteApi->dSTIdNoteNoteIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **note_id** | **int**| The reference of a DSTNote |

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


## dSTIdNoteNoteIdPut

> \OpenAPI\Client\Model\DSTNote dSTIdNoteNoteIdPut($id, $note_id, $dst_note)

Edit a DSTNote

This API allows to edit a DSTNote.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DSTNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$note_id = 14; // int | The reference of a DSTNote
$dst_note = new \OpenAPI\Client\Model\DSTNote(); // \OpenAPI\Client\Model\DSTNote | DSTNote replacing current object.

try {
    $result = $apiInstance->dSTIdNoteNoteIdPut($id, $note_id, $dst_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSTNoteApi->dSTIdNoteNoteIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **note_id** | **int**| The reference of a DSTNote |
 **dst_note** | [**\OpenAPI\Client\Model\DSTNote**](../Model/DSTNote.md)| DSTNote replacing current object. |

### Return type

[**\OpenAPI\Client\Model\DSTNote**](../Model/DSTNote.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## dSTIdNotePost

> \OpenAPI\Client\Model\DSTNote dSTIdNotePost($id, $inline_object1)

Append a new DSTNote

This API allows to append a new DSTNote to the DST.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\DSTNoteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$inline_object1 = new \OpenAPI\Client\Model\InlineObject1(); // \OpenAPI\Client\Model\InlineObject1 | 

try {
    $result = $apiInstance->dSTIdNotePost($id, $inline_object1);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DSTNoteApi->dSTIdNotePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **inline_object1** | [**\OpenAPI\Client\Model\InlineObject1**](../Model/InlineObject1.md)|  | [optional]

### Return type

[**\OpenAPI\Client\Model\DSTNote**](../Model/DSTNote.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

