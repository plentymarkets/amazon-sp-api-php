<?php
/**
 * Condition.
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

/**
 * Condition Class Doc Comment.
 *

 * @description The condition of the item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Condition
{
    /**
     * Possible values of this enum.
     */
    const NEW_ITEM = 'NewItem';
    const NEW_WITH_WARRANTY = 'NewWithWarranty';
    const NEW_OEM = 'NewOEM';
    const NEW_OPEN_BOX = 'NewOpenBox';
    const USED_LIKE_NEW = 'UsedLikeNew';
    const USED_VERY_GOOD = 'UsedVeryGood';
    const USED_GOOD = 'UsedGood';
    const USED_ACCEPTABLE = 'UsedAcceptable';
    const USED_POOR = 'UsedPoor';
    const USED_REFURBISHED = 'UsedRefurbished';
    const COLLECTIBLE_LIKE_NEW = 'CollectibleLikeNew';
    const COLLECTIBLE_VERY_GOOD = 'CollectibleVeryGood';
    const COLLECTIBLE_GOOD = 'CollectibleGood';
    const COLLECTIBLE_ACCEPTABLE = 'CollectibleAcceptable';
    const COLLECTIBLE_POOR = 'CollectiblePoor';
    const REFURBISHED_WITH_WARRANTY = 'RefurbishedWithWarranty';
    const REFURBISHED = 'Refurbished';
    const CLUB = 'Club';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NEW_ITEM,
self::NEW_WITH_WARRANTY,
self::NEW_OEM,
self::NEW_OPEN_BOX,
self::USED_LIKE_NEW,
self::USED_VERY_GOOD,
self::USED_GOOD,
self::USED_ACCEPTABLE,
self::USED_POOR,
self::USED_REFURBISHED,
self::COLLECTIBLE_LIKE_NEW,
self::COLLECTIBLE_VERY_GOOD,
self::COLLECTIBLE_GOOD,
self::COLLECTIBLE_ACCEPTABLE,
self::COLLECTIBLE_POOR,
self::REFURBISHED_WITH_WARRANTY,
self::REFURBISHED,
self::CLUB,        ];
    }
}
