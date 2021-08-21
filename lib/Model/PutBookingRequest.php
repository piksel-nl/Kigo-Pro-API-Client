<?php
/**
 * PutBookingRequest
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
 * PutBookingRequest Class Doc Comment
 *
 * @category Class
 * @package  Piksel\KigoPro
 * @author   Patrick Leijser
 * @link     https://piksel.nl
 */
class PutBookingRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PutBookingRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'check_in_date' => '\DateTime',
        'check_out_date' => '\DateTime',
        'check_in_minutes_from_midnight' => 'int',
        'check_out_minutes_from_midnight' => 'int',
        'num_adults' => 'int',
        'num_children' => 'int',
        'notes' => 'string',
        'special_needs' => 'string',
        'listing_id' => 'int',
        'location_id' => 'int',
        'total_amount' => 'double',
        'renter' => '\Piksel\KigoPro\Model\Person',
        'payment_collection_mode' => 'string',
        'payment_collection_scheduled_date' => '\DateTime',
        'payment_schedule' => '\Piksel\KigoPro\Model\PaymentScheduleRequest'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'check_in_date' => 'date',
        'check_out_date' => 'date',
        'check_in_minutes_from_midnight' => 'int32',
        'check_out_minutes_from_midnight' => 'int32',
        'num_adults' => 'int32',
        'num_children' => 'int32',
        'notes' => null,
        'special_needs' => null,
        'listing_id' => 'int32',
        'location_id' => 'int32',
        'total_amount' => 'double',
        'renter' => null,
        'payment_collection_mode' => null,
        'payment_collection_scheduled_date' => 'date-time',
        'payment_schedule' => null
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
        'check_in_date' => 'checkInDate',
        'check_out_date' => 'checkOutDate',
        'check_in_minutes_from_midnight' => 'checkInMinutesFromMidnight',
        'check_out_minutes_from_midnight' => 'checkOutMinutesFromMidnight',
        'num_adults' => 'numAdults',
        'num_children' => 'numChildren',
        'notes' => 'notes',
        'special_needs' => 'specialNeeds',
        'listing_id' => 'listingID',
        'location_id' => 'locationID',
        'total_amount' => 'totalAmount',
        'renter' => 'renter',
        'payment_collection_mode' => 'paymentCollectionMode',
        'payment_collection_scheduled_date' => 'paymentCollectionScheduledDate',
        'payment_schedule' => 'paymentSchedule'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'check_in_date' => 'setCheckInDate',
        'check_out_date' => 'setCheckOutDate',
        'check_in_minutes_from_midnight' => 'setCheckInMinutesFromMidnight',
        'check_out_minutes_from_midnight' => 'setCheckOutMinutesFromMidnight',
        'num_adults' => 'setNumAdults',
        'num_children' => 'setNumChildren',
        'notes' => 'setNotes',
        'special_needs' => 'setSpecialNeeds',
        'listing_id' => 'setListingId',
        'location_id' => 'setLocationId',
        'total_amount' => 'setTotalAmount',
        'renter' => 'setRenter',
        'payment_collection_mode' => 'setPaymentCollectionMode',
        'payment_collection_scheduled_date' => 'setPaymentCollectionScheduledDate',
        'payment_schedule' => 'setPaymentSchedule'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'check_in_date' => 'getCheckInDate',
        'check_out_date' => 'getCheckOutDate',
        'check_in_minutes_from_midnight' => 'getCheckInMinutesFromMidnight',
        'check_out_minutes_from_midnight' => 'getCheckOutMinutesFromMidnight',
        'num_adults' => 'getNumAdults',
        'num_children' => 'getNumChildren',
        'notes' => 'getNotes',
        'special_needs' => 'getSpecialNeeds',
        'listing_id' => 'getListingId',
        'location_id' => 'getLocationId',
        'total_amount' => 'getTotalAmount',
        'renter' => 'getRenter',
        'payment_collection_mode' => 'getPaymentCollectionMode',
        'payment_collection_scheduled_date' => 'getPaymentCollectionScheduledDate',
        'payment_schedule' => 'getPaymentSchedule'
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

    const PAYMENT_COLLECTION_MODE_PMC_COLLECT = 'PmcCollect';
    const PAYMENT_COLLECTION_MODE_VIRTUAL_CC = 'VirtualCc';
    const PAYMENT_COLLECTION_MODE_CHANNEL_COLLECT = 'ChannelCollect';
    const PAYMENT_COLLECTION_MODE_PMC_OFFLINE_COLLECT = 'PmcOfflineCollect';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentCollectionModeAllowableValues()
    {
        return [
            self::PAYMENT_COLLECTION_MODE_PMC_COLLECT,
            self::PAYMENT_COLLECTION_MODE_VIRTUAL_CC,
            self::PAYMENT_COLLECTION_MODE_CHANNEL_COLLECT,
            self::PAYMENT_COLLECTION_MODE_PMC_OFFLINE_COLLECT,
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
        $this->container['check_in_date'] = isset($data['check_in_date']) ? $data['check_in_date'] : null;
        $this->container['check_out_date'] = isset($data['check_out_date']) ? $data['check_out_date'] : null;
        $this->container['check_in_minutes_from_midnight'] = isset($data['check_in_minutes_from_midnight']) ? $data['check_in_minutes_from_midnight'] : null;
        $this->container['check_out_minutes_from_midnight'] = isset($data['check_out_minutes_from_midnight']) ? $data['check_out_minutes_from_midnight'] : null;
        $this->container['num_adults'] = isset($data['num_adults']) ? $data['num_adults'] : null;
        $this->container['num_children'] = isset($data['num_children']) ? $data['num_children'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['special_needs'] = isset($data['special_needs']) ? $data['special_needs'] : null;
        $this->container['listing_id'] = isset($data['listing_id']) ? $data['listing_id'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['renter'] = isset($data['renter']) ? $data['renter'] : null;
        $this->container['payment_collection_mode'] = isset($data['payment_collection_mode']) ? $data['payment_collection_mode'] : null;
        $this->container['payment_collection_scheduled_date'] = isset($data['payment_collection_scheduled_date']) ? $data['payment_collection_scheduled_date'] : null;
        $this->container['payment_schedule'] = isset($data['payment_schedule']) ? $data['payment_schedule'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['check_in_date'] === null) {
            $invalidProperties[] = "'check_in_date' can't be null";
        }
        if ($this->container['check_out_date'] === null) {
            $invalidProperties[] = "'check_out_date' can't be null";
        }
        if (!is_null($this->container['check_in_minutes_from_midnight']) && ($this->container['check_in_minutes_from_midnight'] > 1439)) {
            $invalidProperties[] = "invalid value for 'check_in_minutes_from_midnight', must be smaller than or equal to 1439.";
        }

        if (!is_null($this->container['check_in_minutes_from_midnight']) && ($this->container['check_in_minutes_from_midnight'] < 0)) {
            $invalidProperties[] = "invalid value for 'check_in_minutes_from_midnight', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['check_out_minutes_from_midnight']) && ($this->container['check_out_minutes_from_midnight'] > 1439)) {
            $invalidProperties[] = "invalid value for 'check_out_minutes_from_midnight', must be smaller than or equal to 1439.";
        }

        if (!is_null($this->container['check_out_minutes_from_midnight']) && ($this->container['check_out_minutes_from_midnight'] < 0)) {
            $invalidProperties[] = "invalid value for 'check_out_minutes_from_midnight', must be bigger than or equal to 0.";
        }

        if ($this->container['num_adults'] === null) {
            $invalidProperties[] = "'num_adults' can't be null";
        }
        if (($this->container['num_adults'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'num_adults', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['num_adults'] < 1)) {
            $invalidProperties[] = "invalid value for 'num_adults', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['num_children']) && ($this->container['num_children'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'num_children', must be smaller than or equal to 2147483647.";
        }

        if (!is_null($this->container['num_children']) && ($this->container['num_children'] < 0)) {
            $invalidProperties[] = "invalid value for 'num_children', must be bigger than or equal to 0.";
        }

        $allowedValues = $this->getPaymentCollectionModeAllowableValues();
        if (!is_null($this->container['payment_collection_mode']) && !in_array($this->container['payment_collection_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_collection_mode', must be one of '%s'",
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
     * Gets check_in_date
     *
     * @return \DateTime
     */
    public function getCheckInDate()
    {
        return $this->container['check_in_date'];
    }

    /**
     * Sets check_in_date
     *
     * @param \DateTime $check_in_date Check In Date
     *
     * @return $this
     */
    public function setCheckInDate($check_in_date)
    {
        $this->container['check_in_date'] = $check_in_date;

        return $this;
    }

    /**
     * Gets check_out_date
     *
     * @return \DateTime
     */
    public function getCheckOutDate()
    {
        return $this->container['check_out_date'];
    }

    /**
     * Sets check_out_date
     *
     * @param \DateTime $check_out_date Check Out Date
     *
     * @return $this
     */
    public function setCheckOutDate($check_out_date)
    {
        $this->container['check_out_date'] = $check_out_date;

        return $this;
    }

    /**
     * Gets check_in_minutes_from_midnight
     *
     * @return int|null
     */
    public function getCheckInMinutesFromMidnight()
    {
        return $this->container['check_in_minutes_from_midnight'];
    }

    /**
     * Sets check_in_minutes_from_midnight
     *
     * @param int|null $check_in_minutes_from_midnight Check In Minutes From Midnight
     *
     * @return $this
     */
    public function setCheckInMinutesFromMidnight($check_in_minutes_from_midnight)
    {

        if (!is_null($check_in_minutes_from_midnight) && ($check_in_minutes_from_midnight > 1439)) {
            throw new \InvalidArgumentException('invalid value for $check_in_minutes_from_midnight when calling PutBookingRequest., must be smaller than or equal to 1439.');
        }
        if (!is_null($check_in_minutes_from_midnight) && ($check_in_minutes_from_midnight < 0)) {
            throw new \InvalidArgumentException('invalid value for $check_in_minutes_from_midnight when calling PutBookingRequest., must be bigger than or equal to 0.');
        }

        $this->container['check_in_minutes_from_midnight'] = $check_in_minutes_from_midnight;

        return $this;
    }

    /**
     * Gets check_out_minutes_from_midnight
     *
     * @return int|null
     */
    public function getCheckOutMinutesFromMidnight()
    {
        return $this->container['check_out_minutes_from_midnight'];
    }

    /**
     * Sets check_out_minutes_from_midnight
     *
     * @param int|null $check_out_minutes_from_midnight Check Out Minutes From Midnight
     *
     * @return $this
     */
    public function setCheckOutMinutesFromMidnight($check_out_minutes_from_midnight)
    {

        if (!is_null($check_out_minutes_from_midnight) && ($check_out_minutes_from_midnight > 1439)) {
            throw new \InvalidArgumentException('invalid value for $check_out_minutes_from_midnight when calling PutBookingRequest., must be smaller than or equal to 1439.');
        }
        if (!is_null($check_out_minutes_from_midnight) && ($check_out_minutes_from_midnight < 0)) {
            throw new \InvalidArgumentException('invalid value for $check_out_minutes_from_midnight when calling PutBookingRequest., must be bigger than or equal to 0.');
        }

        $this->container['check_out_minutes_from_midnight'] = $check_out_minutes_from_midnight;

        return $this;
    }

    /**
     * Gets num_adults
     *
     * @return int
     */
    public function getNumAdults()
    {
        return $this->container['num_adults'];
    }

    /**
     * Sets num_adults
     *
     * @param int $num_adults Number of adults
     *
     * @return $this
     */
    public function setNumAdults($num_adults)
    {

        if (($num_adults > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $num_adults when calling PutBookingRequest., must be smaller than or equal to 2147483647.');
        }
        if (($num_adults < 1)) {
            throw new \InvalidArgumentException('invalid value for $num_adults when calling PutBookingRequest., must be bigger than or equal to 1.');
        }

        $this->container['num_adults'] = $num_adults;

        return $this;
    }

    /**
     * Gets num_children
     *
     * @return int|null
     */
    public function getNumChildren()
    {
        return $this->container['num_children'];
    }

    /**
     * Sets num_children
     *
     * @param int|null $num_children Number of children
     *
     * @return $this
     */
    public function setNumChildren($num_children)
    {

        if (!is_null($num_children) && ($num_children > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $num_children when calling PutBookingRequest., must be smaller than or equal to 2147483647.');
        }
        if (!is_null($num_children) && ($num_children < 0)) {
            throw new \InvalidArgumentException('invalid value for $num_children when calling PutBookingRequest., must be bigger than or equal to 0.');
        }

        $this->container['num_children'] = $num_children;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string|null
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string|null $notes Notes  If passed, the system will overwrite the existing value.  If null, the system will keep the existing value.
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets special_needs
     *
     * @return string|null
     */
    public function getSpecialNeeds()
    {
        return $this->container['special_needs'];
    }

    /**
     * Sets special_needs
     *
     * @param string|null $special_needs Special Needs  If passed, the system will overwrite the existing value.  If null, the system will keep the existing value.
     *
     * @return $this
     */
    public function setSpecialNeeds($special_needs)
    {
        $this->container['special_needs'] = $special_needs;

        return $this;
    }

    /**
     * Gets listing_id
     *
     * @return int|null
     */
    public function getListingId()
    {
        return $this->container['listing_id'];
    }

    /**
     * Sets listing_id
     *
     * @param int|null $listing_id Listing ID  If passed, the system will be forced to use this.  If null, the system will use the current listing.
     *
     * @return $this
     */
    public function setListingId($listing_id)
    {
        $this->container['listing_id'] = $listing_id;

        return $this;
    }

    /**
     * Gets location_id
     *
     * @return int|null
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     *
     * @param int|null $location_id Location ID.  If passed, the system will be forced to use this.  If null, the system will find the first available unit, giving preference to the current one but can end up in change of unit.
     *
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return double|null
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param double|null $total_amount total_amount
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets renter
     *
     * @return \Piksel\KigoPro\Model\Person|null
     */
    public function getRenter()
    {
        return $this->container['renter'];
    }

    /**
     * Sets renter
     *
     * @param \Piksel\KigoPro\Model\Person|null $renter renter
     *
     * @return $this
     */
    public function setRenter($renter)
    {
        $this->container['renter'] = $renter;

        return $this;
    }

    /**
     * Gets payment_collection_mode
     *
     * @return string|null
     */
    public function getPaymentCollectionMode()
    {
        return $this->container['payment_collection_mode'];
    }

    /**
     * Sets payment_collection_mode
     *
     * @param string|null $payment_collection_mode payment_collection_mode
     *
     * @return $this
     */
    public function setPaymentCollectionMode($payment_collection_mode)
    {
        $allowedValues = $this->getPaymentCollectionModeAllowableValues();
        if (!is_null($payment_collection_mode) && !in_array($payment_collection_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_collection_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_collection_mode'] = $payment_collection_mode;

        return $this;
    }

    /**
     * Gets payment_collection_scheduled_date
     *
     * @return \DateTime|null
     */
    public function getPaymentCollectionScheduledDate()
    {
        return $this->container['payment_collection_scheduled_date'];
    }

    /**
     * Sets payment_collection_scheduled_date
     *
     * @param \DateTime|null $payment_collection_scheduled_date payment_collection_scheduled_date
     *
     * @return $this
     */
    public function setPaymentCollectionScheduledDate($payment_collection_scheduled_date)
    {
        $this->container['payment_collection_scheduled_date'] = $payment_collection_scheduled_date;

        return $this;
    }

    /**
     * Gets payment_schedule
     *
     * @return \Piksel\KigoPro\Model\PaymentScheduleRequest|null
     */
    public function getPaymentSchedule()
    {
        return $this->container['payment_schedule'];
    }

    /**
     * Sets payment_schedule
     *
     * @param \Piksel\KigoPro\Model\PaymentScheduleRequest|null $payment_schedule payment_schedule
     *
     * @return $this
     */
    public function setPaymentSchedule($payment_schedule)
    {
        $this->container['payment_schedule'] = $payment_schedule;

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


