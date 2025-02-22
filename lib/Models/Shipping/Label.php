<?php
/**
 * Label.
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
 * Label Class Doc Comment.
 *

 * @description The label details of the container.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Label implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Label';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'label_stream' => '\Plenty\AmazonSellingPartnerAPI\Models\Shipping\LabelStream',
'label_specification' => '\Plenty\AmazonSellingPartnerAPI\Models\Shipping\LabelSpecification',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'label_stream' => null,
'label_specification' => null,    ];

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
        'label_stream' => 'labelStream',
'label_specification' => 'labelSpecification',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'label_stream' => 'setLabelStream',
'label_specification' => 'setLabelSpecification',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'label_stream' => 'getLabelStream',
'label_specification' => 'getLabelSpecification',    ];

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
        $this->container['label_stream'] = isset($data['label_stream']) ? $data['label_stream'] : null;
        $this->container['label_specification'] = isset($data['label_specification']) ? $data['label_specification'] : null;
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
     * Gets label_stream.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\Shipping\LabelStream
     */
    public function getLabelStream()
    {
        return $this->container['label_stream'];
    }

    /**
     * Sets label_stream.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\Shipping\LabelStream $label_stream label_stream
     *
     * @return $this
     */
    public function setLabelStream($label_stream)
    {
        $this->container['label_stream'] = $label_stream;

        return $this;
    }

    /**
     * Gets label_specification.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\Shipping\LabelSpecification
     */
    public function getLabelSpecification()
    {
        return $this->container['label_specification'];
    }

    /**
     * Sets label_specification.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\Shipping\LabelSpecification $label_specification label_specification
     *
     * @return $this
     */
    public function setLabelSpecification($label_specification)
    {
        $this->container['label_specification'] = $label_specification;

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
