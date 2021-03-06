<?php
/**
 * SAMLToken
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Signing Today Web
 *
 * *Signing Today* is the perfect Digital Signature Gateway. Whenever in Your workflow You need to add one or more Digital Signatures to Your document, *Signing Today* is the right choice. You prepare Your documents, *Signing Today* takes care of all the rest: send invitations (`signature tickets`) to signers, collects their signatures, send You back the signed document. Integrating *Signing Today* in Your existing applications is very easy. Just follow these API specifications and get inspired by the many examples presented hereafter.
 *
 * The version of the OpenAPI document: 2.0.0
 * 
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
 * SAMLToken Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SAMLToken implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SAMLToken';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_not_onorafter' => '\DateTime',
        'surname' => 'string',
        'given_name' => 'string',
        'common_name' => 'string',
        'rfc822_mailbox' => 'string',
        '_not_before' => '\DateTime',
        'userid' => 'string',
        'mail_alternate_address' => 'string',
        'edu_person_org_dn' => 'string',
        'edu_person_principal_name' => 'string',
        'is_member_of' => 'string[]',
        'groups' => 'string[]',
        'display_name' => 'string',
        'edu_person_targeted_id' => '\OpenAPI\Client\Model\SAMLTokenEduPersonTargetedID',
        '_cookies' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        '_not_onorafter' => 'date-time',
        'surname' => null,
        'given_name' => null,
        'common_name' => null,
        'rfc822_mailbox' => null,
        '_not_before' => 'date-time',
        'userid' => null,
        'mail_alternate_address' => null,
        'edu_person_org_dn' => null,
        'edu_person_principal_name' => null,
        'is_member_of' => null,
        'groups' => null,
        'display_name' => null,
        'edu_person_targeted_id' => null,
        '_cookies' => null
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
        '_not_onorafter' => '_not_onorafter',
        'surname' => 'surname',
        'given_name' => 'givenName',
        'common_name' => 'commonName',
        'rfc822_mailbox' => 'rfc822Mailbox',
        '_not_before' => '_not_before',
        'userid' => 'userid',
        'mail_alternate_address' => 'mailAlternateAddress',
        'edu_person_org_dn' => 'eduPersonOrgDN',
        'edu_person_principal_name' => 'eduPersonPrincipalName',
        'is_member_of' => 'isMemberOf',
        'groups' => 'groups',
        'display_name' => 'displayName',
        'edu_person_targeted_id' => 'eduPersonTargetedID',
        '_cookies' => '_cookies'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_not_onorafter' => 'setNotOnorafter',
        'surname' => 'setSurname',
        'given_name' => 'setGivenName',
        'common_name' => 'setCommonName',
        'rfc822_mailbox' => 'setRfc822Mailbox',
        '_not_before' => 'setNotBefore',
        'userid' => 'setUserid',
        'mail_alternate_address' => 'setMailAlternateAddress',
        'edu_person_org_dn' => 'setEduPersonOrgDn',
        'edu_person_principal_name' => 'setEduPersonPrincipalName',
        'is_member_of' => 'setIsMemberOf',
        'groups' => 'setGroups',
        'display_name' => 'setDisplayName',
        'edu_person_targeted_id' => 'setEduPersonTargetedId',
        '_cookies' => 'setCookies'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_not_onorafter' => 'getNotOnorafter',
        'surname' => 'getSurname',
        'given_name' => 'getGivenName',
        'common_name' => 'getCommonName',
        'rfc822_mailbox' => 'getRfc822Mailbox',
        '_not_before' => 'getNotBefore',
        'userid' => 'getUserid',
        'mail_alternate_address' => 'getMailAlternateAddress',
        'edu_person_org_dn' => 'getEduPersonOrgDn',
        'edu_person_principal_name' => 'getEduPersonPrincipalName',
        'is_member_of' => 'getIsMemberOf',
        'groups' => 'getGroups',
        'display_name' => 'getDisplayName',
        'edu_person_targeted_id' => 'getEduPersonTargetedId',
        '_cookies' => 'getCookies'
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
        $this->container['_not_onorafter'] = isset($data['_not_onorafter']) ? $data['_not_onorafter'] : null;
        $this->container['surname'] = isset($data['surname']) ? $data['surname'] : null;
        $this->container['given_name'] = isset($data['given_name']) ? $data['given_name'] : null;
        $this->container['common_name'] = isset($data['common_name']) ? $data['common_name'] : null;
        $this->container['rfc822_mailbox'] = isset($data['rfc822_mailbox']) ? $data['rfc822_mailbox'] : null;
        $this->container['_not_before'] = isset($data['_not_before']) ? $data['_not_before'] : null;
        $this->container['userid'] = isset($data['userid']) ? $data['userid'] : null;
        $this->container['mail_alternate_address'] = isset($data['mail_alternate_address']) ? $data['mail_alternate_address'] : null;
        $this->container['edu_person_org_dn'] = isset($data['edu_person_org_dn']) ? $data['edu_person_org_dn'] : null;
        $this->container['edu_person_principal_name'] = isset($data['edu_person_principal_name']) ? $data['edu_person_principal_name'] : null;
        $this->container['is_member_of'] = isset($data['is_member_of']) ? $data['is_member_of'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['edu_person_targeted_id'] = isset($data['edu_person_targeted_id']) ? $data['edu_person_targeted_id'] : null;
        $this->container['_cookies'] = isset($data['_cookies']) ? $data['_cookies'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets _not_onorafter
     *
     * @return \DateTime|null
     */
    public function getNotOnorafter()
    {
        return $this->container['_not_onorafter'];
    }

    /**
     * Sets _not_onorafter
     *
     * @param \DateTime|null $_not_onorafter _not_onorafter
     *
     * @return $this
     */
    public function setNotOnorafter($_not_onorafter)
    {
        $this->container['_not_onorafter'] = $_not_onorafter;

        return $this;
    }

    /**
     * Gets surname
     *
     * @return string|null
     */
    public function getSurname()
    {
        return $this->container['surname'];
    }

    /**
     * Sets surname
     *
     * @param string|null $surname surname
     *
     * @return $this
     */
    public function setSurname($surname)
    {
        $this->container['surname'] = $surname;

        return $this;
    }

    /**
     * Gets given_name
     *
     * @return string|null
     */
    public function getGivenName()
    {
        return $this->container['given_name'];
    }

    /**
     * Sets given_name
     *
     * @param string|null $given_name given_name
     *
     * @return $this
     */
    public function setGivenName($given_name)
    {
        $this->container['given_name'] = $given_name;

        return $this;
    }

    /**
     * Gets common_name
     *
     * @return string|null
     */
    public function getCommonName()
    {
        return $this->container['common_name'];
    }

    /**
     * Sets common_name
     *
     * @param string|null $common_name common_name
     *
     * @return $this
     */
    public function setCommonName($common_name)
    {
        $this->container['common_name'] = $common_name;

        return $this;
    }

    /**
     * Gets rfc822_mailbox
     *
     * @return string|null
     */
    public function getRfc822Mailbox()
    {
        return $this->container['rfc822_mailbox'];
    }

    /**
     * Sets rfc822_mailbox
     *
     * @param string|null $rfc822_mailbox rfc822_mailbox
     *
     * @return $this
     */
    public function setRfc822Mailbox($rfc822_mailbox)
    {
        $this->container['rfc822_mailbox'] = $rfc822_mailbox;

        return $this;
    }

    /**
     * Gets _not_before
     *
     * @return \DateTime|null
     */
    public function getNotBefore()
    {
        return $this->container['_not_before'];
    }

    /**
     * Sets _not_before
     *
     * @param \DateTime|null $_not_before _not_before
     *
     * @return $this
     */
    public function setNotBefore($_not_before)
    {
        $this->container['_not_before'] = $_not_before;

        return $this;
    }

    /**
     * Gets userid
     *
     * @return string|null
     */
    public function getUserid()
    {
        return $this->container['userid'];
    }

    /**
     * Sets userid
     *
     * @param string|null $userid userid
     *
     * @return $this
     */
    public function setUserid($userid)
    {
        $this->container['userid'] = $userid;

        return $this;
    }

    /**
     * Gets mail_alternate_address
     *
     * @return string|null
     */
    public function getMailAlternateAddress()
    {
        return $this->container['mail_alternate_address'];
    }

    /**
     * Sets mail_alternate_address
     *
     * @param string|null $mail_alternate_address mail_alternate_address
     *
     * @return $this
     */
    public function setMailAlternateAddress($mail_alternate_address)
    {
        $this->container['mail_alternate_address'] = $mail_alternate_address;

        return $this;
    }

    /**
     * Gets edu_person_org_dn
     *
     * @return string|null
     */
    public function getEduPersonOrgDn()
    {
        return $this->container['edu_person_org_dn'];
    }

    /**
     * Sets edu_person_org_dn
     *
     * @param string|null $edu_person_org_dn edu_person_org_dn
     *
     * @return $this
     */
    public function setEduPersonOrgDn($edu_person_org_dn)
    {
        $this->container['edu_person_org_dn'] = $edu_person_org_dn;

        return $this;
    }

    /**
     * Gets edu_person_principal_name
     *
     * @return string|null
     */
    public function getEduPersonPrincipalName()
    {
        return $this->container['edu_person_principal_name'];
    }

    /**
     * Sets edu_person_principal_name
     *
     * @param string|null $edu_person_principal_name edu_person_principal_name
     *
     * @return $this
     */
    public function setEduPersonPrincipalName($edu_person_principal_name)
    {
        $this->container['edu_person_principal_name'] = $edu_person_principal_name;

        return $this;
    }

    /**
     * Gets is_member_of
     *
     * @return string[]|null
     */
    public function getIsMemberOf()
    {
        return $this->container['is_member_of'];
    }

    /**
     * Sets is_member_of
     *
     * @param string[]|null $is_member_of is_member_of
     *
     * @return $this
     */
    public function setIsMemberOf($is_member_of)
    {
        $this->container['is_member_of'] = $is_member_of;

        return $this;
    }

    /**
     * Gets groups
     *
     * @return string[]|null
     */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
     * Sets groups
     *
     * @param string[]|null $groups groups
     *
     * @return $this
     */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;

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
     * @param string|null $display_name display_name
     *
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets edu_person_targeted_id
     *
     * @return \OpenAPI\Client\Model\SAMLTokenEduPersonTargetedID|null
     */
    public function getEduPersonTargetedId()
    {
        return $this->container['edu_person_targeted_id'];
    }

    /**
     * Sets edu_person_targeted_id
     *
     * @param \OpenAPI\Client\Model\SAMLTokenEduPersonTargetedID|null $edu_person_targeted_id edu_person_targeted_id
     *
     * @return $this
     */
    public function setEduPersonTargetedId($edu_person_targeted_id)
    {
        $this->container['edu_person_targeted_id'] = $edu_person_targeted_id;

        return $this;
    }

    /**
     * Gets _cookies
     *
     * @return string|null
     */
    public function getCookies()
    {
        return $this->container['_cookies'];
    }

    /**
     * Sets _cookies
     *
     * @param string|null $_cookies _cookies
     *
     * @return $this
     */
    public function setCookies($_cookies)
    {
        $this->container['_cookies'] = $_cookies;

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


