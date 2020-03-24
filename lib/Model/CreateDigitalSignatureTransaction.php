<?php
/**
 * CreateDigitalSignatureTransaction
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
 * CreateDigitalSignatureTransaction Class Doc Comment
 *
 * @category Class
 * @description The **DST Template** from which will be created the DST
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CreateDigitalSignatureTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateDigitalSignatureTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'documents' => '\OpenAPI\Client\Model\CreateDocument[]',
        'status' => 'string',
        'expires_at' => '\DateTime',
        'tags' => 'string[]',
        'template' => 'bool',
        'public_template' => 'bool',
        'cc_groups' => 'string[]',
        'cc_users' => 'string[]',
        'urgent' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'title' => 'string',
        'documents' => null,
        'status' => 'string',
        'expires_at' => 'date-time',
        'tags' => null,
        'template' => 'boolean',
        'public_template' => 'boolean',
        'cc_groups' => null,
        'cc_users' => 'uuid',
        'urgent' => 'boolean'
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
        'title' => 'title',
        'documents' => 'documents',
        'status' => 'status',
        'expires_at' => 'expiresAt',
        'tags' => 'tags',
        'template' => 'template',
        'public_template' => 'publicTemplate',
        'cc_groups' => 'ccGroups',
        'cc_users' => 'ccUsers',
        'urgent' => 'urgent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'documents' => 'setDocuments',
        'status' => 'setStatus',
        'expires_at' => 'setExpiresAt',
        'tags' => 'setTags',
        'template' => 'setTemplate',
        'public_template' => 'setPublicTemplate',
        'cc_groups' => 'setCcGroups',
        'cc_users' => 'setCcUsers',
        'urgent' => 'setUrgent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'documents' => 'getDocuments',
        'status' => 'getStatus',
        'expires_at' => 'getExpiresAt',
        'tags' => 'getTags',
        'template' => 'getTemplate',
        'public_template' => 'getPublicTemplate',
        'cc_groups' => 'getCcGroups',
        'cc_users' => 'getCcUsers',
        'urgent' => 'getUrgent'
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

    const STATUS_DRAFT = 'draft';
    const STATUS_PUBLISHED = 'published';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_PUBLISHED,
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['expires_at'] = isset($data['expires_at']) ? $data['expires_at'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['public_template'] = isset($data['public_template']) ? $data['public_template'] : null;
        $this->container['cc_groups'] = isset($data['cc_groups']) ? $data['cc_groups'] : null;
        $this->container['cc_users'] = isset($data['cc_users']) ? $data['cc_users'] : null;
        $this->container['urgent'] = isset($data['urgent']) ? $data['urgent'] : null;
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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title of the _Digital Signature Transaction_
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return \OpenAPI\Client\Model\CreateDocument[]|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \OpenAPI\Client\Model\CreateDocument[]|null $documents The document or documents of the _DST_
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

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
     * @param string|null $status Status of the _DST_
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
     * Gets expires_at
     *
     * @return \DateTime|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param \DateTime|null $expires_at Date of expiration of the _DST_
     *
     * @return $this
     */
    public function setExpiresAt($expires_at)
    {
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags An array of tags for the DST. In such way is possible to tag in the same way some DSTs in order to keep them organized and been easy to find them through the custom search
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets template
     *
     * @return bool|null
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param bool|null $template True if the _DST_ has been created from a template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets public_template
     *
     * @return bool|null
     */
    public function getPublicTemplate()
    {
        return $this->container['public_template'];
    }

    /**
     * Sets public_template
     *
     * @param bool|null $public_template Indicates if a public template has been used to create the DST or not
     *
     * @return $this
     */
    public function setPublicTemplate($public_template)
    {
        $this->container['public_template'] = $public_template;

        return $this;
    }

    /**
     * Gets cc_groups
     *
     * @return string[]|null
     */
    public function getCcGroups()
    {
        return $this->container['cc_groups'];
    }

    /**
     * Sets cc_groups
     *
     * @param string[]|null $cc_groups Name of groups that are informed about the DST.
     *
     * @return $this
     */
    public function setCcGroups($cc_groups)
    {
        $this->container['cc_groups'] = $cc_groups;

        return $this;
    }

    /**
     * Gets cc_users
     *
     * @return string[]|null
     */
    public function getCcUsers()
    {
        return $this->container['cc_users'];
    }

    /**
     * Sets cc_users
     *
     * @param string[]|null $cc_users UUIDs of the users that are informed about the DST.
     *
     * @return $this
     */
    public function setCcUsers($cc_users)
    {
        $this->container['cc_users'] = $cc_users;

        return $this;
    }

    /**
     * Gets urgent
     *
     * @return bool|null
     */
    public function getUrgent()
    {
        return $this->container['urgent'];
    }

    /**
     * Sets urgent
     *
     * @param bool|null $urgent True if the DST is flagged as urgent
     *
     * @return $this
     */
    public function setUrgent($urgent)
    {
        $this->container['urgent'] = $urgent;

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


