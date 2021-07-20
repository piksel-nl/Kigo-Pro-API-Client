<?php
/**
 * GetPropertyRoomsVm
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Piksel\Kigo
 * @author   Piksel
 * @link     https://piksel.nl
 */

/**
 * Kigo Pro - Channel Manager API
 *
 * https://www.kigoapis.com/pro/v1/swagger/?urls.primaryName=Channel%20Manager%20API%20v2
 *
 * The version of the OpenAPI document: channels-v2
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Piksel\Kigo\ChannelsV2\Model;

use \ArrayAccess;
use \Piksel\Kigo\ObjectSerializer;

/**
 * GetPropertyRoomsVm Class Doc Comment
 *
 * @category Class
 * @package  Piksel\Kigo
 * @author   Piksel
 * @link     https://piksel.nl
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetPropertyRoomsVm implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetPropertyRoomsVm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bathrooms' => 'int',
        'half_bathrooms' => 'int',
        'max_occupancy' => 'int',
        'minimum_main_guest_age' => 'int',
        'has_kitchen' => 'bool',
        'rooms' => '\Piksel\Kigo\ChannelsV2\Model\GetPropertyRoomsRoomDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bathrooms' => 'int32',
        'half_bathrooms' => 'int32',
        'max_occupancy' => 'int32',
        'minimum_main_guest_age' => 'int32',
        'has_kitchen' => null,
        'rooms' => null
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
        'bathrooms' => 'bathrooms',
        'half_bathrooms' => 'halfBathrooms',
        'max_occupancy' => 'maxOccupancy',
        'minimum_main_guest_age' => 'minimumMainGuestAge',
        'has_kitchen' => 'hasKitchen',
        'rooms' => 'rooms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bathrooms' => 'setBathrooms',
        'half_bathrooms' => 'setHalfBathrooms',
        'max_occupancy' => 'setMaxOccupancy',
        'minimum_main_guest_age' => 'setMinimumMainGuestAge',
        'has_kitchen' => 'setHasKitchen',
        'rooms' => 'setRooms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bathrooms' => 'getBathrooms',
        'half_bathrooms' => 'getHalfBathrooms',
        'max_occupancy' => 'getMaxOccupancy',
        'minimum_main_guest_age' => 'getMinimumMainGuestAge',
        'has_kitchen' => 'getHasKitchen',
        'rooms' => 'getRooms'
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
        $this->container['bathrooms'] = $data['bathrooms'] ?? null;
        $this->container['half_bathrooms'] = $data['half_bathrooms'] ?? null;
        $this->container['max_occupancy'] = $data['max_occupancy'] ?? null;
        $this->container['minimum_main_guest_age'] = $data['minimum_main_guest_age'] ?? null;
        $this->container['has_kitchen'] = $data['has_kitchen'] ?? null;
        $this->container['rooms'] = $data['rooms'] ?? null;
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
     * Gets bathrooms
     *
     * @return int|null
     */
    public function getBathrooms()
    {
        return $this->container['bathrooms'];
    }

    /**
     * Sets bathrooms
     *
     * @param int|null $bathrooms bathrooms
     *
     * @return self
     */
    public function setBathrooms($bathrooms)
    {
        $this->container['bathrooms'] = $bathrooms;

        return $this;
    }

    /**
     * Gets half_bathrooms
     *
     * @return int|null
     */
    public function getHalfBathrooms()
    {
        return $this->container['half_bathrooms'];
    }

    /**
     * Sets half_bathrooms
     *
     * @param int|null $half_bathrooms half_bathrooms
     *
     * @return self
     */
    public function setHalfBathrooms($half_bathrooms)
    {
        $this->container['half_bathrooms'] = $half_bathrooms;

        return $this;
    }

    /**
     * Gets max_occupancy
     *
     * @return int|null
     */
    public function getMaxOccupancy()
    {
        return $this->container['max_occupancy'];
    }

    /**
     * Sets max_occupancy
     *
     * @param int|null $max_occupancy max_occupancy
     *
     * @return self
     */
    public function setMaxOccupancy($max_occupancy)
    {
        $this->container['max_occupancy'] = $max_occupancy;

        return $this;
    }

    /**
     * Gets minimum_main_guest_age
     *
     * @return int|null
     */
    public function getMinimumMainGuestAge()
    {
        return $this->container['minimum_main_guest_age'];
    }

    /**
     * Sets minimum_main_guest_age
     *
     * @param int|null $minimum_main_guest_age minimum_main_guest_age
     *
     * @return self
     */
    public function setMinimumMainGuestAge($minimum_main_guest_age)
    {
        $this->container['minimum_main_guest_age'] = $minimum_main_guest_age;

        return $this;
    }

    /**
     * Gets has_kitchen
     *
     * @return bool|null
     */
    public function getHasKitchen()
    {
        return $this->container['has_kitchen'];
    }

    /**
     * Sets has_kitchen
     *
     * @param bool|null $has_kitchen has_kitchen
     *
     * @return self
     */
    public function setHasKitchen($has_kitchen)
    {
        $this->container['has_kitchen'] = $has_kitchen;

        return $this;
    }

    /**
     * Gets rooms
     *
     * @return \Piksel\Kigo\ChannelsV2\Model\GetPropertyRoomsRoomDto[]|null
     */
    public function getRooms()
    {
        return $this->container['rooms'];
    }

    /**
     * Sets rooms
     *
     * @param \Piksel\Kigo\ChannelsV2\Model\GetPropertyRoomsRoomDto[]|null $rooms rooms
     *
     * @return self
     */
    public function setRooms($rooms)
    {
        $this->container['rooms'] = $rooms;

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


