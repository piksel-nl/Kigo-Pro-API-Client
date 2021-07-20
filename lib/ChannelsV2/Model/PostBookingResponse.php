<?php
/**
 * PostBookingResponse
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
 * PostBookingResponse Class Doc Comment
 *
 * @category Class
 * @description Response to POST /bookings and POST /quotes/{guid}/book actions
 * @package  Piksel\Kigo
 * @author   Piksel
 * @link     https://piksel.nl
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class PostBookingResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PostBookingResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'error_type' => 'string',
        'booking_error' => 'string',
        'setup_error' => 'string',
        'constraint_error' => 'string',
        'quote_error' => 'string',
        'error_message' => 'string',
        'payment_plan_guid' => 'string',
        'zero_dollar_authorization_status' => 'string',
        'zero_dollar_authorization_response' => '\Piksel\Kigo\ChannelsV2\Model\CreditCardAuthorizationResponse',
        'advance_payment_status' => 'string',
        'advance_payment_response' => '\Piksel\Kigo\ChannelsV2\Model\CreditCardAuthorizationResponse',
        'value' => '\Piksel\Kigo\ChannelsV2\Model\Booking'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'error_type' => null,
        'booking_error' => null,
        'setup_error' => null,
        'constraint_error' => null,
        'quote_error' => null,
        'error_message' => null,
        'payment_plan_guid' => 'uuid',
        'zero_dollar_authorization_status' => null,
        'zero_dollar_authorization_response' => null,
        'advance_payment_status' => null,
        'advance_payment_response' => null,
        'value' => null
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
        'error_type' => 'errorType',
        'booking_error' => 'bookingError',
        'setup_error' => 'setupError',
        'constraint_error' => 'constraintError',
        'quote_error' => 'quoteError',
        'error_message' => 'errorMessage',
        'payment_plan_guid' => 'paymentPlanGuid',
        'zero_dollar_authorization_status' => 'zeroDollarAuthorizationStatus',
        'zero_dollar_authorization_response' => 'zeroDollarAuthorizationResponse',
        'advance_payment_status' => 'advancePaymentStatus',
        'advance_payment_response' => 'advancePaymentResponse',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_type' => 'setErrorType',
        'booking_error' => 'setBookingError',
        'setup_error' => 'setSetupError',
        'constraint_error' => 'setConstraintError',
        'quote_error' => 'setQuoteError',
        'error_message' => 'setErrorMessage',
        'payment_plan_guid' => 'setPaymentPlanGuid',
        'zero_dollar_authorization_status' => 'setZeroDollarAuthorizationStatus',
        'zero_dollar_authorization_response' => 'setZeroDollarAuthorizationResponse',
        'advance_payment_status' => 'setAdvancePaymentStatus',
        'advance_payment_response' => 'setAdvancePaymentResponse',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_type' => 'getErrorType',
        'booking_error' => 'getBookingError',
        'setup_error' => 'getSetupError',
        'constraint_error' => 'getConstraintError',
        'quote_error' => 'getQuoteError',
        'error_message' => 'getErrorMessage',
        'payment_plan_guid' => 'getPaymentPlanGuid',
        'zero_dollar_authorization_status' => 'getZeroDollarAuthorizationStatus',
        'zero_dollar_authorization_response' => 'getZeroDollarAuthorizationResponse',
        'advance_payment_status' => 'getAdvancePaymentStatus',
        'advance_payment_response' => 'getAdvancePaymentResponse',
        'value' => 'getValue'
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

    const ERROR_TYPE_BOOKING = 'Booking';
    const ERROR_TYPE_SETUP = 'Setup';
    const ERROR_TYPE_CONSTRAINT = 'Constraint';
    const ERROR_TYPE_QUOTE = 'Quote';
    const BOOKING_ERROR_LOCATION_NOT_AVAILABLE = 'LocationNotAvailable';
    const BOOKING_ERROR_MISSING_CREDIT_CARD = 'MissingCreditCard';
    const BOOKING_ERROR_CORE_API_ERROR = 'CoreAPIError';
    const BOOKING_ERROR_DUPLICATED_EXTERNAL_BOOKING_ID = 'DuplicatedExternalBookingID';
    const BOOKING_ERROR_CREDIT_CARD_PROCESSING_FAILURE = 'CreditCardProcessingFailure';
    const BOOKING_ERROR_PROPERTY_DOES_NOT_EXIST = 'PropertyDoesNotExist';
    const BOOKING_ERROR_INVALID_RENTER = 'InvalidRenter';
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
    const QUOTE_ERROR_INVALID = 'Invalid';
    const QUOTE_ERROR_ALREADY_USED = 'AlreadyUsed';
    const QUOTE_ERROR_EXPIRED = 'Expired';
    const QUOTE_ERROR_INVALID_LISTING = 'InvalidListing';
    const QUOTE_ERROR_LOCATION_NOT_FOUND = 'LocationNotFound';
    const QUOTE_ERROR_PLAN_NOT_FOUND = 'PlanNotFound';
    const QUOTE_ERROR_PRICE_NOT_AVAILABLE = 'PriceNotAvailable';
    const QUOTE_ERROR_INVALID_RATE_PLANS = 'InvalidRatePlans';
    const QUOTE_ERROR_INVALID_CONTRACT = 'InvalidContract';
    const QUOTE_ERROR_INVALID_FEES = 'InvalidFees';
    const ZERO_DOLLAR_AUTHORIZATION_STATUS_SKIPPED = 'Skipped';
    const ZERO_DOLLAR_AUTHORIZATION_STATUS_SUCCESS = 'Success';
    const ZERO_DOLLAR_AUTHORIZATION_STATUS_FAILURE = 'Failure';
    const ZERO_DOLLAR_AUTHORIZATION_STATUS_NO_CREDIT_CARD = 'NoCreditCard';
    const ZERO_DOLLAR_AUTHORIZATION_STATUS_NOT_NEEDED = 'NotNeeded';
    const ADVANCE_PAYMENT_STATUS_SKIPPED = 'Skipped';
    const ADVANCE_PAYMENT_STATUS_SUCCESS = 'Success';
    const ADVANCE_PAYMENT_STATUS_FAILURE = 'Failure';
    const ADVANCE_PAYMENT_STATUS_NO_CREDIT_CARD = 'NoCreditCard';
    const ADVANCE_PAYMENT_STATUS_NOT_NEEDED = 'NotNeeded';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getErrorTypeAllowableValues()
    {
        return [
            self::ERROR_TYPE_BOOKING,
            self::ERROR_TYPE_SETUP,
            self::ERROR_TYPE_CONSTRAINT,
            self::ERROR_TYPE_QUOTE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBookingErrorAllowableValues()
    {
        return [
            self::BOOKING_ERROR_LOCATION_NOT_AVAILABLE,
            self::BOOKING_ERROR_MISSING_CREDIT_CARD,
            self::BOOKING_ERROR_CORE_API_ERROR,
            self::BOOKING_ERROR_DUPLICATED_EXTERNAL_BOOKING_ID,
            self::BOOKING_ERROR_CREDIT_CARD_PROCESSING_FAILURE,
            self::BOOKING_ERROR_PROPERTY_DOES_NOT_EXIST,
            self::BOOKING_ERROR_INVALID_RENTER,
        ];
    }

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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQuoteErrorAllowableValues()
    {
        return [
            self::QUOTE_ERROR_INVALID,
            self::QUOTE_ERROR_ALREADY_USED,
            self::QUOTE_ERROR_EXPIRED,
            self::QUOTE_ERROR_INVALID_LISTING,
            self::QUOTE_ERROR_LOCATION_NOT_FOUND,
            self::QUOTE_ERROR_PLAN_NOT_FOUND,
            self::QUOTE_ERROR_PRICE_NOT_AVAILABLE,
            self::QUOTE_ERROR_INVALID_RATE_PLANS,
            self::QUOTE_ERROR_INVALID_CONTRACT,
            self::QUOTE_ERROR_INVALID_FEES,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getZeroDollarAuthorizationStatusAllowableValues()
    {
        return [
            self::ZERO_DOLLAR_AUTHORIZATION_STATUS_SKIPPED,
            self::ZERO_DOLLAR_AUTHORIZATION_STATUS_SUCCESS,
            self::ZERO_DOLLAR_AUTHORIZATION_STATUS_FAILURE,
            self::ZERO_DOLLAR_AUTHORIZATION_STATUS_NO_CREDIT_CARD,
            self::ZERO_DOLLAR_AUTHORIZATION_STATUS_NOT_NEEDED,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdvancePaymentStatusAllowableValues()
    {
        return [
            self::ADVANCE_PAYMENT_STATUS_SKIPPED,
            self::ADVANCE_PAYMENT_STATUS_SUCCESS,
            self::ADVANCE_PAYMENT_STATUS_FAILURE,
            self::ADVANCE_PAYMENT_STATUS_NO_CREDIT_CARD,
            self::ADVANCE_PAYMENT_STATUS_NOT_NEEDED,
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
        $this->container['error_type'] = $data['error_type'] ?? null;
        $this->container['booking_error'] = $data['booking_error'] ?? null;
        $this->container['setup_error'] = $data['setup_error'] ?? null;
        $this->container['constraint_error'] = $data['constraint_error'] ?? null;
        $this->container['quote_error'] = $data['quote_error'] ?? null;
        $this->container['error_message'] = $data['error_message'] ?? null;
        $this->container['payment_plan_guid'] = $data['payment_plan_guid'] ?? null;
        $this->container['zero_dollar_authorization_status'] = $data['zero_dollar_authorization_status'] ?? null;
        $this->container['zero_dollar_authorization_response'] = $data['zero_dollar_authorization_response'] ?? null;
        $this->container['advance_payment_status'] = $data['advance_payment_status'] ?? null;
        $this->container['advance_payment_response'] = $data['advance_payment_response'] ?? null;
        $this->container['value'] = $data['value'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getErrorTypeAllowableValues();
        if (!is_null($this->container['error_type']) && !in_array($this->container['error_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'error_type', must be one of '%s'",
                $this->container['error_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBookingErrorAllowableValues();
        if (!is_null($this->container['booking_error']) && !in_array($this->container['booking_error'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'booking_error', must be one of '%s'",
                $this->container['booking_error'],
                implode("', '", $allowedValues)
            );
        }

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

        $allowedValues = $this->getQuoteErrorAllowableValues();
        if (!is_null($this->container['quote_error']) && !in_array($this->container['quote_error'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'quote_error', must be one of '%s'",
                $this->container['quote_error'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getZeroDollarAuthorizationStatusAllowableValues();
        if (!is_null($this->container['zero_dollar_authorization_status']) && !in_array($this->container['zero_dollar_authorization_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'zero_dollar_authorization_status', must be one of '%s'",
                $this->container['zero_dollar_authorization_status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAdvancePaymentStatusAllowableValues();
        if (!is_null($this->container['advance_payment_status']) && !in_array($this->container['advance_payment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'advance_payment_status', must be one of '%s'",
                $this->container['advance_payment_status'],
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
     * Gets error_type
     *
     * @return string|null
     */
    public function getErrorType()
    {
        return $this->container['error_type'];
    }

    /**
     * Sets error_type
     *
     * @param string|null $error_type Error Type
     *
     * @return self
     */
    public function setErrorType($error_type)
    {
        $allowedValues = $this->getErrorTypeAllowableValues();
        if (!is_null($error_type) && !in_array($error_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'error_type', must be one of '%s'",
                    $error_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['error_type'] = $error_type;

        return $this;
    }

    /**
     * Gets booking_error
     *
     * @return string|null
     */
    public function getBookingError()
    {
        return $this->container['booking_error'];
    }

    /**
     * Sets booking_error
     *
     * @param string|null $booking_error Booking Error Code
     *
     * @return self
     */
    public function setBookingError($booking_error)
    {
        $allowedValues = $this->getBookingErrorAllowableValues();
        if (!is_null($booking_error) && !in_array($booking_error, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'booking_error', must be one of '%s'",
                    $booking_error,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['booking_error'] = $booking_error;

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
     * @param string|null $setup_error Setup Error Code
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
     * @param string|null $constraint_error Constraint Error Code
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
     * Gets quote_error
     *
     * @return string|null
     */
    public function getQuoteError()
    {
        return $this->container['quote_error'];
    }

    /**
     * Sets quote_error
     *
     * @param string|null $quote_error Quote Error Code
     *
     * @return self
     */
    public function setQuoteError($quote_error)
    {
        $allowedValues = $this->getQuoteErrorAllowableValues();
        if (!is_null($quote_error) && !in_array($quote_error, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'quote_error', must be one of '%s'",
                    $quote_error,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['quote_error'] = $quote_error;

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
     * @param string|null $error_message Error Message
     *
     * @return self
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets payment_plan_guid
     *
     * @return string|null
     */
    public function getPaymentPlanGuid()
    {
        return $this->container['payment_plan_guid'];
    }

    /**
     * Sets payment_plan_guid
     *
     * @param string|null $payment_plan_guid Payment Plan Guid
     *
     * @return self
     */
    public function setPaymentPlanGuid($payment_plan_guid)
    {
        $this->container['payment_plan_guid'] = $payment_plan_guid;

        return $this;
    }

    /**
     * Gets zero_dollar_authorization_status
     *
     * @return string|null
     */
    public function getZeroDollarAuthorizationStatus()
    {
        return $this->container['zero_dollar_authorization_status'];
    }

    /**
     * Sets zero_dollar_authorization_status
     *
     * @param string|null $zero_dollar_authorization_status Card Authorization Status
     *
     * @return self
     */
    public function setZeroDollarAuthorizationStatus($zero_dollar_authorization_status)
    {
        $allowedValues = $this->getZeroDollarAuthorizationStatusAllowableValues();
        if (!is_null($zero_dollar_authorization_status) && !in_array($zero_dollar_authorization_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'zero_dollar_authorization_status', must be one of '%s'",
                    $zero_dollar_authorization_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['zero_dollar_authorization_status'] = $zero_dollar_authorization_status;

        return $this;
    }

    /**
     * Gets zero_dollar_authorization_response
     *
     * @return \Piksel\Kigo\ChannelsV2\Model\CreditCardAuthorizationResponse|null
     */
    public function getZeroDollarAuthorizationResponse()
    {
        return $this->container['zero_dollar_authorization_response'];
    }

    /**
     * Sets zero_dollar_authorization_response
     *
     * @param \Piksel\Kigo\ChannelsV2\Model\CreditCardAuthorizationResponse|null $zero_dollar_authorization_response zero_dollar_authorization_response
     *
     * @return self
     */
    public function setZeroDollarAuthorizationResponse($zero_dollar_authorization_response)
    {
        $this->container['zero_dollar_authorization_response'] = $zero_dollar_authorization_response;

        return $this;
    }

    /**
     * Gets advance_payment_status
     *
     * @return string|null
     */
    public function getAdvancePaymentStatus()
    {
        return $this->container['advance_payment_status'];
    }

    /**
     * Sets advance_payment_status
     *
     * @param string|null $advance_payment_status Advance Payment Status
     *
     * @return self
     */
    public function setAdvancePaymentStatus($advance_payment_status)
    {
        $allowedValues = $this->getAdvancePaymentStatusAllowableValues();
        if (!is_null($advance_payment_status) && !in_array($advance_payment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'advance_payment_status', must be one of '%s'",
                    $advance_payment_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['advance_payment_status'] = $advance_payment_status;

        return $this;
    }

    /**
     * Gets advance_payment_response
     *
     * @return \Piksel\Kigo\ChannelsV2\Model\CreditCardAuthorizationResponse|null
     */
    public function getAdvancePaymentResponse()
    {
        return $this->container['advance_payment_response'];
    }

    /**
     * Sets advance_payment_response
     *
     * @param \Piksel\Kigo\ChannelsV2\Model\CreditCardAuthorizationResponse|null $advance_payment_response advance_payment_response
     *
     * @return self
     */
    public function setAdvancePaymentResponse($advance_payment_response)
    {
        $this->container['advance_payment_response'] = $advance_payment_response;

        return $this;
    }

    /**
     * Gets value
     *
     * @return \Piksel\Kigo\ChannelsV2\Model\Booking|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param \Piksel\Kigo\ChannelsV2\Model\Booking|null $value value
     *
     * @return self
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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


