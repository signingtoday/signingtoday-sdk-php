# OpenAPI\Client\TokensApi

All URIs are relative to *https://sandbox.signingtoday.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createToken**](TokensApi.md#createToken) | **POST** /{organization-id}/tokens | Create an application token
[**deleteToken**](TokensApi.md#deleteToken) | **DELETE** /{organization-id}/tokens/{token-id} | Delete a token of the organization
[**getToken**](TokensApi.md#getToken) | **GET** /{organization-id}/tokens/{token-id} | Get information about a token
[**listTokens**](TokensApi.md#listTokens) | **GET** /{organization-id}/tokens | Enumerate the tokens of an organization
[**listUserTokens**](TokensApi.md#listUserTokens) | **GET** /{organization-id}/users/{user-id}/tokens | Enumerate the tokens of an user
[**updateToken**](TokensApi.md#updateToken) | **PUT** /{organization-id}/tokens/{token-id} | Update the properties of a token



## createToken

> \OpenAPI\Client\Model\InlineResponse2015 createToken($organization_id, $create_token)

Create an application token

This API allows to create an application token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$create_token = new \OpenAPI\Client\Model\CreateToken(); // \OpenAPI\Client\Model\CreateToken | Token data

try {
    $result = $apiInstance->createToken($organization_id, $create_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->createToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **create_token** | [**\OpenAPI\Client\Model\CreateToken**](../Model/CreateToken.md)| Token data |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2015**](../Model/InlineResponse2015.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteToken

> \OpenAPI\Client\Model\InlineResponse2012 deleteToken($organization_id, $token_id)

Delete a token of the organization

This API allows to delete a token of the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$token_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **token-id** is the uuid code that identifies a token. It is, as well, used to restrict the requested operation to the scope of that token

try {
    $result = $apiInstance->deleteToken($organization_id, $token_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->deleteToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **token_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **token-id** is the uuid code that identifies a token. It is, as well, used to restrict the requested operation to the scope of that token |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getToken

> \OpenAPI\Client\Model\InlineResponse2015 getToken($organization_id, $token_id)

Get information about a token

This API allows to get information about a token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$token_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **token-id** is the uuid code that identifies a token. It is, as well, used to restrict the requested operation to the scope of that token

try {
    $result = $apiInstance->getToken($organization_id, $token_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **token_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **token-id** is the uuid code that identifies a token. It is, as well, used to restrict the requested operation to the scope of that token |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2015**](../Model/InlineResponse2015.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listTokens

> \OpenAPI\Client\Model\InlineResponse2004 listTokens($organization_id, $where_user, $where_label, $count, $page, $where_order)

Enumerate the tokens of an organization

This API allows to enumerate the tokens of an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$where_user = jdo; // string | Returns the tokens of the specified user, searched by its id
$where_label = token; // string | Returns the tokens with the specified label
$count = 100; // int | Sets the number of tokens per page to display
$page = 1; // int | Restricts the search to chosen page
$where_order = where_first_name; // string | The **where_order** query parameter takes one or more values separated by a comma and a space. The result will be ordered by the first value (ascending order is implied; a \"**-**\" in front of the value indicates descending order), then the second value and so on

try {
    $result = $apiInstance->listTokens($organization_id, $where_user, $where_label, $count, $page, $where_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->listTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **where_user** | **string**| Returns the tokens of the specified user, searched by its id | [optional]
 **where_label** | **string**| Returns the tokens with the specified label | [optional]
 **count** | **int**| Sets the number of tokens per page to display | [optional] [default to 100]
 **page** | **int**| Restricts the search to chosen page | [optional]
 **where_order** | **string**| The **where_order** query parameter takes one or more values separated by a comma and a space. The result will be ordered by the first value (ascending order is implied; a \&quot;**-**\&quot; in front of the value indicates descending order), then the second value and so on | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listUserTokens

> \OpenAPI\Client\Model\InlineResponse2004 listUserTokens($organization_id, $user_id, $page, $count, $where_order)

Enumerate the tokens of an user

This API allows to enumerate all the tokens of an user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$user_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **user-id** is the uuid code that identifies a user of an organization. It is used as a path parameter to restrict the requested operation to the scope of that user
$page = 1; // int | Restricts the search to the chosen page
$count = 100; // int | Sets the number of users per page to display
$where_order = where_first_name; // string | The **where_order** query parameter takes one or more values separated by a comma and a space. The result will be ordered by the first value (ascending order is implied; a \"**-**\" in front of the value indicates descending order), then the second value and so on

try {
    $result = $apiInstance->listUserTokens($organization_id, $user_id, $page, $count, $where_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->listUserTokens: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **user_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **user-id** is the uuid code that identifies a user of an organization. It is used as a path parameter to restrict the requested operation to the scope of that user |
 **page** | **int**| Restricts the search to the chosen page | [optional]
 **count** | **int**| Sets the number of users per page to display | [optional] [default to 100]
 **where_order** | **string**| The **where_order** query parameter takes one or more values separated by a comma and a space. The result will be ordered by the first value (ascending order is implied; a \&quot;**-**\&quot; in front of the value indicates descending order), then the second value and so on | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## updateToken

> \OpenAPI\Client\Model\InlineResponse2015 updateToken($organization_id, $token_id, $update_token)

Update the properties of a token

This API allows to update the properties of a token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$token_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **token-id** is the uuid code that identifies a token. It is, as well, used to restrict the requested operation to the scope of that token
$update_token = new \OpenAPI\Client\Model\UpdateToken(); // \OpenAPI\Client\Model\UpdateToken | Token data

try {
    $result = $apiInstance->updateToken($organization_id, $token_id, $update_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->updateToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **token_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **token-id** is the uuid code that identifies a token. It is, as well, used to restrict the requested operation to the scope of that token |
 **update_token** | [**\OpenAPI\Client\Model\UpdateToken**](../Model/UpdateToken.md)| Token data |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2015**](../Model/InlineResponse2015.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

