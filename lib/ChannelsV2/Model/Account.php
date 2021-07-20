<?php
/**
 * Account
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
 * Account Class Doc Comment
 *
 * @category Class
 * @package  Piksel\Kigo
 * @author   Piksel
 * @link     https://piksel.nl
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Account implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Account';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'logo_url' => 'string',
        'support_email' => 'string',
        'support_phone' => 'string',
        'phone_country_code' => 'string',
        'business_registration' => 'string',
        'merchant_name' => 'string',
        'currency' => 'string',
        'company_information' => 'string',
        'currency_symbol' => 'string',
        'primary_locale' => 'string',
        'supported_locales' => 'string[]',
        'accepted_payment_methods' => 'string[]',
        'legal_business_name' => 'string',
        'legal_address' => '\Piksel\Kigo\ChannelsV2\Model\Address'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'name' => null,
        'logo_url' => null,
        'support_email' => null,
        'support_phone' => null,
        'phone_country_code' => null,
        'business_registration' => null,
        'merchant_name' => null,
        'currency' => null,
        'company_information' => null,
        'currency_symbol' => null,
        'primary_locale' => null,
        'supported_locales' => null,
        'accepted_payment_methods' => null,
        'legal_business_name' => null,
        'legal_address' => null
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
        'name' => 'name',
        'logo_url' => 'logoUrl',
        'support_email' => 'supportEmail',
        'support_phone' => 'supportPhone',
        'phone_country_code' => 'phoneCountryCode',
        'business_registration' => 'businessRegistration',
        'merchant_name' => 'merchantName',
        'currency' => 'currency',
        'company_information' => 'companyInformation',
        'currency_symbol' => 'currencySymbol',
        'primary_locale' => 'primaryLocale',
        'supported_locales' => 'supportedLocales',
        'accepted_payment_methods' => 'acceptedPaymentMethods',
        'legal_business_name' => 'legalBusinessName',
        'legal_address' => 'legalAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'logo_url' => 'setLogoUrl',
        'support_email' => 'setSupportEmail',
        'support_phone' => 'setSupportPhone',
        'phone_country_code' => 'setPhoneCountryCode',
        'business_registration' => 'setBusinessRegistration',
        'merchant_name' => 'setMerchantName',
        'currency' => 'setCurrency',
        'company_information' => 'setCompanyInformation',
        'currency_symbol' => 'setCurrencySymbol',
        'primary_locale' => 'setPrimaryLocale',
        'supported_locales' => 'setSupportedLocales',
        'accepted_payment_methods' => 'setAcceptedPaymentMethods',
        'legal_business_name' => 'setLegalBusinessName',
        'legal_address' => 'setLegalAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'logo_url' => 'getLogoUrl',
        'support_email' => 'getSupportEmail',
        'support_phone' => 'getSupportPhone',
        'phone_country_code' => 'getPhoneCountryCode',
        'business_registration' => 'getBusinessRegistration',
        'merchant_name' => 'getMerchantName',
        'currency' => 'getCurrency',
        'company_information' => 'getCompanyInformation',
        'currency_symbol' => 'getCurrencySymbol',
        'primary_locale' => 'getPrimaryLocale',
        'supported_locales' => 'getSupportedLocales',
        'accepted_payment_methods' => 'getAcceptedPaymentMethods',
        'legal_business_name' => 'getLegalBusinessName',
        'legal_address' => 'getLegalAddress'
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

    const CURRENCY_UNKNOWN = 'Unknown';
    const CURRENCY_USD = 'USD';
    const CURRENCY_AUD = 'AUD';
    const CURRENCY_BRL = 'BRL';
    const CURRENCY_CAD = 'CAD';
    const CURRENCY_CNY = 'CNY';
    const CURRENCY_DKK = 'DKK';
    const CURRENCY_EUR = 'EUR';
    const CURRENCY_HKD = 'HKD';
    const CURRENCY_INR = 'INR';
    const CURRENCY_JPY = 'JPY';
    const CURRENCY_MYR = 'MYR';
    const CURRENCY_MXN = 'MXN';
    const CURRENCY_NZD = 'NZD';
    const CURRENCY_NOK = 'NOK';
    const CURRENCY_SGD = 'SGD';
    const CURRENCY_ZAR = 'ZAR';
    const CURRENCY_KRW = 'KRW';
    const CURRENCY_LKR = 'LKR';
    const CURRENCY_SEK = 'SEK';
    const CURRENCY_CHF = 'CHF';
    const CURRENCY_TWD = 'TWD';
    const CURRENCY_THB = 'THB';
    const CURRENCY_GBP = 'GBP';
    const CURRENCY_EGP = 'EGP';
    const CURRENCY_XPF = 'XPF';
    const CURRENCY_AED = 'AED';
    const CURRENCY_ANG = 'ANG';
    const CURRENCY_ARS = 'ARS';
    const CURRENCY_BGN = 'BGN';
    const CURRENCY_BHD = 'BHD';
    const CURRENCY_BOB = 'BOB';
    const CURRENCY_BTN = 'BTN';
    const CURRENCY_BZD = 'BZD';
    const CURRENCY_CLP = 'CLP';
    const CURRENCY_COP = 'COP';
    const CURRENCY_CRC = 'CRC';
    const CURRENCY_CZK = 'CZK';
    const CURRENCY_GNF = 'GNF';
    const CURRENCY_GTQ = 'GTQ';
    const CURRENCY_GYD = 'GYD';
    const CURRENCY_HNL = 'HNL';
    const CURRENCY_HRK = 'HRK';
    const CURRENCY_HUF = 'HUF';
    const CURRENCY_IDR = 'IDR';
    const CURRENCY_ILS = 'ILS';
    const CURRENCY_ISK = 'ISK';
    const CURRENCY_JOD = 'JOD';
    const CURRENCY_KHR = 'KHR';
    const CURRENCY_KWD = 'KWD';
    const CURRENCY_KZT = 'KZT';
    const CURRENCY_LAK = 'LAK';
    const CURRENCY_LBP = 'LBP';
    const CURRENCY_MAD = 'MAD';
    const CURRENCY_MOP = 'MOP';
    const CURRENCY_NIO = 'NIO';
    const CURRENCY_OMR = 'OMR';
    const CURRENCY_PAB = 'PAB';
    const CURRENCY_PEN = 'PEN';
    const CURRENCY_PHP = 'PHP';
    const CURRENCY_PKR = 'PKR';
    const CURRENCY_PLN = 'PLN';
    const CURRENCY_PYG = 'PYG';
    const CURRENCY_QAR = 'QAR';
    const CURRENCY_RON = 'RON';
    const CURRENCY_RUB = 'RUB';
    const CURRENCY_SAR = 'SAR';
    const CURRENCY_SRD = 'SRD';
    const CURRENCY_TND = 'TND';
    const CURRENCY__TRY = 'TRY';
    const CURRENCY_UAH = 'UAH';
    const CURRENCY_UYU = 'UYU';
    const CURRENCY_VEF = 'VEF';
    const CURRENCY_VND = 'VND';
    const CURRENCY_AZN = 'AZN';
    const ACCEPTED_PAYMENT_METHODS_NOT_SET = 'NotSet';
    const ACCEPTED_PAYMENT_METHODS_VISA = 'Visa';
    const ACCEPTED_PAYMENT_METHODS_MASTER_CARD = 'MasterCard';
    const ACCEPTED_PAYMENT_METHODS_AMERICAN_EXPRESS = 'AmericanExpress';
    const ACCEPTED_PAYMENT_METHODS_DISCOVER = 'Discover';
    const ACCEPTED_PAYMENT_METHODS_OTHER = 'Other';
    const ACCEPTED_PAYMENT_METHODS_DINERS_CLUB = 'DinersClub';
    const ACCEPTED_PAYMENT_METHODS_OFFLINE = 'Offline';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCurrencyAllowableValues()
    {
        return [
            self::CURRENCY_UNKNOWN,
            self::CURRENCY_USD,
            self::CURRENCY_AUD,
            self::CURRENCY_BRL,
            self::CURRENCY_CAD,
            self::CURRENCY_CNY,
            self::CURRENCY_DKK,
            self::CURRENCY_EUR,
            self::CURRENCY_HKD,
            self::CURRENCY_INR,
            self::CURRENCY_JPY,
            self::CURRENCY_MYR,
            self::CURRENCY_MXN,
            self::CURRENCY_NZD,
            self::CURRENCY_NOK,
            self::CURRENCY_SGD,
            self::CURRENCY_ZAR,
            self::CURRENCY_KRW,
            self::CURRENCY_LKR,
            self::CURRENCY_SEK,
            self::CURRENCY_CHF,
            self::CURRENCY_TWD,
            self::CURRENCY_THB,
            self::CURRENCY_GBP,
            self::CURRENCY_EGP,
            self::CURRENCY_XPF,
            self::CURRENCY_AED,
            self::CURRENCY_ANG,
            self::CURRENCY_ARS,
            self::CURRENCY_BGN,
            self::CURRENCY_BHD,
            self::CURRENCY_BOB,
            self::CURRENCY_BTN,
            self::CURRENCY_BZD,
            self::CURRENCY_CLP,
            self::CURRENCY_COP,
            self::CURRENCY_CRC,
            self::CURRENCY_CZK,
            self::CURRENCY_GNF,
            self::CURRENCY_GTQ,
            self::CURRENCY_GYD,
            self::CURRENCY_HNL,
            self::CURRENCY_HRK,
            self::CURRENCY_HUF,
            self::CURRENCY_IDR,
            self::CURRENCY_ILS,
            self::CURRENCY_ISK,
            self::CURRENCY_JOD,
            self::CURRENCY_KHR,
            self::CURRENCY_KWD,
            self::CURRENCY_KZT,
            self::CURRENCY_LAK,
            self::CURRENCY_LBP,
            self::CURRENCY_MAD,
            self::CURRENCY_MOP,
            self::CURRENCY_NIO,
            self::CURRENCY_OMR,
            self::CURRENCY_PAB,
            self::CURRENCY_PEN,
            self::CURRENCY_PHP,
            self::CURRENCY_PKR,
            self::CURRENCY_PLN,
            self::CURRENCY_PYG,
            self::CURRENCY_QAR,
            self::CURRENCY_RON,
            self::CURRENCY_RUB,
            self::CURRENCY_SAR,
            self::CURRENCY_SRD,
            self::CURRENCY_TND,
            self::CURRENCY__TRY,
            self::CURRENCY_UAH,
            self::CURRENCY_UYU,
            self::CURRENCY_VEF,
            self::CURRENCY_VND,
            self::CURRENCY_AZN,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAcceptedPaymentMethodsAllowableValues()
    {
        return [
            self::ACCEPTED_PAYMENT_METHODS_NOT_SET,
            self::ACCEPTED_PAYMENT_METHODS_VISA,
            self::ACCEPTED_PAYMENT_METHODS_MASTER_CARD,
            self::ACCEPTED_PAYMENT_METHODS_AMERICAN_EXPRESS,
            self::ACCEPTED_PAYMENT_METHODS_DISCOVER,
            self::ACCEPTED_PAYMENT_METHODS_OTHER,
            self::ACCEPTED_PAYMENT_METHODS_DINERS_CLUB,
            self::ACCEPTED_PAYMENT_METHODS_OFFLINE,
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
        $this->container['name'] = $data['name'] ?? null;
        $this->container['logo_url'] = $data['logo_url'] ?? null;
        $this->container['support_email'] = $data['support_email'] ?? null;
        $this->container['support_phone'] = $data['support_phone'] ?? null;
        $this->container['phone_country_code'] = $data['phone_country_code'] ?? null;
        $this->container['business_registration'] = $data['business_registration'] ?? null;
        $this->container['merchant_name'] = $data['merchant_name'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['company_information'] = $data['company_information'] ?? null;
        $this->container['currency_symbol'] = $data['currency_symbol'] ?? null;
        $this->container['primary_locale'] = $data['primary_locale'] ?? null;
        $this->container['supported_locales'] = $data['supported_locales'] ?? null;
        $this->container['accepted_payment_methods'] = $data['accepted_payment_methods'] ?? null;
        $this->container['legal_business_name'] = $data['legal_business_name'] ?? null;
        $this->container['legal_address'] = $data['legal_address'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($this->container['currency']) && !in_array($this->container['currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'currency', must be one of '%s'",
                $this->container['currency'],
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
     * @param string|null $name Account Name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets logo_url
     *
     * @return string|null
     */
    public function getLogoUrl()
    {
        return $this->container['logo_url'];
    }

    /**
     * Sets logo_url
     *
     * @param string|null $logo_url logo_url
     *
     * @return self
     */
    public function setLogoUrl($logo_url)
    {
        $this->container['logo_url'] = $logo_url;

        return $this;
    }

    /**
     * Gets support_email
     *
     * @return string|null
     */
    public function getSupportEmail()
    {
        return $this->container['support_email'];
    }

    /**
     * Sets support_email
     *
     * @param string|null $support_email General support email
     *
     * @return self
     */
    public function setSupportEmail($support_email)
    {
        $this->container['support_email'] = $support_email;

        return $this;
    }

    /**
     * Gets support_phone
     *
     * @return string|null
     */
    public function getSupportPhone()
    {
        return $this->container['support_phone'];
    }

    /**
     * Sets support_phone
     *
     * @param string|null $support_phone General support phone
     *
     * @return self
     */
    public function setSupportPhone($support_phone)
    {
        $this->container['support_phone'] = $support_phone;

        return $this;
    }

    /**
     * Gets phone_country_code
     *
     * @return string|null
     */
    public function getPhoneCountryCode()
    {
        return $this->container['phone_country_code'];
    }

    /**
     * Sets phone_country_code
     *
     * @param string|null $phone_country_code Phone country code
     *
     * @return self
     */
    public function setPhoneCountryCode($phone_country_code)
    {
        $this->container['phone_country_code'] = $phone_country_code;

        return $this;
    }

    /**
     * Gets business_registration
     *
     * @return string|null
     */
    public function getBusinessRegistration()
    {
        return $this->container['business_registration'];
    }

    /**
     * Sets business_registration
     *
     * @param string|null $business_registration Business Registration Number
     *
     * @return self
     */
    public function setBusinessRegistration($business_registration)
    {
        $this->container['business_registration'] = $business_registration;

        return $this;
    }

    /**
     * Gets merchant_name
     *
     * @return string|null
     */
    public function getMerchantName()
    {
        return $this->container['merchant_name'];
    }

    /**
     * Sets merchant_name
     *
     * @param string|null $merchant_name Merchant Name
     *
     * @return self
     */
    public function setMerchantName($merchant_name)
    {
        $this->container['merchant_name'] = $merchant_name;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency Currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        $allowedValues = $this->getCurrencyAllowableValues();
        if (!is_null($currency) && !in_array($currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'currency', must be one of '%s'",
                    $currency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets company_information
     *
     * @return string|null
     */
    public function getCompanyInformation()
    {
        return $this->container['company_information'];
    }

    /**
     * Sets company_information
     *
     * @param string|null $company_information Htmlencoded text
     *
     * @return self
     */
    public function setCompanyInformation($company_information)
    {
        $this->container['company_information'] = $company_information;

        return $this;
    }

    /**
     * Gets currency_symbol
     *
     * @return string|null
     */
    public function getCurrencySymbol()
    {
        return $this->container['currency_symbol'];
    }

    /**
     * Sets currency_symbol
     *
     * @param string|null $currency_symbol Currency Symbol ($, £, ...)
     *
     * @return self
     */
    public function setCurrencySymbol($currency_symbol)
    {
        $this->container['currency_symbol'] = $currency_symbol;

        return $this;
    }

    /**
     * Gets primary_locale
     *
     * @return string|null
     */
    public function getPrimaryLocale()
    {
        return $this->container['primary_locale'];
    }

    /**
     * Sets primary_locale
     *
     * @param string|null $primary_locale en-US, it-IT, ...
     *
     * @return self
     */
    public function setPrimaryLocale($primary_locale)
    {
        $this->container['primary_locale'] = $primary_locale;

        return $this;
    }

    /**
     * Gets supported_locales
     *
     * @return string[]|null
     */
    public function getSupportedLocales()
    {
        return $this->container['supported_locales'];
    }

    /**
     * Sets supported_locales
     *
     * @param string[]|null $supported_locales en-US, it-IT, ...
     *
     * @return self
     */
    public function setSupportedLocales($supported_locales)
    {
        $this->container['supported_locales'] = $supported_locales;

        return $this;
    }

    /**
     * Gets accepted_payment_methods
     *
     * @return string[]|null
     */
    public function getAcceptedPaymentMethods()
    {
        return $this->container['accepted_payment_methods'];
    }

    /**
     * Sets accepted_payment_methods
     *
     * @param string[]|null $accepted_payment_methods Credit card brands which the PMC accepts for booking payment
     *
     * @return self
     */
    public function setAcceptedPaymentMethods($accepted_payment_methods)
    {
        $allowedValues = $this->getAcceptedPaymentMethodsAllowableValues();
        if (!is_null($accepted_payment_methods) && array_diff($accepted_payment_methods, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'accepted_payment_methods', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['accepted_payment_methods'] = $accepted_payment_methods;

        return $this;
    }

    /**
     * Gets legal_business_name
     *
     * @return string|null
     */
    public function getLegalBusinessName()
    {
        return $this->container['legal_business_name'];
    }

    /**
     * Sets legal_business_name
     *
     * @param string|null $legal_business_name legal_business_name
     *
     * @return self
     */
    public function setLegalBusinessName($legal_business_name)
    {
        $this->container['legal_business_name'] = $legal_business_name;

        return $this;
    }

    /**
     * Gets legal_address
     *
     * @return \Piksel\Kigo\ChannelsV2\Model\Address|null
     */
    public function getLegalAddress()
    {
        return $this->container['legal_address'];
    }

    /**
     * Sets legal_address
     *
     * @param \Piksel\Kigo\ChannelsV2\Model\Address|null $legal_address legal_address
     *
     * @return self
     */
    public function setLegalAddress($legal_address)
    {
        $this->container['legal_address'] = $legal_address;

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

