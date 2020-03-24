# OpenAPIClient-php

*Signing Today* enables seamless integration of digital signatures into any
website by the use of easy requests to our API. This is the smart way of
adding digital signature support with a great user experience.


*Signing Today APIs* use HTTP methods and are RESTful based, moreover they
are protected by a *server to server authentication* standard by the use of
tokens.


*Signing Today APIs* can be used in these environments:


| Environment | Description | Endpoint |
| ----------- | ----------- | -------- |
| Sandbox     | Test environment | `https://sandbox.signingtoday.com` |
| Live        | Production environment | `https://api.signingtoday.com` |


For every single request to Signing Today has to be defined the following
*HTTP* header:
- `Authorization`, which contains the authentication token.

If the request has a body than another *HTTP* header is requested:
- `Content-Type`, with `application/json` value.


Follows an example of usage to enumerate all the user of *my-org*
organization.

**Example**

```json
$ curl https://sandbox.signingtoday.com/api/v1/my-org/users \\
    -H 'Authorization: Token <access-token>'
```

## HTTP methods used

APIs use the right HTTP verb in every situation.

| Method   | Description                    |
| -------- | ------------------------------ |
| `GET`    | Request data from a resource   |
| `POST`   | Send data to create a resource |
| `PUT`    | Update a resource              |
| `PATCH`  | Partially update a resource    |
| `DELETE` | Delete a resourse              |


## Response definition

All the response are in JSON format.
As response to a request of all users of an organization you will have a
result like this:

```json
{
    \"pagination\": {
      \"count\": 75,
      \"previous\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=1\",
      \"next\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=3\",
      \"pages\": 8,
      \"page\": 2
    },
    \"meta\": {
      \"code\": 200
    },
    \"data\": [
      {
        \"id\": \"jdo\",
        \"status\": \"enabled\",
        \"type\": \"Basic user account\",
        \"email\": johndoe@dummyemail.com,
        \"first_name\": \"John\",
        \"last_name\": \"Doe\",
        \"wallet\": [],
        \"created_by\": \"system\",
        \"owner\": false,
        \"automatic\": false,
        \"rao\": false
      },
      ...
    ]
  }
```

The JSON of the response is made of three parts:
- Pagination
- Meta
- Data

### Pagination

*Pagination* object allows to split the response into parts and then to
rebuild it sequentially by the use of `next` and `previous` parameters, by
which you get previous and following blocks. The *Pagination* is present
only if the response is a list of objects.

The general structure of *Pagination* object is the following:

```json
{
    \"pagination\": {
      \"count\": 75,
      \"previous\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=1\",
      \"next\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=3\",
      \"pages\": 8,
      \"page\": 2
    },
    ...
  }
```

### Meta

*Meta* object is used to enrich the information about the response. In the
previous example, a successful case of response, *Meta* will have value
`status: 2XX`. In case of unsuccessful response, *Meta* will have further
information, as follows:

```json
{
    \"meta\": {
      \"code\": <HTTP STATUS CODE>,
      \"error_type\": <STATUS CODE DESCRIPTION>,
      \"error_message\": <ERROR DESCRIPTION>
    }
  }
```

### Data

*Data* object outputs as object or list of them. Contains the expected data
as requested to the API.

## Search filters

Search filters of the API have the following structure:

`where_ATTRIBUTENAME`=`VALUE`

In this way you make a case-sensitive search of *VALUE*. You can extend it
through the Django lookup, obtaining more specific filters. For example:

`where_ATTRIBUTENAME__LOOKUP`=`VALUE`

where *LOOKUP* can be replaced with `icontains` to have a partial insensitive
research, where

`where_first_name__icontains`=`CHa`

matches with every user that have the *cha* string in their name, with
no differences between capital and lower cases.

