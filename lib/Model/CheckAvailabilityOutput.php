<?php
/**
 * CheckAvailabilityOutput
 *
 * PHP version 7.2
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
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.1-SNAPSHOT
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
 * CheckAvailabilityOutput Class Doc Comment
 *
 * @category Class
 * @description A Quote contains error information, property data, and a statement
 * @package  Piksel\KigoPro
 * @author   Patrick Leijser
 * @link     https://piksel.nl
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class CheckAvailabilityOutput implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CheckAvailabilityOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_available' => 'bool',
        'error_message' => 'string',
        'setup_error' => 'string',
        'constraint_error' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_available' => null,
        'error_message' => null,
        'setup_error' => null,
        'constraint_error' => null
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
        'is_available' => 'isAvailable',
        'error_message' => 'errorMessage',
        'setup_error' => 'setupError',
        'constraint_error' => 'constraintError'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_available' => 'setIsAvailable',
        'error_message' => 'setErrorMessage',
        'setup_error' => 'setSetupError',
        'constraint_error' => 'setConstraintError'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_available' => 'getIsAvailable',
        'error_message' => 'getErrorMessage',
        'setup_error' => 'getSetupError',
        'constraint_error' => 'getConstraintError'
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

    const SETUP_ERROR_INVALID_LISTING = 'InvalidListing';
    const SETUP_ERROR_STAY_SETTINGS_NOT_SET = 'StaySettingsNotSet';
    const SETUP_ERROR_BOOKING_WINDOW_NOT_SET = 'BookingWindowNotSet';
    const SETUP_ERROR_MAX_STAY_NOT_SET = 'MaxStayNotSet';
    const SETUP_ERROR_PRICE_NOT_AVAILABLE = 'PriceNotAvailable';
    const SETUP_ERROR_CLOSED_TO_ARRIVAL_OR_DEPARTURE = 'ClosedToArrivalOrDeparture';
    const SETUP_ERROR_OUT_OF_SUNRISE_SUNSET = 'OutOfSunriseSunset';
    const SETUP_ERROR_CONNECTION_SETUP_ERROR = 'ConnectionSetupError';
    const CONSTRAINT_ERROR_NIGHT_NOT_AVAILABLE = 'NightNotAvailable';
    const CONSTRAINT_ERROR_MIN_STAY_NOT_MET = 'MinStayNotMet';
    const CONSTRAINT_ERROR_MIN_ADVANCE_NOTICE_NOT_MET = 'MinAdvanceNoticeNotMet';
    const CONSTRAINT_ERROR_OUTSIDE_OF_BOOKING_WINDOW = 'OutsideOfBookingWindow';
    const CONSTRAINT_ERROR_MAX_STAY_EXCEEDED = 'MaxStayExceeded';
    const CONSTRAINT_ERROR_MAX_GUESTS_EXCEEDED = 'MaxGuestsExceeded';
    const CONSTRAINT_ERROR_BLOCK_OUT_NIGHT = 'BlockOutNight';
    const CONSTRAINT_ERROR_CUT_OFF_TIME_NOT_MET = 'CutOffTimeNotMet';
    const CONSTRAINT_ERROR_PROPERTY_CLOSED = 'PropertyClosed';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSetupErrorAllowableValues()
    {
        return [
            self::SETUP_ERROR_INVALID_LISTING,
            self::SETUP_ERROR_STAY_SETTINGS_NOT_SET,
            self::SETUP_ERROR_BOOKING_WINDOW_NOT_SET,
            self::SETUP_ERROR_MAX_STAY_NOT_SET,
            self::SETUP_ERROR_PRICE_NOT_AVAILABLE,
            self::SETUP_ERROR_CLOSED_TO_ARRIVAL_OR_DEPARTURE,
            self::SETUP_ERROR_OUT_OF_SUNRISE_SUNSET,
            self::SETUP_ERROR_CONNECTION_SETUP_ERROR,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConstraintErrorAllowableValues()
    {
        return [
            self::CONSTRAINT_ERROR_NIGHT_NOT_AVAILABLE,
            self::CONSTRAINT_ERROR_MIN_STAY_NOT_MET,
            self::CONSTRAINT_ERROR_MIN_ADVANCE_NOTICE_NOT_MET,
            self::CONSTRAINT_ERROR_OUTSIDE_OF_BOOKING_WINDOW,
            self::CONSTRAINT_ERROR_MAX_STAY_EXCEEDED,
            self::CONSTRAINT_ERROR_MAX_GUESTS_EXCEEDED,
            self::CONSTRAINT_ERROR_BLOCK_OUT_NIGHT,
            self::CONSTRAINT_ERROR_CUT_OFF_TIME_NOT_MET,
            self::CONSTRAINT_ERROR_PROPERTY_CLOSED,
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
        $this->container['is_available'] = $data['is_available'] ?? null;
        $this->container['error_message'] = $data['error_message'] ?? null;
        $this->container['setup_error'] = $data['setup_error'] ?? null;
        $this->container['constraint_error'] = $data['constraint_error'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSetupErrorAllowableValues();
        if (!is_null($this->container['setup_error']) && !in_array($this->container['setup_error'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'setup_error', must be one of '%s'",
                $this->container['setup_error'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getConstraintErrorAllowableValues();
        if (!is_null($this->container['constraint_error']) && !in_array($this->container['constraint_error'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'constraint_error', must be one of '%s'",
                $this->container['constraint_error'],
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
     * Gets is_available
     *
     * @return bool|null
     */
    public function getIsAvailable()
    {
        return $this->container['is_available'];
    }

    /**
     * Sets is_available
     *
     * @param bool|null $is_available If there is Availability and no errors occurred
     *
     * @return self
     */
    public function setIsAvailable($is_available)
    {
        $this->container['is_available'] = $is_available;

        return $this;
    }

    /**
     * Gets error_message
     *
     * @return string|null
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     *
     * @param string|null $error_message Optional Error Message
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets setup_error
     *
     * @return string|null
     */
    public function getSetupError()
    {
        return $this->container['setup_error'];
    }

    /**
     * Sets setup_error
     *
     * @param string|null $setup_error Optional Error Code related to the Listing setup that is checked
     *
     * @return self
     */
    public function setSetupError($setup_error)
    {
        $allowedValues = $this->getSetupErrorAllowableValues();
        if (!is_null($setup_error) && !in_array($setup_error, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'setup_error', must be one of '%s'",
                    $setup_error,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['setup_error'] = $setup_error;

        return $this;
    }

    /**
     * Gets constraint_error
     *
     * @return string|null
     */
    public function getConstraintError()
    {
        return $this->container['constraint_error'];
    }

    /**
     * Sets constraint_error
     *
     * @param string|null $constraint_error Optional Error Code related to setup rules
     *
     * @return self
     */
    public function setConstraintError($constraint_error)
    {
        $allowedValues = $this->getConstraintErrorAllowableValues();
        if (!is_null($constraint_error) && !in_array($constraint_error, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'constraint_error', must be one of '%s'",
                    $constraint_error,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['constraint_error'] = $constraint_error;

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

