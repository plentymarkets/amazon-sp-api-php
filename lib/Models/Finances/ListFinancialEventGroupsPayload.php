<?php
/**
 * ListFinancialEventGroupsPayload.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * OpenAPI spec version: v0
 */

namespace Plenty\AmazonSellingPartnerAPI\Models\Finances;

use ArrayAccess;
use Plenty\AmazonSellingPartnerAPI\Models\ModelInterface;
use Plenty\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * ListFinancialEventGroupsPayload Class Doc Comment.
 *

 * @description The payload for the listFinancialEventGroups operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ListFinancialEventGroupsPayload implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ListFinancialEventGroupsPayload';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'next_token' => 'string',
'financial_event_group_list' => '\Plenty\AmazonSellingPartnerAPI\Models\Finances\FinancialEventGroupList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'next_token' => null,
'financial_event_group_list' => null,    ];

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
        'next_token' => 'NextToken',
'financial_event_group_list' => 'FinancialEventGroupList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'next_token' => 'setNextToken',
'financial_event_group_list' => 'setFinancialEventGroupList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'next_token' => 'getNextToken',
'financial_event_group_list' => 'getFinancialEventGroupList',    ];

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
        $this->container['next_token'] = isset($data['next_token']) ? $data['next_token'] : null;
        $this->container['financial_event_group_list'] = isset($data['financial_event_group_list']) ? $data['financial_event_group_list'] : null;
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
     * Gets next_token.
     *
     * @return string
     */
    public function getNextToken()
    {
        return $this->container['next_token'];
    }

    /**
     * Sets next_token.
     *
     * @param string $next_token when present and not empty, pass this string token in the next request to return the next response page
     *
     * @return $this
     */
    public function setNextToken($next_token)
    {
        $this->container['next_token'] = $next_token;

        return $this;
    }

    /**
     * Gets financial_event_group_list.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\Finances\FinancialEventGroupList
     */
    public function getFinancialEventGroupList()
    {
        return $this->container['financial_event_group_list'];
    }

    /**
     * Sets financial_event_group_list.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\Finances\FinancialEventGroupList $financial_event_group_list financial_event_group_list
     *
     * @return $this
     */
    public function setFinancialEventGroupList($financial_event_group_list)
    {
        $this->container['financial_event_group_list'] = $financial_event_group_list;

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
