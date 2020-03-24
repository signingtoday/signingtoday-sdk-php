# OpenAPI\Client\ServicesApi

All URIs are relative to *https://web.sandbox.signingtoday.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authChangePasswordPost**](ServicesApi.md#authChangePasswordPost) | **POST** /auth/changePassword | Consume a token to change the password
[**authPasswordLostGet**](ServicesApi.md#authPasswordLostGet) | **GET** /auth/passwordLost | Request to recover own password
[**authPasswordResetGet**](ServicesApi.md#authPasswordResetGet) | **GET** /auth/passwordReset | Reset a user password with superuser
[**authPasswordResetPost**](ServicesApi.md#authPasswordResetPost) | **POST** /auth/passwordReset | Reset your own password
[**authPasswordTokenGet**](ServicesApi.md#authPasswordTokenGet) | **GET** /auth/passwordToken | Get token to change password
[**authSamlPost**](ServicesApi.md#authSamlPost) | **POST** /auth/saml | Register or Update a SAML user
[**authUser**](ServicesApi.md#authUser) | **GET** /auth/user | Return the current logged in user
[**configurationGet**](ServicesApi.md#configurationGet) | **GET** /service/configuration | Retrieve the App configuration
[**logoutUser**](ServicesApi.md#logoutUser) | **GET** /auth/logout | Log out current user terminating the session
[**oauthTokenPost**](ServicesApi.md#oauthTokenPost) | **POST** /oauth/token | Get the bearer token
[**pdfResourceIdThumbsGet**](ServicesApi.md#pdfResourceIdThumbsGet) | **GET** /pdfResource/{id}/thumbs | Retrieve a Resource (of service)
[**serviceChangePasswordPost**](ServicesApi.md#serviceChangePasswordPost) | **POST** /service/changePassword | Change the password of a service user
[**serviceUsersSyncPost**](ServicesApi.md#serviceUsersSyncPost) | **POST** /service/users/sync | Sync user accounts



## authChangePasswordPost

> authChangePasswordPost($password_token, $body)

Consume a token to change the password

This API allows to change the password by consuming a token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$password_token = 05ea656f-df69-49b1-a12b-9bf640c427c2; // string | The password token issued to change password
$body = 'body_example'; // string | New password associated to the account (BCrypt)

try {
    $apiInstance->authChangePasswordPost($password_token, $body);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->authChangePasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password_token** | **string**| The password token issued to change password |
 **body** | **string**| New password associated to the account (BCrypt) |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: text/plain
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## authPasswordLostGet

> authPasswordLostGet($username, $domain)

Request to recover own password

This API requests to recover the own password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$username = jdo; // string | Username associated to the account
$domain = demo; // string | Domain associated to the account

try {
    $apiInstance->authPasswordLostGet($username, $domain);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->authPasswordLostGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Username associated to the account |
 **domain** | **string**| Domain associated to the account |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## authPasswordResetGet

> authPasswordResetGet($username, $domain)

Reset a user password with superuser

This API allows to reset the password of a user. This is possible when the request is performed with a superuser.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = jdo; // string | Username associated to the account
$domain = demo; // string | Domain associated to the account

try {
    $apiInstance->authPasswordResetGet($username, $domain);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->authPasswordResetGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Username associated to the account |
 **domain** | **string**| Domain associated to the account |

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


## authPasswordResetPost

> authPasswordResetPost($inline_object4)

Reset your own password

This API allows to reset your own password knowing the previous one with a logged user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object4 = new \OpenAPI\Client\Model\InlineObject4(); // \OpenAPI\Client\Model\InlineObject4 | 

try {
    $apiInstance->authPasswordResetPost($inline_object4);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->authPasswordResetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object4** | [**\OpenAPI\Client\Model\InlineObject4**](../Model/InlineObject4.md)|  |

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


## authPasswordTokenGet

> object[] authPasswordTokenGet()

Get token to change password

This API allows to get a password token to use in order to change a password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authPasswordTokenGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->authPasswordTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object[]**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## authSamlPost

> authSamlPost($domain, $id_token1, $id_token2)

Register or Update a SAML user

This API allows to register or Update a SAML user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$domain = 'domain_example'; // string | SAML domain
$id_token1 = 'id_token1_example'; // string | The BASE64-encoded SAML Reply in JSON
$id_token2 = 'id_token2_example'; // string | The Hex-encoded HMAC-SHA256 of the decoded IDToken1

try {
    $apiInstance->authSamlPost($domain, $id_token1, $id_token2);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->authSamlPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **domain** | **string**| SAML domain |
 **id_token1** | **string**| The BASE64-encoded SAML Reply in JSON |
 **id_token2** | **string**| The Hex-encoded HMAC-SHA256 of the decoded IDToken1 |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/x-www-form-urlencoded
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## authUser

> \OpenAPI\Client\Model\User authUser()

Return the current logged in user

This API allows to retrieve the current logged in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->authUser();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->authUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\User**](../Model/User.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## configurationGet

> map[string,object] configurationGet()

Retrieve the App configuration

This API allows to get the public configuration associated to the application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->configurationGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->configurationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

**map[string,object]**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## logoutUser

> logoutUser()

Log out current user terminating the session

This API allows to Log out current user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->logoutUser();
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->logoutUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

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


## oauthTokenPost

> \OpenAPI\Client\Model\InlineResponse200 oauthTokenPost($username, $password, $grant_type)

Get the bearer token

This API allows to get the token needed to access other APIs through the OAuth2 authentication.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: Basic
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = 'username_example'; // string | The username in the form _username_@_domain_ where *domain* is the organization the user belongs to
$password = 'password_example'; // string | This is the actual password of the user
$grant_type = 'grant_type_example'; // string | A parameter that indicates the type of the grant in order to perform the basic authentication

try {
    $result = $apiInstance->oauthTokenPost($username, $password, $grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->oauthTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| The username in the form _username_@_domain_ where *domain* is the organization the user belongs to | [optional]
 **password** | **string**| This is the actual password of the user | [optional]
 **grant_type** | **string**| A parameter that indicates the type of the grant in order to perform the basic authentication | [optional]

### Return type

[**\OpenAPI\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[Basic](../../README.md#Basic)

### HTTP request headers

- **Content-Type**: multipart/form-data
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## pdfResourceIdThumbsGet

> \SplFileObject pdfResourceIdThumbsGet($id, $page, $width)

Retrieve a Resource (of service)

This API allows to extract thumbnails from a PDF Resource.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$page = 1; // int | The page to retrieve
$width = 20; // int | The output image width

try {
    $result = $apiInstance->pdfResourceIdThumbsGet($id, $page, $width);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->pdfResourceIdThumbsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **page** | **int**| The page to retrieve |
 **width** | **int**| The output image width | [optional]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: image/jpeg, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## serviceChangePasswordPost

> serviceChangePasswordPost($username, $domain, $body)

Change the password of a service user

This API allows to change the password of a **service user**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$username = jdo; // string | Username associated to the account
$domain = demo; // string | Domain associated to the account
$body = 'body_example'; // string | New password associated to the account (BCrypt)

try {
    $apiInstance->serviceChangePasswordPost($username, $domain, $body);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->serviceChangePasswordPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **username** | **string**| Username associated to the account |
 **domain** | **string**| Domain associated to the account |
 **body** | **string**| New password associated to the account (BCrypt) |

### Return type

void (empty response body)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: text/plain
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## serviceUsersSyncPost

> \OpenAPI\Client\Model\UserSyncReport serviceUsersSyncPost($inline_object)

Sync user accounts

This API allows to sync user accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\ServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inline_object = array(new \OpenAPI\Client\Model\InlineObject()); // \OpenAPI\Client\Model\InlineObject[] | User Accounts

try {
    $result = $apiInstance->serviceUsersSyncPost($inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServicesApi->serviceUsersSyncPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inline_object** | [**\OpenAPI\Client\Model\InlineObject[]**](../Model/InlineObject.md)| User Accounts |

### Return type

[**\OpenAPI\Client\Model\UserSyncReport**](../Model/UserSyncReport.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