[Here](https://docs.djangoproject.com/en/1.11/ref/models/querysets/#field-lookups)
the list of the lookups.

## Webhooks

Signing Today supports webhooks for the update of DSTs and identities status.
You can choose if to use or not webhooks and if you want to receive updates
about DSTs and/or identities. You can configurate it on application token
level, in the *webhook* field, as follows:

```json
\"webhooks\": {
  \"dst\": \"URL\",
  \"identity\": \"URL\"
  }
```

### DSTs status update

DSTs send the following status updates:
- **DST_STATUS_CHANGED**: whenever the DST changes its status
- **SIGNATURE_STATUS_CHANGED**: whenever one of the signatures changes its
status

#### DST_STATUS_CHANGED

Sends the following information:

```json
{
    \"message\": \"DST_STATUS_CHANGED\",
    \"data\": {
      \"status\": \"<DST_STATUS>\",
      \"dst\": \"<DST_ID>\",
      \"reason\": \"<DST_REASON>\"
    }
  }
```

#### SIGNATURE_STATUS_CHANGED

Sends the following information:

```json
{
    \"message\": \"SIGNATURE_STATUS_CHANGED\",
    \"data\": {
      \"status\": \"<SIGNATURE_STATUS>\",
      \"group\": <MEMBERSHIP_GROUP_INDEX>,
      \"dst\": {
        \"id\": \"<DST_ID>\",
        \"title\": \"<DST_TITLE>\"
      },
      \"signature\": \"<SIGNATURE_ID>\",
      \"signer\": \"<SIGNER_USERNAME>\",
      \"position\": \"<SIGNATURE_POSITION>\",
      \"document\": {
        \"display_name\": \"<DOCUMENT_TITLE>\",
        \"id\": \"<DOCUMENT_ID>\",
        \"order\": <DOCUMENT_INDEX>
      },
      \"automatic\": <DECLARES_IF_THE_SIGNER_IS_AUTOMATIC>,
      \"page\": \"<SIGNATURE_PAGE>\"
    }
  }
```

### Identities status update

Identities send the following status updates:
- **IDENTITY_REQUEST_ENROLLED**: whenever an identity request is activated

#### IDENTITY_REQUEST_ENROLLED

Sends the following information:

```json
{
    \"message\": \"IDENTITY_REQUEST_ENROLLED\",
    \"data\": {
      \"status\": \"<REQUEST_STATUS>\",
      \"request\": \"<REQUEST_ID>\",
      \"user\": \"<APPLICANT_USERNAME>\"
    }
  }
```

### Urlback

Sometimes may be necessary to make a redirect after an user, from the
signature tray, has completed his operations or activated a certificate.

If set, redirects could happen in 3 cases:
- after a signature or decline
- after a DST has been signed by all the signers or canceled
- after the activation of a certificate

In the first two cases the urlback returns the following information through
a data form:
- **dst-id**: id of the DST
- **dst-url**: signature_ticket of the signature
- **dst-status**: current status of the DST
- **dst-signature-id**: id of the signature
- **dst-signature-status**: current status of the signature
- **user**: username of the signer
- **decline-reason**: in case of a refused DST contains the reason of the
decline

In the last case the urlback returns the following information through a
data form:
- **user**: username of the user activated the certificate
- **identity-provider**: the provider has been used to issue the certificate
- **identity-request-id**: id of the enrollment request
- **identity-id**: id of the new identity
- **identity-label**: the label assigned to the identity
- **identity-certificate**: public key of the certificate




This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 1.5.0
- Build package: org.openapitools.codegen.languages.PhpClientCodegen
For more information, please visit [https://signing.today/contacts/](https://signing.today/contacts/)

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKeyAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\Bit4idPathgroupIdentitiesApi(
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
    echo 'Exception when calling Bit4idPathgroupIdentitiesApi->associateAppearance: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://sandbox.signingtoday.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*Bit4idPathgroupIdentitiesApi* | [**associateAppearance**](docs/Api/Bit4idPathgroupIdentitiesApi.md#associateappearance) | **POST** /{organization-id}/identities/{identity-id}/appearance | Associate an appearance to an identity
*Bit4idPathgroupIdentitiesApi* | [**associateIdentity**](docs/Api/Bit4idPathgroupIdentitiesApi.md#associateidentity) | **POST** /{organization-id}/users/{user-id}/wallet | Associate to an user an already existing identity
*Bit4idPathgroupIdentitiesApi* | [**createTokenFromIdentity**](docs/Api/Bit4idPathgroupIdentitiesApi.md#createtokenfromidentity) | **POST** /{organization-id}/identities/create/token | Create an identity from token
*Bit4idPathgroupIdentitiesApi* | [**deleteAppearance**](docs/Api/Bit4idPathgroupIdentitiesApi.md#deleteappearance) | **DELETE** /{organization-id}/identities/{identity-id}/appearance | Delete the appearance of an identity
*Bit4idPathgroupIdentitiesApi* | [**deleteEnrollmentRequest**](docs/Api/Bit4idPathgroupIdentitiesApi.md#deleteenrollmentrequest) | **DELETE** /{organization-id}/identity-requests/{enrollment-id} | Delete an enrollment request
*Bit4idPathgroupIdentitiesApi* | [**deleteIdentity**](docs/Api/Bit4idPathgroupIdentitiesApi.md#deleteidentity) | **DELETE** /{organization-id}/identities/{identity-id} | Delete an identity
*Bit4idPathgroupIdentitiesApi* | [**getEnrollmentRequest**](docs/Api/Bit4idPathgroupIdentitiesApi.md#getenrollmentrequest) | **GET** /{organization-id}/identity-requests/{enrollment-id} | Get information about an enrollment request
*Bit4idPathgroupIdentitiesApi* | [**getIdentity**](docs/Api/Bit4idPathgroupIdentitiesApi.md#getidentity) | **GET** /{organization-id}/identities/{identity-id} | Get information about an identity
*Bit4idPathgroupIdentitiesApi* | [**listEnrollmentRequests**](docs/Api/Bit4idPathgroupIdentitiesApi.md#listenrollmentrequests) | **GET** /{organization-id}/identity-requests | Enumerate the enrollment requests of an organization
*Bit4idPathgroupIdentitiesApi* | [**listIdentities**](docs/Api/Bit4idPathgroupIdentitiesApi.md#listidentities) | **GET** /{organization-id}/identities | Enumerate the identities of an organization
*Bit4idPathgroupIdentitiesApi* | [**listUserEnrollments**](docs/Api/Bit4idPathgroupIdentitiesApi.md#listuserenrollments) | **GET** /{organization-id}/users/{user-id}/identity-requests | List the enrollments of an user
*Bit4idPathgroupIdentitiesApi* | [**listUserIdentities**](docs/Api/Bit4idPathgroupIdentitiesApi.md#listuseridentities) | **GET** /{organization-id}/users/{user-id}/wallet | Enumerate the identities of an user
*Bit4idPathgroupIdentitiesApi* | [**renewIdentity**](docs/Api/Bit4idPathgroupIdentitiesApi.md#renewidentity) | **POST** /{organization-id}/identity-requests/{enrollment-id}/renew | Renew an Identity
*Bit4idPathgroupIdentitiesApi* | [**requestEnrollment**](docs/Api/Bit4idPathgroupIdentitiesApi.md#requestenrollment) | **POST** /{organization-id}/enroll | Submit an enrollment request
*Bit4idPathgroupOrganizationsApi* | [**getOrganization**](docs/Api/Bit4idPathgroupOrganizationsApi.md#getorganization) | **GET** /organizations/{organization-id} | Get the settings of an oraganization
*Bit4idPathgroupOrganizationsApi* | [**patchOrganization**](docs/Api/Bit4idPathgroupOrganizationsApi.md#patchorganization) | **PATCH** /organizations/{organization-id} | Edit the settings of an organization
*Bit4idPathgroupSignatureTransactionsApi* | [**cancelDST**](docs/Api/Bit4idPathgroupSignatureTransactionsApi.md#canceldst) | **POST** /{organization-id}/signature-transactions/{dst-id}/cancel | Mark a DST as canceled
*Bit4idPathgroupSignatureTransactionsApi* | [**createDST**](docs/Api/Bit4idPathgroupSignatureTransactionsApi.md#createdst) | **POST** /{organization-id}/signature-transactions | Create a Digital Signature Transaction
*Bit4idPathgroupSignatureTransactionsApi* | [**deleteDST**](docs/Api/Bit4idPathgroupSignatureTransactionsApi.md#deletedst) | **DELETE** /{organization-id}/signature-transactions/{dst-id} | Delete a Digital Signature Transaction
*Bit4idPathgroupSignatureTransactionsApi* | [**deleteDSTResources**](docs/Api/Bit4idPathgroupSignatureTransactionsApi.md#deletedstresources) | **DELETE** /{organization-id}/signature-transactions/{dst-id}/resources | Delete the resources of a DST
*Bit4idPathgroupSignatureTransactionsApi* | [**getDST**](docs/Api/Bit4idPathgroupSignatureTransactionsApi.md#getdst) | **GET** /{organization-id}/signature-transactions/{dst-id} | Get information about a DST
*Bit4idPathgroupSignatureTransactionsApi* | [**getDocument**](docs/Api/Bit4idPathgroupSignatureTransactionsApi.md#getdocument) | **GET** /{organization-id}/documents/{document-id}/download | Download a document from a DST
*Bit4idPathgroupSignatureTransactionsApi* | [**listDSTs**](docs/Api/Bit4idPathgroupSignatureTransactionsApi.md#listdsts) | **GET** /{organization-id}/signature-transactions | List the DSTs of an organization
*Bit4idPathgroupSignaturesApi* | [**createChannel**](docs/Api/Bit4idPathgroupSignaturesApi.md#createchannel) | **POST** /{organization-id}/channels/{dst-id} | Create a channel
*Bit4idPathgroupSignaturesApi* | [**declineDST**](docs/Api/Bit4idPathgroupSignaturesApi.md#declinedst) | **POST** /{organization-id}/signatures/{signature-id}/decline | Decline a Digital Signature Transaction
*Bit4idPathgroupSignaturesApi* | [**performDST**](docs/Api/Bit4idPathgroupSignaturesApi.md#performdst) | **POST** /{organization-id}/signatures/{signature-id}/perform | Sign a DST with an automatic signer
*Bit4idPathgroupSignaturesApi* | [**performSignature**](docs/Api/Bit4idPathgroupSignaturesApi.md#performsignature) | **POST** /{organization-id}/signatures/{signature-id}/perform/{identity-id} | Perform a Signature
*Bit4idPathgroupSignaturesApi* | [**performSignatureWithSession**](docs/Api/Bit4idPathgroupSignaturesApi.md#performsignaturewithsession) | **POST** /{organization-id}/signatures/{signature-id}/session-perform | Perform a Signature with session
*Bit4idPathgroupTokensApi* | [**createToken**](docs/Api/Bit4idPathgroupTokensApi.md#createtoken) | **POST** /{organization-id}/tokens | Create an application token
*Bit4idPathgroupTokensApi* | [**deleteToken**](docs/Api/Bit4idPathgroupTokensApi.md#deletetoken) | **DELETE** /{organization-id}/tokens/{token-id} | Delete a token of the organization
*Bit4idPathgroupTokensApi* | [**getToken**](docs/Api/Bit4idPathgroupTokensApi.md#gettoken) | **GET** /{organization-id}/tokens/{token-id} | Get information about a token
*Bit4idPathgroupTokensApi* | [**listTokens**](docs/Api/Bit4idPathgroupTokensApi.md#listtokens) | **GET** /{organization-id}/tokens | Enumerate the tokens of an organization
*Bit4idPathgroupTokensApi* | [**listUserTokens**](docs/Api/Bit4idPathgroupTokensApi.md#listusertokens) | **GET** /{organization-id}/users/{user-id}/tokens | Enumerate the tokens of an user
*Bit4idPathgroupTokensApi* | [**updateToken**](docs/Api/Bit4idPathgroupTokensApi.md#updatetoken) | **PUT** /{organization-id}/tokens/{token-id} | Update the properties of a token
*Bit4idPathgroupUsersApi* | [**createUser**](docs/Api/Bit4idPathgroupUsersApi.md#createuser) | **POST** /{organization-id}/users | Create a user of the organization
*Bit4idPathgroupUsersApi* | [**getUser**](docs/Api/Bit4idPathgroupUsersApi.md#getuser) | **GET** /{organization-id}/users/{user-id} | Get information about an user
*Bit4idPathgroupUsersApi* | [**listUsers**](docs/Api/Bit4idPathgroupUsersApi.md#listusers) | **GET** /{organization-id}/users | Enumerate the users of an organization
*Bit4idPathgroupUsersApi* | [**updateUser**](docs/Api/Bit4idPathgroupUsersApi.md#updateuser) | **PUT** /{organization-id}/users/{user-id} | Edit one or more user properties
*IdentitiesApi* | [**associateAppearance**](docs/Api/IdentitiesApi.md#associateappearance) | **POST** /{organization-id}/identities/{identity-id}/appearance | Associate an appearance to an identity
*IdentitiesApi* | [**associateIdentity**](docs/Api/IdentitiesApi.md#associateidentity) | **POST** /{organization-id}/users/{user-id}/wallet | Associate to an user an already existing identity
*IdentitiesApi* | [**createTokenFromIdentity**](docs/Api/IdentitiesApi.md#createtokenfromidentity) | **POST** /{organization-id}/identities/create/token | Create an identity from token
*IdentitiesApi* | [**deleteAppearance**](docs/Api/IdentitiesApi.md#deleteappearance) | **DELETE** /{organization-id}/identities/{identity-id}/appearance | Delete the appearance of an identity
*IdentitiesApi* | [**deleteEnrollmentRequest**](docs/Api/IdentitiesApi.md#deleteenrollmentrequest) | **DELETE** /{organization-id}/identity-requests/{enrollment-id} | Delete an enrollment request
*IdentitiesApi* | [**deleteIdentity**](docs/Api/IdentitiesApi.md#deleteidentity) | **DELETE** /{organization-id}/identities/{identity-id} | Delete an identity
*IdentitiesApi* | [**getEnrollmentRequest**](docs/Api/IdentitiesApi.md#getenrollmentrequest) | **GET** /{organization-id}/identity-requests/{enrollment-id} | Get information about an enrollment request
*IdentitiesApi* | [**getIdentity**](docs/Api/IdentitiesApi.md#getidentity) | **GET** /{organization-id}/identities/{identity-id} | Get information about an identity
*IdentitiesApi* | [**listEnrollmentRequests**](docs/Api/IdentitiesApi.md#listenrollmentrequests) | **GET** /{organization-id}/identity-requests | Enumerate the enrollment requests of an organization
*IdentitiesApi* | [**listIdentities**](docs/Api/IdentitiesApi.md#listidentities) | **GET** /{organization-id}/identities | Enumerate the identities of an organization
*IdentitiesApi* | [**listUserEnrollments**](docs/Api/IdentitiesApi.md#listuserenrollments) | **GET** /{organization-id}/users/{user-id}/identity-requests | List the enrollments of an user
*IdentitiesApi* | [**listUserIdentities**](docs/Api/IdentitiesApi.md#listuseridentities) | **GET** /{organization-id}/users/{user-id}/wallet | Enumerate the identities of an user
*IdentitiesApi* | [**renewIdentity**](docs/Api/IdentitiesApi.md#renewidentity) | **POST** /{organization-id}/identity-requests/{enrollment-id}/renew | Renew an Identity
*IdentitiesApi* | [**requestEnrollment**](docs/Api/IdentitiesApi.md#requestenrollment) | **POST** /{organization-id}/enroll | Submit an enrollment request
*OrganizationsApi* | [**getOrganization**](docs/Api/OrganizationsApi.md#getorganization) | **GET** /organizations/{organization-id} | Get the settings of an oraganization
*OrganizationsApi* | [**patchOrganization**](docs/Api/OrganizationsApi.md#patchorganization) | **PATCH** /organizations/{organization-id} | Edit the settings of an organization
*SignatureTransactionsApi* | [**cancelDST**](docs/Api/SignatureTransactionsApi.md#canceldst) | **POST** /{organization-id}/signature-transactions/{dst-id}/cancel | Mark a DST as canceled
*SignatureTransactionsApi* | [**createDST**](docs/Api/SignatureTransactionsApi.md#createdst) | **POST** /{organization-id}/signature-transactions | Create a Digital Signature Transaction
*SignatureTransactionsApi* | [**deleteDST**](docs/Api/SignatureTransactionsApi.md#deletedst) | **DELETE** /{organization-id}/signature-transactions/{dst-id} | Delete a Digital Signature Transaction
*SignatureTransactionsApi* | [**deleteDSTResources**](docs/Api/SignatureTransactionsApi.md#deletedstresources) | **DELETE** /{organization-id}/signature-transactions/{dst-id}/resources | Delete the resources of a DST
*SignatureTransactionsApi* | [**getDST**](docs/Api/SignatureTransactionsApi.md#getdst) | **GET** /{organization-id}/signature-transactions/{dst-id} | Get information about a DST
*SignatureTransactionsApi* | [**getDocument**](docs/Api/SignatureTransactionsApi.md#getdocument) | **GET** /{organization-id}/documents/{document-id}/download | Download a document from a DST
*SignatureTransactionsApi* | [**listDSTs**](docs/Api/SignatureTransactionsApi.md#listdsts) | **GET** /{organization-id}/signature-transactions | List the DSTs of an organization
*SignaturesApi* | [**createChannel**](docs/Api/SignaturesApi.md#createchannel) | **POST** /{organization-id}/channels/{dst-id} | Create a channel
*SignaturesApi* | [**declineDST**](docs/Api/SignaturesApi.md#declinedst) | **POST** /{organization-id}/signatures/{signature-id}/decline | Decline a Digital Signature Transaction
*SignaturesApi* | [**performDST**](docs/Api/SignaturesApi.md#performdst) | **POST** /{organization-id}/signatures/{signature-id}/perform | Sign a DST with an automatic signer
*SignaturesApi* | [**performSignature**](docs/Api/SignaturesApi.md#performsignature) | **POST** /{organization-id}/signatures/{signature-id}/perform/{identity-id} | Perform a Signature
*SignaturesApi* | [**performSignatureWithSession**](docs/Api/SignaturesApi.md#performsignaturewithsession) | **POST** /{organization-id}/signatures/{signature-id}/session-perform | Perform a Signature with session
*TokensApi* | [**createToken**](docs/Api/TokensApi.md#createtoken) | **POST** /{organization-id}/tokens | Create an application token
*TokensApi* | [**deleteToken**](docs/Api/TokensApi.md#deletetoken) | **DELETE** /{organization-id}/tokens/{token-id} | Delete a token of the organization
*TokensApi* | [**getToken**](docs/Api/TokensApi.md#gettoken) | **GET** /{organization-id}/tokens/{token-id} | Get information about a token
*TokensApi* | [**listTokens**](docs/Api/TokensApi.md#listtokens) | **GET** /{organization-id}/tokens | Enumerate the tokens of an organization
*TokensApi* | [**listUserTokens**](docs/Api/TokensApi.md#listusertokens) | **GET** /{organization-id}/users/{user-id}/tokens | Enumerate the tokens of an user
*TokensApi* | [**updateToken**](docs/Api/TokensApi.md#updatetoken) | **PUT** /{organization-id}/tokens/{token-id} | Update the properties of a token
*UsersApi* | [**createUser**](docs/Api/UsersApi.md#createuser) | **POST** /{organization-id}/users | Create a user of the organization
*UsersApi* | [**getUser**](docs/Api/UsersApi.md#getuser) | **GET** /{organization-id}/users/{user-id} | Get information about an user
*UsersApi* | [**listUsers**](docs/Api/UsersApi.md#listusers) | **GET** /{organization-id}/users | Enumerate the users of an organization
*UsersApi* | [**updateUser**](docs/Api/UsersApi.md#updateuser) | **PUT** /{organization-id}/users/{user-id} | Edit one or more user properties


## Documentation For Models

 - [AutomaticSignature](docs/Model/AutomaticSignature.md)
 - [CreateIdentitybyToken](docs/Model/CreateIdentitybyToken.md)
 - [CreateSignatureTransaction](docs/Model/CreateSignatureTransaction.md)
 - [CreateToken](docs/Model/CreateToken.md)
 - [CreateUser](docs/Model/CreateUser.md)
 - [Document](docs/Model/Document.md)
 - [Document1](docs/Model/Document1.md)
 - [Identity](docs/Model/Identity.md)
 - [IdentityActions](docs/Model/IdentityActions.md)
 - [IdentityAssociation](docs/Model/IdentityAssociation.md)
 - [IdentityEnroll](docs/Model/IdentityEnroll.md)
 - [IdentityEnrollActions](docs/Model/IdentityEnrollActions.md)
 - [IdentityRequest](docs/Model/IdentityRequest.md)
 - [InlineObject](docs/Model/InlineObject.md)
 - [InlineObject1](docs/Model/InlineObject1.md)
 - [InlineObject2](docs/Model/InlineObject2.md)
 - [InlineObject3](docs/Model/InlineObject3.md)
 - [InlineObject4](docs/Model/InlineObject4.md)
 - [InlineObject5](docs/Model/InlineObject5.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [InlineResponse2001](docs/Model/InlineResponse2001.md)
 - [InlineResponse20010](docs/Model/InlineResponse20010.md)
 - [InlineResponse20011](docs/Model/InlineResponse20011.md)
 - [InlineResponse20012](docs/Model/InlineResponse20012.md)
 - [InlineResponse20013](docs/Model/InlineResponse20013.md)
 - [InlineResponse20013Data](docs/Model/InlineResponse20013Data.md)
 - [InlineResponse2002](docs/Model/InlineResponse2002.md)
 - [InlineResponse2003](docs/Model/InlineResponse2003.md)
 - [InlineResponse2004](docs/Model/InlineResponse2004.md)
 - [InlineResponse2005](docs/Model/InlineResponse2005.md)
 - [InlineResponse2006](docs/Model/InlineResponse2006.md)
 - [InlineResponse2007](docs/Model/InlineResponse2007.md)
 - [InlineResponse2008](docs/Model/InlineResponse2008.md)
 - [InlineResponse2009](docs/Model/InlineResponse2009.md)
 - [InlineResponse2009Meta](docs/Model/InlineResponse2009Meta.md)
 - [InlineResponse201](docs/Model/InlineResponse201.md)
 - [InlineResponse2011](docs/Model/InlineResponse2011.md)
 - [InlineResponse2012](docs/Model/InlineResponse2012.md)
 - [InlineResponse2013](docs/Model/InlineResponse2013.md)
 - [InlineResponse2014](docs/Model/InlineResponse2014.md)
 - [InlineResponse2014Data](docs/Model/InlineResponse2014Data.md)
 - [InlineResponse2015](docs/Model/InlineResponse2015.md)
 - [InlineResponse401](docs/Model/InlineResponse401.md)
 - [InlineResponse403](docs/Model/InlineResponse403.md)
 - [InlineResponse404](docs/Model/InlineResponse404.md)
 - [MetaDataError](docs/Model/MetaDataError.md)
 - [MetaDataSuccess](docs/Model/MetaDataSuccess.md)
 - [Organization](docs/Model/Organization.md)
 - [OrganizationSettings](docs/Model/OrganizationSettings.md)
 - [PaginationData](docs/Model/PaginationData.md)
 - [SMS](docs/Model/SMS.md)
 - [Signature](docs/Model/Signature.md)
 - [SignatureDST](docs/Model/SignatureDST.md)
 - [SignatureDSTWhere](docs/Model/SignatureDSTWhere.md)
 - [SignatureImplementationResponse](docs/Model/SignatureImplementationResponse.md)
 - [SignatureImplementationResponseChannel](docs/Model/SignatureImplementationResponseChannel.md)
 - [SignatureTransaction](docs/Model/SignatureTransaction.md)
 - [SignatureWhere](docs/Model/SignatureWhere.md)
 - [Token](docs/Model/Token.md)
 - [TokenHttpOptions](docs/Model/TokenHttpOptions.md)
 - [TokenWebhooks](docs/Model/TokenWebhooks.md)
 - [UpdateOrganization](docs/Model/UpdateOrganization.md)
 - [UpdateToken](docs/Model/UpdateToken.md)
 - [UpdateUser](docs/Model/UpdateUser.md)
 - [User](docs/Model/User.md)


## Documentation For Authorization



## ApiKeyAuth


- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



## Author

smartcloud@bit4id.com

