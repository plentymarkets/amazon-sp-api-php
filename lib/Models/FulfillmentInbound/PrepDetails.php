<?php
/**
 * PrepDetails.
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
 * PrepDetails Class Doc Comment.
 *

 * @description Preparation instructions and who is responsible for the preparation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PrepDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PrepDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'prep_instruction' => '\Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepInstruction',
'prep_owner' => '\Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepOwner',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'prep_instruction' => null,
'prep_owner' => null,    ];

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
        'prep_instruction' => 'PrepInstruction',
'prep_owner' => 'PrepOwner',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'prep_instruction' => 'setPrepInstruction',
'prep_owner' => 'setPrepOwner',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'prep_instruction' => 'getPrepInstruction',
'prep_owner' => 'getPrepOwner',    ];

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
        $this->container['prep_instruction'] = isset($data['prep_instruction']) ? $data['prep_instruction'] : null;
        $this->container['prep_owner'] = isset($data['prep_owner']) ? $data['prep_owner'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['prep_instruction']) {
            $invalidProperties[] = "'prep_instruction' can't be null";
        }
        if (null === $this->container['prep_owner']) {
            $invalidProperties[] = "'prep_owner' can't be null";
        }

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
     * Gets prep_instruction.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepInstruction
     */
    public function getPrepInstruction()
    {
        return $this->container['prep_instruction'];
    }

    /**
     * Sets prep_instruction.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepInstruction $prep_instruction prep_instruction
     *
     * @return $this
     */
    public function setPrepInstruction($prep_instruction)
    {
        $this->container['prep_instruction'] = $prep_instruction;

        return $this;
    }

    /**
     * Gets prep_owner.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepOwner
     */
    public function getPrepOwner()
    {
        return $this->container['prep_owner'];
    }

    /**
     * Sets prep_owner.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepOwner $prep_owner prep_owner
     *
     * @return $this
     */
    public function setPrepOwner($prep_owner)
    {
        $this->container['prep_owner'] = $prep_owner;

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
