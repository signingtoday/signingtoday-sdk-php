<?php
/**
 * SignatureImplementationResponse
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
 * *Signing Today* enables seamless integration of digital signatures into any website by the use of easy requests to our API. This is the smart way of adding digital signature support with a great user experience.   *Signing Today APIs* use HTTP methods and are RESTful based, moreover they are protected by a *server to server authentication* standard by the use of tokens.   *Signing Today APIs* can be used in these environments:   | Environment | Description | Endpoint | | ----------- | ----------- | -------- | | Sandbox     | Test environment | `https://sandbox.signingtoday.com` | | Live        | Production environment | `https://api.signingtoday.com` |   For every single request to Signing Today has to be defined the following *HTTP* header: - `Authorization`, which contains the authentication token.  If the request has a body than another *HTTP* header is requested: - `Content-Type`, with `application/json` value.   Follows an example of usage to enumerate all the user of *my-org* organization.  **Example**  ```json $ curl https://sandbox.signingtoday.com/api/v1/my-org/users \\     -H 'Authorization: Token <access-token>' ```  ## HTTP methods used  APIs use the right HTTP verb in every situation.  | Method   | Description                    | | -------- | ------------------------------ | | `GET`    | Request data from a resource   | | `POST`   | Send data to create a resource | | `PUT`    | Update a resource              | | `PATCH`  | Partially update a resource    | | `DELETE` | Delete a resourse              |   ## Response definition  All the response are in JSON format. As response to a request of all users of an organization you will have a result like this:  ```json {     \"pagination\": {       \"count\": 75,       \"previous\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=1\",       \"next\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=3\",       \"pages\": 8,       \"page\": 2     },     \"meta\": {       \"code\": 200     },     \"data\": [       {         \"id\": \"jdo\",         \"status\": \"enabled\",         \"type\": \"Basic user account\",         \"email\": johndoe@dummyemail.com,         \"first_name\": \"John\",         \"last_name\": \"Doe\",         \"wallet\": [],         \"created_by\": \"system\",         \"owner\": false,         \"automatic\": false,         \"rao\": false       },       ...     ]   } ```  The JSON of the response is made of three parts: - Pagination - Meta - Data  ### Pagination  *Pagination* object allows to split the response into parts and then to rebuild it sequentially by the use of `next` and `previous` parameters, by which you get previous and following blocks. The *Pagination* is present only if the response is a list of objects.  The general structure of *Pagination* object is the following:  ```json {     \"pagination\": {       \"count\": 75,       \"previous\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=1\",       \"next\": \"https://sandbox.signingtoday.com/api/v1/my-org/users?page=3\",       \"pages\": 8,       \"page\": 2     },     ...   } ```  ### Meta  *Meta* object is used to enrich the information about the response. In the previous example, a successful case of response, *Meta* will have value `status: 2XX`. In case of unsuccessful response, *Meta* will have further information, as follows:  ```json {     \"meta\": {       \"code\": <HTTP STATUS CODE>,       \"error_type\": <STATUS CODE DESCRIPTION>,       \"error_message\": <ERROR DESCRIPTION>     }   } ```  ### Data  *Data* object outputs as object or list of them. Contains the expected data as requested to the API.  ## Search filters  Search filters of the API have the following structure:  `where_ATTRIBUTENAME`=`VALUE`  In this way you make a case-sensitive search of *VALUE*. You can extend it through the Django lookup, obtaining more specific filters. For example:  `where_ATTRIBUTENAME__LOOKUP`=`VALUE`  where *LOOKUP* can be replaced with `icontains` to have a partial insensitive research, where  `where_first_name__icontains`=`CHa`  matches with every user that have the *cha* string in their name, with no differences between capital and lower cases.  [Here](https://docs.djangoproject.com/en/1.11/ref/models/querysets/#field-lookups) the list of the lookups.  ## Webhooks  Signing Today supports webhooks for the update of DSTs and identities status. You can choose if to use or not webhooks and if you want to receive updates about DSTs and/or identities. You can configurate it on application token level, in the *webhook* field, as follows:  ```json \"webhooks\": {   \"dst\": \"URL\",   \"identity\": \"URL\"   } ```  ### DSTs status update  DSTs send the following status updates: - **DST_STATUS_CHANGED**: whenever the DST changes its status - **SIGNATURE_STATUS_CHANGED**: whenever one of the signatures changes its status  #### DST_STATUS_CHANGED  Sends the following information:  ```json {     \"message\": \"DST_STATUS_CHANGED\",     \"data\": {       \"status\": \"<DST_STATUS>\",       \"dst\": \"<DST_ID>\",       \"reason\": \"<DST_REASON>\"     }   } ```  #### SIGNATURE_STATUS_CHANGED  Sends the following information:  ```json {     \"message\": \"SIGNATURE_STATUS_CHANGED\",     \"data\": {       \"status\": \"<SIGNATURE_STATUS>\",       \"group\": <MEMBERSHIP_GROUP_INDEX>,       \"dst\": {         \"id\": \"<DST_ID>\",         \"title\": \"<DST_TITLE>\"       },       \"signature\": \"<SIGNATURE_ID>\",       \"signer\": \"<SIGNER_USERNAME>\",       \"position\": \"<SIGNATURE_POSITION>\",       \"document\": {         \"display_name\": \"<DOCUMENT_TITLE>\",         \"id\": \"<DOCUMENT_ID>\",         \"order\": <DOCUMENT_INDEX>       },       \"automatic\": <DECLARES_IF_THE_SIGNER_IS_AUTOMATIC>,       \"page\": \"<SIGNATURE_PAGE>\"     }   } ```  ### Identities status update  Identities send the following status updates: - **IDENTITY_REQUEST_ENROLLED**: whenever an identity request is activated  #### IDENTITY_REQUEST_ENROLLED  Sends the following information:  ```json {     \"message\": \"IDENTITY_REQUEST_ENROLLED\",     \"data\": {       \"status\": \"<REQUEST_STATUS>\",       \"request\": \"<REQUEST_ID>\",       \"user\": \"<APPLICANT_USERNAME>\"     }   } ```  ### Urlback  Sometimes may be necessary to make a redirect after an user, from the signature tray, has completed his operations or activated a certificate.  If set, redirects could happen in 3 cases: - after a signature or decline - after a DST has been signed by all the signers or canceled - after the activation of a certificate  In the first two cases the urlback returns the following information through a data form: - **dst-id**: id of the DST - **dst-url**: signature_ticket of the signature - **dst-status**: current status of the DST - **dst-signature-id**: id of the signature - **dst-signature-status**: current status of the signature - **user**: username of the signer - **decline-reason**: in case of a refused DST contains the reason of the decline  In the last case the urlback returns the following information through a data form: - **user**: username of the user activated the certificate - **identity-provider**: the provider has been used to issue the certificate - **identity-request-id**: id of the enrollment request - **identity-id**: id of the new identity - **identity-label**: the label assigned to the identity - **identity-certificate**: public key of the certificate
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
 * SignatureImplementationResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SignatureImplementationResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SignatureImplementationResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'profile' => '\OpenAPI\Client\Model\Profile',
        'provider_id' => '\OpenAPI\Client\Model\ProviderId',
        'position' => '\OpenAPI\Client\Model\Position',
        'group' => 'int',
        'certificate' => '\OpenAPI\Client\Model\Certificate',
        'title' => '\OpenAPI\Client\Model\Title',
        'dst' => '\OpenAPI\Client\Model\Id',
        'signing_time' => 'string',
        'reason' => '\OpenAPI\Client\Model\Reason',
        'channel' => '\OpenAPI\Client\Model\SignatureImplementationResponseChannel',
        'signature_text' => 'string',
        'signature' => '\OpenAPI\Client\Model\Id',
        'signature_appearance_uri' => '\OpenAPI\Client\Model\SignatureAppearanceUri',
        'pades_subfilter' => 'string',
        'document' => 'string',
        'page' => 'int',
        'identity' => '\OpenAPI\Client\Model\Id'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'profile' => null,
        'provider_id' => null,
        'position' => null,
        'group' => 'interger',
        'certificate' => null,
        'title' => null,
        'dst' => null,
        'signing_time' => null,
        'reason' => null,
        'channel' => null,
        'signature_text' => null,
        'signature' => null,
        'signature_appearance_uri' => null,
        'pades_subfilter' => null,
        'document' => null,
        'page' => null,
        'identity' => null
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
        'profile' => 'profile',
        'provider_id' => 'provider_id',
        'position' => 'position',
        'group' => 'group',
        'certificate' => 'certificate',
        'title' => 'title',
        'dst' => 'dst',
        'signing_time' => 'signing_time',
        'reason' => 'reason',
        'channel' => 'channel',
        'signature_text' => 'signature_text',
        'signature' => 'signature',
        'signature_appearance_uri' => 'signature_appearance_uri',
        'pades_subfilter' => 'pades_subfilter',
        'document' => 'document',
        'page' => 'page',
        'identity' => 'identity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'profile' => 'setProfile',
        'provider_id' => 'setProviderId',
        'position' => 'setPosition',
        'group' => 'setGroup',
        'certificate' => 'setCertificate',
        'title' => 'setTitle',
        'dst' => 'setDst',
        'signing_time' => 'setSigningTime',
        'reason' => 'setReason',
        'channel' => 'setChannel',
        'signature_text' => 'setSignatureText',
        'signature' => 'setSignature',
        'signature_appearance_uri' => 'setSignatureAppearanceUri',
        'pades_subfilter' => 'setPadesSubfilter',
        'document' => 'setDocument',
        'page' => 'setPage',
        'identity' => 'setIdentity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'profile' => 'getProfile',
        'provider_id' => 'getProviderId',
        'position' => 'getPosition',
        'group' => 'getGroup',
        'certificate' => 'getCertificate',
        'title' => 'getTitle',
        'dst' => 'getDst',
        'signing_time' => 'getSigningTime',
        'reason' => 'getReason',
        'channel' => 'getChannel',
        'signature_text' => 'getSignatureText',
        'signature' => 'getSignature',
        'signature_appearance_uri' => 'getSignatureAppearanceUri',
        'pades_subfilter' => 'getPadesSubfilter',
        'document' => 'getDocument',
        'page' => 'getPage',
        'identity' => 'getIdentity'
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

    const SIGNING_TIME_PDF = 'pdf';
    const PADES_SUBFILTER_ETSI_C_AD_ES_DETACHED = 'ETSI.CAdES.detached';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSigningTimeAllowableValues()
    {
        return [
            self::SIGNING_TIME_PDF,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPadesSubfilterAllowableValues()
    {
        return [
            self::PADES_SUBFILTER_ETSI_C_AD_ES_DETACHED,
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
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['provider_id'] = isset($data['provider_id']) ? $data['provider_id'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['dst'] = isset($data['dst']) ? $data['dst'] : null;
        $this->container['signing_time'] = isset($data['signing_time']) ? $data['signing_time'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['signature_text'] = isset($data['signature_text']) ? $data['signature_text'] : null;
        $this->container['signature'] = isset($data['signature']) ? $data['signature'] : null;
        $this->container['signature_appearance_uri'] = isset($data['signature_appearance_uri']) ? $data['signature_appearance_uri'] : null;
        $this->container['pades_subfilter'] = isset($data['pades_subfilter']) ? $data['pades_subfilter'] : null;
        $this->container['document'] = isset($data['document']) ? $data['document'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['identity'] = isset($data['identity']) ? $data['identity'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSigningTimeAllowableValues();
        if (!is_null($this->container['signing_time']) && !in_array($this->container['signing_time'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'signing_time', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPadesSubfilterAllowableValues();
        if (!is_null($this->container['pades_subfilter']) && !in_array($this->container['pades_subfilter'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pades_subfilter', must be one of '%s'",
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
     * Gets profile
     *
     * @return \OpenAPI\Client\Model\Profile|null
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param \OpenAPI\Client\Model\Profile|null $profile profile
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets provider_id
     *
     * @return \OpenAPI\Client\Model\ProviderId|null
     */
    public function getProviderId()
    {
        return $this->container['provider_id'];
    }

    /**
     * Sets provider_id
     *
     * @param \OpenAPI\Client\Model\ProviderId|null $provider_id provider_id
     *
     * @return $this
     */
    public function setProviderId($provider_id)
    {
        $this->container['provider_id'] = $provider_id;

        return $this;
    }

    /**
     * Gets position
     *
     * @return \OpenAPI\Client\Model\Position|null
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param \OpenAPI\Client\Model\Position|null $position position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets group
     *
     * @return int|null
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param int|null $group Number of the groups which the signer belongs during digital signature transaction creation
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets certificate
     *
     * @return \OpenAPI\Client\Model\Certificate|null
     */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
     * Sets certificate
     *
     * @param \OpenAPI\Client\Model\Certificate|null $certificate certificate
     *
     * @return $this
     */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;

        return $this;
    }

    /**
     * Gets title
     *
     * @return \OpenAPI\Client\Model\Title|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param \OpenAPI\Client\Model\Title|null $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets dst
     *
     * @return \OpenAPI\Client\Model\Id|null
     */
    public function getDst()
    {
        return $this->container['dst'];
    }

    /**
     * Sets dst
     *
     * @param \OpenAPI\Client\Model\Id|null $dst dst
     *
     * @return $this
     */
    public function setDst($dst)
    {
        $this->container['dst'] = $dst;

        return $this;
    }

    /**
     * Gets signing_time
     *
     * @return string|null
     */
    public function getSigningTime()
    {
        return $this->container['signing_time'];
    }

    /**
     * Sets signing_time
     *
     * @param string|null $signing_time signing_time
     *
     * @return $this
     */
    public function setSigningTime($signing_time)
    {
        $allowedValues = $this->getSigningTimeAllowableValues();
        if (!is_null($signing_time) && !in_array($signing_time, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'signing_time', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['signing_time'] = $signing_time;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return \OpenAPI\Client\Model\Reason|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param \OpenAPI\Client\Model\Reason|null $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return \OpenAPI\Client\Model\SignatureImplementationResponseChannel|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param \OpenAPI\Client\Model\SignatureImplementationResponseChannel|null $channel channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets signature_text
     *
     * @return string|null
     */
    public function getSignatureText()
    {
        return $this->container['signature_text'];
    }

    /**
     * Sets signature_text
     *
     * @param string|null $signature_text signature_text
     *
     * @return $this
     */
    public function setSignatureText($signature_text)
    {
        $this->container['signature_text'] = $signature_text;

        return $this;
    }

    /**
     * Gets signature
     *
     * @return \OpenAPI\Client\Model\Id|null
     */
    public function getSignature()
    {
        return $this->container['signature'];
    }

    /**
     * Sets signature
     *
     * @param \OpenAPI\Client\Model\Id|null $signature signature
     *
     * @return $this
     */
    public function setSignature($signature)
    {
        $this->container['signature'] = $signature;

        return $this;
    }

    /**
     * Gets signature_appearance_uri
     *
     * @return \OpenAPI\Client\Model\SignatureAppearanceUri|null
     */
    public function getSignatureAppearanceUri()
    {
        return $this->container['signature_appearance_uri'];
    }

    /**
     * Sets signature_appearance_uri
     *
     * @param \OpenAPI\Client\Model\SignatureAppearanceUri|null $signature_appearance_uri signature_appearance_uri
     *
     * @return $this
     */
    public function setSignatureAppearanceUri($signature_appearance_uri)
    {
        $this->container['signature_appearance_uri'] = $signature_appearance_uri;

        return $this;
    }

    /**
     * Gets pades_subfilter
     *
     * @return string|null
     */
    public function getPadesSubfilter()
    {
        return $this->container['pades_subfilter'];
    }

    /**
     * Sets pades_subfilter
     *
     * @param string|null $pades_subfilter pades_subfilter
     *
     * @return $this
     */
    public function setPadesSubfilter($pades_subfilter)
    {
        $allowedValues = $this->getPadesSubfilterAllowableValues();
        if (!is_null($pades_subfilter) && !in_array($pades_subfilter, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pades_subfilter', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pades_subfilter'] = $pades_subfilter;

        return $this;
    }

    /**
     * Gets document
     *
     * @return string|null
     */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
     * Sets document
     *
     * @param string|null $document document
     *
     * @return $this
     */
    public function setDocument($document)
    {
        $this->container['document'] = $document;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int|null
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int|null $page page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets identity
     *
     * @return \OpenAPI\Client\Model\Id|null
     */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
     * Sets identity
     *
     * @param \OpenAPI\Client\Model\Id|null $identity identity
     *
     * @return $this
     */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;

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


