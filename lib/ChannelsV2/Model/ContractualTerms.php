<?php
/**
 * ContractualTerms
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
 * ContractualTerms Class Doc Comment
 *
 * @category Class
 * @package  Piksel\Kigo
 * @author   Piksel
 * @link     https://piksel.nl
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ContractualTerms implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ContractualTerms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'locale' => 'string',
        'version1' => '\Piksel\Kigo\ChannelsV2\Model\ContractVersion',
        'version2' => '\Piksel\Kigo\ChannelsV2\Model\ContractVersion',
        'version3' => '\Piksel\Kigo\ChannelsV2\Model\ContractVersion',
        'rental_agreement_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'locale' => null,
        'version1' => null,
        'version2' => null,
        'version3' => null,
        'rental_agreement_url' => null
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
        'locale' => 'locale',
        'version1' => 'version1',
        'version2' => 'version2',
        'version3' => 'version3',
        'rental_agreement_url' => 'rentalAgreementUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'locale' => 'setLocale',
        'version1' => 'setVersion1',
        'version2' => 'setVersion2',
        'version3' => 'setVersion3',
        'rental_agreement_url' => 'setRentalAgreementUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'locale' => 'getLocale',
        'version1' => 'getVersion1',
        'version2' => 'getVersion2',
        'version3' => 'getVersion3',
        'rental_agreement_url' => 'getRentalAgreementUrl'
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
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['version1'] = $data['version1'] ?? null;
        $this->container['version2'] = $data['version2'] ?? null;
        $this->container['version3'] = $data['version3'] ?? null;
        $this->container['rental_agreement_url'] = $data['rental_agreement_url'] ?? null;
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
     * Gets locale
     *
     * @return string|null
     */
    public function getLocale()
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale
     *
     * @param string|null $locale locale
     *
     * @return self
     */
    public function setLocale($locale)
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets version1
     *
     * @return \Piksel\Kigo\ChannelsV2\Model\ContractVersion|null
     */
    public function getVersion1()
    {
        return $this->container['version1'];
    }

    /**
     * Sets version1
     *
     * @param \Piksel\Kigo\ChannelsV2\Model\ContractVersion|null $version1 version1
     *
     * @return self
     */
    public function setVersion1($version1)
    {
        $this->container['version1'] = $version1;

        return $this;
    }

    /**
     * Gets version2
     *
     * @return \Piksel\Kigo\ChannelsV2\Model\ContractVersion|null
     */
    public function getVersion2()
    {
        return $this->container['version2'];
    }

    /**
     * Sets version2
     *
     * @param \Piksel\Kigo\ChannelsV2\Model\ContractVersion|null $version2 version2
     *
     * @return self
     */
    public function setVersion2($version2)
    {
        $this->container['version2'] = $version2;

        return $this;
    }

    /**
     * Gets version3
     *
     * @return \Piksel\Kigo\ChannelsV2\Model\ContractVersion|null
     */
    public function getVersion3()
    {
        return $this->container['version3'];
    }

    /**
     * Sets version3
     *
     * @param \Piksel\Kigo\ChannelsV2\Model\ContractVersion|null $version3 version3
     *
     * @return self
     */
    public function setVersion3($version3)
    {
        $this->container['version3'] = $version3;

        return $this;
    }

    /**
     * Gets rental_agreement_url
     *
     * @return string|null
     */
    public function getRentalAgreementUrl()
    {
        return $this->container['rental_agreement_url'];
    }

    /**
     * Sets rental_agreement_url
     *
     * @param string|null $rental_agreement_url rental_agreement_url
     *
     * @return self
     */
    public function setRentalAgreementUrl($rental_agreement_url)
    {
        $this->container['rental_agreement_url'] = $rental_agreement_url;

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


