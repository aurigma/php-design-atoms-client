<?php
/**
 * UpdateImageHandlerRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Aurigma\DesignAtoms
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * DesignAtoms API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Aurigma\DesignAtoms\Model;

use \ArrayAccess;
use \Aurigma\DesignAtoms\ObjectSerializer;

/**
 * UpdateImageHandlerRequest Class Doc Comment
 *
 * @category Class
 * @package  Aurigma\DesignAtoms
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UpdateImageHandlerRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateImageHandlerRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'actual_size' => 'bool',
        'preserve_aspect_ratio' => 'bool',
        'url' => 'string',
        'canvas_data' => 'string',
        'item_handler_data' => 'string',
        'item_data' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'actual_size' => null,
        'preserve_aspect_ratio' => null,
        'url' => null,
        'canvas_data' => null,
        'item_handler_data' => null,
        'item_data' => null
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
        'actual_size' => 'actualSize',
        'preserve_aspect_ratio' => 'preserveAspectRatio',
        'url' => 'url',
        'canvas_data' => 'canvasData',
        'item_handler_data' => 'itemHandlerData',
        'item_data' => 'itemData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'actual_size' => 'setActualSize',
        'preserve_aspect_ratio' => 'setPreserveAspectRatio',
        'url' => 'setUrl',
        'canvas_data' => 'setCanvasData',
        'item_handler_data' => 'setItemHandlerData',
        'item_data' => 'setItemData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'actual_size' => 'getActualSize',
        'preserve_aspect_ratio' => 'getPreserveAspectRatio',
        'url' => 'getUrl',
        'canvas_data' => 'getCanvasData',
        'item_handler_data' => 'getItemHandlerData',
        'item_data' => 'getItemData'
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
        $this->container['actual_size'] = $data['actual_size'] ?? null;
        $this->container['preserve_aspect_ratio'] = $data['preserve_aspect_ratio'] ?? null;
        $this->container['url'] = $data['url'] ?? null;
        $this->container['canvas_data'] = $data['canvas_data'] ?? null;
        $this->container['item_handler_data'] = $data['item_handler_data'] ?? null;
        $this->container['item_data'] = $data['item_data'] ?? null;
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
     * Gets actual_size
     *
     * @return bool|null
     */
    public function getActualSize()
    {
        return $this->container['actual_size'];
    }

    /**
     * Sets actual_size
     *
     * @param bool|null $actual_size actual_size
     *
     * @return self
     */
    public function setActualSize($actual_size)
    {
        $this->container['actual_size'] = $actual_size;

        return $this;
    }

    /**
     * Gets preserve_aspect_ratio
     *
     * @return bool|null
     */
    public function getPreserveAspectRatio()
    {
        return $this->container['preserve_aspect_ratio'];
    }

    /**
     * Sets preserve_aspect_ratio
     *
     * @param bool|null $preserve_aspect_ratio preserve_aspect_ratio
     *
     * @return self
     */
    public function setPreserveAspectRatio($preserve_aspect_ratio)
    {
        $this->container['preserve_aspect_ratio'] = $preserve_aspect_ratio;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string|null
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string|null $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets canvas_data
     *
     * @return string|null
     */
    public function getCanvasData()
    {
        return $this->container['canvas_data'];
    }

    /**
     * Sets canvas_data
     *
     * @param string|null $canvas_data canvas_data
     *
     * @return self
     */
    public function setCanvasData($canvas_data)
    {
        $this->container['canvas_data'] = $canvas_data;

        return $this;
    }

    /**
     * Gets item_handler_data
     *
     * @return string|null
     */
    public function getItemHandlerData()
    {
        return $this->container['item_handler_data'];
    }

    /**
     * Sets item_handler_data
     *
     * @param string|null $item_handler_data item_handler_data
     *
     * @return self
     */
    public function setItemHandlerData($item_handler_data)
    {
        $this->container['item_handler_data'] = $item_handler_data;

        return $this;
    }

    /**
     * Gets item_data
     *
     * @return mixed|null
     */
    public function getItemData()
    {
        return $this->container['item_data'];
    }

    /**
     * Sets item_data
     *
     * @param mixed|null $item_data item_data
     *
     * @return self
     */
    public function setItemData($item_data)
    {
        $this->container['item_data'] = $item_data;

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
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


