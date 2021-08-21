<?php
/**
 * Transaction
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
 * Transaction Class Doc Comment
 *
 * @category Class
 * @package  Piksel\KigoPro
 * @author   Patrick Leijser
 * @link     https://piksel.nl
 */
class Transaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'accounting_category' => 'string',
        'payment_method_type' => 'string',
        'accounting_type' => 'string',
        'id' => 'int',
        'amount' => 'double',
        'quantity' => 'double',
        'total' => 'double',
        'transaction_date' => '\DateTime',
        'description' => 'string',
        'scheduled_date' => '\DateTime',
        'payment_status' => 'string',
        'schedule_transaction_id' => 'int',
        'is_past_due' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'accounting_category' => null,
        'payment_method_type' => null,
        'accounting_type' => null,
        'id' => 'int32',
        'amount' => 'double',
        'quantity' => 'double',
        'total' => 'double',
        'transaction_date' => 'date-time',
        'description' => null,
        'scheduled_date' => 'date-time',
        'payment_status' => null,
        'schedule_transaction_id' => 'int32',
        'is_past_due' => null
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
        'accounting_category' => 'accountingCategory',
        'payment_method_type' => 'paymentMethodType',
        'accounting_type' => 'accountingType',
        'id' => 'id',
        'amount' => 'amount',
        'quantity' => 'quantity',
        'total' => 'total',
        'transaction_date' => 'transactionDate',
        'description' => 'description',
        'scheduled_date' => 'scheduledDate',
        'payment_status' => 'paymentStatus',
        'schedule_transaction_id' => 'scheduleTransactionID',
        'is_past_due' => 'isPastDue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'accounting_category' => 'setAccountingCategory',
        'payment_method_type' => 'setPaymentMethodType',
        'accounting_type' => 'setAccountingType',
        'id' => 'setId',
        'amount' => 'setAmount',
        'quantity' => 'setQuantity',
        'total' => 'setTotal',
        'transaction_date' => 'setTransactionDate',
        'description' => 'setDescription',
        'scheduled_date' => 'setScheduledDate',
        'payment_status' => 'setPaymentStatus',
        'schedule_transaction_id' => 'setScheduleTransactionId',
        'is_past_due' => 'setIsPastDue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'accounting_category' => 'getAccountingCategory',
        'payment_method_type' => 'getPaymentMethodType',
        'accounting_type' => 'getAccountingType',
        'id' => 'getId',
        'amount' => 'getAmount',
        'quantity' => 'getQuantity',
        'total' => 'getTotal',
        'transaction_date' => 'getTransactionDate',
        'description' => 'getDescription',
        'scheduled_date' => 'getScheduledDate',
        'payment_status' => 'getPaymentStatus',
        'schedule_transaction_id' => 'getScheduleTransactionId',
        'is_past_due' => 'getIsPastDue'
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

    const TYPE_TIME = 'Time';
    const TYPE_EXPENSE = 'Expense';
    const TYPE_GENERIC = 'Generic';
    const TYPE_STOCK = 'Stock';
    const TYPE_UNKNOWN = 'Unknown';
    const TYPE_SERVICE = 'Service';
    const TYPE_FEE = 'Fee';
    const TYPE_TAX = 'Tax';
    const TYPE_DISCOUNT = 'Discount';
    const TYPE_CC_PROCESSING_FEE = 'CCProcessingFee';
    const TYPE_CHECK = 'Check';
    const TYPE_CREDIT_CARD = 'CreditCard';
    const TYPE_CASH = 'Cash';
    const TYPE_PAYMENT = 'Payment';
    const TYPE_RECEIPT = 'Receipt';
    const TYPE_COMMISSION = 'Commission';
    const TYPE_PURCHASE = 'Purchase';
    const TYPE_MARKUP = 'Markup';
    const TYPE_ADJUSTMENT = 'Adjustment';
    const TYPE_CHECK_FEE = 'CheckFee';
    const TYPE_CASH_FEE = 'CashFee';
    const TYPE_PAYMENT_INVOICE = 'PaymentInvoice';
    const TYPE_INVOICE = 'Invoice';
    const TYPE_BALANCE_ADJUSTMENT = 'BalanceAdjustment';
    const TYPE_DEPOSIT = 'Deposit';
    const TYPE_DEFERMENT = 'Deferment';
    const TYPE_PROMOTION = 'Promotion';
    const TYPE_UNSPECIFIED = 'Unspecified';
    const ACCOUNTING_CATEGORY_UNKNOWN = 'Unknown';
    const ACCOUNTING_CATEGORY_PAYMENT = 'Payment';
    const ACCOUNTING_CATEGORY_RECEIPT_LINE_ITEM = 'ReceiptLineItem';
    const PAYMENT_METHOD_TYPE_UNKNOWN = 'Unknown';
    const PAYMENT_METHOD_TYPE_CREDIT_CARD = 'CreditCard';
    const PAYMENT_METHOD_TYPE_CASH = 'Cash';
    const PAYMENT_METHOD_TYPE_CHECK = 'Check';
    const PAYMENT_METHOD_TYPE_OTHER = 'Other';
    const PAYMENT_METHOD_TYPE_MONEY_ORDER = 'MoneyOrder';
    const PAYMENT_METHOD_TYPE_PAY_PAL = 'PayPal';
    const PAYMENT_METHOD_TYPE_WIRE_TRANSFER = 'WireTransfer';
    const ACCOUNTING_TYPE_UNKNOWN = 'Unknown';
    const ACCOUNTING_TYPE_RENT = 'Rent';
    const ACCOUNTING_TYPE_CLEANING_FEE = 'CleaningFee';
    const ACCOUNTING_TYPE_MARKETING_FEE = 'MarketingFee';
    const ACCOUNTING_TYPE_SALES_TAX = 'SalesTax';
    const ACCOUNTING_TYPE_OTHER_FEE = 'OtherFee';
    const ACCOUNTING_TYPE_DAMAGE_WAIVER = 'DamageWaiver';
    const ACCOUNTING_TYPE_MAINTENANCE = 'Maintenance';
    const ACCOUNTING_TYPE_INSTALLMENT = 'Installment';
    const ACCOUNTING_TYPE_REFUNDABLE_DAMAGE_DEPOSIT = 'RefundableDamageDeposit';
    const ACCOUNTING_TYPE_COMMISSION = 'Commission';
    const ACCOUNTING_TYPE_GENERIC_DISCOUNT = 'GenericDiscount';
    const ACCOUNTING_TYPE_TRAVEL_INSURANCE = 'TravelInsurance';
    const ACCOUNTING_TYPE_CANCELLATION_FEE = 'CancellationFee';
    const ACCOUNTING_TYPE_EXTRA_PERSON_FEE = 'ExtraPersonFee';
    const ACCOUNTING_TYPE_PROCESSING_FEE = 'ProcessingFee';
    const ACCOUNTING_TYPE_SERVICE_FEE = 'ServiceFee';
    const ACCOUNTING_TYPE_INFO_ONLY = 'InfoOnly';
    const ACCOUNTING_TYPE_DAMAGES = 'Damages';
    const ACCOUNTING_TYPE_DEPOSIT = 'Deposit';
    const ACCOUNTING_TYPE_RENT_ADJUSTMENT = 'RentAdjustment';
    const ACCOUNTING_TYPE_DEFERMENT = 'Deferment';
    const ACCOUNTING_TYPE_TRUST_ACCOUNT = 'TrustAccount';
    const ACCOUNTING_TYPE_UPSELL_FEE = 'UpsellFee';
    const ACCOUNTING_TYPE_LINEN_FEE = 'LinenFee';
    const ACCOUNTING_TYPE_RESORT_FEE = 'ResortFee';
    const ACCOUNTING_TYPE_CITY_TAX = 'CityTax';
    const ACCOUNTING_TYPE_DESTINATION_FEE = 'DestinationFee';
    const ACCOUNTING_TYPE_GOVERNMENT_TAX = 'GovernmentTax';
    const ACCOUNTING_TYPE_LOCAL_COUNCIL_TAX = 'LocalCouncilTax';
    const ACCOUNTING_TYPE_BASIC_PROMOTION = 'BasicPromotion';
    const ACCOUNTING_TYPE_COUPON_PROMOTION = 'CouponPromotion';
    const ACCOUNTING_TYPE_EARLY_BOOKER_PROMOTION = 'EarlyBookerPromotion';
    const ACCOUNTING_TYPE_LAST_MINUTE_PROMOTION = 'LastMinutePromotion';
    const ACCOUNTING_TYPE_BUSINESS_BOOKER_PROMOTION = 'BusinessBookerPromotion';
    const ACCOUNTING_TYPE_MOBILE_RATE_PROMOTION = 'MobileRatePromotion';
    const ACCOUNTING_TYPE_GEO_RATE_PROMOTION = 'GeoRatePromotion';
    const PAYMENT_STATUS_UNKNOWN = 'Unknown';
    const PAYMENT_STATUS_FAILURE = 'Failure';
    const PAYMENT_STATUS_SCHEDULED = 'Scheduled';
    const PAYMENT_STATUS_SUCCESS = 'Success';
    const PAYMENT_STATUS_INITIATED = 'Initiated';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TIME,
            self::TYPE_EXPENSE,
            self::TYPE_GENERIC,
            self::TYPE_STOCK,
            self::TYPE_UNKNOWN,
            self::TYPE_SERVICE,
            self::TYPE_FEE,
            self::TYPE_TAX,
            self::TYPE_DISCOUNT,
            self::TYPE_CC_PROCESSING_FEE,
            self::TYPE_CHECK,
            self::TYPE_CREDIT_CARD,
            self::TYPE_CASH,
            self::TYPE_PAYMENT,
            self::TYPE_RECEIPT,
            self::TYPE_COMMISSION,
            self::TYPE_PURCHASE,
            self::TYPE_MARKUP,
            self::TYPE_ADJUSTMENT,
            self::TYPE_CHECK_FEE,
            self::TYPE_CASH_FEE,
            self::TYPE_PAYMENT_INVOICE,
            self::TYPE_INVOICE,
            self::TYPE_BALANCE_ADJUSTMENT,
            self::TYPE_DEPOSIT,
            self::TYPE_DEFERMENT,
            self::TYPE_PROMOTION,
            self::TYPE_UNSPECIFIED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountingCategoryAllowableValues()
    {
        return [
            self::ACCOUNTING_CATEGORY_UNKNOWN,
            self::ACCOUNTING_CATEGORY_PAYMENT,
            self::ACCOUNTING_CATEGORY_RECEIPT_LINE_ITEM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodTypeAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_TYPE_UNKNOWN,
            self::PAYMENT_METHOD_TYPE_CREDIT_CARD,
            self::PAYMENT_METHOD_TYPE_CASH,
            self::PAYMENT_METHOD_TYPE_CHECK,
            self::PAYMENT_METHOD_TYPE_OTHER,
            self::PAYMENT_METHOD_TYPE_MONEY_ORDER,
            self::PAYMENT_METHOD_TYPE_PAY_PAL,
            self::PAYMENT_METHOD_TYPE_WIRE_TRANSFER,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAccountingTypeAllowableValues()
    {
        return [
            self::ACCOUNTING_TYPE_UNKNOWN,
            self::ACCOUNTING_TYPE_RENT,
            self::ACCOUNTING_TYPE_CLEANING_FEE,
            self::ACCOUNTING_TYPE_MARKETING_FEE,
            self::ACCOUNTING_TYPE_SALES_TAX,
            self::ACCOUNTING_TYPE_OTHER_FEE,
            self::ACCOUNTING_TYPE_DAMAGE_WAIVER,
            self::ACCOUNTING_TYPE_MAINTENANCE,
            self::ACCOUNTING_TYPE_INSTALLMENT,
            self::ACCOUNTING_TYPE_REFUNDABLE_DAMAGE_DEPOSIT,
            self::ACCOUNTING_TYPE_COMMISSION,
            self::ACCOUNTING_TYPE_GENERIC_DISCOUNT,
            self::ACCOUNTING_TYPE_TRAVEL_INSURANCE,
            self::ACCOUNTING_TYPE_CANCELLATION_FEE,
            self::ACCOUNTING_TYPE_EXTRA_PERSON_FEE,
            self::ACCOUNTING_TYPE_PROCESSING_FEE,
            self::ACCOUNTING_TYPE_SERVICE_FEE,
            self::ACCOUNTING_TYPE_INFO_ONLY,
            self::ACCOUNTING_TYPE_DAMAGES,
            self::ACCOUNTING_TYPE_DEPOSIT,
            self::ACCOUNTING_TYPE_RENT_ADJUSTMENT,
            self::ACCOUNTING_TYPE_DEFERMENT,
            self::ACCOUNTING_TYPE_TRUST_ACCOUNT,
            self::ACCOUNTING_TYPE_UPSELL_FEE,
            self::ACCOUNTING_TYPE_LINEN_FEE,
            self::ACCOUNTING_TYPE_RESORT_FEE,
            self::ACCOUNTING_TYPE_CITY_TAX,
            self::ACCOUNTING_TYPE_DESTINATION_FEE,
            self::ACCOUNTING_TYPE_GOVERNMENT_TAX,
            self::ACCOUNTING_TYPE_LOCAL_COUNCIL_TAX,
            self::ACCOUNTING_TYPE_BASIC_PROMOTION,
            self::ACCOUNTING_TYPE_COUPON_PROMOTION,
            self::ACCOUNTING_TYPE_EARLY_BOOKER_PROMOTION,
            self::ACCOUNTING_TYPE_LAST_MINUTE_PROMOTION,
            self::ACCOUNTING_TYPE_BUSINESS_BOOKER_PROMOTION,
            self::ACCOUNTING_TYPE_MOBILE_RATE_PROMOTION,
            self::ACCOUNTING_TYPE_GEO_RATE_PROMOTION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentStatusAllowableValues()
    {
        return [
            self::PAYMENT_STATUS_UNKNOWN,
            self::PAYMENT_STATUS_FAILURE,
            self::PAYMENT_STATUS_SCHEDULED,
            self::PAYMENT_STATUS_SUCCESS,
            self::PAYMENT_STATUS_INITIATED,
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
        $this->container['accounting_category'] = isset($data['accounting_category']) ? $data['accounting_category'] : null;
        $this->container['payment_method_type'] = isset($data['payment_method_type']) ? $data['payment_method_type'] : null;
        $this->container['accounting_type'] = isset($data['accounting_type']) ? $data['accounting_type'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['transaction_date'] = isset($data['transaction_date']) ? $data['transaction_date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['scheduled_date'] = isset($data['scheduled_date']) ? $data['scheduled_date'] : null;
        $this->container['payment_status'] = isset($data['payment_status']) ? $data['payment_status'] : null;
        $this->container['schedule_transaction_id'] = isset($data['schedule_transaction_id']) ? $data['schedule_transaction_id'] : null;
        $this->container['is_past_due'] = isset($data['is_past_due']) ? $data['is_past_due'] : null;
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

        $allowedValues = $this->getAccountingCategoryAllowableValues();
        if (!is_null($this->container['accounting_category']) && !in_array($this->container['accounting_category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'accounting_category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentMethodTypeAllowableValues();
        if (!is_null($this->container['payment_method_type']) && !in_array($this->container['payment_method_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_method_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAccountingTypeAllowableValues();
        if (!is_null($this->container['accounting_type']) && !in_array($this->container['accounting_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'accounting_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($this->container['payment_status']) && !in_array($this->container['payment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_status', must be one of '%s'",
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
     * @param string|null $type Transaction Type
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
     * Gets accounting_category
     *
     * @return string|null
     */
    public function getAccountingCategory()
    {
        return $this->container['accounting_category'];
    }

    /**
     * Sets accounting_category
     *
     * @param string|null $accounting_category Accounting Category
     *
     * @return $this
     */
    public function setAccountingCategory($accounting_category)
    {
        $allowedValues = $this->getAccountingCategoryAllowableValues();
        if (!is_null($accounting_category) && !in_array($accounting_category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'accounting_category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['accounting_category'] = $accounting_category;

        return $this;
    }

    /**
     * Gets payment_method_type
     *
     * @return string|null
     */
    public function getPaymentMethodType()
    {
        return $this->container['payment_method_type'];
    }

    /**
     * Sets payment_method_type
     *
     * @param string|null $payment_method_type Payment Method Type
     *
     * @return $this
     */
    public function setPaymentMethodType($payment_method_type)
    {
        $allowedValues = $this->getPaymentMethodTypeAllowableValues();
        if (!is_null($payment_method_type) && !in_array($payment_method_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_method_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_method_type'] = $payment_method_type;

        return $this;
    }

    /**
     * Gets accounting_type
     *
     * @return string|null
     */
    public function getAccountingType()
    {
        return $this->container['accounting_type'];
    }

    /**
     * Sets accounting_type
     *
     * @param string|null $accounting_type Accounting Type
     *
     * @return $this
     */
    public function setAccountingType($accounting_type)
    {
        $allowedValues = $this->getAccountingTypeAllowableValues();
        if (!is_null($accounting_type) && !in_array($accounting_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'accounting_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['accounting_type'] = $accounting_type;

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
     * @param int|null $id Transaction ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param double|null $amount Safe Amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double|null $quantity Safe Quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets total
     *
     * @return double|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param double|null $total Total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets transaction_date
     *
     * @return \DateTime|null
     */
    public function getTransactionDate()
    {
        return $this->container['transaction_date'];
    }

    /**
     * Sets transaction_date
     *
     * @param \DateTime|null $transaction_date Date of the Transaction. By default, current day
     *
     * @return $this
     */
    public function setTransactionDate($transaction_date)
    {
        $this->container['transaction_date'] = $transaction_date;

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
     * @param string|null $description Description for the Transaction
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets scheduled_date
     *
     * @return \DateTime|null
     */
    public function getScheduledDate()
    {
        return $this->container['scheduled_date'];
    }

    /**
     * Sets scheduled_date
     *
     * @param \DateTime|null $scheduled_date Due on date
     *
     * @return $this
     */
    public function setScheduledDate($scheduled_date)
    {
        $this->container['scheduled_date'] = $scheduled_date;

        return $this;
    }

    /**
     * Gets payment_status
     *
     * @return string|null
     */
    public function getPaymentStatus()
    {
        return $this->container['payment_status'];
    }

    /**
     * Sets payment_status
     *
     * @param string|null $payment_status Payment Status
     *
     * @return $this
     */
    public function setPaymentStatus($payment_status)
    {
        $allowedValues = $this->getPaymentStatusAllowableValues();
        if (!is_null($payment_status) && !in_array($payment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_status'] = $payment_status;

        return $this;
    }

    /**
     * Gets schedule_transaction_id
     *
     * @return int|null
     */
    public function getScheduleTransactionId()
    {
        return $this->container['schedule_transaction_id'];
    }

    /**
     * Sets schedule_transaction_id
     *
     * @param int|null $schedule_transaction_id If the payment is coming from a schedule
     *
     * @return $this
     */
    public function setScheduleTransactionId($schedule_transaction_id)
    {
        $this->container['schedule_transaction_id'] = $schedule_transaction_id;

        return $this;
    }

    /**
     * Gets is_past_due
     *
     * @return bool|null
     */
    public function getIsPastDue()
    {
        return $this->container['is_past_due'];
    }

    /**
     * Sets is_past_due
     *
     * @param bool|null $is_past_due If the payment is past due according to the local date
     *
     * @return $this
     */
    public function setIsPastDue($is_past_due)
    {
        $this->container['is_past_due'] = $is_past_due;

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


