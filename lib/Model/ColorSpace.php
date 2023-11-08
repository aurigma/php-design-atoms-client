<?php
/**
 * ColorSpace
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
use \Aurigma\DesignAtoms\ObjectSerializer;

/**
 * ColorSpace Class Doc Comment
 *
 * @category Class
 * @package  Aurigma\DesignAtoms
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ColorSpace
{
    /**
     * Possible values of this enum
     */
    const RGB = 'Rgb';
    const CMYK = 'Cmyk';
    const GRAYSCALE = 'Grayscale';
    const LAB = 'Lab';
    const SPOT = 'Spot';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::RGB,
            self::CMYK,
            self::GRAYSCALE,
            self::LAB,
            self::SPOT,
        ];
    }
}

