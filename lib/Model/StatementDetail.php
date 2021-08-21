<?php
/**
 * StatementDetail
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
 * StatementDetail Class Doc Comment
 *
 * @category Class
 * @description Statement Detail
 * @package  Piksel\KigoPro
 * @author   Patrick Leijser
 * @link     https://piksel.nl
 */
class StatementDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'StatementDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'description' => 'string',
        'amount' => 'double',
        'id' => 'string',
        'quantity' => 'int',
        'is_mandatory' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'description' => null,
        'amount' => 'double',
        'id' => 'uuid',
        'quantity' => 'int32',
        'is_mandatory' => null
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
        'type' => 'type',
        'description' => 'description',
        'amount' => 'amount',
        'id' => 'id',
        'quantity' => 'quantity',
        'is_mandatory' => 'isMandatory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'description' => 'setDescription',
        'amount' => 'setAmount',
        'id' => 'setId',
        'quantity' => 'setQuantity',
        'is_mandatory' => 'setIsMandatory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'description' => 'getDescription',
        'amount' => 'getAmount',
        'id' => 'getId',
        'quantity' => 'getQuantity',
        'is_mandatory' => 'getIsMandatory'
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

    const TYPE_UNKNOWN = 'Unknown';
    const TYPE_RENT = 'Rent';
    const TYPE_CLEANING_FEE = 'CleaningFee';
    const TYPE_MARKETING_FEE = 'MarketingFee';
    const TYPE_SALES_TAX = 'SalesTax';
    const TYPE_OTHER_FEE = 'OtherFee';
    const TYPE_DAMAGE_WAIVER = 'DamageWaiver';
    const TYPE_MAINTENANCE = 'Maintenance';
    const TYPE_INSTALLMENT = 'Installment';
    const TYPE_REFUNDABLE_DAMAGE_DEPOSIT = 'RefundableDamageDeposit';
    const TYPE_COMMISSION = 'Commission';
    const TYPE_GENERIC_DISCOUNT = 'GenericDiscount';
    const TYPE_TRAVEL_INSURANCE = 'TravelInsurance';
    const TYPE_CANCELLATION_FEE = 'CancellationFee';
    const TYPE_EXTRA_PERSON_FEE = 'ExtraPersonFee';
    const TYPE_PROCESSING_FEE = 'ProcessingFee';
    const TYPE_SERVICE_FEE = 'ServiceFee';
    const TYPE_INFO_ONLY = 'InfoOnly';
    const TYPE_DAMAGES = 'Damages';
    const TYPE_DEPOSIT = 'Deposit';
    const TYPE_RENT_ADJUSTMENT = 'RentAdjustment';
    const TYPE_DEFERMENT = 'Deferment';
    const TYPE_TRUST_ACCOUNT = 'TrustAccount';
    const TYPE_UPSELL_FEE = 'UpsellFee';
    const TYPE_LINEN_FEE = 'LinenFee';
    const TYPE_RESORT_FEE = 'ResortFee';
    const TYPE_CITY_TAX = 'CityTax';
    const TYPE_DESTINATION_FEE = 'DestinationFee';
    const TYPE_GOVERNMENT_TAX = 'GovernmentTax';
    const TYPE_LOCAL_COUNCIL_TAX = 'LocalCouncilTax';
    const TYPE_BASIC_PROMOTION = 'BasicPromotion';
    const TYPE_COUPON_PROMOTION = 'CouponPromotion';
    const TYPE_EARLY_BOOKER_PROMOTION = 'EarlyBookerPromotion';
    const TYPE_LAST_MINUTE_PROMOTION = 'LastMinutePromotion';
    const TYPE_BUSINESS_BOOKER_PROMOTION = 'BusinessBookerPromotion';
    const TYPE_MOBILE_RATE_PROMOTION = 'MobileRatePromotion';
    const TYPE_GEO_RATE_PROMOTION = 'GeoRatePromotion';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_UNKNOWN,
            self::TYPE_RENT,
            self::TYPE_CLEANING_FEE,
            self::TYPE_MARKETING_FEE,
            self::TYPE_SALES_TAX,
            self::TYPE_OTHER_FEE,
            self::TYPE_DAMAGE_WAIVER,
            self::TYPE_MAINTENANCE,
            self::TYPE_INSTALLMENT,
            self::TYPE_REFUNDABLE_DAMAGE_DEPOSIT,
            self::TYPE_COMMISSION,
            self::TYPE_GENERIC_DISCOUNT,
            self::TYPE_TRAVEL_INSURANCE,
            self::TYPE_CANCELLATION_FEE,
            self::TYPE_EXTRA_PERSON_FEE,
            self::TYPE_PROCESSING_FEE,
            self::TYPE_SERVICE_FEE,
            self::TYPE_INFO_ONLY,
            self::TYPE_DAMAGES,
            self::TYPE_DEPOSIT,
            self::TYPE_RENT_ADJUSTMENT,
            self::TYPE_DEFERMENT,
            self::TYPE_TRUST_ACCOUNT,
            self::TYPE_UPSELL_FEE,
            self::TYPE_LINEN_FEE,
            self::TYPE_RESORT_FEE,
            self::TYPE_CITY_TAX,
            self::TYPE_DESTINATION_FEE,
            self::TYPE_GOVERNMENT_TAX,
            self::TYPE_LOCAL_COUNCIL_TAX,
            self::TYPE_BASIC_PROMOTION,
            self::TYPE_COUPON_PROMOTION,
            self::TYPE_EARLY_BOOKER_PROMOTION,
            self::TYPE_LAST_MINUTE_PROMOTION,
            self::TYPE_BUSINESS_BOOKER_PROMOTION,
            self::TYPE_MOBILE_RATE_PROMOTION,
            self::TYPE_GEO_RATE_PROMOTION,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['is_mandatory'] = isset($data['is_mandatory']) ? $data['is_mandatory'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Statement Type (Rent or Fee)
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double|null $amount Total of this Statement's line
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
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
     * @param string|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets is_mandatory
     *
     * @return bool|null
     */
    public function getIsMandatory()
    {
        return $this->container['is_mandatory'];
    }

    /**
     * Sets is_mandatory
     *
     * @param bool|null $is_mandatory is_mandatory
     *
     * @return $this
     */
    public function setIsMandatory($is_mandatory)
    {
        $this->container['is_mandatory'] = $is_mandatory;

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


