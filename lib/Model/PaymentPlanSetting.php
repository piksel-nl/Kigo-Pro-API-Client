<?php
/**
 * PaymentPlanSetting
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
 * PaymentPlanSetting Class Doc Comment
 *
 * @category Class
 * @package  Piksel\KigoPro
 * @author   Patrick Leijser
 * @link     https://piksel.nl
 */
class PaymentPlanSetting implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentPlanSetting';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'name' => 'string',
        'days_prior_to_checkin_to_collect_remainder' => 'int',
        'is_refundable' => 'bool',
        'percent_price_multiplier' => 'double',
        'is_default' => 'bool',
        'rate_collected_at_time_of_booking' => '\Piksel\KigoPro\Model\Rate'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'name' => null,
        'days_prior_to_checkin_to_collect_remainder' => 'int32',
        'is_refundable' => null,
        'percent_price_multiplier' => 'double',
        'is_default' => null,
        'rate_collected_at_time_of_booking' => null
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
        'id' => 'id',
        'name' => 'name',
        'days_prior_to_checkin_to_collect_remainder' => 'daysPriorToCheckinToCollectRemainder',
        'is_refundable' => 'isRefundable',
        'percent_price_multiplier' => 'percentPriceMultiplier',
        'is_default' => 'isDefault',
        'rate_collected_at_time_of_booking' => 'rateCollectedAtTimeOfBooking'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'days_prior_to_checkin_to_collect_remainder' => 'setDaysPriorToCheckinToCollectRemainder',
        'is_refundable' => 'setIsRefundable',
        'percent_price_multiplier' => 'setPercentPriceMultiplier',
        'is_default' => 'setIsDefault',
        'rate_collected_at_time_of_booking' => 'setRateCollectedAtTimeOfBooking'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'days_prior_to_checkin_to_collect_remainder' => 'getDaysPriorToCheckinToCollectRemainder',
        'is_refundable' => 'getIsRefundable',
        'percent_price_multiplier' => 'getPercentPriceMultiplier',
        'is_default' => 'getIsDefault',
        'rate_collected_at_time_of_booking' => 'getRateCollectedAtTimeOfBooking'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['days_prior_to_checkin_to_collect_remainder'] = isset($data['days_prior_to_checkin_to_collect_remainder']) ? $data['days_prior_to_checkin_to_collect_remainder'] : null;
        $this->container['is_refundable'] = isset($data['is_refundable']) ? $data['is_refundable'] : null;
        $this->container['percent_price_multiplier'] = isset($data['percent_price_multiplier']) ? $data['percent_price_multiplier'] : null;
        $this->container['is_default'] = isset($data['is_default']) ? $data['is_default'] : null;
        $this->container['rate_collected_at_time_of_booking'] = isset($data['rate_collected_at_time_of_booking']) ? $data['rate_collected_at_time_of_booking'] : null;
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
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Payment Plan ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets days_prior_to_checkin_to_collect_remainder
     *
     * @return int|null
     */
    public function getDaysPriorToCheckinToCollectRemainder()
    {
        return $this->container['days_prior_to_checkin_to_collect_remainder'];
    }

    /**
     * Sets days_prior_to_checkin_to_collect_remainder
     *
     * @param int|null $days_prior_to_checkin_to_collect_remainder How many days before the check-in a remainder should be sent
     *
     * @return $this
     */
    public function setDaysPriorToCheckinToCollectRemainder($days_prior_to_checkin_to_collect_remainder)
    {
        $this->container['days_prior_to_checkin_to_collect_remainder'] = $days_prior_to_checkin_to_collect_remainder;

        return $this;
    }

    /**
     * Gets is_refundable
     *
     * @return bool|null
     */
    public function getIsRefundable()
    {
        return $this->container['is_refundable'];
    }

    /**
     * Sets is_refundable
     *
     * @param bool|null $is_refundable True if refundable, false otherwise
     *
     * @return $this
     */
    public function setIsRefundable($is_refundable)
    {
        $this->container['is_refundable'] = $is_refundable;

        return $this;
    }

    /**
     * Gets percent_price_multiplier
     *
     * @return double|null
     */
    public function getPercentPriceMultiplier()
    {
        return $this->container['percent_price_multiplier'];
    }

    /**
     * Sets percent_price_multiplier
     *
     * @param double|null $percent_price_multiplier Price multiplier in percentage
     *
     * @return $this
     */
    public function setPercentPriceMultiplier($percent_price_multiplier)
    {
        $this->container['percent_price_multiplier'] = $percent_price_multiplier;

        return $this;
    }

    /**
     * Gets is_default
     *
     * @return bool|null
     */
    public function getIsDefault()
    {
        return $this->container['is_default'];
    }

    /**
     * Sets is_default
     *
     * @param bool|null $is_default True if it is the default plan setting, false otherwise
     *
     * @return $this
     */
    public function setIsDefault($is_default)
    {
        $this->container['is_default'] = $is_default;

        return $this;
    }

    /**
     * Gets rate_collected_at_time_of_booking
     *
     * @return \Piksel\KigoPro\Model\Rate|null
     */
    public function getRateCollectedAtTimeOfBooking()
    {
        return $this->container['rate_collected_at_time_of_booking'];
    }

    /**
     * Sets rate_collected_at_time_of_booking
     *
     * @param \Piksel\KigoPro\Model\Rate|null $rate_collected_at_time_of_booking rate_collected_at_time_of_booking
     *
     * @return $this
     */
    public function setRateCollectedAtTimeOfBooking($rate_collected_at_time_of_booking)
    {
        $this->container['rate_collected_at_time_of_booking'] = $rate_collected_at_time_of_booking;

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


