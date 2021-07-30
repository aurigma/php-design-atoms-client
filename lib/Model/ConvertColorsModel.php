<?php
/**
 * ConvertColorsModel
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
 * ConvertColorsModel Class Doc Comment
 *
 * @category Class
 * @description Convert colors operation parameters
 * @package  Aurigma\DesignAtoms
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConvertColorsModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConvertColorsModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'colors' => 'mixed[]',
        'source_color_profile' => 'string',
        'destination_color_profile' => 'string',
        'target_device_color_profile' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'colors' => null,
        'source_color_profile' => null,
        'destination_color_profile' => null,
        'target_device_color_profile' => null
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
        'colors' => 'colors',
        'source_color_profile' => 'sourceColorProfile',
        'destination_color_profile' => 'destinationColorProfile',
        'target_device_color_profile' => 'targetDeviceColorProfile'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'colors' => 'setColors',
        'source_color_profile' => 'setSourceColorProfile',
        'destination_color_profile' => 'setDestinationColorProfile',
        'target_device_color_profile' => 'setTargetDeviceColorProfile'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'colors' => 'getColors',
        'source_color_profile' => 'getSourceColorProfile',
        'destination_color_profile' => 'getDestinationColorProfile',
        'target_device_color_profile' => 'getTargetDeviceColorProfile'
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
        $this->container['colors'] = $data['colors'] ?? null;
        $this->container['source_color_profile'] = $data['source_color_profile'] ?? null;
        $this->container['destination_color_profile'] = $data['destination_color_profile'] ?? null;
        $this->container['target_device_color_profile'] = $data['target_device_color_profile'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['colors'] === null) {
            $invalidProperties[] = "'colors' can't be null";
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
     * Gets colors
     *
     * @return mixed[]
     */
    public function getColors()
    {
        return $this->container['colors'];
    }

    /**
     * Sets colors
     *
     * @param mixed[] $colors Serialized color description
     *
     * @return self
     */
    public function setColors($colors)
    {
        $this->container['colors'] = $colors;

        return $this;
    }

    /**
     * Gets source_color_profile
     *
     * @return string|null
     */
    public function getSourceColorProfile()
    {
        return $this->container['source_color_profile'];
    }

    /**
     * Sets source_color_profile
     *
     * @param string|null $source_color_profile Source color profile description
     *
     * @return self
     */
    public function setSourceColorProfile($source_color_profile)
    {
        $this->container['source_color_profile'] = $source_color_profile;

        return $this;
    }

    /**
     * Gets destination_color_profile
     *
     * @return string|null
     */
    public function getDestinationColorProfile()
    {
        return $this->container['destination_color_profile'];
    }

    /**
     * Sets destination_color_profile
     *
     * @param string|null $destination_color_profile Destination color profile description
     *
     * @return self
     */
    public function setDestinationColorProfile($destination_color_profile)
    {
        $this->container['destination_color_profile'] = $destination_color_profile;

        return $this;
    }

    /**
     * Gets target_device_color_profile
     *
     * @return string|null
     */
    public function getTargetDeviceColorProfile()
    {
        return $this->container['target_device_color_profile'];
    }

    /**
     * Sets target_device_color_profile
     *
     * @param string|null $target_device_color_profile Targent color profile description
     *
     * @return self
     */
    public function setTargetDeviceColorProfile($target_device_color_profile)
    {
        $this->container['target_device_color_profile'] = $target_device_color_profile;

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


