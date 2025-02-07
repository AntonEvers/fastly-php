<?php
/**
 * TypeBillingAddress
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Fastly
 * @author   oss@fastly.com
 */

/**
 * Fastly API
 *
 * A PHP client library for interacting with most facets of the Fastly API.
 *
 */

/**
 * NOTE: This class is auto generated.
 * Do not edit the class manually.
 */

namespace Fastly\Model;
use \Fastly\ObjectSerializer;

/**
 * TypeBillingAddress Class Doc Comment
 *
 * @category Class
 * @description Resource type
 * @package  Fastly
 * @author   oss@fastly.com
 */
class TypeBillingAddress
{
    /**
     * Possible values of this enum
     */
    const BILLING_ADDRESS = 'billing_address';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BILLING_ADDRESS,
        ];
    }
}


