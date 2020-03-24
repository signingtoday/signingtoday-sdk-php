<?php
/**
 * FillableForm
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
 * FillableForm Class Doc Comment
 *
 * @category Class
 * @description Two type of fillable exists; &#x60;SignatureForm&#x60; and &#x60;TextForm&#x60;. The former represents the association with the SignatureRequest, the latter represents any editable text form field to be filled before the signature process begins.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FillableForm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FillableForm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        '_instance_id' => 'int',
        'id' => 'int',
        'document_id' => 'int',
        'type' => 'string',
        'position_x' => 'float',
        'position_y' => 'float',
        'width' => 'float',
        'height' => 'float',
        'page' => 'int',
        'signer_id' => 'int',
        'to_fill' => 'bool',
        'filled' => 'bool',
        'invisible' => 'bool',
        'extra_data' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        '_instance_id' => 'int64',
        'id' => 'int32',
        'document_id' => 'int32',
        'type' => null,
        'position_x' => 'float',
        'position_y' => 'float',
        'width' => 'float',
        'height' => 'float',
        'page' => 'int64',
        'signer_id' => 'int32',
        'to_fill' => null,
        'filled' => null,
        'invisible' => null,
        'extra_data' => null
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
        '_instance_id' => '_instance_id',
        'id' => 'id',
        'document_id' => 'documentId',
        'type' => 'type',
        'position_x' => 'positionX',
        'position_y' => 'positionY',
        'width' => 'width',
        'height' => 'height',
        'page' => 'page',
        'signer_id' => 'signerId',
        'to_fill' => 'toFill',
        'filled' => 'filled',
        'invisible' => 'invisible',
        'extra_data' => 'extraData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        '_instance_id' => 'setInstanceId',
        'id' => 'setId',
        'document_id' => 'setDocumentId',
        'type' => 'setType',
        'position_x' => 'setPositionX',
        'position_y' => 'setPositionY',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'page' => 'setPage',
        'signer_id' => 'setSignerId',
        'to_fill' => 'setToFill',
        'filled' => 'setFilled',
        'invisible' => 'setInvisible',
        'extra_data' => 'setExtraData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        '_instance_id' => 'getInstanceId',
        'id' => 'getId',
        'document_id' => 'getDocumentId',
        'type' => 'getType',
        'position_x' => 'getPositionX',
        'position_y' => 'getPositionY',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'page' => 'getPage',
        'signer_id' => 'getSignerId',
        'to_fill' => 'getToFill',
        'filled' => 'getFilled',
        'invisible' => 'getInvisible',
        'extra_data' => 'getExtraData'
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
        $this->container['_instance_id'] = isset($data['_instance_id']) ? $data['_instance_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['position_x'] = isset($data['position_x']) ? $data['position_x'] : null;
        $this->container['position_y'] = isset($data['position_y']) ? $data['position_y'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['signer_id'] = isset($data['signer_id']) ? $data['signer_id'] : null;
        $this->container['to_fill'] = isset($data['to_fill']) ? $data['to_fill'] : null;
        $this->container['filled'] = isset($data['filled']) ? $data['filled'] : null;
        $this->container['invisible'] = isset($data['invisible']) ? $data['invisible'] : null;
        $this->container['extra_data'] = isset($data['extra_data']) ? $data['extra_data'] : null;
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
     * Gets _instance_id
     *
     * @return int|null
     */
    public function getInstanceId()
    {
        return $this->container['_instance_id'];
    }

    /**
     * Sets _instance_id
     *
     * @param int|null $_instance_id It is a reference for internal use
     *
     * @return $this
     */
    public function setInstanceId($_instance_id)
    {
        $this->container['_instance_id'] = $_instance_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id Id of the _form_
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return int|null
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param int|null $document_id Id of the document
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Type of the fill form
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets position_x
     *
     * @return float|null
     */
    public function getPositionX()
    {
        return $this->container['position_x'];
    }

    /**
     * Sets position_x
     *
     * @param float|null $position_x Position onto the X axis of the form, expressed in percentage
     *
     * @return $this
     */
    public function setPositionX($position_x)
    {
        $this->container['position_x'] = $position_x;

        return $this;
    }

    /**
     * Gets position_y
     *
     * @return float|null
     */
    public function getPositionY()
    {
        return $this->container['position_y'];
    }

    /**
     * Sets position_y
     *
     * @param float|null $position_y Position onto the Y axis of the form, expressed in percentage
     *
     * @return $this
     */
    public function setPositionY($position_y)
    {
        $this->container['position_y'] = $position_y;

        return $this;
    }

    /**
     * Gets width
     *
     * @return float|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param float|null $width Width of the form expressed in percentage
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return float|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param float|null $height Height of the form expressed in percentage
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

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
     * @param int|null $page Page of the document where the form is
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

        return $this;
    }

    /**
     * Gets signer_id
     *
     * @return int|null
     */
    public function getSignerId()
    {
        return $this->container['signer_id'];
    }

    /**
     * Sets signer_id
     *
     * @param int|null $signer_id Id of the signer in the sign plan
     *
     * @return $this
     */
    public function setSignerId($signer_id)
    {
        $this->container['signer_id'] = $signer_id;

        return $this;
    }

    /**
     * Gets to_fill
     *
     * @return bool|null
     */
    public function getToFill()
    {
        return $this->container['to_fill'];
    }

    /**
     * Sets to_fill
     *
     * @param bool|null $to_fill **True** if the field need to be filled by the user. In case of a Signature it is **false**
     *
     * @return $this
     */
    public function setToFill($to_fill)
    {
        $this->container['to_fill'] = $to_fill;

        return $this;
    }

    /**
     * Gets filled
     *
     * @return bool|null
     */
    public function getFilled()
    {
        return $this->container['filled'];
    }

    /**
     * Sets filled
     *
     * @param bool|null $filled True ones the form has been filled
     *
     * @return $this
     */
    public function setFilled($filled)
    {
        $this->container['filled'] = $filled;

        return $this;
    }

    /**
     * Gets invisible
     *
     * @return bool|null
     */
    public function getInvisible()
    {
        return $this->container['invisible'];
    }

    /**
     * Sets invisible
     *
     * @param bool|null $invisible True if the appearance has to be hidden
     *
     * @return $this
     */
    public function setInvisible($invisible)
    {
        $this->container['invisible'] = $invisible;

        return $this;
    }

    /**
     * Gets extra_data
     *
     * @return map[string,object]|null
     */
    public function getExtraData()
    {
        return $this->container['extra_data'];
    }

    /**
     * Sets extra_data
     *
     * @param map[string,object]|null $extra_data Extra information about the form
     *
     * @return $this
     */
    public function setExtraData($extra_data)
    {
        $this->container['extra_data'] = $extra_data;

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

