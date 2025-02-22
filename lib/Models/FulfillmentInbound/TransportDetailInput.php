<?php
/**
 * TransportDetailInput.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

use ArrayAccess;
use Plenty\AmazonSellingPartnerAPI\Models\ModelInterface;
use Plenty\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * TransportDetailInput Class Doc Comment.
 *

 * @description Information required to create an Amazon-partnered carrier shipping estimate, or to alert the Amazon fulfillment center to the arrival of an inbound shipment by a non-Amazon-partnered carrier.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class TransportDetailInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'TransportDetailInput';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'partnered_small_parcel_data' => '\Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredSmallParcelDataInput',
'non_partnered_small_parcel_data' => '\Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\NonPartneredSmallParcelDataInput',
'partnered_ltl_data' => '\Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredLtlDataInput',
'non_partnered_ltl_data' => '\Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\NonPartneredLtlDataInput',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'partnered_small_parcel_data' => null,
'non_partnered_small_parcel_data' => null,
'partnered_ltl_data' => null,
'non_partnered_ltl_data' => null,    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'partnered_small_parcel_data' => 'PartneredSmallParcelData',
'non_partnered_small_parcel_data' => 'NonPartneredSmallParcelData',
'partnered_ltl_data' => 'PartneredLtlData',
'non_partnered_ltl_data' => 'NonPartneredLtlData',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'partnered_small_parcel_data' => 'setPartneredSmallParcelData',
'non_partnered_small_parcel_data' => 'setNonPartneredSmallParcelData',
'partnered_ltl_data' => 'setPartneredLtlData',
'non_partnered_ltl_data' => 'setNonPartneredLtlData',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'partnered_small_parcel_data' => 'getPartneredSmallParcelData',
'non_partnered_small_parcel_data' => 'getNonPartneredSmallParcelData',
'partnered_ltl_data' => 'getPartneredLtlData',
'non_partnered_ltl_data' => 'getNonPartneredLtlData',    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['partnered_small_parcel_data'] = isset($data['partnered_small_parcel_data']) ? $data['partnered_small_parcel_data'] : null;
        $this->container['non_partnered_small_parcel_data'] = isset($data['non_partnered_small_parcel_data']) ? $data['non_partnered_small_parcel_data'] : null;
        $this->container['partnered_ltl_data'] = isset($data['partnered_ltl_data']) ? $data['partnered_ltl_data'] : null;
        $this->container['non_partnered_ltl_data'] = isset($data['non_partnered_ltl_data']) ? $data['non_partnered_ltl_data'] : null;
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
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets partnered_small_parcel_data.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredSmallParcelDataInput
     */
    public function getPartneredSmallParcelData()
    {
        return $this->container['partnered_small_parcel_data'];
    }

    /**
     * Sets partnered_small_parcel_data.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredSmallParcelDataInput $partnered_small_parcel_data partnered_small_parcel_data
     *
     * @return $this
     */
    public function setPartneredSmallParcelData($partnered_small_parcel_data)
    {
        $this->container['partnered_small_parcel_data'] = $partnered_small_parcel_data;

        return $this;
    }

    /**
     * Gets non_partnered_small_parcel_data.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\NonPartneredSmallParcelDataInput
     */
    public function getNonPartneredSmallParcelData()
    {
        return $this->container['non_partnered_small_parcel_data'];
    }

    /**
     * Sets non_partnered_small_parcel_data.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\NonPartneredSmallParcelDataInput $non_partnered_small_parcel_data non_partnered_small_parcel_data
     *
     * @return $this
     */
    public function setNonPartneredSmallParcelData($non_partnered_small_parcel_data)
    {
        $this->container['non_partnered_small_parcel_data'] = $non_partnered_small_parcel_data;

        return $this;
    }

    /**
     * Gets partnered_ltl_data.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredLtlDataInput
     */
    public function getPartneredLtlData()
    {
        return $this->container['partnered_ltl_data'];
    }

    /**
     * Sets partnered_ltl_data.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredLtlDataInput $partnered_ltl_data partnered_ltl_data
     *
     * @return $this
     */
    public function setPartneredLtlData($partnered_ltl_data)
    {
        $this->container['partnered_ltl_data'] = $partnered_ltl_data;

        return $this;
    }

    /**
     * Gets non_partnered_ltl_data.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\NonPartneredLtlDataInput
     */
    public function getNonPartneredLtlData()
    {
        return $this->container['non_partnered_ltl_data'];
    }

    /**
     * Sets non_partnered_ltl_data.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\NonPartneredLtlDataInput $non_partnered_ltl_data non_partnered_ltl_data
     *
     * @return $this
     */
    public function setNonPartneredLtlData($non_partnered_ltl_data)
    {
        $this->container['non_partnered_ltl_data'] = $non_partnered_ltl_data;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
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
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
