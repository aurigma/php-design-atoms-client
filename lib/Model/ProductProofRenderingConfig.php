<?php
/**
 * ProductProofRenderingConfig
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
 * ProductProofRenderingConfig Class Doc Comment
 *
 * @category Class
 * @package  Aurigma\DesignAtoms
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ProductProofRenderingConfig implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductProofRenderingConfig';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'surface_index' => 'int',
        'width' => 'int',
        'height' => 'int',
        'format' => '\Aurigma\DesignAtoms\Model\ProductProofFormat',
        'interpolation_mode' => '\Aurigma\DesignAtoms\Model\ProductProofInterpolationMode',
        'safety_lines_enabled' => 'bool',
        'watermark_enabled' => 'bool',
        'watermark_opacity' => 'float',
        'watermark_repeat' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'surface_index' => 'int32',
        'width' => 'int32',
        'height' => 'int32',
        'format' => null,
        'interpolation_mode' => null,
        'safety_lines_enabled' => null,
        'watermark_enabled' => null,
        'watermark_opacity' => 'float',
        'watermark_repeat' => null
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
        'surface_index' => 'surfaceIndex',
        'width' => 'width',
        'height' => 'height',
        'format' => 'format',
        'interpolation_mode' => 'interpolationMode',
        'safety_lines_enabled' => 'safetyLinesEnabled',
        'watermark_enabled' => 'watermarkEnabled',
        'watermark_opacity' => 'watermarkOpacity',
        'watermark_repeat' => 'watermarkRepeat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'surface_index' => 'setSurfaceIndex',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'format' => 'setFormat',
        'interpolation_mode' => 'setInterpolationMode',
        'safety_lines_enabled' => 'setSafetyLinesEnabled',
        'watermark_enabled' => 'setWatermarkEnabled',
        'watermark_opacity' => 'setWatermarkOpacity',
        'watermark_repeat' => 'setWatermarkRepeat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'surface_index' => 'getSurfaceIndex',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'format' => 'getFormat',
        'interpolation_mode' => 'getInterpolationMode',
        'safety_lines_enabled' => 'getSafetyLinesEnabled',
        'watermark_enabled' => 'getWatermarkEnabled',
        'watermark_opacity' => 'getWatermarkOpacity',
        'watermark_repeat' => 'getWatermarkRepeat'
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
        $this->container['surface_index'] = $data['surface_index'] ?? null;
        $this->container['width'] = $data['width'] ?? null;
        $this->container['height'] = $data['height'] ?? null;
        $this->container['format'] = $data['format'] ?? null;
        $this->container['interpolation_mode'] = $data['interpolation_mode'] ?? null;
        $this->container['safety_lines_enabled'] = $data['safety_lines_enabled'] ?? null;
        $this->container['watermark_enabled'] = $data['watermark_enabled'] ?? null;
        $this->container['watermark_opacity'] = $data['watermark_opacity'] ?? null;
        $this->container['watermark_repeat'] = $data['watermark_repeat'] ?? null;
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
     * Gets surface_index
     *
     * @return int|null
     */
    public function getSurfaceIndex()
    {
        return $this->container['surface_index'];
    }

    /**
     * Sets surface_index
     *
     * @param int|null $surface_index Surface to render
     *
     * @return self
     */
    public function setSurfaceIndex($surface_index)
    {
        $this->container['surface_index'] = $surface_index;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width Desired proof image width
     *
     * @return self
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height Desired proof image height
     *
     * @return self
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets format
     *
     * @return \Aurigma\DesignAtoms\Model\ProductProofFormat|null
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param \Aurigma\DesignAtoms\Model\ProductProofFormat|null $format format
     *
     * @return self
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets interpolation_mode
     *
     * @return \Aurigma\DesignAtoms\Model\ProductProofInterpolationMode|null
     */
    public function getInterpolationMode()
    {
        return $this->container['interpolation_mode'];
    }

    /**
     * Sets interpolation_mode
     *
     * @param \Aurigma\DesignAtoms\Model\ProductProofInterpolationMode|null $interpolation_mode interpolation_mode
     *
     * @return self
     */
    public function setInterpolationMode($interpolation_mode)
    {
        $this->container['interpolation_mode'] = $interpolation_mode;

        return $this;
    }

    /**
     * Gets safety_lines_enabled
     *
     * @return bool|null
     */
    public function getSafetyLinesEnabled()
    {
        return $this->container['safety_lines_enabled'];
    }

    /**
     * Sets safety_lines_enabled
     *
     * @param bool|null $safety_lines_enabled Defines whether safety lines should be visualized
     *
     * @return self
     */
    public function setSafetyLinesEnabled($safety_lines_enabled)
    {
        $this->container['safety_lines_enabled'] = $safety_lines_enabled;

        return $this;
    }

    /**
     * Gets watermark_enabled
     *
     * @return bool|null
     */
    public function getWatermarkEnabled()
    {
        return $this->container['watermark_enabled'];
    }

    /**
     * Sets watermark_enabled
     *
     * @param bool|null $watermark_enabled Defines whether watermark should be included
     *
     * @return self
     */
    public function setWatermarkEnabled($watermark_enabled)
    {
        $this->container['watermark_enabled'] = $watermark_enabled;

        return $this;
    }

    /**
     * Gets watermark_opacity
     *
     * @return float|null
     */
    public function getWatermarkOpacity()
    {
        return $this->container['watermark_opacity'];
    }

    /**
     * Sets watermark_opacity
     *
     * @param float|null $watermark_opacity Defines watermark opacity (in range 0 .. 1.0)
     *
     * @return self
     */
    public function setWatermarkOpacity($watermark_opacity)
    {
        $this->container['watermark_opacity'] = $watermark_opacity;

        return $this;
    }

    /**
     * Gets watermark_repeat
     *
     * @return bool|null
     */
    public function getWatermarkRepeat()
    {
        return $this->container['watermark_repeat'];
    }

    /**
     * Sets watermark_repeat
     *
     * @param bool|null $watermark_repeat Defines whether watermark should be repeated
     *
     * @return self
     */
    public function setWatermarkRepeat($watermark_repeat)
    {
        $this->container['watermark_repeat'] = $watermark_repeat;

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


