<?php
/**
 * Reminder
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
 * Reminder Class Doc Comment
 *
 * @category Class
 * @package  Planfix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Reminder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Reminder';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'commentId' => 'int',
'recurrenceId' => 'int',
'dataTagEntryKey' => 'int',
'reminderDate' => '\Planfix\Model\TimePoint',
'reminderDateToCreate' => '\Planfix\Model\TimePoint',
'reminded' => 'bool',
'text' => 'string',
'type' => 'string',
'subtype' => 'string',
'owner' => '\Planfix\Model\PersonResponse',
'recipientsRoles' => 'string[]',
'recipientsPeople' => '\Planfix\Model\PeopleResponse'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'commentId' => null,
'recurrenceId' => null,
'dataTagEntryKey' => null,
'reminderDate' => null,
'reminderDateToCreate' => null,
'reminded' => null,
'text' => null,
'type' => null,
'subtype' => null,
'owner' => null,
'recipientsRoles' => null,
'recipientsPeople' => null    ];

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
        'id' => 'id',
'commentId' => 'commentId',
'recurrenceId' => 'recurrenceId',
'dataTagEntryKey' => 'dataTagEntryKey',
'reminderDate' => 'reminderDate',
'reminderDateToCreate' => 'reminderDateToCreate',
'reminded' => 'reminded',
'text' => 'text',
'type' => 'type',
'subtype' => 'subtype',
'owner' => 'owner',
'recipientsRoles' => 'recipientsRoles',
'recipientsPeople' => 'recipientsPeople'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'commentId' => 'setCommentId',
'recurrenceId' => 'setRecurrenceId',
'dataTagEntryKey' => 'setDataTagEntryKey',
'reminderDate' => 'setReminderDate',
'reminderDateToCreate' => 'setReminderDateToCreate',
'reminded' => 'setReminded',
'text' => 'setText',
'type' => 'setType',
'subtype' => 'setSubtype',
'owner' => 'setOwner',
'recipientsRoles' => 'setRecipientsRoles',
'recipientsPeople' => 'setRecipientsPeople'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'commentId' => 'getCommentId',
'recurrenceId' => 'getRecurrenceId',
'dataTagEntryKey' => 'getDataTagEntryKey',
'reminderDate' => 'getReminderDate',
'reminderDateToCreate' => 'getReminderDateToCreate',
'reminded' => 'getReminded',
'text' => 'getText',
'type' => 'getType',
'subtype' => 'getSubtype',
'owner' => 'getOwner',
'recipientsRoles' => 'getRecipientsRoles',
'recipientsPeople' => 'getRecipientsPeople'    ];

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

    const TYPE_EXACT = 'Exact';
const TYPE_BEFORE = 'Before';
const TYPE_NONE = 'None';
const SUBTYPE_BEFORE_TASK_START = 'BeforeTaskStart';
const SUBTYPE_BEFORE_TASK_END = 'BeforeTaskEnd';
const SUBTYPE_BEFORE_DATA_TAG_START = 'BeforeDataTagStart';
const SUBTYPE_BEFORE_DATA_TAG_END = 'BeforeDataTagEnd';
const SUBTYPE_NONE = 'None';
const RECIPIENTS_ROLES_ASSIGNER = 'Assigner';
const RECIPIENTS_ROLES_PARTICIPANTS = 'Participants';
const RECIPIENTS_ROLES_ASSIGNEES = 'Assignees';
const RECIPIENTS_ROLES_AUDITORS = 'Auditors';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_EXACT,
self::TYPE_BEFORE,
self::TYPE_NONE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSubtypeAllowableValues()
    {
        return [
            self::SUBTYPE_BEFORE_TASK_START,
self::SUBTYPE_BEFORE_TASK_END,
self::SUBTYPE_BEFORE_DATA_TAG_START,
self::SUBTYPE_BEFORE_DATA_TAG_END,
self::SUBTYPE_NONE,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRecipientsRolesAllowableValues()
    {
        return [
            self::RECIPIENTS_ROLES_ASSIGNER,
self::RECIPIENTS_ROLES_PARTICIPANTS,
self::RECIPIENTS_ROLES_ASSIGNEES,
self::RECIPIENTS_ROLES_AUDITORS,        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['commentId'] = isset($data['commentId']) ? $data['commentId'] : null;
        $this->container['recurrenceId'] = isset($data['recurrenceId']) ? $data['recurrenceId'] : null;
        $this->container['dataTagEntryKey'] = isset($data['dataTagEntryKey']) ? $data['dataTagEntryKey'] : null;
        $this->container['reminderDate'] = isset($data['reminderDate']) ? $data['reminderDate'] : null;
        $this->container['reminderDateToCreate'] = isset($data['reminderDateToCreate']) ? $data['reminderDateToCreate'] : null;
        $this->container['reminded'] = isset($data['reminded']) ? $data['reminded'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['subtype'] = isset($data['subtype']) ? $data['subtype'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['recipientsRoles'] = isset($data['recipientsRoles']) ? $data['recipientsRoles'] : null;
        $this->container['recipientsPeople'] = isset($data['recipientsPeople']) ? $data['recipientsPeople'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSubtypeAllowableValues();
        if (!is_null($this->container['subtype']) && !in_array($this->container['subtype'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'subtype', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets commentId
     *
     * @return int
     */
    public function getCommentId()
    {
        return $this->container['commentId'];
    }

    /**
     * Sets commentId
     *
     * @param int $commentId commentId
     *
     * @return $this
     */
    public function setCommentId($commentId)
    {
        $this->container['commentId'] = $commentId;

        return $this;
    }

    /**
     * Gets recurrenceId
     *
     * @return int
     */
    public function getRecurrenceId()
    {
        return $this->container['recurrenceId'];
    }

    /**
     * Sets recurrenceId
     *
     * @param int $recurrenceId recurrenceId
     *
     * @return $this
     */
    public function setRecurrenceId($recurrenceId)
    {
        $this->container['recurrenceId'] = $recurrenceId;

        return $this;
    }

    /**
     * Gets dataTagEntryKey
     *
     * @return int
     */
    public function getDataTagEntryKey()
    {
        return $this->container['dataTagEntryKey'];
    }

    /**
     * Sets dataTagEntryKey
     *
     * @param int $dataTagEntryKey dataTagEntryKey
     *
     * @return $this
     */
    public function setDataTagEntryKey($dataTagEntryKey)
    {
        $this->container['dataTagEntryKey'] = $dataTagEntryKey;

        return $this;
    }

    /**
     * Gets reminderDate
     *
     * @return \Planfix\Model\TimePoint
     */
    public function getReminderDate()
    {
        return $this->container['reminderDate'];
    }

    /**
     * Sets reminderDate
     *
     * @param \Planfix\Model\TimePoint $reminderDate reminderDate
     *
     * @return $this
     */
    public function setReminderDate($reminderDate)
    {
        $this->container['reminderDate'] = $reminderDate;

        return $this;
    }

    /**
     * Gets reminderDateToCreate
     *
     * @return \Planfix\Model\TimePoint
     */
    public function getReminderDateToCreate()
    {
        return $this->container['reminderDateToCreate'];
    }

    /**
     * Sets reminderDateToCreate
     *
     * @param \Planfix\Model\TimePoint $reminderDateToCreate reminderDateToCreate
     *
     * @return $this
     */
    public function setReminderDateToCreate($reminderDateToCreate)
    {
        $this->container['reminderDateToCreate'] = $reminderDateToCreate;

        return $this;
    }

    /**
     * Gets reminded
     *
     * @return bool
     */
    public function getReminded()
    {
        return $this->container['reminded'];
    }

    /**
     * Sets reminded
     *
     * @param bool $reminded reminded
     *
     * @return $this
     */
    public function setReminded($reminded)
    {
        $this->container['reminded'] = $reminded;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
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
     * Gets subtype
     *
     * @return string
     */
    public function getSubtype()
    {
        return $this->container['subtype'];
    }

    /**
     * Sets subtype
     *
     * @param string $subtype subtype
     *
     * @return $this
     */
    public function setSubtype($subtype)
    {
        $allowedValues = $this->getSubtypeAllowableValues();
        if (!is_null($subtype) && !in_array($subtype, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'subtype', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['subtype'] = $subtype;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \Planfix\Model\PersonResponse
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Planfix\Model\PersonResponse $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets recipientsRoles
     *
     * @return string[]
     */
    public function getRecipientsRoles()
    {
        return $this->container['recipientsRoles'];
    }

    /**
     * Sets recipientsRoles
     *
     * @param string[] $recipientsRoles recipientsRoles
     *
     * @return $this
     */
    public function setRecipientsRoles($recipientsRoles)
    {
        $allowedValues = $this->getRecipientsRolesAllowableValues();
        if (!is_null($recipientsRoles) && array_diff($recipientsRoles, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'recipientsRoles', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['recipientsRoles'] = $recipientsRoles;

        return $this;
    }

    /**
     * Gets recipientsPeople
     *
     * @return \Planfix\Model\PeopleResponse
     */
    public function getRecipientsPeople()
    {
        return $this->container['recipientsPeople'];
    }

    /**
     * Sets recipientsPeople
     *
     * @param \Planfix\Model\PeopleResponse $recipientsPeople recipientsPeople
     *
     * @return $this
     */
    public function setRecipientsPeople($recipientsPeople)
    {
        $this->container['recipientsPeople'] = $recipientsPeople;

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
