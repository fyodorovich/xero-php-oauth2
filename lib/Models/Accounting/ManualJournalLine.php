<?php
/**
 * ManualJournalLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.1.6
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * ManualJournalLine Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ManualJournalLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ManualJournalLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'line_amount' => 'double',
        'account_code' => 'string',
        'description' => 'string',
        'tax_type' => 'string',
        'tracking' => '\XeroAPI\XeroPHP\Models\Accounting\TrackingCategory[]',
        'tax_amount' => 'double',
        'is_blank' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'line_amount' => 'double',
        'account_code' => null,
        'description' => null,
        'tax_type' => null,
        'tracking' => null,
        'tax_amount' => 'double',
        'is_blank' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'line_amount' => 'LineAmount',
        'account_code' => 'AccountCode',
        'description' => 'Description',
        'tax_type' => 'TaxType',
        'tracking' => 'Tracking',
        'tax_amount' => 'TaxAmount',
        'is_blank' => 'IsBlank'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_amount' => 'setLineAmount',
        'account_code' => 'setAccountCode',
        'description' => 'setDescription',
        'tax_type' => 'setTaxType',
        'tracking' => 'setTracking',
        'tax_amount' => 'setTaxAmount',
        'is_blank' => 'setIsBlank'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_amount' => 'getLineAmount',
        'account_code' => 'getAccountCode',
        'description' => 'getDescription',
        'tax_type' => 'getTaxType',
        'tracking' => 'getTracking',
        'tax_amount' => 'getTaxAmount',
        'is_blank' => 'getIsBlank'
    ];

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
        return self::$openAPIModelName;
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
        $this->container['line_amount'] = isset($data['line_amount']) ? $data['line_amount'] : null;
        $this->container['account_code'] = isset($data['account_code']) ? $data['account_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['tax_type'] = isset($data['tax_type']) ? $data['tax_type'] : null;
        $this->container['tracking'] = isset($data['tracking']) ? $data['tracking'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['is_blank'] = isset($data['is_blank']) ? $data['is_blank'] : null;
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
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets line_amount
     *
     * @return double|null
     */
    public function getLineAmount()
    {
        return $this->container['line_amount'];
    }

    /**
     * Sets line_amount
     *
     * @param double|null $line_amount total for line. Debits are positive, credits are negative value
     *
     * @return $this
     */
    public function setLineAmount($line_amount)
    {

        $this->container['line_amount'] = $line_amount;

        return $this;
    }



    /**
     * Gets account_code
     *
     * @return string|null
     */
    public function getAccountCode()
    {
        return $this->container['account_code'];
    }

    /**
     * Sets account_code
     *
     * @param string|null $account_code See Accounts
     *
     * @return $this
     */
    public function setAccountCode($account_code)
    {

        $this->container['account_code'] = $account_code;

        return $this;
    }



    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description for journal line
     *
     * @return $this
     */
    public function setDescription($description)
    {

        $this->container['description'] = $description;

        return $this;
    }



    /**
     * Gets tax_type
     *
     * @return string|null
     */
    public function getTaxType()
    {
        return $this->container['tax_type'];
    }

    /**
     * Sets tax_type
     *
     * @param string|null $tax_type The tax type from TaxRates
     *
     * @return $this
     */
    public function setTaxType($tax_type)
    {

        $this->container['tax_type'] = $tax_type;

        return $this;
    }



    /**
     * Gets tracking
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\TrackingCategory[]|null
     */
    public function getTracking()
    {
        return $this->container['tracking'];
    }

    /**
     * Sets tracking
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\TrackingCategory[]|null $tracking Optional Tracking Category – see Tracking. Any JournalLine can have a maximum of 2 <TrackingCategory> elements.
     *
     * @return $this
     */
    public function setTracking($tracking)
    {

        $this->container['tracking'] = $tracking;

        return $this;
    }



    /**
     * Gets tax_amount
     *
     * @return double|null
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount
     *
     * @param double|null $tax_amount The calculated tax amount based on the TaxType and LineAmount
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {

        $this->container['tax_amount'] = $tax_amount;

        return $this;
    }


    /**
     * Gets is_blank
     *
     * @return bool|null
     */
    public function getIsBlank()
    {
        return $this->container['is_blank'];
    }

    /**
     * Sets is_blank
     *
     * @param bool|null $is_blank is the line blank
     *
     * @return $this
     */
    public function setIsBlank($is_blank)
    {

        $this->container['is_blank'] = $is_blank;

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
        return json_encode(
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


