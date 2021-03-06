# OpenAPI\Client\IdentitiesApi

All URIs are relative to *https://sandbox.signingtoday.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**associateAppearance**](IdentitiesApi.md#associateAppearance) | **POST** /{organization-id}/identities/{identity-id}/appearance | Associate an appearance to an identity
[**associateIdentity**](IdentitiesApi.md#associateIdentity) | **POST** /{organization-id}/users/{user-id}/wallet | Associate to an user an already existing identity
[**createTokenFromIdentity**](IdentitiesApi.md#createTokenFromIdentity) | **POST** /{organization-id}/identities/create/token | Create an identity from token
[**deleteAppearance**](IdentitiesApi.md#deleteAppearance) | **DELETE** /{organization-id}/identities/{identity-id}/appearance | Delete the appearance of an identity
[**deleteEnrollmentRequest**](IdentitiesApi.md#deleteEnrollmentRequest) | **DELETE** /{organization-id}/identity-requests/{enrollment-id} | Delete an enrollment request
[**deleteIdentity**](IdentitiesApi.md#deleteIdentity) | **DELETE** /{organization-id}/identities/{identity-id} | Delete an identity
[**getEnrollmentRequest**](IdentitiesApi.md#getEnrollmentRequest) | **GET** /{organization-id}/identity-requests/{enrollment-id} | Get information about an enrollment request
[**getIdentity**](IdentitiesApi.md#getIdentity) | **GET** /{organization-id}/identities/{identity-id} | Get information about an identity
[**listEnrollmentRequests**](IdentitiesApi.md#listEnrollmentRequests) | **GET** /{organization-id}/identity-requests | Enumerate the enrollment requests of an organization
[**listIdentities**](IdentitiesApi.md#listIdentities) | **GET** /{organization-id}/identities | Enumerate the identities of an organization
[**listUserEnrollments**](IdentitiesApi.md#listUserEnrollments) | **GET** /{organization-id}/users/{user-id}/identity-requests | List the enrollments of an user
[**listUserIdentities**](IdentitiesApi.md#listUserIdentities) | **GET** /{organization-id}/users/{user-id}/wallet | Enumerate the identities of an user
[**requestEnrollment**](IdentitiesApi.md#requestEnrollment) | **POST** /{organization-id}/enroll | Submit an enrollment request



## associateAppearance

> \OpenAPI\Client\Model\InlineResponse2004 associateAppearance($organization_id, $identity_id, $inline_object)

Associate an appearance to an identity

Associate a signature appearance to an already existing identity through an url to an image. This appearance will be displayed on the document after the signature.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$identity_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **identity-id** is the uuid code that identifies an identity in the wallet of an user. It is, as well, used to restrict the requested operation to the scope of that identity
$inline_object = new \OpenAPI\Client\Model\InlineObject(); // \OpenAPI\Client\Model\InlineObject | 

try {
    $result = $apiInstance->associateAppearance($organization_id, $identity_id, $inline_object);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->associateAppearance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **identity_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **identity-id** is the uuid code that identifies an identity in the wallet of an user. It is, as well, used to restrict the requested operation to the scope of that identity |
 **inline_object** | [**\OpenAPI\Client\Model\InlineObject**](../Model/InlineObject.md)|  |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## associateIdentity

> \OpenAPI\Client\Model\InlineResponse2004 associateIdentity($organization_id, $user_id, $identity_association)

Associate to an user an already existing identity

Associate to an user of the organization an already existing identity of a provider. The _provider_data_ field is an object and is different for each provider. The minimum set of information to provide as provider_data is the following:   - **aruba**     - _auth_domain_ : string     - _username_ : string     - _password_ : string   - **aruba-auto**     - _auth_domain_ : string     - _username_ : string     - _password_ : string   - **infocert**     - _username_ : string     - _password_ : string   - **namirial**     - _id_titolare_ : string     - _id_otp_ : string     - _username_ : string     - _password_ : string

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$user_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **user-id** is the uuid code that identifies a user of an organization. It is used as a path parameter to restrict the requested operation to the scope of that user
$identity_association = new \OpenAPI\Client\Model\IdentityAssociation(); // \OpenAPI\Client\Model\IdentityAssociation | Provider data to associate

try {
    $result = $apiInstance->associateIdentity($organization_id, $user_id, $identity_association);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->associateIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **user_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **user-id** is the uuid code that identifies a user of an organization. It is used as a path parameter to restrict the requested operation to the scope of that user |
 **identity_association** | [**\OpenAPI\Client\Model\IdentityAssociation**](../Model/IdentityAssociation.md)| Provider data to associate |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2004**](../Model/InlineResponse2004.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## createTokenFromIdentity

> \OpenAPI\Client\Model\InlineResponse2012 createTokenFromIdentity($organization_id, $create_identityby_token)

Create an identity from token

This API allows to create an identity from a token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$create_identityby_token = new \OpenAPI\Client\Model\CreateIdentitybyToken(); // \OpenAPI\Client\Model\CreateIdentitybyToken | Body of the request to create an identity from a token

try {
    $result = $apiInstance->createTokenFromIdentity($organization_id, $create_identityby_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->createTokenFromIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **create_identityby_token** | [**\OpenAPI\Client\Model\CreateIdentitybyToken**](../Model/CreateIdentitybyToken.md)| Body of the request to create an identity from a token |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2012**](../Model/InlineResponse2012.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## deleteAppearance

> \OpenAPI\Client\Model\InlineResponse2004 deleteAppearance($organization_id, $identity_id)

Delete the appearance of an identity

This API allows to delete the appearance associated to an identity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$identity_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **identity-id** is the uuid code that identifies an identity in the wallet of an user. It is, as well, used to restrict the requested operation to the scope of that identity

try {
    $result = $apiInstance->deleteAppearance($organization_id, $identity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->deleteAppearance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **identity_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **identity-id** is the uuid code that identifies an identity in the wallet of an user. It is, as well, used to restrict the requested operation to the scope of that identity |

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


## deleteEnrollmentRequest

> \OpenAPI\Client\Model\InlineResponse2012 deleteEnrollmentRequest($organization_id, $enrollment_id)

Delete an enrollment request

This API allows to delete an enrollment request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$enrollment_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **enrollment-id** is the uuid code that identifies a specific enrollment request

try {
    $result = $apiInstance->deleteEnrollmentRequest($organization_id, $enrollment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->deleteEnrollmentRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **enrollment_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **enrollment-id** is the uuid code that identifies a specific enrollment request |

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


## deleteIdentity

> \OpenAPI\Client\Model\InlineResponse2003 deleteIdentity($organization_id, $identity_id)

Delete an identity

This API allows to delete an identity of an user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$identity_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **identity-id** is the uuid code that identifies an identity in the wallet of an user. It is, as well, used to restrict the requested operation to the scope of that identity

try {
    $result = $apiInstance->deleteIdentity($organization_id, $identity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->deleteIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **identity_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **identity-id** is the uuid code that identifies an identity in the wallet of an user. It is, as well, used to restrict the requested operation to the scope of that identity |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getEnrollmentRequest

> \OpenAPI\Client\Model\InlineResponse2011 getEnrollmentRequest($organization_id, $enrollment_id)

Get information about an enrollment request

This API allows to get information about an enrollment request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$enrollment_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **enrollment-id** is the uuid code that identifies a specific enrollment request

try {
    $result = $apiInstance->getEnrollmentRequest($organization_id, $enrollment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->getEnrollmentRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **enrollment_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **enrollment-id** is the uuid code that identifies a specific enrollment request |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getIdentity

> \OpenAPI\Client\Model\InlineResponse2002 getIdentity($organization_id, $identity_id)

Get information about an identity

This API allows to get all the information of an identity.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$identity_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **identity-id** is the uuid code that identifies an identity in the wallet of an user. It is, as well, used to restrict the requested operation to the scope of that identity

try {
    $result = $apiInstance->getIdentity($organization_id, $identity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->getIdentity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **identity_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **identity-id** is the uuid code that identifies an identity in the wallet of an user. It is, as well, used to restrict the requested operation to the scope of that identity |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listEnrollmentRequests

> \OpenAPI\Client\Model\InlineResponse2005 listEnrollmentRequests($organization_id, $where_provider, $where_user, $where_first_name, $where_last_name, $where_registered_by, $where_fiscal_code, $page, $count)

Enumerate the enrollment requests of an organization

This API allows to enumerate the enrollment requests of an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$where_provider = sms; // string | Returns the identity requests that have been issued by the specified provider
$where_user = msa; // string | Returns the identity requests of the specified user, searched by its id
$where_first_name = John; // string | Returns the identity requests of the users that have the specified first name
$where_last_name = Doe; // string | Returns the identity requests of the users that have the specified last name
$where_registered_by = fba; // string | Returns the identity requests registered by this user
$where_fiscal_code = MLLSNT82P65Z404U; // string | Returns the identity requests have the specified fiscal code
$page = 1; // int | Restricts the search to the chosen page
$count = 100; // int | Sets the number of users per page to display

try {
    $result = $apiInstance->listEnrollmentRequests($organization_id, $where_provider, $where_user, $where_first_name, $where_last_name, $where_registered_by, $where_fiscal_code, $page, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->listEnrollmentRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **where_provider** | **string**| Returns the identity requests that have been issued by the specified provider | [optional]
 **where_user** | **string**| Returns the identity requests of the specified user, searched by its id | [optional]
 **where_first_name** | **string**| Returns the identity requests of the users that have the specified first name | [optional]
 **where_last_name** | **string**| Returns the identity requests of the users that have the specified last name | [optional]
 **where_registered_by** | **string**| Returns the identity requests registered by this user | [optional]
 **where_fiscal_code** | **string**| Returns the identity requests have the specified fiscal code | [optional]
 **page** | **int**| Restricts the search to the chosen page | [optional]
 **count** | **int**| Sets the number of users per page to display | [optional] [default to 100]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listIdentities

> \OpenAPI\Client\Model\InlineResponse2001 listIdentities($organization_id, $where_provider, $where_user, $where_first_name, $where_last_name, $where_registered_by, $where_fiscal_code, $page, $count)

Enumerate the identities of an organization

This API allows to enumerate all the users of an organization. It is possible to filter the data using the supported _django lookups_.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$where_provider = sms; // string | Returns the identities that have been issued by the specified provider
$where_user = msa; // string | Returns the identities of the specified user, searched by its id
$where_first_name = John; // string | Returns the identities of the users that have the specified first name
$where_last_name = Doe; // string | Returns the identities of the users that have the specified last name
$where_registered_by = fba; // string | Returns the identities registered by this user
$where_fiscal_code = MLLSNT82P65Z404U; // string | Returns the identities that have the specified fiscal code
$page = 1; // int | Restricts the search to the chosen page
$count = 100; // int | Sets the number of users per page to display

try {
    $result = $apiInstance->listIdentities($organization_id, $where_provider, $where_user, $where_first_name, $where_last_name, $where_registered_by, $where_fiscal_code, $page, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->listIdentities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **where_provider** | **string**| Returns the identities that have been issued by the specified provider | [optional]
 **where_user** | **string**| Returns the identities of the specified user, searched by its id | [optional]
 **where_first_name** | **string**| Returns the identities of the users that have the specified first name | [optional]
 **where_last_name** | **string**| Returns the identities of the users that have the specified last name | [optional]
 **where_registered_by** | **string**| Returns the identities registered by this user | [optional]
 **where_fiscal_code** | **string**| Returns the identities that have the specified fiscal code | [optional]
 **page** | **int**| Restricts the search to the chosen page | [optional]
 **count** | **int**| Sets the number of users per page to display | [optional] [default to 100]

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listUserEnrollments

> \OpenAPI\Client\Model\InlineResponse2005 listUserEnrollments($organization_id, $user_id, $page, $count)

List the enrollments of an user

This API allows to list all the enrollments of an user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$user_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **user-id** is the uuid code that identifies a user of an organization. It is used as a path parameter to restrict the requested operation to the scope of that user
$page = 1; // int | Restricts the search to the chosen page
$count = 100; // int | Sets the number of users per page to display

try {
    $result = $apiInstance->listUserEnrollments($organization_id, $user_id, $page, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->listUserEnrollments: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\OpenAPI\Client\Model\InlineResponse2005**](../Model/InlineResponse2005.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listUserIdentities

> \OpenAPI\Client\Model\InlineResponse2001 listUserIdentities($organization_id, $user_id, $page, $count)

Enumerate the identities of an user

This API allows to enumerate all the identities of an user, which are located in its wallet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$user_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **user-id** is the uuid code that identifies a user of an organization. It is used as a path parameter to restrict the requested operation to the scope of that user
$page = 1; // int | Restricts the search to the chosen page
$count = 100; // int | Sets the number of users per page to display

try {
    $result = $apiInstance->listUserIdentities($organization_id, $user_id, $page, $count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->listUserIdentities: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\OpenAPI\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## requestEnrollment

> \OpenAPI\Client\Model\InlineResponse2011 requestEnrollment($organization_id, $identity_request)

Submit an enrollment request

This API allows to submit an enrollment request. The user of the request will be created if it does not exists already.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\IdentitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$identity_request = new \OpenAPI\Client\Model\IdentityRequest(); // \OpenAPI\Client\Model\IdentityRequest | The enrollment request to submit

try {
    $result = $apiInstance->requestEnrollment($organization_id, $identity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentitiesApi->requestEnrollment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **identity_request** | [**\OpenAPI\Client\Model\IdentityRequest**](../Model/IdentityRequest.md)| The enrollment request to submit |

### Return type

[**\OpenAPI\Client\Model\InlineResponse2011**](../Model/InlineResponse2011.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

