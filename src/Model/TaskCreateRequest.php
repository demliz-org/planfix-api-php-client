<?php
/**
 * TaskCreateRequest
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
 * TaskCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  Planfix
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaskCreateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'sourceObjectId' => 'string',
'sourceDataVersion' => 'string',
'name' => 'string',
'description' => 'string',
'priority' => 'string',
'status' => '\Planfix\Model\BaseEntity',
'processId' => 'int',
'resultChecking' => 'bool',
'assigner' => '\Planfix\Model\PersonRequest',
'parent' => '\Planfix\Model\BaseEntity',
'template' => '\Planfix\Model\BaseEntity',
'project' => '\Planfix\Model\BaseEntity',
'counterparty' => '\Planfix\Model\PersonRequest',
'dateTime' => '\Planfix\Model\TimePoint',
'startDateTime' => '\Planfix\Model\TimePoint',
'endDateTime' => '\Planfix\Model\TimePoint',
'delayedTillDate' => '\Planfix\Model\TimePoint',
'duration' => 'int',
'durationUnit' => 'string',
'durationType' => 'string',
'overdue' => 'bool',
'closeToDeadLine' => 'bool',
'notAcceptedInTime' => 'bool',
'inFavorites' => 'bool',
'isSummary' => 'bool',
'isSequential' => 'bool',
'assignees' => '\Planfix\Model\PeopleRequest',
'participants' => '\Planfix\Model\PeopleRequest',
'auditors' => '\Planfix\Model\PeopleRequest',
'isDeleted' => 'bool',
'customFieldData' => '\Planfix\Model\CustomFieldValueRequest[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
'sourceObjectId' => 'uuid',
'sourceDataVersion' => null,
'name' => null,
'description' => null,
'priority' => null,
'status' => null,
'processId' => 'int64',
'resultChecking' => null,
'assigner' => null,
'parent' => null,
'template' => null,
'project' => null,
'counterparty' => null,
'dateTime' => null,
'startDateTime' => null,
'endDateTime' => null,
'delayedTillDate' => null,
'duration' => 'int64',
'durationUnit' => null,
'durationType' => null,
'overdue' => null,
'closeToDeadLine' => null,
'notAcceptedInTime' => null,
'inFavorites' => null,
'isSummary' => null,
'isSequential' => null,
'assignees' => null,
'participants' => null,
'auditors' => null,
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
        'id' => 'id',
'sourceObjectId' => 'sourceObjectId',
'sourceDataVersion' => 'sourceDataVersion',
'name' => 'name',
'description' => 'description',
'priority' => 'priority',
'status' => 'status',
'processId' => 'processId',
'resultChecking' => 'resultChecking',
'assigner' => 'assigner',
'parent' => 'parent',
'template' => 'template',
'project' => 'project',
'counterparty' => 'counterparty',
'dateTime' => 'dateTime',
'startDateTime' => 'startDateTime',
'endDateTime' => 'endDateTime',
'delayedTillDate' => 'delayedTillDate',
'duration' => 'duration',
'durationUnit' => 'durationUnit',
'durationType' => 'durationType',
'overdue' => 'overdue',
'closeToDeadLine' => 'closeToDeadLine',
'notAcceptedInTime' => 'notAcceptedInTime',
'inFavorites' => 'inFavorites',
'isSummary' => 'isSummary',
'isSequential' => 'isSequential',
'assignees' => 'assignees',
'participants' => 'participants',
'auditors' => 'auditors',
'isDeleted' => 'isDeleted',
'customFieldData' => 'customFieldData'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'sourceObjectId' => 'setSourceObjectId',
'sourceDataVersion' => 'setSourceDataVersion',
'name' => 'setName',
'description' => 'setDescription',
'priority' => 'setPriority',
'status' => 'setStatus',
'processId' => 'setProcessId',
'resultChecking' => 'setResultChecking',
'assigner' => 'setAssigner',
'parent' => 'setParent',
'template' => 'setTemplate',
'project' => 'setProject',
'counterparty' => 'setCounterparty',
'dateTime' => 'setDateTime',
'startDateTime' => 'setStartDateTime',
'endDateTime' => 'setEndDateTime',
'delayedTillDate' => 'setDelayedTillDate',
'duration' => 'setDuration',
'durationUnit' => 'setDurationUnit',
'durationType' => 'setDurationType',
'overdue' => 'setOverdue',
'closeToDeadLine' => 'setCloseToDeadLine',
'notAcceptedInTime' => 'setNotAcceptedInTime',
'inFavorites' => 'setInFavorites',
'isSummary' => 'setIsSummary',
'isSequential' => 'setIsSequential',
'assignees' => 'setAssignees',
'participants' => 'setParticipants',
'auditors' => 'setAuditors',
'isDeleted' => 'setIsDeleted',
'customFieldData' => 'setCustomFieldData'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'sourceObjectId' => 'getSourceObjectId',
'sourceDataVersion' => 'getSourceDataVersion',
'name' => 'getName',
'description' => 'getDescription',
'priority' => 'getPriority',
'status' => 'getStatus',
'processId' => 'getProcessId',
'resultChecking' => 'getResultChecking',
'assigner' => 'getAssigner',
'parent' => 'getParent',
'template' => 'getTemplate',
'project' => 'getProject',
'counterparty' => 'getCounterparty',
'dateTime' => 'getDateTime',
'startDateTime' => 'getStartDateTime',
'endDateTime' => 'getEndDateTime',
'delayedTillDate' => 'getDelayedTillDate',
'duration' => 'getDuration',
'durationUnit' => 'getDurationUnit',
'durationType' => 'getDurationType',
'overdue' => 'getOverdue',
'closeToDeadLine' => 'getCloseToDeadLine',
'notAcceptedInTime' => 'getNotAcceptedInTime',
'inFavorites' => 'getInFavorites',
'isSummary' => 'getIsSummary',
'isSequential' => 'getIsSequential',
'assignees' => 'getAssignees',
'participants' => 'getParticipants',
'auditors' => 'getAuditors',
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

    const PRIORITY_NOT_URGENT = 'NotUrgent';
const PRIORITY_URGENT = 'Urgent';
const DURATION_UNIT_MINUTE = 'Minute';
const DURATION_UNIT_HOUR = 'Hour';
const DURATION_UNIT_DAY = 'Day';
const DURATION_UNIT_WEEK = 'Week';
const DURATION_UNIT_MONTH = 'Month';
const DURATION_TYPE_CALENDAR_DAYS = 'CalendarDays';
const DURATION_TYPE_WORKER_DAYS = 'WorkerDays';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriorityAllowableValues()
    {
        return [
            self::PRIORITY_NOT_URGENT,
self::PRIORITY_URGENT,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDurationUnitAllowableValues()
    {
        return [
            self::DURATION_UNIT_MINUTE,
self::DURATION_UNIT_HOUR,
self::DURATION_UNIT_DAY,
self::DURATION_UNIT_WEEK,
self::DURATION_UNIT_MONTH,        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDurationTypeAllowableValues()
    {
        return [
            self::DURATION_TYPE_CALENDAR_DAYS,
self::DURATION_TYPE_WORKER_DAYS,        ];
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
        $this->container['sourceObjectId'] = isset($data['sourceObjectId']) ? $data['sourceObjectId'] : null;
        $this->container['sourceDataVersion'] = isset($data['sourceDataVersion']) ? $data['sourceDataVersion'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['processId'] = isset($data['processId']) ? $data['processId'] : null;
        $this->container['resultChecking'] = isset($data['resultChecking']) ? $data['resultChecking'] : null;
        $this->container['assigner'] = isset($data['assigner']) ? $data['assigner'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['template'] = isset($data['template']) ? $data['template'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['counterparty'] = isset($data['counterparty']) ? $data['counterparty'] : null;
        $this->container['dateTime'] = isset($data['dateTime']) ? $data['dateTime'] : null;
        $this->container['startDateTime'] = isset($data['startDateTime']) ? $data['startDateTime'] : null;
        $this->container['endDateTime'] = isset($data['endDateTime']) ? $data['endDateTime'] : null;
        $this->container['delayedTillDate'] = isset($data['delayedTillDate']) ? $data['delayedTillDate'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['durationUnit'] = isset($data['durationUnit']) ? $data['durationUnit'] : null;
        $this->container['durationType'] = isset($data['durationType']) ? $data['durationType'] : null;
        $this->container['overdue'] = isset($data['overdue']) ? $data['overdue'] : null;
        $this->container['closeToDeadLine'] = isset($data['closeToDeadLine']) ? $data['closeToDeadLine'] : null;
        $this->container['notAcceptedInTime'] = isset($data['notAcceptedInTime']) ? $data['notAcceptedInTime'] : null;
        $this->container['inFavorites'] = isset($data['inFavorites']) ? $data['inFavorites'] : null;
        $this->container['isSummary'] = isset($data['isSummary']) ? $data['isSummary'] : null;
        $this->container['isSequential'] = isset($data['isSequential']) ? $data['isSequential'] : null;
        $this->container['assignees'] = isset($data['assignees']) ? $data['assignees'] : null;
        $this->container['participants'] = isset($data['participants']) ? $data['participants'] : null;
        $this->container['auditors'] = isset($data['auditors']) ? $data['auditors'] : null;
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

        $allowedValues = $this->getPriorityAllowableValues();
        if (!is_null($this->container['priority']) && !in_array($this->container['priority'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'priority', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDurationUnitAllowableValues();
        if (!is_null($this->container['durationUnit']) && !in_array($this->container['durationUnit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'durationUnit', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDurationTypeAllowableValues();
        if (!is_null($this->container['durationType']) && !in_array($this->container['durationType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'durationType', must be one of '%s'",
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
     * Gets priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $allowedValues = $this->getPriorityAllowableValues();
        if (!is_null($priority) && !in_array($priority, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'priority', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['priority'] = $priority;

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
     * Gets processId
     *
     * @return int
     */
    public function getProcessId()
    {
        return $this->container['processId'];
    }

    /**
     * Sets processId
     *
     * @param int $processId processId
     *
     * @return $this
     */
    public function setProcessId($processId)
    {
        $this->container['processId'] = $processId;

        return $this;
    }

    /**
     * Gets resultChecking
     *
     * @return bool
     */
    public function getResultChecking()
    {
        return $this->container['resultChecking'];
    }

    /**
     * Sets resultChecking
     *
     * @param bool $resultChecking resultChecking
     *
     * @return $this
     */
    public function setResultChecking($resultChecking)
    {
        $this->container['resultChecking'] = $resultChecking;

        return $this;
    }

    /**
     * Gets assigner
     *
     * @return \Planfix\Model\PersonRequest
     */
    public function getAssigner()
    {
        return $this->container['assigner'];
    }

    /**
     * Sets assigner
     *
     * @param \Planfix\Model\PersonRequest $assigner assigner
     *
     * @return $this
     */
    public function setAssigner($assigner)
    {
        $this->container['assigner'] = $assigner;

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
     * Gets project
     *
     * @return \Planfix\Model\BaseEntity
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \Planfix\Model\BaseEntity $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

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
     * Gets dateTime
     *
     * @return \Planfix\Model\TimePoint
     */
    public function getDateTime()
    {
        return $this->container['dateTime'];
    }

    /**
     * Sets dateTime
     *
     * @param \Planfix\Model\TimePoint $dateTime dateTime
     *
     * @return $this
     */
    public function setDateTime($dateTime)
    {
        $this->container['dateTime'] = $dateTime;

        return $this;
    }

    /**
     * Gets startDateTime
     *
     * @return \Planfix\Model\TimePoint
     */
    public function getStartDateTime()
    {
        return $this->container['startDateTime'];
    }

    /**
     * Sets startDateTime
     *
     * @param \Planfix\Model\TimePoint $startDateTime startDateTime
     *
     * @return $this
     */
    public function setStartDateTime($startDateTime)
    {
        $this->container['startDateTime'] = $startDateTime;

        return $this;
    }

    /**
     * Gets endDateTime
     *
     * @return \Planfix\Model\TimePoint
     */
    public function getEndDateTime()
    {
        return $this->container['endDateTime'];
    }

    /**
     * Sets endDateTime
     *
     * @param \Planfix\Model\TimePoint $endDateTime endDateTime
     *
     * @return $this
     */
    public function setEndDateTime($endDateTime)
    {
        $this->container['endDateTime'] = $endDateTime;

        return $this;
    }

    /**
     * Gets delayedTillDate
     *
     * @return \Planfix\Model\TimePoint
     */
    public function getDelayedTillDate()
    {
        return $this->container['delayedTillDate'];
    }

    /**
     * Sets delayedTillDate
     *
     * @param \Planfix\Model\TimePoint $delayedTillDate delayedTillDate
     *
     * @return $this
     */
    public function setDelayedTillDate($delayedTillDate)
    {
        $this->container['delayedTillDate'] = $delayedTillDate;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets durationUnit
     *
     * @return string
     */
    public function getDurationUnit()
    {
        return $this->container['durationUnit'];
    }

    /**
     * Sets durationUnit
     *
     * @param string $durationUnit durationUnit
     *
     * @return $this
     */
    public function setDurationUnit($durationUnit)
    {
        $allowedValues = $this->getDurationUnitAllowableValues();
        if (!is_null($durationUnit) && !in_array($durationUnit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'durationUnit', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['durationUnit'] = $durationUnit;

        return $this;
    }

    /**
     * Gets durationType
     *
     * @return string
     */
    public function getDurationType()
    {
        return $this->container['durationType'];
    }

    /**
     * Sets durationType
     *
     * @param string $durationType durationType
     *
     * @return $this
     */
    public function setDurationType($durationType)
    {
        $allowedValues = $this->getDurationTypeAllowableValues();
        if (!is_null($durationType) && !in_array($durationType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'durationType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['durationType'] = $durationType;

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
     * Gets closeToDeadLine
     *
     * @return bool
     */
    public function getCloseToDeadLine()
    {
        return $this->container['closeToDeadLine'];
    }

    /**
     * Sets closeToDeadLine
     *
     * @param bool $closeToDeadLine closeToDeadLine
     *
     * @return $this
     */
    public function setCloseToDeadLine($closeToDeadLine)
    {
        $this->container['closeToDeadLine'] = $closeToDeadLine;

        return $this;
    }

    /**
     * Gets notAcceptedInTime
     *
     * @return bool
     */
    public function getNotAcceptedInTime()
    {
        return $this->container['notAcceptedInTime'];
    }

    /**
     * Sets notAcceptedInTime
     *
     * @param bool $notAcceptedInTime notAcceptedInTime
     *
     * @return $this
     */
    public function setNotAcceptedInTime($notAcceptedInTime)
    {
        $this->container['notAcceptedInTime'] = $notAcceptedInTime;

        return $this;
    }

    /**
     * Gets inFavorites
     *
     * @return bool
     */
    public function getInFavorites()
    {
        return $this->container['inFavorites'];
    }

    /**
     * Sets inFavorites
     *
     * @param bool $inFavorites inFavorites
     *
     * @return $this
     */
    public function setInFavorites($inFavorites)
    {
        $this->container['inFavorites'] = $inFavorites;

        return $this;
    }

    /**
     * Gets isSummary
     *
     * @return bool
     */
    public function getIsSummary()
    {
        return $this->container['isSummary'];
    }

    /**
     * Sets isSummary
     *
     * @param bool $isSummary isSummary
     *
     * @return $this
     */
    public function setIsSummary($isSummary)
    {
        $this->container['isSummary'] = $isSummary;

        return $this;
    }

    /**
     * Gets isSequential
     *
     * @return bool
     */
    public function getIsSequential()
    {
        return $this->container['isSequential'];
    }

    /**
     * Sets isSequential
     *
     * @param bool $isSequential isSequential
     *
     * @return $this
     */
    public function setIsSequential($isSequential)
    {
        $this->container['isSequential'] = $isSequential;

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