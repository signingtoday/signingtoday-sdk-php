# OpenAPI\Client\Bit4idPathgroupUsersApi

All URIs are relative to *https://sandbox.signingtoday.com/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createUser**](Bit4idPathgroupUsersApi.md#createUser) | **POST** /{organization-id}/users | Create a user of the organization
[**getUser**](Bit4idPathgroupUsersApi.md#getUser) | **GET** /{organization-id}/users/{user-id} | Get information about an user
[**listUsers**](Bit4idPathgroupUsersApi.md#listUsers) | **GET** /{organization-id}/users | Enumerate the users of an organization
[**updateUser**](Bit4idPathgroupUsersApi.md#updateUser) | **PUT** /{organization-id}/users/{user-id} | Edit one or more user properties



## createUser

> \OpenAPI\Client\Model\InlineResponse201 createUser($organization_id, $create_user)

Create a user of the organization

This API allows to create a new user of the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$create_user = new \OpenAPI\Client\Model\CreateUser(); // \OpenAPI\Client\Model\CreateUser | The new user object to create

try {
    $result = $apiInstance->createUser($organization_id, $create_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Bit4idPathgroupUsersApi->createUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **create_user** | [**\OpenAPI\Client\Model\CreateUser**](../Model/CreateUser.md)| The new user object to create |

### Return type

[**\OpenAPI\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getUser

> \OpenAPI\Client\Model\InlineResponse201 getUser($organization_id, $user_id)

Get information about an user

This API allows to get information about an user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$user_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **user-id** is the uuid code that identifies a user of an organization. It is used as a path parameter to restrict the requested operation to the scope of that user

try {
    $result = $apiInstance->getUser($organization_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Bit4idPathgroupUsersApi->getUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **user_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **user-id** is the uuid code that identifies a user of an organization. It is used as a path parameter to restrict the requested operation to the scope of that user |

### Return type

[**\OpenAPI\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## listUsers

> \OpenAPI\Client\Model\InlineResponse2001 listUsers($organization_id, $where_membership_id, $where_email, $where_last_name, $where_first_name, $where_automatic, $where_rao, $page, $count, $where_order)

Enumerate the users of an organization

This API allows to enumerate the users of an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$where_membership_id = jdo; // string | Returns the users that have the specified id
$where_email = test@mail.com; // string | Returns the users that have the specified email
$where_last_name = Doe; // string | Returns the users that have the specified last name
$where_first_name = John; // string | Returns the users that have the specified first name
$where_automatic = false; // bool | If set up to **true** returns automatic users only, otherwise returns non automatic users only
$where_rao = false; // bool | If set up to **true** returns rao users only, otherwise returns non rao users only
$page = 1; // int | Restricts the search to the chosen page
$count = 100; // int | Sets the number of users per page to display
$where_order = where_first_name; // string | The **where_order** query parameter takes one or more values separated by a comma and a space. The result will be ordered by the first value (ascending order is implied; a \"**-**\" in front of the value indicates descending order), then the second value and so on

try {
    $result = $apiInstance->listUsers($organization_id, $where_membership_id, $where_email, $where_last_name, $where_first_name, $where_automatic, $where_rao, $page, $count, $where_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Bit4idPathgroupUsersApi->listUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **where_membership_id** | **string**| Returns the users that have the specified id | [optional]
 **where_email** | **string**| Returns the users that have the specified email | [optional]
 **where_last_name** | **string**| Returns the users that have the specified last name | [optional]
 **where_first_name** | **string**| Returns the users that have the specified first name | [optional]
 **where_automatic** | **bool**| If set up to **true** returns automatic users only, otherwise returns non automatic users only | [optional]
 **where_rao** | **bool**| If set up to **true** returns rao users only, otherwise returns non rao users only | [optional]
 **page** | **int**| Restricts the search to the chosen page | [optional]
 **count** | **int**| Sets the number of users per page to display | [optional] [default to 100]
 **where_order** | **string**| The **where_order** query parameter takes one or more values separated by a comma and a space. The result will be ordered by the first value (ascending order is implied; a \&quot;**-**\&quot; in front of the value indicates descending order), then the second value and so on | [optional]

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


## updateUser

> \OpenAPI\Client\Model\InlineResponse201 updateUser($organization_id, $user_id, $update_user)

Edit one or more user properties

This API allows to edit one or more user properties.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupUsersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = api-demo; // string | The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization
$user_id = new \OpenAPI\Client\Model\\OpenAPI\Client\Model\Id(); // \OpenAPI\Client\Model\Id | The **user-id** is the uuid code that identifies a user of an organization. It is used as a path parameter to restrict the requested operation to the scope of that user
$update_user = new \OpenAPI\Client\Model\UpdateUser(); // \OpenAPI\Client\Model\UpdateUser | User properties to be edited

try {
    $result = $apiInstance->updateUser($organization_id, $user_id, $update_user);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Bit4idPathgroupUsersApi->updateUser: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| The **organization-id** represents an organization that is included in the SigninToday application, also know as **slug** and it is used as a path parameter to restrict the asked functionality to the specified organization | [default to &#39;api-demo&#39;]
 **user_id** | [**\OpenAPI\Client\Model\Id**](../Model/.md)| The **user-id** is the uuid code that identifies a user of an organization. It is used as a path parameter to restrict the requested operation to the scope of that user |
 **update_user** | [**\OpenAPI\Client\Model\UpdateUser**](../Model/UpdateUser.md)| User properties to be edited |

### Return type

[**\OpenAPI\Client\Model\InlineResponse201**](../Model/InlineResponse201.md)

### Authorization

[ApiKeyAuth](../../README.md#ApiKeyAuth)

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

