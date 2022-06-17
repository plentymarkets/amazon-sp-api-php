<?php
/**
 * PredefinedPackageDimensions.
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

namespace Plentymarkets\AmazonSellingPartnerAPI\Models\MerchantFulfillment;

/**
 * PredefinedPackageDimensions Class Doc Comment.
 *

 * @description An enumeration of predefined parcel tokens. If you specify a PredefinedPackageDimensions token, you are not obligated to use a branded package from a carrier. For example, if you specify the FedEx_Box_10kg token, you do not have to use that particular package from FedEx. You are only obligated to use a box that matches the dimensions specified by the token.  Note: Please note that carriers can have restrictions on the type of package allowed for certain ship methods. Check the carrier website for all details. Example: Flat rate pricing is available when materials are sent by USPS in a USPS-produced Flat Rate Envelope or Box.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PredefinedPackageDimensions
{
    /**
     * Possible values of this enum.
     */
    const FED_EX_BOX_10KG = 'FedEx_Box_10kg';
    const FED_EX_BOX_25KG = 'FedEx_Box_25kg';
    const FED_EX_BOX_EXTRA_LARGE_1 = 'FedEx_Box_Extra_Large_1';
    const FED_EX_BOX_EXTRA_LARGE_2 = 'FedEx_Box_Extra_Large_2';
    const FED_EX_BOX_LARGE_1 = 'FedEx_Box_Large_1';
    const FED_EX_BOX_LARGE_2 = 'FedEx_Box_Large_2';
    const FED_EX_BOX_MEDIUM_1 = 'FedEx_Box_Medium_1';
    const FED_EX_BOX_MEDIUM_2 = 'FedEx_Box_Medium_2';
    const FED_EX_BOX_SMALL_1 = 'FedEx_Box_Small_1';
    const FED_EX_BOX_SMALL_2 = 'FedEx_Box_Small_2';
    const FED_EX_ENVELOPE = 'FedEx_Envelope';
    const FED_EX_PADDED_PAK = 'FedEx_Padded_Pak';
    const FED_EX_PAK_1 = 'FedEx_Pak_1';
    const FED_EX_PAK_2 = 'FedEx_Pak_2';
    const FED_EX_TUBE = 'FedEx_Tube';
    const FED_EX_XL_PAK = 'FedEx_XL_Pak';
    const UPS_BOX_10KG = 'UPS_Box_10kg';
    const UPS_BOX_25KG = 'UPS_Box_25kg';
    const UPS_EXPRESS_BOX = 'UPS_Express_Box';
    const UPS_EXPRESS_BOX_LARGE = 'UPS_Express_Box_Large';
    const UPS_EXPRESS_BOX_MEDIUM = 'UPS_Express_Box_Medium';
    const UPS_EXPRESS_BOX_SMALL = 'UPS_Express_Box_Small';
    const UPS_EXPRESS_ENVELOPE = 'UPS_Express_Envelope';
    const UPS_EXPRESS_HARD_PAK = 'UPS_Express_Hard_Pak';
    const UPS_EXPRESS_LEGAL_ENVELOPE = 'UPS_Express_Legal_Envelope';
    const UPS_EXPRESS_PAK = 'UPS_Express_Pak';
    const UPS_EXPRESS_TUBE = 'UPS_Express_Tube';
    const UPS_LABORATORY_PAK = 'UPS_Laboratory_Pak';
    const UPS_PAD_PAK = 'UPS_Pad_Pak';
    const UPS_PALLET = 'UPS_Pallet';
    const USPS_CARD = 'USPS_Card';
    const USPS_FLAT = 'USPS_Flat';
    const USPS_FLAT_RATE_CARDBOARD_ENVELOPE = 'USPS_FlatRateCardboardEnvelope';
    const USPS_FLAT_RATE_ENVELOPE = 'USPS_FlatRateEnvelope';
    const USPS_FLAT_RATE_GIFT_CARD_ENVELOPE = 'USPS_FlatRateGiftCardEnvelope';
    const USPS_FLAT_RATE_LEGAL_ENVELOPE = 'USPS_FlatRateLegalEnvelope';
    const USPS_FLAT_RATE_PADDED_ENVELOPE = 'USPS_FlatRatePaddedEnvelope';
    const USPS_FLAT_RATE_WINDOW_ENVELOPE = 'USPS_FlatRateWindowEnvelope';
    const USPS_LARGE_FLAT_RATE_BOARD_GAME_BOX = 'USPS_LargeFlatRateBoardGameBox';
    const USPS_LARGE_FLAT_RATE_BOX = 'USPS_LargeFlatRateBox';
    const USPS_LETTER = 'USPS_Letter';
    const USPS_MEDIUM_FLAT_RATE_BOX1 = 'USPS_MediumFlatRateBox1';
    const USPS_MEDIUM_FLAT_RATE_BOX2 = 'USPS_MediumFlatRateBox2';
    const USPS_REGIONAL_RATE_BOX_A1 = 'USPS_RegionalRateBoxA1';
    const USPS_REGIONAL_RATE_BOX_A2 = 'USPS_RegionalRateBoxA2';
    const USPS_REGIONAL_RATE_BOX_B1 = 'USPS_RegionalRateBoxB1';
    const USPS_REGIONAL_RATE_BOX_B2 = 'USPS_RegionalRateBoxB2';
    const USPS_REGIONAL_RATE_BOX_C = 'USPS_RegionalRateBoxC';
    const USPS_SMALL_FLAT_RATE_BOX = 'USPS_SmallFlatRateBox';
    const USPS_SMALL_FLAT_RATE_ENVELOPE = 'USPS_SmallFlatRateEnvelope';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FED_EX_BOX_10KG,
