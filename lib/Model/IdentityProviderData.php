<?php
/**
 * IdentityProviderData
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
 * IdentityProviderData Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class IdentityProviderData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Identity_providerData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'smartcard_id' => 'float',
        'middleware_id' => 'string',
        'atr' => 'string',
        'token_info' => '\OpenAPI\Client\Model\IdentityProviderDataTokenInfo',
        'reader' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'smartcard_id' => null,
        'middleware_id' => null,
        'atr' => null,
        'token_info' => null,
        'reader' => null
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
        'smartcard_id' => 'smartcardID',
        'middleware_id' => 'middlewareID',
        'atr' => 'ATR',
        'token_info' => 'tokenInfo',
        'reader' => 'reader'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'smartcard_id' => 'setSmartcardId',
        'middleware_id' => 'setMiddlewareId',
        'atr' => 'setAtr',
        'token_info' => 'setTokenInfo',
        'reader' => 'setReader'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'smartcard_id' => 'getSmartcardId',
        'middleware_id' => 'getMiddlewareId',
        'atr' => 'getAtr',
        'token_info' => 'getTokenInfo',
        'reader' => 'getReader'
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
        $this->container['smartcard_id'] = isset($data['smartcard_id']) ? $data['smartcard_id'] : null;
        $this->container['middleware_id'] = isset($data['middleware_id']) ? $data['middleware_id'] : null;
        $this->container['atr'] = isset($data['atr']) ? $data['atr'] : null;
        $this->container['token_info'] = isset($data['token_info']) ? $data['token_info'] : null;
        $this->container['reader'] = isset($data['reader']) ? $data['reader'] : null;
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
     * Gets smartcard_id
     *
     * @return float|null
     */
    public function getSmartcardId()
    {
        return $this->container['smartcard_id'];
    }

    /**
     * Sets smartcard_id
     *
     * @param float|null $smartcard_id smartcard_id
     *
     * @return $this
     */
    public function setSmartcardId($smartcard_id)
    {
        $this->container['smartcard_id'] = $smartcard_id;

        return $this;
    }

    /**
     * Gets middleware_id
     *
     * @return string|null
     */
    public function getMiddlewareId()
    {
        return $this->container['middleware_id'];
    }

    /**
     * Sets middleware_id
     *
     * @param string|null $middleware_id middleware_id
     *
     * @return $this
     */
    public function setMiddlewareId($middleware_id)
    {
        $this->container['middleware_id'] = $middleware_id;

        return $this;
    }

    /**
     * Gets atr
     *
     * @return string|null
     */
    public function getAtr()
    {
        return $this->container['atr'];
    }

    /**
     * Sets atr
     *
     * @param string|null $atr atr
     *
     * @return $this
     */
    public function setAtr($atr)
    {
        $this->container['atr'] = $atr;

        return $this;
    }

    /**
     * Gets token_info
     *
     * @return \OpenAPI\Client\Model\IdentityProviderDataTokenInfo|null
     */
    public function getTokenInfo()
    {
        return $this->container['token_info'];
    }

    /**
     * Sets token_info
     *
     * @param \OpenAPI\Client\Model\IdentityProviderDataTokenInfo|null $token_info token_info
     *
     * @return $this
     */
    public function setTokenInfo($token_info)
    {
        $this->container['token_info'] = $token_info;

        return $this;
    }

    /**
     * Gets reader
     *
     * @return string|null
     */
    public function getReader()
    {
        return $this->container['reader'];
    }

    /**
     * Sets reader
     *
     * @param string|null $reader reader
     *
     * @return $this
     */
    public function setReader($reader)
    {
        $this->container['reader'] = $reader;

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

