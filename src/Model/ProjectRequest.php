<?php
/**
 * ProjectRequest
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
 * ProjectRequest Class Doc Comment
 *
 * @category Class
 * @package  Planfix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProjectRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sourceObjectId' => 'string',
'sourceDataVersion' => 'string',
'name' => 'string',
'description' => 'string',
'status' => '\Planfix\Model\BaseEntity',
'owner' => '\Planfix\Model\PersonRequest',
'parent' => '\Planfix\Model\BaseEntity',
'template' => '\Planfix\Model\BaseEntity',
'group' => '\Planfix\Model\GroupRequest',
'counterparty' => '\Planfix\Model\PersonRequest',
'startDate' => '\Planfix\Model\TimePoint',
'endDate' => '\Planfix\Model\TimePoint',
'hiddenForEmployees' => 'bool',
'hiddenForClients' => 'bool',
'overdue' => 'bool',
'isCloseToDeadline' => 'bool',
'assignees' => '\Planfix\Model\PeopleRequest',
'participants' => '\Planfix\Model\PeopleRequest',
'auditors' => '\Planfix\Model\PeopleRequest',
'clientManagers' => '\Planfix\Model\PeopleRequest',
'isDeleted' => 'bool',
'customFieldData' => '\Planfix\Model\CustomFieldValueRequest[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sourceObjectId' => 'uuid',
'sourceDataVersion' => null,
'name' => null,
'description' => null,
'status' => null,
'owner' => null,
'parent' => null,
'template' => null,
'group' => null,
'counterparty' => null,
'startDate' => null,
'endDate' => null,
'hiddenForEmployees' => null,
'hiddenForClients' => null,
'overdue' => null,
'isCloseToDeadline' => null,
'assignees' => null,
'participants' => null,
'auditors' => null,
'clientManagers' => null,
'isDeleted' => null,
'customFieldData' => null    ];

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
        'sourceObjectId' => 'sourceObjectId',
'sourceDataVersion' => 'sourceDataVersion',
'name' => 'name',
'description' => 'description',
'status' => 'status',
'owner' => 'owner',
'parent' => 'parent',
'template' => 'template',
'group' => 'group',
'counterparty' => 'counterparty',
'startDate' => 'startDate',
'endDate' => 'endDate',
'hiddenForEmployees' => 'hiddenForEmployees',
'hiddenForClients' => 'hiddenForClients',
'overdue' => 'overdue',
'isCloseToDeadline' => 'isCloseToDeadline',
'assignees' => 'assignees',
'participants' => 'participants',
'auditors' => 'auditors',
'clientManagers' => 'clientManagers',
'isDeleted' => 'isDeleted',
'customFieldData' => 'customFieldData'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sourceObjectId' => 'setSourceObjectId',
'sourceDataVersion' => 'setSourceDataVersion',
'name' => 'setName',
'description' => 'setDescription',
'status' => 'setStatus',
'owner' => 'setOwner',
'parent' => 'setParent',
'template' => 'setTemplate',
'group' => 'setGroup',
'counterparty' => 'setCounterparty',
'startDate' => 'setStartDate',
'endDate' => 'setEndDate',
'hiddenForEmployees' => 'setHiddenForEmployees',
'hiddenForClients' => 'setHiddenForClients',
'overdue' => 'setOverdue',
'isCloseToDeadline' => 'setIsCloseToDeadline',
'assignees' => 'setAssignees',
'participants' => 'setParticipants',
'auditors' => 'setAuditors',
'clientManagers' => 'setClientManagers',
'isDeleted' => 'setIsDeleted',
'customFieldData' => 'setCustomFieldData'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sourceObjectId' => 'getSourceObjectId',
'sourceDataVersion' => 'getSourceDataVersion',
'name' => 'getName',
'description' => 'getDescription',
'status' => 'getStatus',
'owner' => 'getOwner',
'parent' => 'getParent',
'template' => 'getTemplate',
'group' => 'getGroup',
'counterparty' => 'getCounterparty',
'startDate' => 'getStartDate',
'endDate' => 'getEndDate',
'hiddenForEmployees' => 'getHiddenForEmployees',
'hiddenForClients' => 'getHiddenForClients',
'overdue' => 'getOverdue',
'isCloseToDeadline' => 'getIsCloseToDeadline',
'assignees' => 'getAssignees',
'participants' => 'getParticipants',
'auditors' => 'getAuditors',
'clientManagers' => 'getClientManagers',
'isDeleted' => 'getIsDeleted',
'customFieldData' => 'getCustomFieldData'    ];

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
        $this->container['sourceObjectId'] = isset($data['sourceObjectId']) ? $data['sourceObjectId'] : null;
        $this->container['sourceDataVersion'] = isset($data['sourceDataVersion']) ? $data['sourceDataVersion'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['counterparty'] = isset($data['counterparty']) ? $data['counterparty'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['hiddenForEmployees'] = isset($data['hiddenForEmployees']) ? $data['hiddenForEmployees'] : null;
        $this->container['hiddenForClients'] = isset($data['hiddenForClients']) ? $data['hiddenForClients'] : null;
        $this->container['overdue'] = isset($data['overdue']) ? $data['overdue'] : null;
        $this->container['isCloseToDeadline'] = isset($data['isCloseToDeadline']) ? $data['isCloseToDeadline'] : null;
        $this->container['assignees'] = isset($data['assignees']) ? $data['assignees'] : null;
        $this->container['participants'] = isset($data['participants']) ? $data['participants'] : null;
        $this->container['auditors'] = isset($data['auditors']) ? $data['auditors'] : null;
        $this->container['clientManagers'] = isset($data['clientManagers']) ? $data['clientManagers'] : null;
        $this->container['isDeleted'] = isset($data['isDeleted']) ? $data['isDeleted'] : null;
        $this->container['customFieldData'] = isset($data['customFieldData']) ? $data['customFieldData'] : null;
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
     * Gets sourceObjectId
     *
     * @return string
     */
    public function getSourceObjectId()
    {
        return $this->container['sourceObjectId'];
    }

    /**
     * Sets sourceObjectId
     *
     * @param string $sourceObjectId sourceObjectId
     *
     * @return $this
     */
    public function setSourceObjectId($sourceObjectId)
    {
        $this->container['sourceObjectId'] = $sourceObjectId;

        return $this;
    }

    /**
     * Gets sourceDataVersion
     *
     * @return string
     */
    public function getSourceDataVersion()
    {
        return $this->container['sourceDataVersion'];
    }

    /**
     * Sets sourceDataVersion
     *
     * @param string $sourceDataVersion sourceDataVersion
     *
     * @return $this
     */
    public function setSourceDataVersion($sourceDataVersion)
    {
        $this->container['sourceDataVersion'] = $sourceDataVersion;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \Planfix\Model\BaseEntity
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \Planfix\Model\BaseEntity $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return \Planfix\Model\PersonRequest
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param \Planfix\Model\PersonRequest $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets parent
     *
     * @return \Planfix\Model\BaseEntity
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     *
     * @param \Planfix\Model\BaseEntity $parent parent
     *
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets template
     *
     * @return \Planfix\Model\BaseEntity
     */
    public function getTemplate()
    {
        return $this->container['template'];
    }

    /**
     * Sets template
     *
     * @param \Planfix\Model\BaseEntity $template template
     *
     * @return $this
     */
    public function setTemplate($template)
    {
        $this->container['template'] = $template;

        return $this;
    }

    /**
     * Gets group
     *
     * @return \Planfix\Model\GroupRequest
     */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
     * Sets group
     *
     * @param \Planfix\Model\GroupRequest $group group
     *
     * @return $this
     */
    public function setGroup($group)
    {
        $this->container['group'] = $group;

        return $this;
    }

    /**
     * Gets counterparty
     *
     * @return \Planfix\Model\PersonRequest
     */
    public function getCounterparty()
    {
        return $this->container['counterparty'];
    }

    /**
     * Sets counterparty
     *
     * @param \Planfix\Model\PersonRequest $counterparty counterparty
     *
     * @return $this
     */
    public function setCounterparty($counterparty)
    {
        $this->container['counterparty'] = $counterparty;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \Planfix\Model\TimePoint
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \Planfix\Model\TimePoint $startDate startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \Planfix\Model\TimePoint
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \Planfix\Model\TimePoint $endDate endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets hiddenForEmployees
     *
     * @return bool
     */
    public function getHiddenForEmployees()
    {
        return $this->container['hiddenForEmployees'];
    }

    /**
     * Sets hiddenForEmployees
     *
     * @param bool $hiddenForEmployees hiddenForEmployees
     *
     * @return $this
     */
    public function setHiddenForEmployees($hiddenForEmployees)
    {
        $this->container['hiddenForEmployees'] = $hiddenForEmployees;

        return $this;
    }

    /**
     * Gets hiddenForClients
     *
     * @return bool
     */
    public function getHiddenForClients()
    {
        return $this->container['hiddenForClients'];
    }

    /**
     * Sets hiddenForClients
     *
     * @param bool $hiddenForClients hiddenForClients
     *
     * @return $this
     */
    public function setHiddenForClients($hiddenForClients)
    {
        $this->container['hiddenForClients'] = $hiddenForClients;

        return $this;
    }

    /**
     * Gets overdue
     *
     * @return bool
     */
    public function getOverdue()
    {
        return $this->container['overdue'];
    }

    /**
     * Sets overdue
     *
     * @param bool $overdue overdue
     *
     * @return $this
     */
    public function setOverdue($overdue)
    {
        $this->container['overdue'] = $overdue;

        return $this;
    }

    /**
     * Gets isCloseToDeadline
     *
     * @return bool
     */
    public function getIsCloseToDeadline()
    {
        return $this->container['isCloseToDeadline'];
    }

    /**
     * Sets isCloseToDeadline
     *
     * @param bool $isCloseToDeadline isCloseToDeadline
     *
     * @return $this
     */
    public function setIsCloseToDeadline($isCloseToDeadline)
    {
        $this->container['isCloseToDeadline'] = $isCloseToDeadline;

        return $this;
    }

    /**
     * Gets assignees
     *
     * @return \Planfix\Model\PeopleRequest
     */
    public function getAssignees()
    {
        return $this->container['assignees'];
    }

    /**
     * Sets assignees
     *
     * @param \Planfix\Model\PeopleRequest $assignees assignees
     *
     * @return $this
     */
    public function setAssignees($assignees)
    {
        $this->container['assignees'] = $assignees;

        return $this;
    }

    /**
     * Gets participants
     *
     * @return \Planfix\Model\PeopleRequest
     */
    public function getParticipants()
    {
        return $this->container['participants'];
    }

    /**
     * Sets participants
     *
     * @param \Planfix\Model\PeopleRequest $participants participants
     *
     * @return $this
     */
    public function setParticipants($participants)
    {
        $this->container['participants'] = $participants;

        return $this;
    }

    /**
     * Gets auditors
     *
     * @return \Planfix\Model\PeopleRequest
     */
    public function getAuditors()
    {
        return $this->container['auditors'];
    }

    /**
     * Sets auditors
     *
     * @param \Planfix\Model\PeopleRequest $auditors auditors
     *
     * @return $this
     */
    public function setAuditors($auditors)
    {
        $this->container['auditors'] = $auditors;

        return $this;
    }

    /**
     * Gets clientManagers
     *
     * @return \Planfix\Model\PeopleRequest
     */
    public function getClientManagers()
    {
        return $this->container['clientManagers'];
    }

    /**
     * Sets clientManagers
     *
     * @param \Planfix\Model\PeopleRequest $clientManagers clientManagers
     *
     * @return $this
     */
    public function setClientManagers($clientManagers)
    {
        $this->container['clientManagers'] = $clientManagers;

        return $this;
    }

    /**
     * Gets isDeleted
     *
     * @return bool
     */
    public function getIsDeleted()
    {
        return $this->container['isDeleted'];
    }

    /**
     * Sets isDeleted
     *
     * @param bool $isDeleted isDeleted
     *
     * @return $this
     */
    public function setIsDeleted($isDeleted)
    {
        $this->container['isDeleted'] = $isDeleted;

        return $this;
    }

    /**
     * Gets customFieldData
     *
     * @return \Planfix\Model\CustomFieldValueRequest[]
     */
    public function getCustomFieldData()
    {
        return $this->container['customFieldData'];
    }

    /**
     * Sets customFieldData
     *
     * @param \Planfix\Model\CustomFieldValueRequest[] $customFieldData customFieldData
     *
     * @return $this
     */
    public function setCustomFieldData($customFieldData)
    {
        $this->container['customFieldData'] = $customFieldData;

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
