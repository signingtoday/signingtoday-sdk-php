<?php
/**
 * Signature
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
 * Signature Class Doc Comment
 *
 * @category Class
 * @description The Signature is an object of SigningToday which contains all the information needed to _digitally sign a document_. This is possible thanks to the cerficate associated to the identity in the wallet of the user is going to perform the signature. The _profile_ field of the Signature object specifies the modality of signature is going to be performed, and can be:   - _PADES_ :     - allows to exclusively sign a pdf file with the signature     directly affixed into the document;   - _CADES_ :     - allows to sign different types of documents; the signature     is not \&quot;physically\&quot; into the document but the signature and the file     are placed together in an envelope instead, making thus a _.p7m_     extension.  Consistently to the other objects, the Signature, as well, has a status, which is helpful to understand if the signature has been performed already or not, if it is expired or it is errored due to a miskate during the creation of the digital signature transaction or the performing of the signature itself.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Signature implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Signature';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'signer' => 'string',
        'signer_group' => 'string',
        'signature_ticket' => 'string',
        'automatic' => 'bool',
        'decline_url' => 'string',
        'description_html' => 'string',
        'status' => 'string',
        'display_name' => 'string',
        'profile' => 'string',
        'reason' => 'string',
        'description' => 'string',
        'declinable' => 'bool',
        'urlback' => 'string',
        'where' => '\OpenAPI\Client\Model\SignatureWhere',
        'constraints' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'signer' => 'any',
        'signer_group' => 'any',
        'signature_ticket' => 'url',
        'automatic' => null,
        'decline_url' => 'url',
        'description_html' => 'html',
        'status' => null,
        'display_name' => 'any',
        'profile' => null,
        'reason' => 'any',
        'description' => 'markdown',
        'declinable' => null,
        'urlback' => 'url',
        'where' => null,
        'constraints' => null
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
        'signer' => 'signer',
        'signer_group' => 'signer_group',
        'signature_ticket' => 'signature_ticket',
        'automatic' => 'automatic',
        'decline_url' => 'decline_url',
        'description_html' => 'description_html',
        'status' => 'status',
        'display_name' => 'display_name',
        'profile' => 'profile',
        'reason' => 'reason',
        'description' => 'description',
        'declinable' => 'declinable',
        'urlback' => 'urlback',
        'where' => 'where',
        'constraints' => 'constraints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'signer' => 'setSigner',
        'signer_group' => 'setSignerGroup',
        'signature_ticket' => 'setSignatureTicket',
        'automatic' => 'setAutomatic',
        'decline_url' => 'setDeclineUrl',
        'description_html' => 'setDescriptionHtml',
        'status' => 'setStatus',
        'display_name' => 'setDisplayName',
        'profile' => 'setProfile',
        'reason' => 'setReason',
        'description' => 'setDescription',
        'declinable' => 'setDeclinable',
        'urlback' => 'setUrlback',
        'where' => 'setWhere',
        'constraints' => 'setConstraints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'signer' => 'getSigner',
        'signer_group' => 'getSignerGroup',
        'signature_ticket' => 'getSignatureTicket',
        'automatic' => 'getAutomatic',
        'decline_url' => 'getDeclineUrl',
        'description_html' => 'getDescriptionHtml',
        'status' => 'getStatus',
        'display_name' => 'getDisplayName',
        'profile' => 'getProfile',
        'reason' => 'getReason',
        'description' => 'getDescription',
        'declinable' => 'getDeclinable',
        'urlback' => 'getUrlback',
        'where' => 'getWhere',
        'constraints' => 'getConstraints'
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

    const STATUS_WAITING = 'waiting';
    const STATUS_PENDING = 'pending';
    const STATUS_PERFORMED = 'performed';
    const STATUS_EXPIRED = 'expired';
    const STATUS_ERROR = 'error';
    const PROFILE_PADES_BES = 'pades-bes';
    const PROFILE_PADES_T = 'pades-t';
    const PROFILE_CADES_BES = 'cades-bes';
    const PROFILE_CADES_T = 'cades-t';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING,
            self::STATUS_PENDING,
            self::STATUS_PERFORMED,
            self::STATUS_EXPIRED,
            self::STATUS_ERROR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProfileAllowableValues()
    {
        return [
            self::PROFILE_PADES_BES,
            self::PROFILE_PADES_T,
            self::PROFILE_CADES_BES,
            self::PROFILE_CADES_T,
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
        $this->container['signer'] = isset($data['signer']) ? $data['signer'] : null;
        $this->container['signer_group'] = isset($data['signer_group']) ? $data['signer_group'] : null;
        $this->container['signature_ticket'] = isset($data['signature_ticket']) ? $data['signature_ticket'] : null;
        $this->container['automatic'] = isset($data['automatic']) ? $data['automatic'] : null;
        $this->container['decline_url'] = isset($data['decline_url']) ? $data['decline_url'] : null;
        $this->container['description_html'] = isset($data['description_html']) ? $data['description_html'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['declinable'] = isset($data['declinable']) ? $data['declinable'] : null;
        $this->container['urlback'] = isset($data['urlback']) ? $data['urlback'] : null;
        $this->container['where'] = isset($data['where']) ? $data['where'] : null;
        $this->container['constraints'] = isset($data['constraints']) ? $data['constraints'] : null;
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

        $allowedValues = $this->getProfileAllowableValues();
        if (!is_null($this->container['profile']) && !in_array($this->container['profile'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'profile', must be one of '%s'",
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
     * @param string|null $id The uuid code that identifies the Signature
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets signer
     *
     * @return string|null
     */
    public function getSigner()
    {
        return $this->container['signer'];
    }

    /**
     * Sets signer
     *
     * @param string|null $signer The user that have to sign the digital signature transaction
     *
     * @return $this
     */
    public function setSigner($signer)
    {
        $this->container['signer'] = $signer;

        return $this;
    }

    /**
     * Gets signer_group
     *
     * @return string|null
     */
    public function getSignerGroup()
    {
        return $this->container['signer_group'];
    }

    /**
     * Sets signer_group
     *
     * @param string|null $signer_group The group which the signer belongs. This field is used in the scenario of a digital signature transaction that has multiple signatures to be performed, where the signers belongs to the same group. Let's think to the group _\"teachers\"_ of a school. Thus is possible to add the _signer_group_ _\"teachers\"_ as signers of the digital signature transaction without worrying about who really belong to that group
     *
     * @return $this
     */
    public function setSignerGroup($signer_group)
    {
        $this->container['signer_group'] = $signer_group;

        return $this;
    }

    /**
     * Gets signature_ticket
     *
     * @return string|null
     */
    public function getSignatureTicket()
    {
        return $this->container['signature_ticket'];
    }

    /**
     * Sets signature_ticket
     *
     * @param string|null $signature_ticket This is the url where a signature tray is predisposed for a specific signer that have to sign a specific digital signature transaction. It is possible to set the signature tray language by the use of the **locate** query string - e.g. *?locate=en*
     *
     * @return $this
     */
    public function setSignatureTicket($signature_ticket)
    {
        $this->container['signature_ticket'] = $signature_ticket;

        return $this;
    }

    /**
     * Gets automatic
     *
     * @return bool|null
     */
    public function getAutomatic()
    {
        return $this->container['automatic'];
    }

    /**
     * Sets automatic
     *
     * @param bool|null $automatic If true indicates that the signer is an _automatic_ one, thus the signature procedure will be different from a regular signer
     *
     * @return $this
     */
    public function setAutomatic($automatic)
    {
        $this->container['automatic'] = $automatic;

        return $this;
    }

    /**
     * Gets decline_url
     *
     * @return string|null
     */
    public function getDeclineUrl()
    {
        return $this->container['decline_url'];
    }

    /**
     * Sets decline_url
     *
     * @param string|null $decline_url This is the url to decline a digital signature transaction
     *
     * @return $this
     */
    public function setDeclineUrl($decline_url)
    {
        $this->container['decline_url'] = $decline_url;

        return $this;
    }

    /**
     * Gets description_html
     *
     * @return string|null
     */
    public function getDescriptionHtml()
    {
        return $this->container['description_html'];
    }

    /**
     * Sets description_html
     *
     * @param string|null $description_html This is a _html_ description to attach with the Signature
     *
     * @return $this
     */
    public function setDescriptionHtml($description_html)
    {
        $this->container['description_html'] = $description_html;

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
     * @param string|null $status The status of the Signature. As the digital signature transaction is created the status of the Signature is _waiting_, if everything is legit than the status changes to _pending_, otherwise to _error_. Once the Signature is made the status changes to _performed_. If the DST expires before the Signature is performed then the status changes to _expired_
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
     * Gets display_name
     *
     * @return string|null
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     *
     * @param string|null $display_name This is the name will be displayed on the signature tray associated to the Signature has to be performed. Usually is the _full name_ of the user is going to sign
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return string|null
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param string|null $profile The _profile_ field of the Signature object specifies the modality of signature is going to be performed, and can be:   - _PADES_ : allows to exclusively sign a pdf file with the signature     directly affixed into the document;   - _CADES_ : allows to sign different types of documents; the signature     is not \"physically\" into the document but the signature and the file     are placed together in an envelope instead, making thus a .p7m extension.
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $allowedValues = $this->getProfileAllowableValues();
        if (!is_null($profile) && !in_array($profile, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'profile', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string|null
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string|null $reason The reason of the Signature, or rather a motivational description associated to the Signature
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description This is a simple description to attach with the Signature
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets declinable
     *
     * @return bool|null
     */
    public function getDeclinable()
    {
        return $this->container['declinable'];
    }

    /**
     * Sets declinable
     *
     * @param bool|null $declinable If true the signer is able to decline the Signature if he wants to
     *
     * @return $this
     */
    public function setDeclinable($declinable)
    {
        $this->container['declinable'] = $declinable;

        return $this;
    }

    /**
     * Gets urlback
     *
     * @return string|null
     */
    public function getUrlback()
    {
        return $this->container['urlback'];
    }

    /**
     * Sets urlback
     *
     * @param string|null $urlback The url for the redirection from Signature tray when the digital signature transaction is completed or annulled
     *
     * @return $this
     */
    public function setUrlback($urlback)
    {
        $this->container['urlback'] = $urlback;

        return $this;
    }

    /**
     * Gets where
     *
     * @return \OpenAPI\Client\Model\SignatureWhere|null
     */
    public function getWhere()
    {
        return $this->container['where'];
    }

    /**
     * Sets where
     *
     * @param \OpenAPI\Client\Model\SignatureWhere|null $where where
     *
     * @return $this
     */
    public function setWhere($where)
    {
        $this->container['where'] = $where;

        return $this;
    }

    /**
     * Gets constraints
     *
     * @return object|null
     */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
     * Sets constraints
     *
     * @param object|null $constraints Particular constraints for the Signature. For example constraints about the _firs tname_ or _last name_ of the certificate associated with the identity is going to sign. The way to use this field is through the _django lookups_, for example:   - \"certificate__subject_givenName__iexact=JOHN\"
     *
     * @return $this
     */
    public function setConstraints($constraints)
    {
        $this->container['constraints'] = $constraints;

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


