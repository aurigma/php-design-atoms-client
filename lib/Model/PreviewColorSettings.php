<?php
/**
 * PreviewColorSettings
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
 * PreviewColorSettings Class Doc Comment
 *
 * @category Class
 * @package  Aurigma\DesignAtoms
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PreviewColorSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PreviewColorSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'rgb_color_profile_name' => 'string',
        'cmyk_color_profile_name' => 'string',
        'grayscale_color_profile_name' => 'string',
        'hi_res_destination_color_profile_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'rgb_color_profile_name' => null,
        'cmyk_color_profile_name' => null,
        'grayscale_color_profile_name' => null,
        'hi_res_destination_color_profile_name' => null
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
        'rgb_color_profile_name' => 'rgbColorProfileName',
        'cmyk_color_profile_name' => 'cmykColorProfileName',
        'grayscale_color_profile_name' => 'grayscaleColorProfileName',
        'hi_res_destination_color_profile_name' => 'hiResDestinationColorProfileName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rgb_color_profile_name' => 'setRgbColorProfileName',
        'cmyk_color_profile_name' => 'setCmykColorProfileName',
        'grayscale_color_profile_name' => 'setGrayscaleColorProfileName',
        'hi_res_destination_color_profile_name' => 'setHiResDestinationColorProfileName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rgb_color_profile_name' => 'getRgbColorProfileName',
        'cmyk_color_profile_name' => 'getCmykColorProfileName',
        'grayscale_color_profile_name' => 'getGrayscaleColorProfileName',
        'hi_res_destination_color_profile_name' => 'getHiResDestinationColorProfileName'
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
        $this->container['rgb_color_profile_name'] = $data['rgb_color_profile_name'] ?? null;
        $this->container['cmyk_color_profile_name'] = $data['cmyk_color_profile_name'] ?? null;
        $this->container['grayscale_color_profile_name'] = $data['grayscale_color_profile_name'] ?? null;
        $this->container['hi_res_destination_color_profile_name'] = $data['hi_res_destination_color_profile_name'] ?? null;
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
     * Gets rgb_color_profile_name
     *
     * @return string|null
     */
    public function getRgbColorProfileName()
    {
        return $this->container['rgb_color_profile_name'];
    }

    /**
     * Sets rgb_color_profile_name
     *
     * @param string|null $rgb_color_profile_name rgb_color_profile_name
     *
     * @return self
     */
    public function setRgbColorProfileName($rgb_color_profile_name)
    {
        $this->container['rgb_color_profile_name'] = $rgb_color_profile_name;

        return $this;
    }

    /**
     * Gets cmyk_color_profile_name
     *
     * @return string|null
     */
    public function getCmykColorProfileName()
    {
        return $this->container['cmyk_color_profile_name'];
    }

    /**
     * Sets cmyk_color_profile_name
     *
     * @param string|null $cmyk_color_profile_name cmyk_color_profile_name
     *
     * @return self
     */
    public function setCmykColorProfileName($cmyk_color_profile_name)
    {
        $this->container['cmyk_color_profile_name'] = $cmyk_color_profile_name;

        return $this;
    }

    /**
     * Gets grayscale_color_profile_name
     *
     * @return string|null
     */
    public function getGrayscaleColorProfileName()
    {
        return $this->container['grayscale_color_profile_name'];
    }

    /**
     * Sets grayscale_color_profile_name
     *
     * @param string|null $grayscale_color_profile_name grayscale_color_profile_name
     *
     * @return self
     */
    public function setGrayscaleColorProfileName($grayscale_color_profile_name)
    {
        $this->container['grayscale_color_profile_name'] = $grayscale_color_profile_name;

        return $this;
    }

    /**
     * Gets hi_res_destination_color_profile_name
     *
     * @return string|null
     */
    public function getHiResDestinationColorProfileName()
    {
        return $this->container['hi_res_destination_color_profile_name'];
    }

    /**
     * Sets hi_res_destination_color_profile_name
     *
     * @param string|null $hi_res_destination_color_profile_name hi_res_destination_color_profile_name
     *
     * @return self
     */
    public function setHiResDestinationColorProfileName($hi_res_destination_color_profile_name)
    {
        $this->container['hi_res_destination_color_profile_name'] = $hi_res_destination_color_profile_name;

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


