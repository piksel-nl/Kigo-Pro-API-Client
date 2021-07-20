<?php
/**
 * PaymentSchedule
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
 * PaymentSchedule Class Doc Comment
 *
 * @category Class
 * @package  Piksel\Kigo
 * @author   Piksel
 * @link     https://piksel.nl
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PaymentSchedule implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentSchedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'scheduled_advance_payment' => '\Piksel\Kigo\ChannelsV2\Model\ScheduledTransaction',
        'scheduled_remainder_payment' => '\Piksel\Kigo\ChannelsV2\Model\ScheduledTransaction',
        'days_prior_to_check_in_to_collect_remainder' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'scheduled_advance_payment' => null,
        'scheduled_remainder_payment' => null,
        'days_prior_to_check_in_to_collect_remainder' => 'int32'
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
        'scheduled_advance_payment' => 'scheduledAdvancePayment',
        'scheduled_remainder_payment' => 'scheduledRemainderPayment',
        'days_prior_to_check_in_to_collect_remainder' => 'daysPriorToCheckInToCollectRemainder'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'scheduled_advance_payment' => 'setScheduledAdvancePayment',
        'scheduled_remainder_payment' => 'setScheduledRemainderPayment',
        'days_prior_to_check_in_to_collect_remainder' => 'setDaysPriorToCheckInToCollectRemainder'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'scheduled_advance_payment' => 'getScheduledAdvancePayment',
        'scheduled_remainder_payment' => 'getScheduledRemainderPayment',
        'days_prior_to_check_in_to_collect_remainder' => 'getDaysPriorToCheckInToCollectRemainder'
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
        $this->container['scheduled_advance_payment'] = $data['scheduled_advance_payment'] ?? null;
        $this->container['scheduled_remainder_payment'] = $data['scheduled_remainder_payment'] ?? null;
        $this->container['days_prior_to_check_in_to_collect_remainder'] = $data['days_prior_to_check_in_to_collect_remainder'] ?? null;
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
     * Gets scheduled_advance_payment
     *
     * @return \Piksel\Kigo\ChannelsV2\Model\ScheduledTransaction|null
     */
    public function getScheduledAdvancePayment()
    {
        return $this->container['scheduled_advance_payment'];
    }

    /**
     * Sets scheduled_advance_payment
     *
     * @param \Piksel\Kigo\ChannelsV2\Model\ScheduledTransaction|null $scheduled_advance_payment scheduled_advance_payment
     *
     * @return self
     */
    public function setScheduledAdvancePayment($scheduled_advance_payment)
    {
        $this->container['scheduled_advance_payment'] = $scheduled_advance_payment;

        return $this;
    }

    /**
     * Gets scheduled_remainder_payment
     *
     * @return \Piksel\Kigo\ChannelsV2\Model\ScheduledTransaction|null
     */
    public function getScheduledRemainderPayment()
    {
        return $this->container['scheduled_remainder_payment'];
    }

    /**
     * Sets scheduled_remainder_payment
     *
     * @param \Piksel\Kigo\ChannelsV2\Model\ScheduledTransaction|null $scheduled_remainder_payment scheduled_remainder_payment
     *
     * @return self
     */
    public function setScheduledRemainderPayment($scheduled_remainder_payment)
    {
        $this->container['scheduled_remainder_payment'] = $scheduled_remainder_payment;

        return $this;
    }

    /**
     * Gets days_prior_to_check_in_to_collect_remainder
     *
     * @return int|null
     */
    public function getDaysPriorToCheckInToCollectRemainder()
    {
        return $this->container['days_prior_to_check_in_to_collect_remainder'];
    }

    /**
     * Sets days_prior_to_check_in_to_collect_remainder
     *
     * @param int|null $days_prior_to_check_in_to_collect_remainder How many days before the check-in a remainder should be sent
     *
     * @return self
     */
    public function setDaysPriorToCheckInToCollectRemainder($days_prior_to_check_in_to_collect_remainder)
    {
        $this->container['days_prior_to_check_in_to_collect_remainder'] = $days_prior_to_check_in_to_collect_remainder;

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

