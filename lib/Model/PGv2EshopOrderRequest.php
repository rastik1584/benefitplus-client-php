<?php
/**
 * PGv2EshopOrderRequest
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
 * OpenAPI spec version: 2.2.1
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

use \ArrayAccess;
use \BenefitPlus\ObjectSerializer;

/**
 * PGv2EshopOrderRequest Class Doc Comment
 *
 * @category Class
 * @description DTO slouží pro zaregistrování objednávky a k předání informací o objednávce ze strany eshopu. [Online dokumentace je dostupná zde](https://benefit-kelnero.atlassian.net/wiki/spaces/BP/pages/1125646362/DTO+PGv2+Eshop+Order+Request)
 * @package  BenefitPlus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PGv2EshopOrderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PGv2_Eshop_Order_Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_id' => 'string',
'description' => 'string',
'price' => 'float',
'is_partial_payment_allowed' => 'bool',
'return_url' => 'string',
'date_from' => '\DateTime',
'date_to' => '\DateTime',
'shopping_cart_id' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_id' => null,
'description' => null,
'price' => null,
'is_partial_payment_allowed' => null,
'return_url' => null,
'date_from' => 'date-time',
'date_to' => 'date-time',
'shopping_cart_id' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'order_id' => 'OrderID',
'description' => 'Description',
'price' => 'Price',
'is_partial_payment_allowed' => 'IsPartialPaymentAllowed',
'return_url' => 'ReturnURL',
'date_from' => 'DateFrom',
'date_to' => 'DateTo',
'shopping_cart_id' => 'ShoppingCartID'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_id' => 'setOrderId',
'description' => 'setDescription',
'price' => 'setPrice',
'is_partial_payment_allowed' => 'setIsPartialPaymentAllowed',
'return_url' => 'setReturnUrl',
'date_from' => 'setDateFrom',
'date_to' => 'setDateTo',
'shopping_cart_id' => 'setShoppingCartId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_id' => 'getOrderId',
'description' => 'getDescription',
'price' => 'getPrice',
'is_partial_payment_allowed' => 'getIsPartialPaymentAllowed',
'return_url' => 'getReturnUrl',
'date_from' => 'getDateFrom',
'date_to' => 'getDateTo',
'shopping_cart_id' => 'getShoppingCartId'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['is_partial_payment_allowed'] = isset($data['is_partial_payment_allowed']) ? $data['is_partial_payment_allowed'] : null;
        $this->container['return_url'] = isset($data['return_url']) ? $data['return_url'] : null;
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['shopping_cart_id'] = isset($data['shopping_cart_id']) ? $data['shopping_cart_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['order_id'] === null) {
            $invalidProperties[] = "'order_id' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets order_id
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     *
     * @param string $order_id ID objednávky, přidělené eshopem.
     *
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Popis objednávky, který v eshopu zadal uživatel.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price Hodnota benefitu, kterou objednáváme. Pro určení měny se použije měna eshopu.
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets is_partial_payment_allowed
     *
     * @return bool
     */
    public function getIsPartialPaymentAllowed()
    {
        return $this->container['is_partial_payment_allowed'];
    }

    /**
     * Sets is_partial_payment_allowed
     *
     * @param bool $is_partial_payment_allowed Zda je povolena částečná platba z interních účtů. Pokud parametr není zaslán, defaultem je true = povolen.
     *
     * @return $this
     */
    public function setIsPartialPaymentAllowed($is_partial_payment_allowed)
    {
        $this->container['is_partial_payment_allowed'] = $is_partial_payment_allowed;

        return $this;
    }

    /**
     * Gets return_url
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->container['return_url'];
    }

    /**
     * Sets return_url
     *
     * @param string $return_url Návratová URL, na kterou se má vrátit řízení.
     *
     * @return $this
     */
    public function setReturnUrl($return_url)
    {
        $this->container['return_url'] = $return_url;

        return $this;
    }

    /**
     * Gets date_from
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     *
     * @param \DateTime $date_from Datum od - první den pobytu v hotelu.
     *
     * @return $this
     */
    public function setDateFrom($date_from)
    {
        $this->container['date_from'] = $date_from;

        return $this;
    }

    /**
     * Gets date_to
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     *
     * @param \DateTime $date_to Datum to - poslední den pobytu v hotelu.
     *
     * @return $this
     */
    public function setDateTo($date_to)
    {
        $this->container['date_to'] = $date_to;

        return $this;
    }

    /**
     * Gets shopping_cart_id
     *
     * @return string
     */
    public function getShoppingCartId()
    {
        return $this->container['shopping_cart_id'];
    }

    /**
     * Sets shopping_cart_id
     *
     * @param string $shopping_cart_id ID nákupního košíku, přidělené eshopem.
     *
     * @return $this
     */
    public function setShoppingCartId($shopping_cart_id)
    {
        $this->container['shopping_cart_id'] = $shopping_cart_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
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
