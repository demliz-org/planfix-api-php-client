<?php
/**
 * ComplexProjectFilter
 *
 * PHP version 5
 *
 * @category Class
 * @package  Planfix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Planfix REST API
 *
 * Documentation for Planfix REST API. <br> Generated <a href=\"https://root/restapidocs/swagger.json\">swagger.json</a>
 *
 * OpenAPI spec version: 1.0.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.44
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Planfix\Model;

use \ArrayAccess;
use \Planfix\ObjectSerializer;

/**
 * ComplexProjectFilter Class Doc Comment
 *
 * @category Class
 * @description Complex project filters, &lt;a target&#x3D;\&quot;blank\&quot; href&#x3D;\&quot;https://planfix.com/ru/help/REST_API:_%D0%A1%D0%BB%D0%BE%D0%B6%D0%BD%D1%8B%D0%B5_%D1%84%D0%B8%D0%BB%D1%8C%D1%82%D1%80%D1%8B_%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%BE%D0%B2\&quot;&gt; more information&lt;/a&gt;
 * @package  Planfix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ComplexProjectFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ComplexProjectFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'float',
'operator' => 'string',
'value' => 'AnyOfComplexProjectFilterValue',
'field' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
'operator' => null,
'value' => null,
'field' => null    ];

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
        'type' => 'type',
'operator' => 'operator',
'value' => 'value',
'field' => 'field'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
'operator' => 'setOperator',
'value' => 'setValue',
'field' => 'setField'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
'operator' => 'getOperator',
'value' => 'getValue',
'field' => 'getField'    ];

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

    const TYPE_5001 = 5001;
const TYPE_5002 = 5002;
const TYPE_5003 = 5003;
const TYPE_5004 = 5004;
const TYPE_5005 = 5005;
const TYPE_5006 = 5006;
const TYPE_5007 = 5007;
const TYPE_5008 = 5008;
const TYPE_5009 = 5009;
const TYPE_5010 = 5010;
const TYPE_5011 = 5011;
const TYPE_5012 = 5012;
const TYPE_5013 = 5013;
const TYPE_5014 = 5014;
const TYPE_5015 = 5015;
const TYPE_5101 = 5101;
const TYPE_5102 = 5102;
const TYPE_5103 = 5103;
const TYPE_5104 = 5104;
const TYPE_5105 = 5105;
const TYPE_5106 = 5106;
const TYPE_5107 = 5107;
const TYPE_5108 = 5108;
const TYPE_5109 = 5109;
const TYPE_5110 = 5110;
const TYPE_5111 = 5111;
const TYPE_5112 = 5112;
const TYPE_5113 = 5113;
const TYPE_5115 = 5115;
const TYPE_5116 = 5116;
const TYPE_5117 = 5117;
const TYPE_5118 = 5118;
const OPERATOR_EQUAL = 'equal';
const OPERATOR_NOTEQUAL = 'notequal';
const OPERATOR_GT = 'gt';
const OPERATOR_LT = 'lt';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_5001,
self::TYPE_5002,
self::TYPE_5003,
self::TYPE_5004,
self::TYPE_5005,
self::TYPE_5006,
self::TYPE_5007,
self::TYPE_5008,
self::TYPE_5009,
self::TYPE_5010,
self::TYPE_5011,
self::TYPE_5012,
self::TYPE_5013,
self::TYPE_5014,
self::TYPE_5015,
self::TYPE_5101,
self::TYPE_5102,
self::TYPE_5103,
self::TYPE_5104,
self::TYPE_5105,
self::TYPE_5106,
self::TYPE_5107,
self::TYPE_5108,
self::TYPE_5109,
self::TYPE_5110,
self::TYPE_5111,
self::TYPE_5112,
self::TYPE_5113,
self::TYPE_5115,
self::TYPE_5116,
self::TYPE_5117,
self::TYPE_5118,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOperatorAllowableValues()
    {
        return [
            self::OPERATOR_EQUAL,
self::OPERATOR_NOTEQUAL,
self::OPERATOR_GT,
self::OPERATOR_LT,        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['field'] = isset($data['field']) ? $data['field'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['operator'] === null) {
            $invalidProperties[] = "'operator' can't be null";
        }
        $allowedValues = $this->getOperatorAllowableValues();
        if (!is_null($this->container['operator']) && !in_array($this->container['operator'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'operator', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
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
     * Gets type
     *
     * @return float
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param float $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator operator
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $allowedValues = $this->getOperatorAllowableValues();
        if (!in_array($operator, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'operator', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets value
     *
     * @return AnyOfComplexProjectFilterValue
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param AnyOfComplexProjectFilterValue $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets field
     *
     * @return int
     */
    public function getField()
    {
        return $this->container['field'];
    }

    /**
     * Sets field
     *
     * @param int $field field
     *
     * @return $this
     */
    public function setField($field)
    {
        $this->container['field'] = $field;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
