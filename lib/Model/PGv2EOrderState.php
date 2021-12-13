<?php
/**
 * PGv2EOrderState
 *
 * PHP version 5
 *
 * @category Class
 * @package  BenefitPlus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Benefit Plus payment gate API (version 2)
 *
 * OpenAPI dokumentace k [Platební bráně Benefit Plus v2](https://benefit-kelnero.atlassian.net/wiki/spaces/NPBBP/pages/1125646355/Dokumentace+k+nov+platebn+br+n+pro+e-shopy+v2).
 *
 * OpenAPI spec version: 2.1.8
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.30
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace BenefitPlus\Model;
use \BenefitPlus\ObjectSerializer;

/**
 * PGv2EOrderState Class Doc Comment
 *
 * @category Class
 * @description Enum slouží pro určení stavu objednávky. Používá se textový klíč enumu (např. “New“), nikoli číselná hodnota. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/BP/pages/1125482531/Enum+PGv2+E+OrderState)
 * @package  BenefitPlus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PGv2EOrderState
{
    /**
     * Possible values of this enum
     */
    const UNKNOWN = 'Unknown';
const REGISTERED = 'Registered';
const _NEW = 'New';
const UNAUTHORIZED = 'Unauthorized';
const CONFIRMED = 'Confirmed';
const CLOSED = 'Closed';
const ACCOUNTED = 'Accounted';
const INVALID = 'Invalid';
const CANCELED = 'Canceled';
const CANCEL_REQUIRED = 'CancelRequired';
const EXPIRED = 'Expired';
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::UNKNOWN,
self::REGISTERED,
self::_NEW,
self::UNAUTHORIZED,
self::CONFIRMED,
self::CLOSED,
self::ACCOUNTED,
self::INVALID,
self::CANCELED,
self::CANCEL_REQUIRED,
self::EXPIRED,        ];
    }
}
