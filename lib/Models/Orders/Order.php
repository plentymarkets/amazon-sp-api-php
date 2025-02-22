<?php
/**
 * Order.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * OpenAPI spec version: v0
 */

namespace Plenty\AmazonSellingPartnerAPI\Models\Orders;

use ArrayAccess;
use Plenty\AmazonSellingPartnerAPI\Models\ModelInterface;
use Plenty\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * Order Class Doc Comment.
 *

 * @description Order information.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Order';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'amazon_order_id' => 'string',
'seller_order_id' => 'string',
'purchase_date' => 'string',
'last_update_date' => 'string',
'order_status' => 'string',
'fulfillment_channel' => 'string',
'sales_channel' => 'string',
'order_channel' => 'string',
'ship_service_level' => 'string',
'order_total' => '\Plenty\AmazonSellingPartnerAPI\Models\Orders\Money',
'number_of_items_shipped' => 'int',
'number_of_items_unshipped' => 'int',
'payment_execution_detail' => '\Plenty\AmazonSellingPartnerAPI\Models\Orders\PaymentExecutionDetailItemList',
'payment_method' => 'string',
'payment_method_details' => '\Plenty\AmazonSellingPartnerAPI\Models\Orders\PaymentMethodDetailItemList',
'marketplace_id' => 'string',
'shipment_service_level_category' => 'string',
'easy_ship_shipment_status' => 'string',
'cba_displayable_shipping_label' => 'string',
'order_type' => 'string',
'earliest_ship_date' => 'string',
'latest_ship_date' => 'string',
'earliest_delivery_date' => 'string',
'latest_delivery_date' => 'string',
'is_business_order' => 'bool',
'is_prime' => 'bool',
'is_premium_order' => 'bool',
'is_global_express_enabled' => 'bool',
'replaced_order_id' => 'string',
'is_replacement_order' => 'bool',
'promise_response_due_date' => 'string',
'is_estimated_ship_date_set' => 'bool',
'is_sold_by_ab' => 'bool',
'assigned_ship_from_location_address' => '\Plenty\AmazonSellingPartnerAPI\Models\Orders\Address',
'fulfillment_instruction' => '\Plenty\AmazonSellingPartnerAPI\Models\Orders\FulfillmentInstruction',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'amazon_order_id' => null,
'seller_order_id' => null,
'purchase_date' => null,
'last_update_date' => null,
'order_status' => null,
'fulfillment_channel' => null,
'sales_channel' => null,
'order_channel' => null,
'ship_service_level' => null,
'order_total' => null,
'number_of_items_shipped' => null,
'number_of_items_unshipped' => null,
'payment_execution_detail' => null,
'payment_method' => null,
'payment_method_details' => null,
'marketplace_id' => null,
'shipment_service_level_category' => null,
'easy_ship_shipment_status' => null,
'cba_displayable_shipping_label' => null,
'order_type' => null,
'earliest_ship_date' => null,
'latest_ship_date' => null,
'earliest_delivery_date' => null,
'latest_delivery_date' => null,
'is_business_order' => null,
'is_prime' => null,
'is_premium_order' => null,
'is_global_express_enabled' => null,
'replaced_order_id' => null,
'is_replacement_order' => null,
'promise_response_due_date' => null,
'is_estimated_ship_date_set' => null,
'is_sold_by_ab' => null,
'assigned_ship_from_location_address' => null,
'fulfillment_instruction' => null,    ];

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
        'amazon_order_id' => 'AmazonOrderId',
