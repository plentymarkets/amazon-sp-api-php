<?php
/**
 * ShippingPromiseSet.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.
 *
 * OpenAPI spec version: v1
 */

namespace Plenty\AmazonSellingPartnerAPI\Models\Shipping;

use ArrayAccess;
use Plenty\AmazonSellingPartnerAPI\Models\ModelInterface;
use Plenty\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * ShippingPromiseSet Class Doc Comment.
 *

 * @description The promised delivery time and pickup time.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ShippingPromiseSet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ShippingPromiseSet';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'delivery_window' => '\Plenty\AmazonSellingPartnerAPI\Models\Shipping\TimeRange',
'receive_window' => '\Plenty\AmazonSellingPartnerAPI\Models\Shipping\TimeRange',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'delivery_window' => null,
'receive_window' => null,    ];

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
        'delivery_window' => 'deliveryWindow',
'receive_window' => 'receiveWindow',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_window' => 'setDeliveryWindow',
'receive_window' => 'setReceiveWindow',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_window' => 'getDeliveryWindow',
'receive_window' => 'getReceiveWindow',    ];

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
        $this->container['delivery_window'] = isset($data['delivery_window']) ? $data['delivery_window'] : null;
        $this->container['receive_window'] = isset($data['receive_window']) ? $data['receive_window'] : null;
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
     * Gets delivery_window.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\Shipping\TimeRange
     */
    public function getDeliveryWindow()
    {
        return $this->container['delivery_window'];
    }

    /**
     * Sets delivery_window.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\Shipping\TimeRange $delivery_window delivery_window
     *
     * @return $this
     */
    public function setDeliveryWindow($delivery_window)
    {
        $this->container['delivery_window'] = $delivery_window;

        return $this;
    }

    /**
     * Gets receive_window.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\Shipping\TimeRange
     */
    public function getReceiveWindow()
    {
        return $this->container['receive_window'];
    }

    /**
     * Sets receive_window.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\Shipping\TimeRange $receive_window receive_window
     *
     * @return $this
     */
    public function setReceiveWindow($receive_window)
    {
        $this->container['receive_window'] = $receive_window;

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
