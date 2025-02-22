<?php
/**
 * RescheduleAppointmentRequest.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders.
 *
 * OpenAPI spec version: v1
 */

namespace Plenty\AmazonSellingPartnerAPI\Models\Services;

use ArrayAccess;
use Plenty\AmazonSellingPartnerAPI\Models\ModelInterface;
use Plenty\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * RescheduleAppointmentRequest Class Doc Comment.
 *

 * @description Input for rescheduled appointment operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class RescheduleAppointmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'RescheduleAppointmentRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'appointment_time' => '\Plenty\AmazonSellingPartnerAPI\Models\Services\AppointmentTimeInput',
'reschedule_reason_code' => '\Plenty\AmazonSellingPartnerAPI\Models\Services\RescheduleReasonCode',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'appointment_time' => null,
'reschedule_reason_code' => null,    ];

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
        'appointment_time' => 'appointmentTime',
'reschedule_reason_code' => 'rescheduleReasonCode',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'appointment_time' => 'setAppointmentTime',
'reschedule_reason_code' => 'setRescheduleReasonCode',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'appointment_time' => 'getAppointmentTime',
'reschedule_reason_code' => 'getRescheduleReasonCode',    ];

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
        $this->container['appointment_time'] = isset($data['appointment_time']) ? $data['appointment_time'] : null;
        $this->container['reschedule_reason_code'] = isset($data['reschedule_reason_code']) ? $data['reschedule_reason_code'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['appointment_time']) {
            $invalidProperties[] = "'appointment_time' can't be null";
        }
        if (null === $this->container['reschedule_reason_code']) {
            $invalidProperties[] = "'reschedule_reason_code' can't be null";
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
     * Gets appointment_time.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\Services\AppointmentTimeInput
     */
    public function getAppointmentTime()
    {
        return $this->container['appointment_time'];
    }

    /**
     * Sets appointment_time.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\Services\AppointmentTimeInput $appointment_time appointment_time
     *
     * @return $this
     */
    public function setAppointmentTime($appointment_time)
    {
        $this->container['appointment_time'] = $appointment_time;

        return $this;
    }

    /**
     * Gets reschedule_reason_code.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\Services\RescheduleReasonCode
     */
    public function getRescheduleReasonCode()
    {
        return $this->container['reschedule_reason_code'];
    }

    /**
     * Sets reschedule_reason_code.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\Services\RescheduleReasonCode $reschedule_reason_code reschedule_reason_code
     *
     * @return $this
     */
    public function setRescheduleReasonCode($reschedule_reason_code)
    {
        $this->container['reschedule_reason_code'] = $reschedule_reason_code;

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
