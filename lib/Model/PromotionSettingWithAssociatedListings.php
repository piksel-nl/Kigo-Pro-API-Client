<?php
/**
 * PromotionSettingWithAssociatedListings
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
 * PromotionSettingWithAssociatedListings Class Doc Comment
 *
 * @category Class
 * @package  Piksel\KigoPro
 * @author   Patrick Leijser
 * @link     https://piksel.nl
 */
class PromotionSettingWithAssociatedListings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PromotionSettingWithAssociatedListings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assigned_listing_i_ds' => 'int[]',
        'id' => 'int',
        'type' => 'string',
        'stay_start_date' => '\DateTime',
        'stay_end_date' => '\DateTime',
        'active_week_days' => 'string[]',
        'excluded_dates' => '\DateTime[]',
        'additional_dates' => '\DateTime[]',
        'discount_percentage' => 'int',
        'is_enabled' => 'bool',
        'name' => 'string',
        'coupon_code' => 'string',
        'days_prior_to_check_in_min' => 'int',
        'days_prior_to_check_in_max' => 'int',
        'min_stay' => 'int',
        'device' => 'string',
        'markets' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'assigned_listing_i_ds' => 'int32',
        'id' => 'int32',
        'type' => null,
        'stay_start_date' => 'date-time',
        'stay_end_date' => 'date-time',
        'active_week_days' => null,
        'excluded_dates' => 'date-time',
        'additional_dates' => 'date-time',
        'discount_percentage' => 'int32',
        'is_enabled' => null,
        'name' => null,
        'coupon_code' => null,
        'days_prior_to_check_in_min' => 'int32',
        'days_prior_to_check_in_max' => 'int32',
        'min_stay' => 'int32',
        'device' => null,
        'markets' => null
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
        'assigned_listing_i_ds' => 'assignedListingIDs',
        'id' => 'id',
        'type' => 'type',
        'stay_start_date' => 'stayStartDate',
        'stay_end_date' => 'stayEndDate',
        'active_week_days' => 'activeWeekDays',
        'excluded_dates' => 'excludedDates',
        'additional_dates' => 'additionalDates',
        'discount_percentage' => 'discountPercentage',
        'is_enabled' => 'isEnabled',
        'name' => 'name',
        'coupon_code' => 'couponCode',
        'days_prior_to_check_in_min' => 'daysPriorToCheckInMin',
        'days_prior_to_check_in_max' => 'daysPriorToCheckInMax',
        'min_stay' => 'minStay',
        'device' => 'device',
        'markets' => 'markets'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assigned_listing_i_ds' => 'setAssignedListingIDs',
        'id' => 'setId',
        'type' => 'setType',
        'stay_start_date' => 'setStayStartDate',
        'stay_end_date' => 'setStayEndDate',
        'active_week_days' => 'setActiveWeekDays',
        'excluded_dates' => 'setExcludedDates',
        'additional_dates' => 'setAdditionalDates',
        'discount_percentage' => 'setDiscountPercentage',
        'is_enabled' => 'setIsEnabled',
        'name' => 'setName',
        'coupon_code' => 'setCouponCode',
        'days_prior_to_check_in_min' => 'setDaysPriorToCheckInMin',
        'days_prior_to_check_in_max' => 'setDaysPriorToCheckInMax',
        'min_stay' => 'setMinStay',
        'device' => 'setDevice',
        'markets' => 'setMarkets'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assigned_listing_i_ds' => 'getAssignedListingIDs',
        'id' => 'getId',
        'type' => 'getType',
        'stay_start_date' => 'getStayStartDate',
        'stay_end_date' => 'getStayEndDate',
        'active_week_days' => 'getActiveWeekDays',
        'excluded_dates' => 'getExcludedDates',
        'additional_dates' => 'getAdditionalDates',
        'discount_percentage' => 'getDiscountPercentage',
        'is_enabled' => 'getIsEnabled',
        'name' => 'getName',
        'coupon_code' => 'getCouponCode',
        'days_prior_to_check_in_min' => 'getDaysPriorToCheckInMin',
        'days_prior_to_check_in_max' => 'getDaysPriorToCheckInMax',
        'min_stay' => 'getMinStay',
        'device' => 'getDevice',
        'markets' => 'getMarkets'
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

    const TYPE_BASIC_PROMOTION = 'BasicPromotion';
    const TYPE_COUPON_PROMOTION = 'CouponPromotion';
    const TYPE_EARLY_BOOKER_PROMOTION = 'EarlyBookerPromotion';
    const TYPE_LAST_MINUTE_PROMOTION = 'LastMinutePromotion';
    const TYPE_BUSINESS_BOOKER_PROMOTION = 'BusinessBookerPromotion';
    const TYPE_MOBILE_RATE_PROMOTION = 'MobileRatePromotion';
    const TYPE_GEO_RATE_PROMOTION = 'GeoRatePromotion';
    const ACTIVE_WEEK_DAYS_SUNDAY = 'Sunday';
    const ACTIVE_WEEK_DAYS_MONDAY = 'Monday';
    const ACTIVE_WEEK_DAYS_TUESDAY = 'Tuesday';
    const ACTIVE_WEEK_DAYS_WEDNESDAY = 'Wednesday';
    const ACTIVE_WEEK_DAYS_THURSDAY = 'Thursday';
    const ACTIVE_WEEK_DAYS_FRIDAY = 'Friday';
    const ACTIVE_WEEK_DAYS_SATURDAY = 'Saturday';
    const DEVICE_ALL = 'All';
    const DEVICE_APP = 'App';
    const MARKETS_ALGERIA_POS = 'algeria_pos';
    const MARKETS_ARGENTINA_POS = 'argentina_pos';
    const MARKETS_AUSTRALIA_POS = 'australia_pos';
    const MARKETS_BELARUS_POS = 'belarus_pos';
    const MARKETS_BRAZIL_POS = 'brazil_pos';
    const MARKETS_CANADA_POS = 'canada_pos';
    const MARKETS_CHILE_POS = 'chile_pos';
    const MARKETS_COLOMBIA_POS = 'colombia_pos';
    const MARKETS_DOMESTIC_POS = 'domestic_pos';
    const MARKETS_EU_POS = 'eu_pos';
    const MARKETS_HONG_KONG_POS = 'hong_kong_pos';
    const MARKETS_INDIA_POS = 'india_pos';
    const MARKETS_INDONESIA_POS = 'indonesia_pos';
    const MARKETS_INTERNATIONAL_POS = 'international_pos';
    const MARKETS_IRAN_POS = 'iran_pos';
    const MARKETS_ISRAEL_POS = 'israel_pos';
    const MARKETS_JAPAN_POS = 'japan_pos';
    const MARKETS_KAZAKHSTAN_POS = 'kazakhstan_pos';
    const MARKETS_KUWAIT_POS = 'kuwait_pos';
    const MARKETS_MALAYSIA_POS = 'malaysia_pos';
    const MARKETS_MEXICO_POS = 'mexico_pos';
    const MARKETS_NEW_ZEALAND_POS = 'new_zealand_pos';
    const MARKETS_OMAN_POS = 'oman_pos';
    const MARKETS_PAKISTAN_POS = 'pakistan_pos';
    const MARKETS_PERU_POS = 'peru_pos';
    const MARKETS_PHILIPPINES_POS = 'philippines_pos';
    const MARKETS_QATAR_POS = 'qatar_pos';
    const MARKETS_RUSSIA_POS = 'russia_pos';
    const MARKETS_SAUDI_ARABIA_POS = 'saudi_arabia_pos';
    const MARKETS_SINGAPORE_POS = 'singapore_pos';
    const MARKETS_SOUTH_AFRICA_POS = 'south_africa_pos';
    const MARKETS_SOUTH_KOREA_POS = 'south_korea_pos';
    const MARKETS_SWITZERLAND_POS = 'switzerland_pos';
    const MARKETS_TAIWAN_POS = 'taiwan_pos';
    const MARKETS_THAILAND_POS = 'thailand_pos';
    const MARKETS_TRINIDAD__TOBAGO_POS = 'trinidad_&_tobago_pos';
    const MARKETS_TURKEY_POS = 'turkey_pos';
    const MARKETS_UKRAINE_POS = 'ukraine_pos';
    const MARKETS_UNITED_ARAB_EMIRATES_POS = 'united_arab_emirates_pos';
    const MARKETS_UNITED_STATES_POS = 'united_states_pos';
    const MARKETS_VIETNAM_POS = 'vietnam_pos';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getActiveWeekDaysAllowableValues()
    {
        return [
            self::ACTIVE_WEEK_DAYS_SUNDAY,
            self::ACTIVE_WEEK_DAYS_MONDAY,
            self::ACTIVE_WEEK_DAYS_TUESDAY,
            self::ACTIVE_WEEK_DAYS_WEDNESDAY,
            self::ACTIVE_WEEK_DAYS_THURSDAY,
            self::ACTIVE_WEEK_DAYS_FRIDAY,
            self::ACTIVE_WEEK_DAYS_SATURDAY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDeviceAllowableValues()
    {
        return [
            self::DEVICE_ALL,
            self::DEVICE_APP,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMarketsAllowableValues()
    {
        return [
            self::MARKETS_ALGERIA_POS,
            self::MARKETS_ARGENTINA_POS,
            self::MARKETS_AUSTRALIA_POS,
            self::MARKETS_BELARUS_POS,
            self::MARKETS_BRAZIL_POS,
            self::MARKETS_CANADA_POS,
            self::MARKETS_CHILE_POS,
            self::MARKETS_COLOMBIA_POS,
            self::MARKETS_DOMESTIC_POS,
            self::MARKETS_EU_POS,
            self::MARKETS_HONG_KONG_POS,
            self::MARKETS_INDIA_POS,
            self::MARKETS_INDONESIA_POS,
            self::MARKETS_INTERNATIONAL_POS,
            self::MARKETS_IRAN_POS,
            self::MARKETS_ISRAEL_POS,
            self::MARKETS_JAPAN_POS,
            self::MARKETS_KAZAKHSTAN_POS,
            self::MARKETS_KUWAIT_POS,
            self::MARKETS_MALAYSIA_POS,
            self::MARKETS_MEXICO_POS,
            self::MARKETS_NEW_ZEALAND_POS,
            self::MARKETS_OMAN_POS,
            self::MARKETS_PAKISTAN_POS,
            self::MARKETS_PERU_POS,
            self::MARKETS_PHILIPPINES_POS,
            self::MARKETS_QATAR_POS,
            self::MARKETS_RUSSIA_POS,
            self::MARKETS_SAUDI_ARABIA_POS,
            self::MARKETS_SINGAPORE_POS,
            self::MARKETS_SOUTH_AFRICA_POS,
            self::MARKETS_SOUTH_KOREA_POS,
            self::MARKETS_SWITZERLAND_POS,
            self::MARKETS_TAIWAN_POS,
            self::MARKETS_THAILAND_POS,
            self::MARKETS_TRINIDAD__TOBAGO_POS,
            self::MARKETS_TURKEY_POS,
            self::MARKETS_UKRAINE_POS,
            self::MARKETS_UNITED_ARAB_EMIRATES_POS,
            self::MARKETS_UNITED_STATES_POS,
            self::MARKETS_VIETNAM_POS,
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
        $this->container['assigned_listing_i_ds'] = isset($data['assigned_listing_i_ds']) ? $data['assigned_listing_i_ds'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['stay_start_date'] = isset($data['stay_start_date']) ? $data['stay_start_date'] : null;
        $this->container['stay_end_date'] = isset($data['stay_end_date']) ? $data['stay_end_date'] : null;
        $this->container['active_week_days'] = isset($data['active_week_days']) ? $data['active_week_days'] : null;
        $this->container['excluded_dates'] = isset($data['excluded_dates']) ? $data['excluded_dates'] : null;
        $this->container['additional_dates'] = isset($data['additional_dates']) ? $data['additional_dates'] : null;
        $this->container['discount_percentage'] = isset($data['discount_percentage']) ? $data['discount_percentage'] : null;
        $this->container['is_enabled'] = isset($data['is_enabled']) ? $data['is_enabled'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['coupon_code'] = isset($data['coupon_code']) ? $data['coupon_code'] : null;
        $this->container['days_prior_to_check_in_min'] = isset($data['days_prior_to_check_in_min']) ? $data['days_prior_to_check_in_min'] : null;
        $this->container['days_prior_to_check_in_max'] = isset($data['days_prior_to_check_in_max']) ? $data['days_prior_to_check_in_max'] : null;
        $this->container['min_stay'] = isset($data['min_stay']) ? $data['min_stay'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
        $this->container['markets'] = isset($data['markets']) ? $data['markets'] : null;
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

        $allowedValues = $this->getDeviceAllowableValues();
        if (!is_null($this->container['device']) && !in_array($this->container['device'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'device', must be one of '%s'",
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
     * Gets assigned_listing_i_ds
     *
     * @return int[]|null
     */
    public function getAssignedListingIDs()
    {
        return $this->container['assigned_listing_i_ds'];
    }

    /**
     * Sets assigned_listing_i_ds
     *
     * @param int[]|null $assigned_listing_i_ds assigned_listing_i_ds
     *
     * @return $this
     */
    public function setAssignedListingIDs($assigned_listing_i_ds)
    {
        $this->container['assigned_listing_i_ds'] = $assigned_listing_i_ds;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
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
     * @param string|null $type type
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
     * Gets stay_start_date
     *
     * @return \DateTime|null
     */
    public function getStayStartDate()
    {
        return $this->container['stay_start_date'];
    }

    /**
     * Sets stay_start_date
     *
     * @param \DateTime|null $stay_start_date stay_start_date
     *
     * @return $this
     */
    public function setStayStartDate($stay_start_date)
    {
        $this->container['stay_start_date'] = $stay_start_date;

        return $this;
    }

    /**
     * Gets stay_end_date
     *
     * @return \DateTime|null
     */
    public function getStayEndDate()
    {
        return $this->container['stay_end_date'];
    }

    /**
     * Sets stay_end_date
     *
     * @param \DateTime|null $stay_end_date stay_end_date
     *
     * @return $this
     */
    public function setStayEndDate($stay_end_date)
    {
        $this->container['stay_end_date'] = $stay_end_date;

        return $this;
    }

    /**
     * Gets active_week_days
     *
     * @return string[]|null
     */
    public function getActiveWeekDays()
    {
        return $this->container['active_week_days'];
    }

    /**
     * Sets active_week_days
     *
     * @param string[]|null $active_week_days active_week_days
     *
     * @return $this
     */
    public function setActiveWeekDays($active_week_days)
    {
        $allowedValues = $this->getActiveWeekDaysAllowableValues();
        if (!is_null($active_week_days) && array_diff($active_week_days, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'active_week_days', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['active_week_days'] = $active_week_days;

        return $this;
    }

    /**
     * Gets excluded_dates
     *
     * @return \DateTime[]|null
     */
    public function getExcludedDates()
    {
        return $this->container['excluded_dates'];
    }

    /**
     * Sets excluded_dates
     *
     * @param \DateTime[]|null $excluded_dates excluded_dates
     *
     * @return $this
     */
    public function setExcludedDates($excluded_dates)
    {
        $this->container['excluded_dates'] = $excluded_dates;

        return $this;
    }

    /**
     * Gets additional_dates
     *
     * @return \DateTime[]|null
     */
    public function getAdditionalDates()
    {
        return $this->container['additional_dates'];
    }

    /**
     * Sets additional_dates
     *
     * @param \DateTime[]|null $additional_dates additional_dates
     *
     * @return $this
     */
    public function setAdditionalDates($additional_dates)
    {
        $this->container['additional_dates'] = $additional_dates;

        return $this;
    }

    /**
     * Gets discount_percentage
     *
     * @return int|null
     */
    public function getDiscountPercentage()
    {
        return $this->container['discount_percentage'];
    }

    /**
     * Sets discount_percentage
     *
     * @param int|null $discount_percentage discount_percentage
     *
     * @return $this
     */
    public function setDiscountPercentage($discount_percentage)
    {
        $this->container['discount_percentage'] = $discount_percentage;

        return $this;
    }

    /**
     * Gets is_enabled
     *
     * @return bool|null
     */
    public function getIsEnabled()
    {
        return $this->container['is_enabled'];
    }

    /**
     * Sets is_enabled
     *
     * @param bool|null $is_enabled is_enabled
     *
     * @return $this
     */
    public function setIsEnabled($is_enabled)
    {
        $this->container['is_enabled'] = $is_enabled;

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
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets coupon_code
     *
     * @return string|null
     */
    public function getCouponCode()
    {
        return $this->container['coupon_code'];
    }

    /**
     * Sets coupon_code
     *
     * @param string|null $coupon_code coupon_code
     *
     * @return $this
     */
    public function setCouponCode($coupon_code)
    {
        $this->container['coupon_code'] = $coupon_code;

        return $this;
    }

    /**
     * Gets days_prior_to_check_in_min
     *
     * @return int|null
     */
    public function getDaysPriorToCheckInMin()
    {
        return $this->container['days_prior_to_check_in_min'];
    }

    /**
     * Sets days_prior_to_check_in_min
     *
     * @param int|null $days_prior_to_check_in_min days_prior_to_check_in_min
     *
     * @return $this
     */
    public function setDaysPriorToCheckInMin($days_prior_to_check_in_min)
    {
        $this->container['days_prior_to_check_in_min'] = $days_prior_to_check_in_min;

        return $this;
    }

    /**
     * Gets days_prior_to_check_in_max
     *
     * @return int|null
     */
    public function getDaysPriorToCheckInMax()
    {
        return $this->container['days_prior_to_check_in_max'];
    }

    /**
     * Sets days_prior_to_check_in_max
     *
     * @param int|null $days_prior_to_check_in_max days_prior_to_check_in_max
     *
     * @return $this
     */
    public function setDaysPriorToCheckInMax($days_prior_to_check_in_max)
    {
        $this->container['days_prior_to_check_in_max'] = $days_prior_to_check_in_max;

        return $this;
    }

    /**
     * Gets min_stay
     *
     * @return int|null
     */
    public function getMinStay()
    {
        return $this->container['min_stay'];
    }

    /**
     * Sets min_stay
     *
     * @param int|null $min_stay min_stay
     *
     * @return $this
     */
    public function setMinStay($min_stay)
    {
        $this->container['min_stay'] = $min_stay;

        return $this;
    }

    /**
     * Gets device
     *
     * @return string|null
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     *
     * @param string|null $device device
     *
     * @return $this
     */
    public function setDevice($device)
    {
        $allowedValues = $this->getDeviceAllowableValues();
        if (!is_null($device) && !in_array($device, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'device', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets markets
     *
     * @return string[]|null
     */
    public function getMarkets()
    {
        return $this->container['markets'];
    }

    /**
     * Sets markets
     *
     * @param string[]|null $markets markets
     *
     * @return $this
     */
    public function setMarkets($markets)
    {
        $allowedValues = $this->getMarketsAllowableValues();
        if (!is_null($markets) && array_diff($markets, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'markets', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['markets'] = $markets;

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


