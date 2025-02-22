<?php
/**
 * ShippingOfferingFilter.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * OpenAPI spec version: v0
 */

namespace Plenty\AmazonSellingPartnerAPI\Models\MerchantFulfillment;

use ArrayAccess;
use Plenty\AmazonSellingPartnerAPI\Models\ModelInterface;
use Plenty\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * ShippingOfferingFilter Class Doc Comment.
 *

 * @description Filter for use when requesting eligible shipping services.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ShippingOfferingFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ShippingOfferingFilter';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'include_packing_slip_with_label' => 'bool',
'include_complex_shipping_options' => 'bool',
'carrier_will_pick_up' => '\Plenty\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CarrierWillPickUpOption',
'delivery_experience' => '\Plenty\AmazonSellingPartnerAPI\Models\MerchantFulfillment\DeliveryExperienceOption',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'include_packing_slip_with_label' => null,
'include_complex_shipping_options' => null,
'carrier_will_pick_up' => null,
'delivery_experience' => null,    ];

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
        'include_packing_slip_with_label' => 'IncludePackingSlipWithLabel',
'include_complex_shipping_options' => 'IncludeComplexShippingOptions',
'carrier_will_pick_up' => 'CarrierWillPickUp',
'delivery_experience' => 'DeliveryExperience',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'include_packing_slip_with_label' => 'setIncludePackingSlipWithLabel',
'include_complex_shipping_options' => 'setIncludeComplexShippingOptions',
'carrier_will_pick_up' => 'setCarrierWillPickUp',
'delivery_experience' => 'setDeliveryExperience',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'include_packing_slip_with_label' => 'getIncludePackingSlipWithLabel',
'include_complex_shipping_options' => 'getIncludeComplexShippingOptions',
'carrier_will_pick_up' => 'getCarrierWillPickUp',
'delivery_experience' => 'getDeliveryExperience',    ];

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
        $this->container['include_packing_slip_with_label'] = isset($data['include_packing_slip_with_label']) ? $data['include_packing_slip_with_label'] : null;
        $this->container['include_complex_shipping_options'] = isset($data['include_complex_shipping_options']) ? $data['include_complex_shipping_options'] : null;
        $this->container['carrier_will_pick_up'] = isset($data['carrier_will_pick_up']) ? $data['carrier_will_pick_up'] : null;
        $this->container['delivery_experience'] = isset($data['delivery_experience']) ? $data['delivery_experience'] : null;
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
     * Gets include_packing_slip_with_label.
     *
     * @return bool
     */
    public function getIncludePackingSlipWithLabel()
    {
        return $this->container['include_packing_slip_with_label'];
    }

    /**
     * Sets include_packing_slip_with_label.
     *
     * @param bool $include_packing_slip_with_label when true, include a packing slip with the label
     *
     * @return $this
     */
    public function setIncludePackingSlipWithLabel($include_packing_slip_with_label)
    {
        $this->container['include_packing_slip_with_label'] = $include_packing_slip_with_label;

        return $this;
    }

    /**
     * Gets include_complex_shipping_options.
     *
     * @return bool
     */
    public function getIncludeComplexShippingOptions()
    {
        return $this->container['include_complex_shipping_options'];
    }

    /**
     * Sets include_complex_shipping_options.
     *
     * @param bool $include_complex_shipping_options when true, include complex shipping options
     *
     * @return $this
     */
    public function setIncludeComplexShippingOptions($include_complex_shipping_options)
    {
        $this->container['include_complex_shipping_options'] = $include_complex_shipping_options;

        return $this;
    }

    /**
     * Gets carrier_will_pick_up.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CarrierWillPickUpOption
     */
    public function getCarrierWillPickUp()
    {
        return $this->container['carrier_will_pick_up'];
    }

    /**
     * Sets carrier_will_pick_up.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CarrierWillPickUpOption $carrier_will_pick_up carrier_will_pick_up
     *
     * @return $this
     */
    public function setCarrierWillPickUp($carrier_will_pick_up)
    {
        $this->container['carrier_will_pick_up'] = $carrier_will_pick_up;

        return $this;
    }

    /**
     * Gets delivery_experience.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\MerchantFulfillment\DeliveryExperienceOption
     */
    public function getDeliveryExperience()
    {
        return $this->container['delivery_experience'];
    }

    /**
     * Sets delivery_experience.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\MerchantFulfillment\DeliveryExperienceOption $delivery_experience delivery_experience
     *
     * @return $this
     */
    public function setDeliveryExperience($delivery_experience)
    {
        $this->container['delivery_experience'] = $delivery_experience;

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
