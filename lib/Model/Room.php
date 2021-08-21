<?php
/**
 * Room
 *
 * PHP version 5
 *
 * @category Class
 * @package  Piksel\KigoPro
 * @author   Patrick Leijser
 * @link     https://piksel.nl
 */

/**
 * Kigo Pro - Channel Manager API
 *
 * https://www.kigoapis.com/pro/v1/swagger/?urls.primaryName=Channel%20Manager%20API%20v2
 *
 * The version of the OpenAPI document: channels-v2
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Piksel\KigoPro\Model;

use \ArrayAccess;
use \Piksel\KigoPro\ObjectSerializer;

/**
 * Room Class Doc Comment
 *
 * @category Class
 * @description Room
 * @package  Piksel\KigoPro
 * @author   Patrick Leijser
 * @link     https://piksel.nl
 */
class Room implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Room';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sequence' => 'int',
        'room_type' => 'string',
        'amenities' => '\Piksel\KigoPro\Model\RoomAmenity[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sequence' => 'int32',
        'room_type' => null,
        'amenities' => null
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
        'sequence' => 'sequence',
        'room_type' => 'roomType',
        'amenities' => 'amenities'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sequence' => 'setSequence',
        'room_type' => 'setRoomType',
        'amenities' => 'setAmenities'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sequence' => 'getSequence',
        'room_type' => 'getRoomType',
        'amenities' => 'getAmenities'
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

    const ROOM_TYPE_OTHER = 'Other';
    const ROOM_TYPE_BEDROOM = 'Bedroom';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRoomTypeAllowableValues()
    {
        return [
            self::ROOM_TYPE_OTHER,
            self::ROOM_TYPE_BEDROOM,
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
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['room_type'] = isset($data['room_type']) ? $data['room_type'] : null;
        $this->container['amenities'] = isset($data['amenities']) ? $data['amenities'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRoomTypeAllowableValues();
        if (!is_null($this->container['room_type']) && !in_array($this->container['room_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'room_type', must be one of '%s'",
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
     * Gets sequence
     *
     * @return int|null
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int|null $sequence sequence
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets room_type
     *
     * @return string|null
     */
    public function getRoomType()
    {
        return $this->container['room_type'];
    }

    /**
     * Sets room_type
     *
     * @param string|null $room_type Room Types
     *
     * @return $this
     */
    public function setRoomType($room_type)
    {
        $allowedValues = $this->getRoomTypeAllowableValues();
        if (!is_null($room_type) && !in_array($room_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'room_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['room_type'] = $room_type;

        return $this;
    }

    /**
     * Gets amenities
     *
     * @return \Piksel\KigoPro\Model\RoomAmenity[]|null
     */
    public function getAmenities()
    {
        return $this->container['amenities'];
    }

    /**
     * Sets amenities
     *
     * @param \Piksel\KigoPro\Model\RoomAmenity[]|null $amenities amenities
     *
     * @return $this
     */
    public function setAmenities($amenities)
    {
        $this->container['amenities'] = $amenities;

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


