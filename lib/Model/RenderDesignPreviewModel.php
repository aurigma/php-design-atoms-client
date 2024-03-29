<?php
/**
 * RenderDesignPreviewModel
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
 * RenderDesignPreviewModel Class Doc Comment
 *
 * @category Class
 * @package  Aurigma\DesignAtoms
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class RenderDesignPreviewModel implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RenderDesignPreviewModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'design_id' => 'string',
        'mockup_id' => 'string',
        'owner_id' => 'string',
        'rendering_config' => '\Aurigma\DesignAtoms\Model\ProductPreviewRenderingConfig',
        'variable_data' => '\Aurigma\DesignAtoms\Model\VariableInfo[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'design_id' => null,
        'mockup_id' => null,
        'owner_id' => null,
        'rendering_config' => null,
        'variable_data' => null
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
        'design_id' => 'designId',
        'mockup_id' => 'mockupId',
        'owner_id' => 'ownerId',
        'rendering_config' => 'renderingConfig',
        'variable_data' => 'variableData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'design_id' => 'setDesignId',
        'mockup_id' => 'setMockupId',
        'owner_id' => 'setOwnerId',
        'rendering_config' => 'setRenderingConfig',
        'variable_data' => 'setVariableData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'design_id' => 'getDesignId',
        'mockup_id' => 'getMockupId',
        'owner_id' => 'getOwnerId',
        'rendering_config' => 'getRenderingConfig',
        'variable_data' => 'getVariableData'
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
        $this->container['design_id'] = $data['design_id'] ?? null;
        $this->container['mockup_id'] = $data['mockup_id'] ?? null;
        $this->container['owner_id'] = $data['owner_id'] ?? null;
        $this->container['rendering_config'] = $data['rendering_config'] ?? null;
        $this->container['variable_data'] = $data['variable_data'] ?? null;
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
     * Gets design_id
     *
     * @return string|null
     */
    public function getDesignId()
    {
        return $this->container['design_id'];
    }

    /**
     * Sets design_id
     *
     * @param string|null $design_id Design ID.  Used to get design file from public or private storage.
     *
     * @return self
     */
    public function setDesignId($design_id)
    {
        $this->container['design_id'] = $design_id;

        return $this;
    }

    /**
     * Gets mockup_id
     *
     * @return string|null
     */
    public function getMockupId()
    {
        return $this->container['mockup_id'];
    }

    /**
     * Sets mockup_id
     *
     * @param string|null $mockup_id Mockup ID.  Used to get mockup file from public storage.
     *
     * @return self
     */
    public function setMockupId($mockup_id)
    {
        $this->container['mockup_id'] = $mockup_id;

        return $this;
    }

    /**
     * Gets owner_id
     *
     * @return string|null
     */
    public function getOwnerId()
    {
        return $this->container['owner_id'];
    }

    /**
     * Sets owner_id
     *
     * @param string|null $owner_id ID of the design owner.
     *
     * @return self
     */
    public function setOwnerId($owner_id)
    {
        $this->container['owner_id'] = $owner_id;

        return $this;
    }

    /**
     * Gets rendering_config
     *
     * @return \Aurigma\DesignAtoms\Model\ProductPreviewRenderingConfig|null
     */
    public function getRenderingConfig()
    {
        return $this->container['rendering_config'];
    }

    /**
     * Sets rendering_config
     *
     * @param \Aurigma\DesignAtoms\Model\ProductPreviewRenderingConfig|null $rendering_config rendering_config
     *
     * @return self
     */
    public function setRenderingConfig($rendering_config)
    {
        $this->container['rendering_config'] = $rendering_config;

        return $this;
    }

    /**
     * Gets variable_data
     *
     * @return \Aurigma\DesignAtoms\Model\VariableInfo[]|null
     */
    public function getVariableData()
    {
        return $this->container['variable_data'];
    }

    /**
     * Sets variable_data
     *
     * @param \Aurigma\DesignAtoms\Model\VariableInfo[]|null $variable_data Variable (user) data for design variable fields in the preview image.
     *
     * @return self
     */
    public function setVariableData($variable_data)
    {
        $this->container['variable_data'] = $variable_data;

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


