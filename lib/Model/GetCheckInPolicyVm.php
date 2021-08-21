<?php
/**
 * GetCheckInPolicyVm
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
 * GetCheckInPolicyVm Class Doc Comment
 *
 * @category Class
 * @package  Piksel\KigoPro
 * @author   Patrick Leijser
 * @link     https://piksel.nl
 */
class GetCheckInPolicyVm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetCheckInPolicyVm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'check_in_start_time_minutes_from_midnight' => 'int',
        'check_in_end_time_minutes_from_midnight' => 'int',
        'check_out_start_time_minutes_from_midnight' => 'int',
        'check_out_end_time_minutes_from_midnight' => 'int',
        'check_in_method' => 'string',
        'check_in_off_site' => 'bool',
        'check_in_location' => '\Piksel\KigoPro\Model\GetCheckInPolicyLocationDto',
        'check_in_instructions' => '\Piksel\KigoPro\Model\GetCheckInPolicyInstructions[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'check_in_start_time_minutes_from_midnight' => 'int32',
        'check_in_end_time_minutes_from_midnight' => 'int32',
        'check_out_start_time_minutes_from_midnight' => 'int32',
        'check_out_end_time_minutes_from_midnight' => 'int32',
        'check_in_method' => null,
        'check_in_off_site' => null,
        'check_in_location' => null,
        'check_in_instructions' => null
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
        'check_in_start_time_minutes_from_midnight' => 'checkInStartTimeMinutesFromMidnight',
        'check_in_end_time_minutes_from_midnight' => 'checkInEndTimeMinutesFromMidnight',
        'check_out_start_time_minutes_from_midnight' => 'checkOutStartTimeMinutesFromMidnight',
        'check_out_end_time_minutes_from_midnight' => 'checkOutEndTimeMinutesFromMidnight',
        'check_in_method' => 'checkInMethod',
        'check_in_off_site' => 'checkInOffSite',
        'check_in_location' => 'checkInLocation',
        'check_in_instructions' => 'checkInInstructions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'check_in_start_time_minutes_from_midnight' => 'setCheckInStartTimeMinutesFromMidnight',
        'check_in_end_time_minutes_from_midnight' => 'setCheckInEndTimeMinutesFromMidnight',
        'check_out_start_time_minutes_from_midnight' => 'setCheckOutStartTimeMinutesFromMidnight',
        'check_out_end_time_minutes_from_midnight' => 'setCheckOutEndTimeMinutesFromMidnight',
        'check_in_method' => 'setCheckInMethod',
        'check_in_off_site' => 'setCheckInOffSite',
        'check_in_location' => 'setCheckInLocation',
        'check_in_instructions' => 'setCheckInInstructions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'check_in_start_time_minutes_from_midnight' => 'getCheckInStartTimeMinutesFromMidnight',
        'check_in_end_time_minutes_from_midnight' => 'getCheckInEndTimeMinutesFromMidnight',
        'check_out_start_time_minutes_from_midnight' => 'getCheckOutStartTimeMinutesFromMidnight',
        'check_out_end_time_minutes_from_midnight' => 'getCheckOutEndTimeMinutesFromMidnight',
        'check_in_method' => 'getCheckInMethod',
        'check_in_off_site' => 'getCheckInOffSite',
        'check_in_location' => 'getCheckInLocation',
        'check_in_instructions' => 'getCheckInInstructions'
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

    const CHECK_IN_METHOD_TWENTY_FOUR_HOURS_RECEPTION = 'TwentyFourHoursReception';
    const CHECK_IN_METHOD_HOST_CHECK_IN = 'HostCheckIn';
    const CHECK_IN_METHOD_ARRANGED_CHECK_IN = 'ArrangedCheckIn';
    const CHECK_IN_METHOD_DOOR_CODE = 'DoorCode';
    const CHECK_IN_METHOD_LOCK_BOX = 'LockBox';
    const CHECK_IN_METHOD_SMART_LOCK = 'SmartLock';
    const CHECK_IN_METHOD_OTHER = 'Other';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCheckInMethodAllowableValues()
    {
        return [
            self::CHECK_IN_METHOD_TWENTY_FOUR_HOURS_RECEPTION,
            self::CHECK_IN_METHOD_HOST_CHECK_IN,
            self::CHECK_IN_METHOD_ARRANGED_CHECK_IN,
            self::CHECK_IN_METHOD_DOOR_CODE,
            self::CHECK_IN_METHOD_LOCK_BOX,
            self::CHECK_IN_METHOD_SMART_LOCK,
            self::CHECK_IN_METHOD_OTHER,
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
        $this->container['check_in_start_time_minutes_from_midnight'] = isset($data['check_in_start_time_minutes_from_midnight']) ? $data['check_in_start_time_minutes_from_midnight'] : null;
        $this->container['check_in_end_time_minutes_from_midnight'] = isset($data['check_in_end_time_minutes_from_midnight']) ? $data['check_in_end_time_minutes_from_midnight'] : null;
        $this->container['check_out_start_time_minutes_from_midnight'] = isset($data['check_out_start_time_minutes_from_midnight']) ? $data['check_out_start_time_minutes_from_midnight'] : null;
        $this->container['check_out_end_time_minutes_from_midnight'] = isset($data['check_out_end_time_minutes_from_midnight']) ? $data['check_out_end_time_minutes_from_midnight'] : null;
        $this->container['check_in_method'] = isset($data['check_in_method']) ? $data['check_in_method'] : null;
        $this->container['check_in_off_site'] = isset($data['check_in_off_site']) ? $data['check_in_off_site'] : null;
        $this->container['check_in_location'] = isset($data['check_in_location']) ? $data['check_in_location'] : null;
        $this->container['check_in_instructions'] = isset($data['check_in_instructions']) ? $data['check_in_instructions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCheckInMethodAllowableValues();
        if (!is_null($this->container['check_in_method']) && !in_array($this->container['check_in_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'check_in_method', must be one of '%s'",
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
     * Gets check_in_start_time_minutes_from_midnight
     *
     * @return int|null
     */
    public function getCheckInStartTimeMinutesFromMidnight()
    {
        return $this->container['check_in_start_time_minutes_from_midnight'];
    }

    /**
     * Sets check_in_start_time_minutes_from_midnight
     *
     * @param int|null $check_in_start_time_minutes_from_midnight check_in_start_time_minutes_from_midnight
     *
     * @return $this
     */
    public function setCheckInStartTimeMinutesFromMidnight($check_in_start_time_minutes_from_midnight)
    {
        $this->container['check_in_start_time_minutes_from_midnight'] = $check_in_start_time_minutes_from_midnight;

        return $this;
    }

    /**
     * Gets check_in_end_time_minutes_from_midnight
     *
     * @return int|null
     */
    public function getCheckInEndTimeMinutesFromMidnight()
    {
        return $this->container['check_in_end_time_minutes_from_midnight'];
    }

    /**
     * Sets check_in_end_time_minutes_from_midnight
     *
     * @param int|null $check_in_end_time_minutes_from_midnight check_in_end_time_minutes_from_midnight
     *
     * @return $this
     */
    public function setCheckInEndTimeMinutesFromMidnight($check_in_end_time_minutes_from_midnight)
    {
        $this->container['check_in_end_time_minutes_from_midnight'] = $check_in_end_time_minutes_from_midnight;

        return $this;
    }

    /**
     * Gets check_out_start_time_minutes_from_midnight
     *
     * @return int|null
     */
    public function getCheckOutStartTimeMinutesFromMidnight()
    {
        return $this->container['check_out_start_time_minutes_from_midnight'];
    }

    /**
     * Sets check_out_start_time_minutes_from_midnight
     *
     * @param int|null $check_out_start_time_minutes_from_midnight check_out_start_time_minutes_from_midnight
     *
     * @return $this
     */
    public function setCheckOutStartTimeMinutesFromMidnight($check_out_start_time_minutes_from_midnight)
    {
        $this->container['check_out_start_time_minutes_from_midnight'] = $check_out_start_time_minutes_from_midnight;

        return $this;
    }

    /**
     * Gets check_out_end_time_minutes_from_midnight
     *
     * @return int|null
     */
    public function getCheckOutEndTimeMinutesFromMidnight()
    {
        return $this->container['check_out_end_time_minutes_from_midnight'];
    }

    /**
     * Sets check_out_end_time_minutes_from_midnight
     *
     * @param int|null $check_out_end_time_minutes_from_midnight check_out_end_time_minutes_from_midnight
     *
     * @return $this
     */
    public function setCheckOutEndTimeMinutesFromMidnight($check_out_end_time_minutes_from_midnight)
    {
        $this->container['check_out_end_time_minutes_from_midnight'] = $check_out_end_time_minutes_from_midnight;

        return $this;
    }

    /**
     * Gets check_in_method
     *
     * @return string|null
     */
    public function getCheckInMethod()
    {
        return $this->container['check_in_method'];
    }

    /**
     * Sets check_in_method
     *
     * @param string|null $check_in_method check_in_method
     *
     * @return $this
     */
    public function setCheckInMethod($check_in_method)
    {
        $allowedValues = $this->getCheckInMethodAllowableValues();
        if (!is_null($check_in_method) && !in_array($check_in_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'check_in_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['check_in_method'] = $check_in_method;

        return $this;
    }

    /**
     * Gets check_in_off_site
     *
     * @return bool|null
     */
    public function getCheckInOffSite()
    {
        return $this->container['check_in_off_site'];
    }

    /**
     * Sets check_in_off_site
     *
     * @param bool|null $check_in_off_site check_in_off_site
     *
     * @return $this
     */
    public function setCheckInOffSite($check_in_off_site)
    {
        $this->container['check_in_off_site'] = $check_in_off_site;

        return $this;
    }

    /**
     * Gets check_in_location
     *
     * @return \Piksel\KigoPro\Model\GetCheckInPolicyLocationDto|null
     */
    public function getCheckInLocation()
    {
        return $this->container['check_in_location'];
    }

    /**
     * Sets check_in_location
     *
     * @param \Piksel\KigoPro\Model\GetCheckInPolicyLocationDto|null $check_in_location check_in_location
     *
     * @return $this
     */
    public function setCheckInLocation($check_in_location)
    {
        $this->container['check_in_location'] = $check_in_location;

        return $this;
    }

    /**
     * Gets check_in_instructions
     *
     * @return \Piksel\KigoPro\Model\GetCheckInPolicyInstructions[]|null
     */
    public function getCheckInInstructions()
    {
        return $this->container['check_in_instructions'];
    }

    /**
     * Sets check_in_instructions
     *
     * @param \Piksel\KigoPro\Model\GetCheckInPolicyInstructions[]|null $check_in_instructions check_in_instructions
     *
     * @return $this
     */
    public function setCheckInInstructions($check_in_instructions)
    {
        $this->container['check_in_instructions'] = $check_in_instructions;

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