'seller_order_id' => 'SellerOrderId',
'purchase_date' => 'PurchaseDate',
'last_update_date' => 'LastUpdateDate',
'order_status' => 'OrderStatus',
'fulfillment_channel' => 'FulfillmentChannel',
'sales_channel' => 'SalesChannel',
'order_channel' => 'OrderChannel',
'ship_service_level' => 'ShipServiceLevel',
'order_total' => 'OrderTotal',
'number_of_items_shipped' => 'NumberOfItemsShipped',
'number_of_items_unshipped' => 'NumberOfItemsUnshipped',
'payment_execution_detail' => 'PaymentExecutionDetail',
'payment_method' => 'PaymentMethod',
'payment_method_details' => 'PaymentMethodDetails',
'marketplace_id' => 'MarketplaceId',
'shipment_service_level_category' => 'ShipmentServiceLevelCategory',
'easy_ship_shipment_status' => 'EasyShipShipmentStatus',
'cba_displayable_shipping_label' => 'CbaDisplayableShippingLabel',
'order_type' => 'OrderType',
'earliest_ship_date' => 'EarliestShipDate',
'latest_ship_date' => 'LatestShipDate',
'earliest_delivery_date' => 'EarliestDeliveryDate',
'latest_delivery_date' => 'LatestDeliveryDate',
'is_business_order' => 'IsBusinessOrder',
'is_prime' => 'IsPrime',
'is_premium_order' => 'IsPremiumOrder',
'is_global_express_enabled' => 'IsGlobalExpressEnabled',
'replaced_order_id' => 'ReplacedOrderId',
'is_replacement_order' => 'IsReplacementOrder',
'promise_response_due_date' => 'PromiseResponseDueDate',
'is_estimated_ship_date_set' => 'IsEstimatedShipDateSet',
'is_sold_by_ab' => 'IsSoldByAB',
'assigned_ship_from_location_address' => 'AssignedShipFromLocationAddress',
'fulfillment_instruction' => 'FulfillmentInstruction',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
'seller_order_id' => 'setSellerOrderId',
'purchase_date' => 'setPurchaseDate',
'last_update_date' => 'setLastUpdateDate',
'order_status' => 'setOrderStatus',
'fulfillment_channel' => 'setFulfillmentChannel',
'sales_channel' => 'setSalesChannel',
'order_channel' => 'setOrderChannel',
'ship_service_level' => 'setShipServiceLevel',
'order_total' => 'setOrderTotal',
'number_of_items_shipped' => 'setNumberOfItemsShipped',
'number_of_items_unshipped' => 'setNumberOfItemsUnshipped',
'payment_execution_detail' => 'setPaymentExecutionDetail',
'payment_method' => 'setPaymentMethod',
'payment_method_details' => 'setPaymentMethodDetails',
'marketplace_id' => 'setMarketplaceId',
'shipment_service_level_category' => 'setShipmentServiceLevelCategory',
'easy_ship_shipment_status' => 'setEasyShipShipmentStatus',
'cba_displayable_shipping_label' => 'setCbaDisplayableShippingLabel',
'order_type' => 'setOrderType',
'earliest_ship_date' => 'setEarliestShipDate',
'latest_ship_date' => 'setLatestShipDate',
'earliest_delivery_date' => 'setEarliestDeliveryDate',
'latest_delivery_date' => 'setLatestDeliveryDate',
'is_business_order' => 'setIsBusinessOrder',
'is_prime' => 'setIsPrime',
'is_premium_order' => 'setIsPremiumOrder',
'is_global_express_enabled' => 'setIsGlobalExpressEnabled',
'replaced_order_id' => 'setReplacedOrderId',
'is_replacement_order' => 'setIsReplacementOrder',
'promise_response_due_date' => 'setPromiseResponseDueDate',
'is_estimated_ship_date_set' => 'setIsEstimatedShipDateSet',
'is_sold_by_ab' => 'setIsSoldByAb',
'assigned_ship_from_location_address' => 'setAssignedShipFromLocationAddress',
'fulfillment_instruction' => 'setFulfillmentInstruction',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
'seller_order_id' => 'getSellerOrderId',
'purchase_date' => 'getPurchaseDate',
'last_update_date' => 'getLastUpdateDate',
'order_status' => 'getOrderStatus',
'fulfillment_channel' => 'getFulfillmentChannel',
'sales_channel' => 'getSalesChannel',
'order_channel' => 'getOrderChannel',
'ship_service_level' => 'getShipServiceLevel',
'order_total' => 'getOrderTotal',
'number_of_items_shipped' => 'getNumberOfItemsShipped',
'number_of_items_unshipped' => 'getNumberOfItemsUnshipped',
'payment_execution_detail' => 'getPaymentExecutionDetail',
'payment_method' => 'getPaymentMethod',
'payment_method_details' => 'getPaymentMethodDetails',
'marketplace_id' => 'getMarketplaceId',
'shipment_service_level_category' => 'getShipmentServiceLevelCategory',
'easy_ship_shipment_status' => 'getEasyShipShipmentStatus',
'cba_displayable_shipping_label' => 'getCbaDisplayableShippingLabel',
'order_type' => 'getOrderType',
'earliest_ship_date' => 'getEarliestShipDate',
'latest_ship_date' => 'getLatestShipDate',
'earliest_delivery_date' => 'getEarliestDeliveryDate',
'latest_delivery_date' => 'getLatestDeliveryDate',
'is_business_order' => 'getIsBusinessOrder',
'is_prime' => 'getIsPrime',
'is_premium_order' => 'getIsPremiumOrder',
'is_global_express_enabled' => 'getIsGlobalExpressEnabled',
'replaced_order_id' => 'getReplacedOrderId',
'is_replacement_order' => 'getIsReplacementOrder',
'promise_response_due_date' => 'getPromiseResponseDueDate',
'is_estimated_ship_date_set' => 'getIsEstimatedShipDateSet',
'is_sold_by_ab' => 'getIsSoldByAb',
'assigned_ship_from_location_address' => 'getAssignedShipFromLocationAddress',
'fulfillment_instruction' => 'getFulfillmentInstruction',    ];

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

    const ORDER_STATUS_PENDING = 'Pending';
    const ORDER_STATUS_UNSHIPPED = 'Unshipped';
    const ORDER_STATUS_PARTIALLY_SHIPPED = 'PartiallyShipped';
    const ORDER_STATUS_SHIPPED = 'Shipped';
    const ORDER_STATUS_CANCELED = 'Canceled';
    const ORDER_STATUS_UNFULFILLABLE = 'Unfulfillable';
    const ORDER_STATUS_INVOICE_UNCONFIRMED = 'InvoiceUnconfirmed';
    const ORDER_STATUS_PENDING_AVAILABILITY = 'PendingAvailability';
    const FULFILLMENT_CHANNEL_MFN = 'MFN';
    const FULFILLMENT_CHANNEL_AFN = 'AFN';
    const PAYMENT_METHOD_COD = 'COD';
    const PAYMENT_METHOD_CVS = 'CVS';
    const PAYMENT_METHOD_OTHER = 'Other';
    const ORDER_TYPE_STANDARD_ORDER = 'StandardOrder';
    const ORDER_TYPE_LONG_LEAD_TIME_ORDER = 'LongLeadTimeOrder';
    const ORDER_TYPE_PREORDER = 'Preorder';
    const ORDER_TYPE_BACK_ORDER = 'BackOrder';
    const ORDER_TYPE_SOURCING_ON_DEMAND_ORDER = 'SourcingOnDemandOrder';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getOrderStatusAllowableValues()
    {
        return [
            self::ORDER_STATUS_PENDING,
self::ORDER_STATUS_UNSHIPPED,
self::ORDER_STATUS_PARTIALLY_SHIPPED,
self::ORDER_STATUS_SHIPPED,
self::ORDER_STATUS_CANCELED,
self::ORDER_STATUS_UNFULFILLABLE,
self::ORDER_STATUS_INVOICE_UNCONFIRMED,
self::ORDER_STATUS_PENDING_AVAILABILITY,        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getFulfillmentChannelAllowableValues()
    {
        return [
            self::FULFILLMENT_CHANNEL_MFN,
self::FULFILLMENT_CHANNEL_AFN,        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getPaymentMethodAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_COD,
self::PAYMENT_METHOD_CVS,
self::PAYMENT_METHOD_OTHER,        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getOrderTypeAllowableValues()
    {
        return [
            self::ORDER_TYPE_STANDARD_ORDER,
self::ORDER_TYPE_LONG_LEAD_TIME_ORDER,
self::ORDER_TYPE_PREORDER,
self::ORDER_TYPE_BACK_ORDER,
self::ORDER_TYPE_SOURCING_ON_DEMAND_ORDER,        ];
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
        $this->container['amazon_order_id'] = isset($data['amazon_order_id']) ? $data['amazon_order_id'] : null;
        $this->container['seller_order_id'] = isset($data['seller_order_id']) ? $data['seller_order_id'] : null;
        $this->container['purchase_date'] = isset($data['purchase_date']) ? $data['purchase_date'] : null;
        $this->container['last_update_date'] = isset($data['last_update_date']) ? $data['last_update_date'] : null;
        $this->container['order_status'] = isset($data['order_status']) ? $data['order_status'] : null;
        $this->container['fulfillment_channel'] = isset($data['fulfillment_channel']) ? $data['fulfillment_channel'] : null;
        $this->container['sales_channel'] = isset($data['sales_channel']) ? $data['sales_channel'] : null;
        $this->container['order_channel'] = isset($data['order_channel']) ? $data['order_channel'] : null;
        $this->container['ship_service_level'] = isset($data['ship_service_level']) ? $data['ship_service_level'] : null;
        $this->container['order_total'] = isset($data['order_total']) ? $data['order_total'] : null;
        $this->container['number_of_items_shipped'] = isset($data['number_of_items_shipped']) ? $data['number_of_items_shipped'] : null;
        $this->container['number_of_items_unshipped'] = isset($data['number_of_items_unshipped']) ? $data['number_of_items_unshipped'] : null;
        $this->container['payment_execution_detail'] = isset($data['payment_execution_detail']) ? $data['payment_execution_detail'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['payment_method_details'] = isset($data['payment_method_details']) ? $data['payment_method_details'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['shipment_service_level_category'] = isset($data['shipment_service_level_category']) ? $data['shipment_service_level_category'] : null;
        $this->container['easy_ship_shipment_status'] = isset($data['easy_ship_shipment_status']) ? $data['easy_ship_shipment_status'] : null;
        $this->container['cba_displayable_shipping_label'] = isset($data['cba_displayable_shipping_label']) ? $data['cba_displayable_shipping_label'] : null;
        $this->container['order_type'] = isset($data['order_type']) ? $data['order_type'] : null;
        $this->container['earliest_ship_date'] = isset($data['earliest_ship_date']) ? $data['earliest_ship_date'] : null;
        $this->container['latest_ship_date'] = isset($data['latest_ship_date']) ? $data['latest_ship_date'] : null;
        $this->container['earliest_delivery_date'] = isset($data['earliest_delivery_date']) ? $data['earliest_delivery_date'] : null;
        $this->container['latest_delivery_date'] = isset($data['latest_delivery_date']) ? $data['latest_delivery_date'] : null;
        $this->container['is_business_order'] = isset($data['is_business_order']) ? $data['is_business_order'] : null;
        $this->container['is_prime'] = isset($data['is_prime']) ? $data['is_prime'] : null;
        $this->container['is_premium_order'] = isset($data['is_premium_order']) ? $data['is_premium_order'] : null;
        $this->container['is_global_express_enabled'] = isset($data['is_global_express_enabled']) ? $data['is_global_express_enabled'] : null;
        $this->container['replaced_order_id'] = isset($data['replaced_order_id']) ? $data['replaced_order_id'] : null;
        $this->container['is_replacement_order'] = isset($data['is_replacement_order']) ? $data['is_replacement_order'] : null;
        $this->container['promise_response_due_date'] = isset($data['promise_response_due_date']) ? $data['promise_response_due_date'] : null;
        $this->container['is_estimated_ship_date_set'] = isset($data['is_estimated_ship_date_set']) ? $data['is_estimated_ship_date_set'] : null;
        $this->container['is_sold_by_ab'] = isset($data['is_sold_by_ab']) ? $data['is_sold_by_ab'] : null;
        $this->container['assigned_ship_from_location_address'] = isset($data['assigned_ship_from_location_address']) ? $data['assigned_ship_from_location_address'] : null;
        $this->container['fulfillment_instruction'] = isset($data['fulfillment_instruction']) ? $data['fulfillment_instruction'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['amazon_order_id']) {
            $invalidProperties[] = "'amazon_order_id' can't be null";
        }
        if (null === $this->container['purchase_date']) {
            $invalidProperties[] = "'purchase_date' can't be null";
        }
        if (null === $this->container['last_update_date']) {
            $invalidProperties[] = "'last_update_date' can't be null";
        }
        if (null === $this->container['order_status']) {
            $invalidProperties[] = "'order_status' can't be null";
        }
        $allowedValues = $this->getOrderStatusAllowableValues();
        if (!is_null($this->container['order_status']) && !in_array($this->container['order_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'order_status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFulfillmentChannelAllowableValues();
        if (!is_null($this->container['fulfillment_channel']) && !in_array($this->container['fulfillment_channel'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fulfillment_channel', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($this->container['payment_method']) && !in_array($this->container['payment_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!is_null($this->container['order_type']) && !in_array($this->container['order_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'order_type', must be one of '%s'",
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
     * Gets amazon_order_id.
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id.
     *
     * @param string $amazon_order_id an Amazon-defined order identifier, in 3-7-7 format
     *
     * @return $this
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets seller_order_id.
     *
     * @return string
     */
    public function getSellerOrderId()
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id.
     *
     * @param string $seller_order_id a seller-defined order identifier
     *
     * @return $this
     */
    public function setSellerOrderId($seller_order_id)
    {
        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }

    /**
     * Gets purchase_date.
     *
     * @return string
     */
    public function getPurchaseDate()
    {
        return $this->container['purchase_date'];
    }

    /**
     * Sets purchase_date.
     *
     * @param string $purchase_date the date when the order was created
     *
     * @return $this
     */
    public function setPurchaseDate($purchase_date)
    {
        $this->container['purchase_date'] = $purchase_date;

        return $this;
    }

    /**
     * Gets last_update_date.
     *
     * @return string
     */
    public function getLastUpdateDate()
    {
        return $this->container['last_update_date'];
    }

    /**
     * Sets last_update_date.
     *
     * @param string $last_update_date The date when the order was last updated.  Note: LastUpdateDate is returned with an incorrect date for orders that were last updated before 2009-04-01.
     *
     * @return $this
     */
    public function setLastUpdateDate($last_update_date)
    {
        $this->container['last_update_date'] = $last_update_date;

        return $this;
    }

    /**
     * Gets order_status.
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status.
     *
     * @param string $order_status the current order status
     *
     * @return $this
     */
    public function setOrderStatus($order_status)
    {
        $allowedValues = $this->getOrderStatusAllowableValues();
        if (!in_array($order_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'order_status', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['order_status'] = $order_status;

        return $this;
    }

    /**
     * Gets fulfillment_channel.
     *
     * @return string
     */
    public function getFulfillmentChannel()
    {
        return $this->container['fulfillment_channel'];
    }

    /**
     * Sets fulfillment_channel.
     *
     * @param string $fulfillment_channel whether the order was fulfilled by Amazon (AFN) or by the seller (MFN)
     *
     * @return $this
     */
    public function setFulfillmentChannel($fulfillment_channel)
    {
        $allowedValues = $this->getFulfillmentChannelAllowableValues();
        if (!is_null($fulfillment_channel) && !in_array($fulfillment_channel, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'fulfillment_channel', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['fulfillment_channel'] = $fulfillment_channel;

        return $this;
    }

    /**
     * Gets sales_channel.
     *
     * @return string
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel.
     *
     * @param string $sales_channel the sales channel of the first item in the order
     *
     * @return $this
     */
    public function setSalesChannel($sales_channel)
    {
        $this->container['sales_channel'] = $sales_channel;

        return $this;
    }

    /**
     * Gets order_channel.
     *
     * @return string
     */
    public function getOrderChannel()
    {
        return $this->container['order_channel'];
    }

    /**
     * Sets order_channel.
     *
     * @param string $order_channel the order channel of the first item in the order
     *
     * @return $this
     */
    public function setOrderChannel($order_channel)
    {
        $this->container['order_channel'] = $order_channel;

        return $this;
    }

    /**
     * Gets ship_service_level.
     *
     * @return string
     */
    public function getShipServiceLevel()
    {
        return $this->container['ship_service_level'];
    }

    /**
     * Sets ship_service_level.
     *
     * @param string $ship_service_level the shipment service level of the order
     *
     * @return $this
     */
    public function setShipServiceLevel($ship_service_level)
    {
        $this->container['ship_service_level'] = $ship_service_level;

        return $this;
    }

    /**
     * Gets order_total.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\Orders\Money
     */
    public function getOrderTotal()
    {
        return $this->container['order_total'];
    }

    /**
     * Sets order_total.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\Orders\Money $order_total order_total
     *
     * @return $this
     */
    public function setOrderTotal($order_total)
    {
        $this->container['order_total'] = $order_total;

        return $this;
    }

    /**
     * Gets number_of_items_shipped.
     *
     * @return int
     */
    public function getNumberOfItemsShipped()
    {
        return $this->container['number_of_items_shipped'];
    }

    /**
     * Sets number_of_items_shipped.
     *
     * @param int $number_of_items_shipped the number of items shipped
     *
     * @return $this
     */
    public function setNumberOfItemsShipped($number_of_items_shipped)
    {
        $this->container['number_of_items_shipped'] = $number_of_items_shipped;

        return $this;
    }

    /**
     * Gets number_of_items_unshipped.
     *
     * @return int
     */
    public function getNumberOfItemsUnshipped()
    {
        return $this->container['number_of_items_unshipped'];
    }

    /**
     * Sets number_of_items_unshipped.
     *
     * @param int $number_of_items_unshipped the number of items unshipped
     *
     * @return $this
     */
    public function setNumberOfItemsUnshipped($number_of_items_unshipped)
    {
        $this->container['number_of_items_unshipped'] = $number_of_items_unshipped;

        return $this;
    }

    /**
     * Gets payment_execution_detail.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\Orders\PaymentExecutionDetailItemList
     */
    public function getPaymentExecutionDetail()
    {
        return $this->container['payment_execution_detail'];
    }

    /**
     * Sets payment_execution_detail.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\Orders\PaymentExecutionDetailItemList $payment_execution_detail payment_execution_detail
     *
     * @return $this
     */
    public function setPaymentExecutionDetail($payment_execution_detail)
    {
        $this->container['payment_execution_detail'] = $payment_execution_detail;

        return $this;
    }

    /**
     * Gets payment_method.
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method.
     *
     * @param string $payment_method The payment method for the order. This property is limited to Cash On Delivery (COD) and Convenience Store (CVS) payment methods. Unless you need the specific COD payment information provided by the PaymentExecutionDetailItem object, we recommend using the PaymentMethodDetails property to get payment method information.
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($payment_method) && !in_array($payment_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'payment_method', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_method_details.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\Orders\PaymentMethodDetailItemList
     */
    public function getPaymentMethodDetails()
    {
        return $this->container['payment_method_details'];
    }

    /**
     * Sets payment_method_details.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\Orders\PaymentMethodDetailItemList $payment_method_details payment_method_details
     *
     * @return $this
     */
    public function setPaymentMethodDetails($payment_method_details)
    {
        $this->container['payment_method_details'] = $payment_method_details;

        return $this;
    }

    /**
     * Gets marketplace_id.
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id the identifier for the marketplace where the order was placed
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets shipment_service_level_category.
     *
     * @return string
     */
    public function getShipmentServiceLevelCategory()
    {
        return $this->container['shipment_service_level_category'];
    }

    /**
     * Sets shipment_service_level_category.
     *
     * @param string $shipment_service_level_category The shipment service level category of the order.  Possible values: Expedited, FreeEconomy, NextDay, SameDay, SecondDay, Scheduled, Standard.
     *
     * @return $this
     */
    public function setShipmentServiceLevelCategory($shipment_service_level_category)
    {
        $this->container['shipment_service_level_category'] = $shipment_service_level_category;

        return $this;
    }

    /**
     * Gets easy_ship_shipment_status.
     *
     * @return string
     */
    public function getEasyShipShipmentStatus()
    {
        return $this->container['easy_ship_shipment_status'];
    }

    /**
     * Sets easy_ship_shipment_status.
     *
     * @param string $easy_ship_shipment_status The status of the Amazon Easy Ship order. This property is included only for Amazon Easy Ship orders.  Possible values: PendingPickUp, LabelCanceled, PickedUp, OutForDelivery, Damaged, Delivered, RejectedByBuyer, Undeliverable, ReturnedToSeller, ReturningToSeller.
     *
     * @return $this
     */
    public function setEasyShipShipmentStatus($easy_ship_shipment_status)
    {
        $this->container['easy_ship_shipment_status'] = $easy_ship_shipment_status;

        return $this;
    }

    /**
     * Gets cba_displayable_shipping_label.
     *
     * @return string
     */
    public function getCbaDisplayableShippingLabel()
    {
        return $this->container['cba_displayable_shipping_label'];
    }

    /**
     * Sets cba_displayable_shipping_label.
     *
     * @param string $cba_displayable_shipping_label custom ship label for Checkout by Amazon (CBA)
     *
     * @return $this
     */
    public function setCbaDisplayableShippingLabel($cba_displayable_shipping_label)
    {
        $this->container['cba_displayable_shipping_label'] = $cba_displayable_shipping_label;

        return $this;
    }

    /**
     * Gets order_type.
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->container['order_type'];
    }

    /**
     * Sets order_type.
     *
     * @param string $order_type the type of the order
     *
     * @return $this
     */
    public function setOrderType($order_type)
    {
        $allowedValues = $this->getOrderTypeAllowableValues();
        if (!is_null($order_type) && !in_array($order_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'order_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['order_type'] = $order_type;

        return $this;
    }

    /**
     * Gets earliest_ship_date.
     *
     * @return string
     */
    public function getEarliestShipDate()
    {
        return $this->container['earliest_ship_date'];
    }

    /**
     * Sets earliest_ship_date.
     *
     * @param string $earliest_ship_date The start of the time period within which you have committed to ship the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders.  Note: EarliestShipDate might not be returned for orders placed before February 1, 2013.
     *
     * @return $this
     */
    public function setEarliestShipDate($earliest_ship_date)
    {
        $this->container['earliest_ship_date'] = $earliest_ship_date;

        return $this;
    }

    /**
     * Gets latest_ship_date.
     *
     * @return string
     */
    public function getLatestShipDate()
    {
        return $this->container['latest_ship_date'];
    }

    /**
     * Sets latest_ship_date.
     *
     * @param string $latest_ship_date The end of the time period within which you have committed to ship the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders.  Note: LatestShipDate might not be returned for orders placed before February 1, 2013.
     *
     * @return $this
     */
    public function setLatestShipDate($latest_ship_date)
    {
        $this->container['latest_ship_date'] = $latest_ship_date;

        return $this;
    }

    /**
     * Gets earliest_delivery_date.
     *
     * @return string
     */
    public function getEarliestDeliveryDate()
    {
        return $this->container['earliest_delivery_date'];
    }

    /**
     * Sets earliest_delivery_date.
     *
     * @param string $earliest_delivery_date The start of the time period within which you have committed to fulfill the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders.
     *
     * @return $this
     */
    public function setEarliestDeliveryDate($earliest_delivery_date)
    {
        $this->container['earliest_delivery_date'] = $earliest_delivery_date;

        return $this;
    }

    /**
     * Gets latest_delivery_date.
     *
     * @return string
     */
    public function getLatestDeliveryDate()
    {
        return $this->container['latest_delivery_date'];
    }

    /**
     * Sets latest_delivery_date.
     *
     * @param string $latest_delivery_date The end of the time period within which you have committed to fulfill the order. In ISO 8601 date time format. Returned only for seller-fulfilled orders that do not have a PendingAvailability, Pending, or Canceled status.
     *
     * @return $this
     */
    public function setLatestDeliveryDate($latest_delivery_date)
    {
        $this->container['latest_delivery_date'] = $latest_delivery_date;

        return $this;
    }

    /**
     * Gets is_business_order.
     *
     * @return bool
     */
    public function getIsBusinessOrder()
    {
        return $this->container['is_business_order'];
    }

    /**
     * Sets is_business_order.
     *
     * @param bool $is_business_order When true, the order is an Amazon Business order. An Amazon Business order is an order where the buyer is a Verified Business Buyer.
     *
     * @return $this
     */
    public function setIsBusinessOrder($is_business_order)
    {
        $this->container['is_business_order'] = $is_business_order;

        return $this;
    }

    /**
     * Gets is_prime.
     *
     * @return bool
     */
    public function getIsPrime()
    {
        return $this->container['is_prime'];
    }

    /**
     * Sets is_prime.
     *
     * @param bool $is_prime when true, the order is a seller-fulfilled Amazon Prime order
     *
     * @return $this
     */
    public function setIsPrime($is_prime)
    {
        $this->container['is_prime'] = $is_prime;

        return $this;
    }

    /**
     * Gets is_premium_order.
     *
     * @return bool
     */
    public function getIsPremiumOrder()
    {
        return $this->container['is_premium_order'];
    }

    /**
     * Sets is_premium_order.
     *
     * @param bool $is_premium_order When true, the order has a Premium Shipping Service Level Agreement. For more information about Premium Shipping orders, see \"Premium Shipping Options\" in the Seller Central Help for your marketplace.
     *
     * @return $this
     */
    public function setIsPremiumOrder($is_premium_order)
    {
        $this->container['is_premium_order'] = $is_premium_order;

        return $this;
    }

    /**
     * Gets is_global_express_enabled.
     *
     * @return bool
     */
    public function getIsGlobalExpressEnabled()
    {
        return $this->container['is_global_express_enabled'];
    }

    /**
     * Sets is_global_express_enabled.
     *
     * @param bool $is_global_express_enabled when true, the order is a GlobalExpress order
     *
     * @return $this
     */
    public function setIsGlobalExpressEnabled($is_global_express_enabled)
    {
        $this->container['is_global_express_enabled'] = $is_global_express_enabled;

        return $this;
    }

    /**
     * Gets replaced_order_id.
     *
     * @return string
     */
    public function getReplacedOrderId()
    {
        return $this->container['replaced_order_id'];
    }

    /**
     * Sets replaced_order_id.
     *
     * @param string $replaced_order_id The order ID value for the order that is being replaced. Returned only if IsReplacementOrder = true.
     *
     * @return $this
     */
    public function setReplacedOrderId($replaced_order_id)
    {
        $this->container['replaced_order_id'] = $replaced_order_id;

        return $this;
    }

    /**
     * Gets is_replacement_order.
     *
     * @return bool
     */
    public function getIsReplacementOrder()
    {
        return $this->container['is_replacement_order'];
    }

    /**
     * Sets is_replacement_order.
     *
     * @param bool $is_replacement_order when true, this is a replacement order
     *
     * @return $this
     */
    public function setIsReplacementOrder($is_replacement_order)
    {
        $this->container['is_replacement_order'] = $is_replacement_order;

        return $this;
    }

    /**
     * Gets promise_response_due_date.
     *
     * @return string
     */
    public function getPromiseResponseDueDate()
    {
        return $this->container['promise_response_due_date'];
    }

    /**
     * Sets promise_response_due_date.
     *
     * @param string $promise_response_due_date Indicates the date by which the seller must respond to the buyer with an estimated ship date. Returned only for Sourcing on Demand orders.
     *
     * @return $this
     */
    public function setPromiseResponseDueDate($promise_response_due_date)
    {
        $this->container['promise_response_due_date'] = $promise_response_due_date;

        return $this;
    }

    /**
     * Gets is_estimated_ship_date_set.
     *
     * @return bool
     */
    public function getIsEstimatedShipDateSet()
    {
        return $this->container['is_estimated_ship_date_set'];
    }

    /**
     * Sets is_estimated_ship_date_set.
     *
     * @param bool $is_estimated_ship_date_set When true, the estimated ship date is set for the order. Returned only for Sourcing on Demand orders.
     *
     * @return $this
     */
    public function setIsEstimatedShipDateSet($is_estimated_ship_date_set)
    {
        $this->container['is_estimated_ship_date_set'] = $is_estimated_ship_date_set;

        return $this;
    }

    /**
     * Gets is_sold_by_ab.
     *
     * @return bool
     */
    public function getIsSoldByAb()
    {
        return $this->container['is_sold_by_ab'];
    }

    /**
     * Sets is_sold_by_ab.
     *
     * @param bool $is_sold_by_ab When true, the item within this order was bought and re-sold by Amazon Business EU SARL (ABEU). By buying and instantly re-selling your items, ABEU becomes the seller of record, making your inventory available for sale to customers who would not otherwise purchase from a third-party seller.
     *
     * @return $this
     */
    public function setIsSoldByAb($is_sold_by_ab)
    {
        $this->container['is_sold_by_ab'] = $is_sold_by_ab;

        return $this;
    }

    /**
     * Gets assigned_ship_from_location_address.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\Orders\Address
     */
    public function getAssignedShipFromLocationAddress()
    {
        return $this->container['assigned_ship_from_location_address'];
    }

    /**
     * Sets assigned_ship_from_location_address.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\Orders\Address $assigned_ship_from_location_address assigned_ship_from_location_address
     *
     * @return $this
     */
    public function setAssignedShipFromLocationAddress($assigned_ship_from_location_address)
    {
        $this->container['assigned_ship_from_location_address'] = $assigned_ship_from_location_address;

        return $this;
    }

    /**
     * Gets fulfillment_instruction.
     *
     * @return \Plenty\AmazonSellingPartnerAPI\Models\Orders\FulfillmentInstruction
     */
    public function getFulfillmentInstruction()
    {
        return $this->container['fulfillment_instruction'];
    }

    /**
     * Sets fulfillment_instruction.
     *
     * @param \Plenty\AmazonSellingPartnerAPI\Models\Orders\FulfillmentInstruction $fulfillment_instruction fulfillment_instruction
     *
     * @return $this
     */
    public function setFulfillmentInstruction($fulfillment_instruction)
    {
        $this->container['fulfillment_instruction'] = $fulfillment_instruction;

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
