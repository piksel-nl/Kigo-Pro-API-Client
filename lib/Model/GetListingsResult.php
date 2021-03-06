<?php
/**
 * GetListingsResult
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
 * GetListingsResult Class Doc Comment
 *
 * @category Class
 * @package  Piksel\KigoPro
 * @author   Patrick Leijser
 * @link     https://piksel.nl
 */
class GetListingsResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetListingsResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'time_zone_id' => 'string',
        'metadata' => 'object',
        'external_id' => 'string',
        'show_location' => 'bool',
        'associated_channel_connection_i_ds' => 'int[]',
        'associated_channel_connections' => '\Piksel\KigoPro\Model\ChannelConnectionListing[]',
        'listing_origin' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'time_zone_id' => null,
        'metadata' => null,
        'external_id' => null,
        'show_location' => null,
        'associated_channel_connection_i_ds' => 'int32',
        'associated_channel_connections' => null,
        'listing_origin' => null
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
        'time_zone_id' => 'timeZoneID',
        'metadata' => 'metadata',
        'external_id' => 'externalID',
        'show_location' => 'showLocation',
        'associated_channel_connection_i_ds' => 'associatedChannelConnectionIDs',
        'associated_channel_connections' => 'associatedChannelConnections',
        'listing_origin' => 'listingOrigin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'time_zone_id' => 'setTimeZoneId',
        'metadata' => 'setMetadata',
        'external_id' => 'setExternalId',
        'show_location' => 'setShowLocation',
        'associated_channel_connection_i_ds' => 'setAssociatedChannelConnectionIDs',
        'associated_channel_connections' => 'setAssociatedChannelConnections',
        'listing_origin' => 'setListingOrigin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'time_zone_id' => 'getTimeZoneId',
        'metadata' => 'getMetadata',
        'external_id' => 'getExternalId',
        'show_location' => 'getShowLocation',
        'associated_channel_connection_i_ds' => 'getAssociatedChannelConnectionIDs',
        'associated_channel_connections' => 'getAssociatedChannelConnections',
        'listing_origin' => 'getListingOrigin'
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

    const LISTING_ORIGIN_OTHER = 'Other';
    const LISTING_ORIGIN_KIGO = 'Kigo';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getListingOriginAllowableValues()
    {
        return [
            self::LISTING_ORIGIN_OTHER,
            self::LISTING_ORIGIN_KIGO,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['time_zone_id'] = isset($data['time_zone_id']) ? $data['time_zone_id'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['show_location'] = isset($data['show_location']) ? $data['show_location'] : null;
        $this->container['associated_channel_connection_i_ds'] = isset($data['associated_channel_connection_i_ds']) ? $data['associated_channel_connection_i_ds'] : null;
        $this->container['associated_channel_connections'] = isset($data['associated_channel_connections']) ? $data['associated_channel_connections'] : null;
        $this->container['listing_origin'] = isset($data['listing_origin']) ? $data['listing_origin'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getListingOriginAllowableValues();
        if (!is_null($this->container['listing_origin']) && !in_array($this->container['listing_origin'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'listing_origin', must be one of '%s'",
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
     * @param int|null $id Listing ID
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets time_zone_id
     *
     * @return string|null
     */
    public function getTimeZoneId()
    {
        return $this->container['time_zone_id'];
    }

    /**
     * Sets time_zone_id
     *
     * @param string|null $time_zone_id Time Zone ID
     *
     * @return $this
     */
    public function setTimeZoneId($time_zone_id)
    {
        $this->container['time_zone_id'] = $time_zone_id;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata Metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets external_id
     *
     * @return string|null
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     *
     * @param string|null $external_id External ID
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets show_location
     *
     * @return bool|null
     */
    public function getShowLocation()
    {
        return $this->container['show_location'];
    }

    /**
     * Sets show_location
     *
     * @param bool|null $show_location Defines if the exact location of listings should be visible
     *
     * @return $this
     */
    public function setShowLocation($show_location)
    {
        $this->container['show_location'] = $show_location;

        return $this;
    }

    /**
     * Gets associated_channel_connection_i_ds
     *
     * @return int[]|null
     */
    public function getAssociatedChannelConnectionIDs()
    {
        return $this->container['associated_channel_connection_i_ds'];
    }

    /**
     * Sets associated_channel_connection_i_ds
     *
     * @param int[]|null $associated_channel_connection_i_ds Channel Connection IDs associated to the Listing
     *
     * @return $this
     */
    public function setAssociatedChannelConnectionIDs($associated_channel_connection_i_ds)
    {
        $this->container['associated_channel_connection_i_ds'] = $associated_channel_connection_i_ds;

        return $this;
    }

    /**
     * Gets associated_channel_connections
     *
     * @return \Piksel\KigoPro\Model\ChannelConnectionListing[]|null
     */
    public function getAssociatedChannelConnections()
    {
        return $this->container['associated_channel_connections'];
    }

    /**
     * Sets associated_channel_connections
     *
     * @param \Piksel\KigoPro\Model\ChannelConnectionListing[]|null $associated_channel_connections associated_channel_connections
     *
     * @return $this
     */
    public function setAssociatedChannelConnections($associated_channel_connections)
    {
        $this->container['associated_channel_connections'] = $associated_channel_connections;

        return $this;
    }

    /**
     * Gets listing_origin
     *
     * @return string|null
     */
    public function getListingOrigin()
    {
        return $this->container['listing_origin'];
    }

    /**
     * Sets listing_origin
     *
     * @param string|null $listing_origin Tells from where the Listing will be created and managed
     *
     * @return $this
     */
    public function setListingOrigin($listing_origin)
    {
        $allowedValues = $this->getListingOriginAllowableValues();
        if (!is_null($listing_origin) && !in_array($listing_origin, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'listing_origin', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['listing_origin'] = $listing_origin;

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


