<?php
/**
 * CreateReportScheduleSpecification.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Reports.
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * OpenAPI spec version: 2020-09-04
 */

namespace Plenty\AmazonSellingPartnerAPI\Models\Reports;

use ArrayAccess;
use Plenty\AmazonSellingPartnerAPI\Models\ModelInterface;
use Plenty\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * CreateReportScheduleSpecification Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CreateReportScheduleSpecification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'CreateReportScheduleSpecification';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'report_type' => 'string',
'marketplace_ids' => 'string[]',
'report_options' => '\Plenty\AmazonSellingPartnerAPI\Models\Reports\ReportOptions',
'period' => 'string',
'next_report_creation_time' => '\DateTime',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'report_type' => null,
'marketplace_ids' => null,
'report_options' => null,
'period' => null,
'next_report_creation_time' => 'date-time',    ];

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
        'report_type' => 'reportType',
'marketplace_ids' => 'marketplaceIds',
'report_options' => 'reportOptions',
'period' => 'period',
'next_report_creation_time' => 'nextReportCreationTime',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'report_type' => 'setReportType',
'marketplace_ids' => 'setMarketplaceIds',
'report_options' => 'setReportOptions',
'period' => 'setPeriod',
'next_report_creation_time' => 'setNextReportCreationTime',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'report_type' => 'getReportType',
'marketplace_ids' => 'getMarketplaceIds',
'report_options' => 'getReportOptions',
'period' => 'getPeriod',
'next_report_creation_time' => 'getNextReportCreationTime',    ];

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

    const PERIOD_PT5_M = 'PT5M';
    const PERIOD_PT15_M = 'PT15M';
    const PERIOD_PT30_M = 'PT30M';
    const PERIOD_PT1_H = 'PT1H';
    const PERIOD_PT2_H = 'PT2H';
    const PERIOD_PT4_H = 'PT4H';
    const PERIOD_PT8_H = 'PT8H';
    const PERIOD_PT12_H = 'PT12H';
    const PERIOD_P1_D = 'P1D';
    const PERIOD_P2_D = 'P2D';
    const PERIOD_P3_D = 'P3D';
    const PERIOD_PT84_H = 'PT84H';
    const PERIOD_P7_D = 'P7D';
    const PERIOD_P14_D = 'P14D';
    const PERIOD_P15_D = 'P15D';
    const PERIOD_P18_D = 'P18D';
    const PERIOD_P30_D = 'P30D';
    const PERIOD_P1_M = 'P1M';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getPeriodAllowableValues()
    {
        return [
            self::PERIOD_PT5_M,
self::PERIOD_PT15_M,
self::PERIOD_PT30_M,
self::PERIOD_PT1_H,
self::PERIOD_PT2_H,
self::PERIOD_PT4_H,
self::PERIOD_PT8_H,
self::PERIOD_PT12_H,
self::PERIOD_P1_D,
self::PERIOD_P2_D,
self::PERIOD_P3_D,
self::PERIOD_PT84_H,
self::PERIOD_P7_D,
self::PERIOD_P14_D,
self::PERIOD_P15_D,
self::PERIOD_P18_D,
self::PERIOD_P30_D,
self::PERIOD_P1_M,        ];
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
        $this->container['report_type'] = isset($data['report_type']) ? $data['report_type'] : null;
        $this->container['marketplace_ids'] = isset($data['marketplace_ids']) ? $data['marketplace_ids'] : null;
        $this->container['report_options'] = isset($data['report_options']) ? $data['report_options'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['next_report_creation_time'] = isset($data['next_report_creation_time']) ? $data['next_report_creation_time'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['report_type']) {
            $invalidProperties[] = "'report_type' can't be null";
        }
        if (null === $this->container['marketplace_ids']) {
            $invalidProperties[] = "'marketplace_ids' can't be null";
        }
        if (null === $this->container['period']) {
            $invalidProperties[] = "'period' can't be null";
        }
        $allowedValues = $this->getPeriodAllowableValues();
        if (!is_null($this->container['period']) && !in_array($this->container['period'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'period', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets report_type.
     *
     * @return string
     */
    public function getReportType()
    {
        return $this->container['report_type'];
    }

    /**
     * Sets report_type.
     *
     * @param string $report_type the report type
     *
     * @return $this
     */
    public function setReportType($report_type)
    {
        $this->container['report_type'] = $report_type;

        return $this;
    }

    /**
     * Gets marketplace_ids.
     *
     * @return string[]
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids.
     *
     * @param string[] $marketplace_ids a list of marketplace identifiers for the report schedule
     *
     * @return $this
     */
    public function setMarketplaceIds($marketplace_ids)
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets report_options.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\Reports\ReportOptions
     */
    public function getReportOptions()
    {
        return $this->container['report_options'];
    }

    /**
     * Sets report_options.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\Reports\ReportOptions $report_options report_options
     *
     * @return $this
     */
    public function setReportOptions($report_options)
    {
        $this->container['report_options'] = $report_options;

        return $this;
    }

    /**
     * Gets period.
     *
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period.
     *
     * @param string $period one of a set of predefined ISO 8601 periods that specifies how often a report should be created
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $allowedValues = $this->getPeriodAllowableValues();
        if (!in_array($period, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'period', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets next_report_creation_time.
     *
     * @return \DateTime
     */
    public function getNextReportCreationTime()
    {
        return $this->container['next_report_creation_time'];
    }

    /**
     * Sets next_report_creation_time.
     *
     * @param \DateTime $next_report_creation_time the date and time when the schedule will create its next report, in ISO 8601 date time format
     *
     * @return $this
     */
    public function setNextReportCreationTime($next_report_creation_time)
    {
        $this->container['next_report_creation_time'] = $next_report_creation_time;

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
