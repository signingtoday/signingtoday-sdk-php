# OpenAPI\Client\UsersApi

All URIs are relative to *https://web.sandbox.signingtoday.com/api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**userIdDelete**](UsersApi.md#userIdDelete) | **DELETE** /user/{id} | Enable or disable a User
[**userIdGet**](UsersApi.md#userIdGet) | **GET** /user/{id} | Retrieve a User
[**userIdIdentitiesGet**](UsersApi.md#userIdIdentitiesGet) | **GET** /user/{id}/identities | Retrieve User identities
[**userIdPut**](UsersApi.md#userIdPut) | **PUT** /user/{id} | Update a User
[**userIdRolePut**](UsersApi.md#userIdRolePut) | **PUT** /user/{id}/role | Change the User role
[**usersGet**](UsersApi.md#usersGet) | **GET** /users | Retrieve Users
[**usersGroupsGet**](UsersApi.md#usersGroupsGet) | **GET** /users/groups | Retrieve UserGroups
[**usersGroupsPost**](UsersApi.md#usersGroupsPost) | **POST** /users/groups | Create a new UserGroups
[**usersPost**](UsersApi.md#usersPost) | **POST** /users | Create a new User



## userIdDelete

> userIdDelete($id, $enabled)

Enable or disable a User

This API allows to **enable** or **disable** a User account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$enabled = true; // bool | This is a _boolean_ parameter. If true the User is **enabled**

try {
    $apiInstance->userIdDelete($id, $enabled);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **enabled** | **bool**| This is a _boolean_ parameter. If true the User is **enabled** | [optional] [default to false]

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


## userIdGet

> \OpenAPI\Client\Model\User userIdGet($id)

Retrieve a User

This API allows to retrieve a User.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $result = $apiInstance->userIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |

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


## userIdIdentitiesGet

> \OpenAPI\Client\Model\Identity[] userIdIdentitiesGet($id)

Retrieve User identities

This API allows to retrieve user identities.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_

try {
    $result = $apiInstance->userIdIdentitiesGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userIdIdentitiesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |

### Return type

[**\OpenAPI\Client\Model\Identity[]**](../Model/Identity.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## userIdPut

> userIdPut($id, $user)

Update a User

This API allows to update a User.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$user = new \OpenAPI\Client\Model\User(); // \OpenAPI\Client\Model\User | User replacing current object.

try {
    $apiInstance->userIdPut($id, $user);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **user** | [**\OpenAPI\Client\Model\User**](../Model/User.md)| User replacing current object. |

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


## userIdRolePut

> userIdRolePut($id, $new_role)

Change the User role

This API allows to change the permissions associated to the users, (**capabilities**) according to predefined user roles.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 737dc132-a3f0-11e9-a2a3-2a2ae2dbcce4; // string | The value of _the unique id_
$new_role = instructor; // string | The new **role** of the User. Allowed values are **admin**, **instructor**, **signer**

try {
    $apiInstance->userIdRolePut($id, $new_role);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->userIdRolePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)| The value of _the unique id_ |
 **new_role** | **string**| The new **role** of the User. Allowed values are **admin**, **instructor**, **signer** |

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


## usersGet

> \OpenAPI\Client\Model\UsersGetResponse usersGet($top, $skip, $count, $order_by, $filter)

Retrieve Users

This allows to get the list of the Users of an Organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 32; // int | A number of results to return. Applied after **$skip**
$skip = 64; // int | An offset into the collection of results
$count = true; // bool | If true, the server includes the count of all the items in the response
$order_by = $orderBy=updatedAt; // string | An ordering definition (eg. $orderBy=updatedAt,desc)
$filter = $filter=name=="Milk"; // string | A filter definition (eg. $filter=name == \"Milk\" or surname == \"Bread\")

try {
    $result = $apiInstance->usersGet($top, $skip, $count, $order_by, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **top** | **int**| A number of results to return. Applied after **$skip** | [optional]
 **skip** | **int**| An offset into the collection of results | [optional]
 **count** | **bool**| If true, the server includes the count of all the items in the response | [optional]
 **order_by** | **string**| An ordering definition (eg. $orderBy&#x3D;updatedAt,desc) | [optional]
 **filter** | **string**| A filter definition (eg. $filter&#x3D;name &#x3D;&#x3D; \&quot;Milk\&quot; or surname &#x3D;&#x3D; \&quot;Bread\&quot;) | [optional]

### Return type

[**\OpenAPI\Client\Model\UsersGetResponse**](../Model/UsersGetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersGroupsGet

> \OpenAPI\Client\Model\UserGroupGetResponse usersGroupsGet($top, $skip, $count, $order_by, $filter)

Retrieve UserGroups

This API allows to get the list of the UserGroups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$top = 32; // int | A number of results to return. Applied after **$skip**
$skip = 64; // int | An offset into the collection of results
$count = true; // bool | If true, the server includes the count of all the items in the response
$order_by = $orderBy=updatedAt; // string | An ordering definition (eg. $orderBy=updatedAt,desc)
$filter = $filter=name=="Milk"; // string | A filter definition (eg. $filter=name == \"Milk\" or surname == \"Bread\")

try {
    $result = $apiInstance->usersGroupsGet($top, $skip, $count, $order_by, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **top** | **int**| A number of results to return. Applied after **$skip** | [optional]
 **skip** | **int**| An offset into the collection of results | [optional]
 **count** | **bool**| If true, the server includes the count of all the items in the response | [optional]
 **order_by** | **string**| An ordering definition (eg. $orderBy&#x3D;updatedAt,desc) | [optional]
 **filter** | **string**| A filter definition (eg. $filter&#x3D;name &#x3D;&#x3D; \&quot;Milk\&quot; or surname &#x3D;&#x3D; \&quot;Bread\&quot;) | [optional]

### Return type

[**\OpenAPI\Client\Model\UserGroupGetResponse**](../Model/UserGroupGetResponse.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json, */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## usersGroupsPost

> usersGroupsPost($user_group)

Create a new UserGroups

This API allows to create a new UserGroups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_group = array(new \OpenAPI\Client\Model\UserGroup()); // \OpenAPI\Client\Model\UserGroup[] | UserGroup list to be added.

try {
    $apiInstance->usersGroupsPost($user_group);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersGroupsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_group** | [**\OpenAPI\Client\Model\UserGroup[]**](../Model/UserGroup.md)| UserGroup list to be added. |

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


## usersPost

> string usersPost($create_user_request)

Create a new User

This API allows to create a new User.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\UsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_user_request = new \OpenAPI\Client\Model\CreateUserRequest(); // \OpenAPI\Client\Model\CreateUserRequest | 

try {
    $result = $apiInstance->usersPost($create_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsersApi->usersPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_user_request** | [**\OpenAPI\Client\Model\CreateUserRequest**](../Model/CreateUserRequest.md)|  |

### Return type

**string**

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: */*

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

