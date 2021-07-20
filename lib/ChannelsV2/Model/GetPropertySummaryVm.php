<?php
/**
 * GetPropertySummaryVm
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
 * GetPropertySummaryVm Class Doc Comment
 *
 * @category Class
 * @package  Piksel\Kigo
 * @author   Piksel
 * @link     https://piksel.nl
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetPropertySummaryVm implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetPropertySummaryVm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'property_id' => 'int',
        'property_name' => 'string',
        'property_type' => 'string',
        'number_of_units' => 'int',
        'address' => '\Piksel\Kigo\ChannelsV2\Model\GetPropertySummaryAddressDto'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'property_id' => 'int32',
        'property_name' => null,
        'property_type' => null,
        'number_of_units' => 'int32',
        'address' => null
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
        'property_id' => 'propertyID',
        'property_name' => 'propertyName',
        'property_type' => 'propertyType',
        'number_of_units' => 'numberOfUnits',
        'address' => 'address'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'property_id' => 'setPropertyId',
        'property_name' => 'setPropertyName',
        'property_type' => 'setPropertyType',
        'number_of_units' => 'setNumberOfUnits',
        'address' => 'setAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'property_id' => 'getPropertyId',
        'property_name' => 'getPropertyName',
        'property_type' => 'getPropertyType',
        'number_of_units' => 'getNumberOfUnits',
        'address' => 'getAddress'
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

    const PROPERTY_TYPE_UNKNOWN = 'Unknown';
    const PROPERTY_TYPE_TOWNHOUSE = 'Townhouse';
    const PROPERTY_TYPE_CONDOMINIUM = 'Condominium';
    const PROPERTY_TYPE_HOTEL = 'Hotel';
    const PROPERTY_TYPE_APARTMENT = 'Apartment';
    const PROPERTY_TYPE_BUNGALOW = 'Bungalow';
    const PROPERTY_TYPE_CASTLE = 'Castle';
    const PROPERTY_TYPE_CHALET = 'Chalet';
    const PROPERTY_TYPE_COTTAGE = 'Cottage';
    const PROPERTY_TYPE_FARMHOUSE = 'Farmhouse';
    const PROPERTY_TYPE_LODGE = 'Lodge';
    const PROPERTY_TYPE_STUDIO = 'Studio';
    const PROPERTY_TYPE_VILLA = 'Villa';
    const PROPERTY_TYPE_BARN = 'Barn';
    const PROPERTY_TYPE_HOUSEBOAT = 'Houseboat';
    const PROPERTY_TYPE_CABIN = 'Cabin';
    const PROPERTY_TYPE_YACHT = 'Yacht';
    const PROPERTY_TYPE_APARTHOTEL = 'Aparthotel';
    const PROPERTY_TYPE_HOUSE = 'House';
    const PROPERTY_TYPE_RESORT = 'Resort';
    const PROPERTY_TYPE_TREEHOUSE = 'Treehouse';
    const PROPERTY_TYPE_WINDMILL = 'Windmill';
    const PROPERTY_TYPE_YURT = 'Yurt';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPropertyTypeAllowableValues()
    {
        return [
            self::PROPERTY_TYPE_UNKNOWN,
            self::PROPERTY_TYPE_TOWNHOUSE,
            self::PROPERTY_TYPE_CONDOMINIUM,
            self::PROPERTY_TYPE_HOTEL,
            self::PROPERTY_TYPE_APARTMENT,
            self::PROPERTY_TYPE_BUNGALOW,
            self::PROPERTY_TYPE_CASTLE,
            self::PROPERTY_TYPE_CHALET,
            self::PROPERTY_TYPE_COTTAGE,
            self::PROPERTY_TYPE_FARMHOUSE,
            self::PROPERTY_TYPE_LODGE,
            self::PROPERTY_TYPE_STUDIO,
            self::PROPERTY_TYPE_VILLA,
            self::PROPERTY_TYPE_BARN,
            self::PROPERTY_TYPE_HOUSEBOAT,
            self::PROPERTY_TYPE_CABIN,
            self::PROPERTY_TYPE_YACHT,
            self::PROPERTY_TYPE_APARTHOTEL,
            self::PROPERTY_TYPE_HOUSE,
            self::PROPERTY_TYPE_RESORT,
            self::PROPERTY_TYPE_TREEHOUSE,
            self::PROPERTY_TYPE_WINDMILL,
            self::PROPERTY_TYPE_YURT,
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
        $this->container['property_id'] = $data['property_id'] ?? null;
        $this->container['property_name'] = $data['property_name'] ?? null;
        $this->container['property_type'] = $data['property_type'] ?? null;
        $this->container['number_of_units'] = $data['number_of_units'] ?? null;
        $this->container['address'] = $data['address'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPropertyTypeAllowableValues();
        if (!is_null($this->container['property_type']) && !in_array($this->container['property_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'property_type', must be one of '%s'",
                $this->container['property_type'],
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
     * Gets property_id
     *
     * @return int|null
     */
    public function getPropertyId()
    {
        return $this->container['property_id'];
    }

    /**
     * Sets property_id
     *
     * @param int|null $property_id property_id
     *
     * @return self
     */
    public function setPropertyId($property_id)
    {
        $this->container['property_id'] = $property_id;

        return $this;
    }

    /**
     * Gets property_name
     *
     * @return string|null
     */
    public function getPropertyName()
    {
        return $this->container['property_name'];
    }

    /**
     * Sets property_name
     *
     * @param string|null $property_name property_name
     *
     * @return self
     */
    public function setPropertyName($property_name)
    {
        $this->container['property_name'] = $property_name;

        return $this;
    }

    /**
     * Gets property_type
     *
     * @return string|null
     */
    public function getPropertyType()
    {
        return $this->container['property_type'];
    }

    /**
     * Sets property_type
     *
     * @param string|null $property_type property_type
     *
     * @return self
     */
    public function setPropertyType($property_type)
    {
        $allowedValues = $this->getPropertyTypeAllowableValues();
        if (!is_null($property_type) && !in_array($property_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'property_type', must be one of '%s'",
                    $property_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['property_type'] = $property_type;

        return $this;
    }

    /**
     * Gets number_of_units
     *
     * @return int|null
     */
    public function getNumberOfUnits()
    {
        return $this->container['number_of_units'];
    }

    /**
     * Sets number_of_units
     *
     * @param int|null $number_of_units number_of_units
     *
     * @return self
     */
    public function setNumberOfUnits($number_of_units)
    {
        $this->container['number_of_units'] = $number_of_units;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Piksel\Kigo\ChannelsV2\Model\GetPropertySummaryAddressDto|null
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Piksel\Kigo\ChannelsV2\Model\GetPropertySummaryAddressDto|null $address address
     *
     * @return self
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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