self::FED_EX_BOX_25KG,
self::FED_EX_BOX_EXTRA_LARGE_1,
self::FED_EX_BOX_EXTRA_LARGE_2,
self::FED_EX_BOX_LARGE_1,
self::FED_EX_BOX_LARGE_2,
self::FED_EX_BOX_MEDIUM_1,
self::FED_EX_BOX_MEDIUM_2,
self::FED_EX_BOX_SMALL_1,
self::FED_EX_BOX_SMALL_2,
self::FED_EX_ENVELOPE,
self::FED_EX_PADDED_PAK,
self::FED_EX_PAK_1,
self::FED_EX_PAK_2,
self::FED_EX_TUBE,
self::FED_EX_XL_PAK,
self::UPS_BOX_10KG,
self::UPS_BOX_25KG,
self::UPS_EXPRESS_BOX,
self::UPS_EXPRESS_BOX_LARGE,
self::UPS_EXPRESS_BOX_MEDIUM,
self::UPS_EXPRESS_BOX_SMALL,
self::UPS_EXPRESS_ENVELOPE,
self::UPS_EXPRESS_HARD_PAK,
self::UPS_EXPRESS_LEGAL_ENVELOPE,
self::UPS_EXPRESS_PAK,
self::UPS_EXPRESS_TUBE,
self::UPS_LABORATORY_PAK,
self::UPS_PAD_PAK,
self::UPS_PALLET,
self::USPS_CARD,
self::USPS_FLAT,
self::USPS_FLAT_RATE_CARDBOARD_ENVELOPE,
self::USPS_FLAT_RATE_ENVELOPE,
self::USPS_FLAT_RATE_GIFT_CARD_ENVELOPE,
self::USPS_FLAT_RATE_LEGAL_ENVELOPE,
self::USPS_FLAT_RATE_PADDED_ENVELOPE,
self::USPS_FLAT_RATE_WINDOW_ENVELOPE,
self::USPS_LARGE_FLAT_RATE_BOARD_GAME_BOX,
self::USPS_LARGE_FLAT_RATE_BOX,
self::USPS_LETTER,
self::USPS_MEDIUM_FLAT_RATE_BOX1,
self::USPS_MEDIUM_FLAT_RATE_BOX2,
self::USPS_REGIONAL_RATE_BOX_A1,
self::USPS_REGIONAL_RATE_BOX_A2,
self::USPS_REGIONAL_RATE_BOX_B1,
self::USPS_REGIONAL_RATE_BOX_B2,
self::USPS_REGIONAL_RATE_BOX_C,
self::USPS_SMALL_FLAT_RATE_BOX,
self::USPS_SMALL_FLAT_RATE_ENVELOPE,        ];
    }
}
