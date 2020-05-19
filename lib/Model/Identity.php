<?php
/**
 * Identity
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Signing Today API
 *
 * *Signing Today* enables seamless integration of digital signatures into any website by the use of easy requests to our API. This is the smart way of adding digital signature support with a great user experience.   *Signing Today APIs* use HTTP methods and are RESTful based, moreover they are protected by a *server to server authentication* standard by the use of tokens.   *Signing Today APIs* can be used in these environments:   | Environment | Description | Endpoint | | ----------- | ----------- | -------- | | Sandbox     | Test environment | `https://sandbox.signingtoday.com` | | Live        | Production environment | `https://api.signingtoday.com` |   For every single request to Signing Today has to be defined the following *HTTP* header: - `Authorization`, which contains the authentication token.  If the request has a body than another *HTTP* header is requested: - `Content-Type`, with `application/json` value.   Follows an example of usage to enumerate all the user of *my-org* organization.  **Example**  ```json $ curl https://sandbox.signingtoday.com/api/v1/my-org/users \\     -H 'Authorization: Token <access-token>' ```  ## HTTP methods used  APIs use the right HTTP verb in every situation.  | Method   | Description                    | | -------- | ------------------------------ | | `GET`    | Request data from a resource   | | `POST`   | Send data to create a resource | | `PUT`    | Update a resource              | | `PATCH`  | Partially update a resource    | | `DELETE` | Delete a resourse              |   ## Response definition  All the response are in JSON format. As response to a request of all users of an organization you will have a result like this:  ```json {     \"pagination\": {       \"count\": 75,       \"previous\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=1\",       \"next\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=3\",       \"pages\": 8,       \"page\": 2     },     \"meta\": {       \"code\": 200     },     \"data\": [       {         \"id\": \"jdo\",         \"status\": \"enabled\",         \"type\": \"Basic user account\",         \"email\": johndoe@dummyemail.com,         \"first_name\": \"John\",         \"last_name\": \"Doe\",         \"wallet\": [],         \"created_by\": \"system\",         \"owner\": false,         \"automatic\": false,         \"rao\": false       },       ...     ]   } ```  The JSON of the response is made of three parts: - Pagination - Meta - Data  ### Pagination  *Pagination* object allows to split the response into parts and then to rebuild it sequentially by the use of `next` and `previous` parameters, by which you get previous and following blocks. The *Pagination* is present only if the response is a list of objects.  The general structure of *Pagination* object is the following:  ```json {     \"pagination\": {       \"count\": 75,       \"previous\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=1\",       \"next\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=3\",       \"pages\": 8,       \"page\": 2     },     ...   } ```  ### Meta  *Meta* object is used to enrich the information about the response. In the previous example, a successful case of response, *Meta* will have value `status: 2XX`. In case of unsuccessful response, *Meta* will have further information, as follows:  ```json {     \"meta\": {       \"code\": <HTTP STATUS CODE>,       \"error_type\": <STATUS CODE DESCRIPTION>,       \"error_message\": <ERROR DESCRIPTION>     }   } ```  ### Data  *Data* object outputs as object or list of them. Contains the expected data as requested to the API.  ## Search filters  Search filters of the API have the following structure:  `where_ATTRIBUTENAME`=`VALUE`  In this way you make a case-sensitive search of *VALUE*. You can extend it through the Django lookup, obtaining more specific filters. For example:  `where_ATTRIBUTENAME__LOOKUP`=`VALUE`  where *LOOKUP* can be replaced with `icontains` to have a partial insensitive research, where  `where_first_name__icontains`=`CHa`  matches with every user that have the *cha* string in their name, with no differences between capital and lower cases.  [Here](https://docs.djangoproject.com/en/1.11/ref/models/querysets/#field-lookups) the list of the lookups.  ## Webhooks  Signing Today supports webhooks for the update of DSTs and identities status. You can choose if to use or not webhooks and if you want to receive updates about DSTs and/or identities. You can configurate it on application token level, in the *webhook* field, as follows:  ```json \"webhooks\": {   \"dst\": \"URL\",   \"identity\": \"URL\"   } ```  ### DSTs status update  DSTs send the following status updates: - **DST_STATUS_CHANGED**: whenever the DST changes its status - **SIGNATURE_STATUS_CHANGED**: whenever one of the signatures changes its status  #### DST_STATUS_CHANGED  Sends the following information:  ```json {     \"message\": \"DST_STATUS_CHANGED\",     \"data\": {       \"status\": \"<DST_STATUS>\",       \"dst\": \"<DST_ID>\",       \"reason\": \"<DST_REASON>\"     }   } ```  #### SIGNATURE_STATUS_CHANGED  Sends the following information:  ```json {     \"message\": \"SIGNATURE_STATUS_CHANGED\",     \"data\": {       \"status\": \"<SIGNATURE_STATUS>\",       \"group\": <MEMBERSHIP_GROUP_INDEX>,       \"dst\": {         \"id\": \"<DST_ID>\",         \"title\": \"<DST_TITLE>\"       },       \"signature\": \"<SIGNATURE_ID>\",       \"signer\": \"<SIGNER_USERNAME>\",       \"position\": \"<SIGNATURE_POSITION>\",       \"document\": {         \"display_name\": \"<DOCUMENT_TITLE>\",         \"id\": \"<DOCUMENT_ID>\",         \"order\": <DOCUMENT_INDEX>       },       \"automatic\": <DECLARES_IF_THE_SIGNER_IS_AUTOMATIC>,       \"page\": \"<SIGNATURE_PAGE>\"     }   } ```  ### Identities status update  Identities send the following status updates: - **IDENTITY_REQUEST_ENROLLED**: whenever an identity request is activated  #### IDENTITY_REQUEST_ENROLLED  Sends the following information:  ```json {     \"message\": \"IDENTITY_REQUEST_ENROLLED\",     \"data\": {       \"status\": \"<REQUEST_STATUS>\",       \"request\": \"<REQUEST_ID>\",       \"user\": \"<APPLICANT_USERNAME>\"     }   } ```  ### Urlback  Sometimes may be necessary to make a redirect after an user, from the signature tray, has completed his operations or activated a certificate.  If set, redirects could happen in 3 cases: - after a signature or decline - after a DST has been signed by all the signers or canceled - after the activation of a certificate  In the first two cases the urlback returns the following information through a data form: - **dst-id**: id of the DST - **dst-url**: signature_ticket of the signature - **dst-status**: current status of the DST - **dst-signature-id**: id of the signature - **dst-signature-status**: current status of the signature - **user**: username of the signer - **decline-reason**: in case of a refused DST contains the reason of the decline  In the last case the urlback returns the following information through a data form: - **user**: username of the user activated the certificate - **identity-provider**: the provider has been used to issue the certificate - **identity-request-id**: id of the enrollment request - **identity-id**: id of the new identity - **identity-label**: the label assigned to the identity - **identity-certificate**: public key of the certificate  ## SUPPORTED Provider  The supported providers are:   - *_aruba_*   - *infocert*   - *namirial*   - *uanataca*
 *
 * The version of the OpenAPI document: 1.5.0
 * Contact: smartcloud@bit4id.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Identity Class Doc Comment
 *
 * @category Class
 * @description The Identity is the core object of SigningToday, because inside it there are all the information that allows an user to sign a digital signature transaction. Of course the most important information is the cerficate, which is a base64 string in PEM format. This allows to sign documents with a legal validity. The Identity has as well an expiration date, a status, which may be simply active, error, in case of problems during its emission either if the certificate has been somehow altered, or pending if the enrollment procedure has to be completed (the following steps are indicated in the &#39;next&#39; field as well). Also there are information about the provider issued the Identity and fields with an url value that allows to send one time passwords or to sign digital signature transactions.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Identity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Identity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'certificate' => 'string',
        'not_after' => 'string',
        'status' => 'string',
        'next' => 'string',
        'actions' => '\OpenAPI\Client\Model\IdentityActions',
        'provider' => 'string',
        'label' => 'string',
        'signature_appearance_uri' => 'string',
        'provider_id' => 'string',
        'provider_type' => 'string',
        'provider_data' => 'object',
        'provider_image' => 'string',
        'send_otp_url' => 'string',
        'sign_url' => 'string',
        'has_been_imported' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'certificate' => 'PEM',
        'not_after' => 'dateTime',
        'status' => 'any',
        'next' => 'url',
        'actions' => null,
        'provider' => 'any',
        'label' => 'any',
        'signature_appearance_uri' => 'url',
        'provider_id' => 'uuid',
        'provider_type' => 'any',
        'provider_data' => 'object',
        'provider_image' => 'url',
        'send_otp_url' => 'url',
        'sign_url' => 'url',
        'has_been_imported' => 'boolean'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'certificate' => 'certificate',
        'not_after' => 'not_after',
        'status' => 'status',
        'next' => 'next',
        'actions' => 'actions',
        'provider' => 'provider',
        'label' => 'label',
        'signature_appearance_uri' => 'signature_appearance_uri',
        'provider_id' => 'provider_id',
        'provider_type' => 'provider_type',
        'provider_data' => 'provider_data',
        'provider_image' => 'provider_image',
        'send_otp_url' => 'send_otp_url',
        'sign_url' => 'sign_url',
        'has_been_imported' => 'has_been_imported'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'certificate' => 'setCertificate',
        'not_after' => 'setNotAfter',
        'status' => 'setStatus',
        'next' => 'setNext',
        'actions' => 'setActions',
        'provider' => 'setProvider',
        'label' => 'setLabel',
        'signature_appearance_uri' => 'setSignatureAppearanceUri',
        'provider_id' => 'setProviderId',
        'provider_type' => 'setProviderType',
        'provider_data' => 'setProviderData',
        'provider_image' => 'setProviderImage',
        'send_otp_url' => 'setSendOtpUrl',
        'sign_url' => 'setSignUrl',
        'has_been_imported' => 'setHasBeenImported'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'certificate' => 'getCertificate',
        'not_after' => 'getNotAfter',
        'status' => 'getStatus',
        'next' => 'getNext',
        'actions' => 'getActions',
        'provider' => 'getProvider',
        'label' => 'getLabel',
        'signature_appearance_uri' => 'getSignatureAppearanceUri',
        'provider_id' => 'getProviderId',
        'provider_type' => 'getProviderType',
        'provider_data' => 'getProviderData',
        'provider_image' => 'getProviderImage',
        'send_otp_url' => 'getSendOtpUrl',
        'sign_url' => 'getSignUrl',
        'has_been_imported' => 'getHasBeenImported'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const STATUS_PENDING = 'pending';
    const STATUS_ACTIVE = 'active';
    const STATUS_ERROR = 'error';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING,
            self::STATUS_ACTIVE,
            self::STATUS_ERROR,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['not_after'] = isset($data['not_after']) ? $data['not_after'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['next'] = isset($data['next']) ? $data['next'] : null;
        $this->container['actions'] = isset($data['actions']) ? $data['actions'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['signature_appearance_uri'] = isset($data['signature_appearance_uri']) ? $data['signature_appearance_uri'] : null;
        $this->container['provider_id'] = isset($data['provider_id']) ? $data['provider_id'] : null;
        $this->container['provider_type'] = isset($data['provider_type']) ? $data['provider_type'] : null;
        $this->container['provider_data'] = isset($data['provider_data']) ? $data['provider_data'] : null;
        $this->container['provider_image'] = isset($data['provider_image']) ? $data['provider_image'] : null;
        $this->container['send_otp_url'] = isset($data['send_otp_url']) ? $data['send_otp_url'] : null;
        $this->container['sign_url'] = isset($data['sign_url']) ? $data['sign_url'] : null;
        $this->container['has_been_imported'] = isset($data['has_been_imported']) ? $data['has_been_imported'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id The uuid code that identifies the Identity
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets certificate
     *
     * @return string|null
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     *
     * @param string|null $certificate The X.509 certificate in PEM format of the Identity
     *
     * @return $this
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

        return $this;
    }

    /**
     * Gets not_after
     *
     * @return string|null
     */
    public function getNotAfter()
    {
        return $this->container['not_after'];
    }

    /**
     * Sets not_after
     *
     * @param string|null $not_after Deadline of the Identity, expressed in ISO format
     *
     * @return $this
     */
    public function setNotAfter($not_after)
    {
        $this->container['not_after'] = $not_after;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Identity status which can be one of the following. When an identity request is send, the identity is created and the status is **pending** until the provider dont approve the request. Then status of the identity changes to **active**. If for some reason an error occurs during the process, or after that, the status will be **error**
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets next
     *
     * @return string|null
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     *
     * @param string|null $next The next step to complete the activation procedure
     *
     * @return $this
     */
    public function setNext($next)
    {
        $this->container['next'] = $next;

        return $this;
    }

    /**
     * Gets actions
     *
     * @return \OpenAPI\Client\Model\IdentityActions|null
     */
    public function getActions()
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param \OpenAPI\Client\Model\IdentityActions|null $actions actions
     *
     * @return $this
     */
    public function setActions($actions)
    {
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string|null
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string|null $provider The name of the provider that issued the certificate for the Identity
     *
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string|null
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string|null $label The label is an arbitrary name is possible to associate to an idenity. Doing so allows to distinguish different identities issued from the same provider during the performance of the signature in the signature tray
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets signature_appearance_uri
     *
     * @return string|null
     */
    public function getSignatureAppearanceUri()
    {
        return $this->container['signature_appearance_uri'];
    }

    /**
     * Sets signature_appearance_uri
     *
     * @param string|null $signature_appearance_uri This is the url to the image that will be impressed on the document after the performance of the signature
     *
     * @return $this
     */
    public function setSignatureAppearanceUri($signature_appearance_uri)
    {
        $this->container['signature_appearance_uri'] = $signature_appearance_uri;

        return $this;
    }

    /**
     * Gets provider_id
     *
     * @return string|null
     */
    public function getProviderId()
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id
     *
     * @param string|null $provider_id _provider_id_ is the univocal name of the provider that issued the identity
     *
     * @return $this
     */
    public function setProviderId($provider_id)
    {
        $this->container['provider_id'] = $provider_id;

        return $this;
    }

    /**
     * Gets provider_type
     *
     * @return string|null
     */
    public function getProviderType()
    {
        return $this->container['provider_type'];
    }

    /**
     * Sets provider_type
     *
     * @param string|null $provider_type Type of the provider. The most usual type is **cloud**
     *
     * @return $this
     */
    public function setProviderType($provider_type)
    {
        $this->container['provider_type'] = $provider_type;

        return $this;
    }

    /**
     * Gets provider_data
     *
     * @return object|null
     */
    public function getProviderData()
    {
        return $this->container['provider_data'];
    }

    /**
     * Sets provider_data
     *
     * @param object|null $provider_data Data of the provider that issued the certificate, it is variable from provider to provider
     *
     * @return $this
     */
    public function setProviderData($provider_data)
    {
        $this->container['provider_data'] = $provider_data;

        return $this;
    }

    /**
     * Gets provider_image
     *
     * @return string|null
     */
    public function getProviderImage()
    {
        return $this->container['provider_image'];
    }

    /**
     * Sets provider_image
     *
     * @param string|null $provider_image This is the logo of the provider that issued the identity
     *
     * @return $this
     */
    public function setProviderImage($provider_image)
    {
        $this->container['provider_image'] = $provider_image;

        return $this;
    }

    /**
     * Gets send_otp_url
     *
     * @return string|null
     */
    public function getSendOtpUrl()
    {
        return $this->container['send_otp_url'];
    }

    /**
     * Sets send_otp_url
     *
     * @param string|null $send_otp_url The url to send a one time password to the user which the identity is associated
     *
     * @return $this
     */
    public function setSendOtpUrl($send_otp_url)
    {
        $this->container['send_otp_url'] = $send_otp_url;

        return $this;
    }

    /**
     * Gets sign_url
     *
     * @return string|null
     */
    public function getSignUrl()
    {
        return $this->container['sign_url'];
    }

    /**
     * Sets sign_url
     *
     * @param string|null $sign_url The url to sign a document of a digital signature transaction
     *
     * @return $this
     */
    public function setSignUrl($sign_url)
    {
        $this->container['sign_url'] = $sign_url;

        return $this;
    }

    /**
     * Gets has_been_imported
     *
     * @return bool|null
     */
    public function getHasBeenImported()
    {
        return $this->container['has_been_imported'];
    }

    /**
     * Sets has_been_imported
     *
     * @param bool|null $has_been_imported If the Identity has been imported from another pre-existing Identity the has_been_imported field is set to **true**
     *
     * @return $this
     */
    public function setHasBeenImported($has_been_imported)
    {
        $this->container['has_been_imported'] = $has_been_imported;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


