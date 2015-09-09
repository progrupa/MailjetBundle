<?php

namespace Progrupa\MailjetBundle\Mailjet\Model;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Batchjob Model
 *
 * Batch jobs in the mailjet system.
 */
class Batchjob implements ModelInterface
{
    public static function getResource()
    {
        return 'batchjob';
    }

    /**
     * Timestamp indicating when batch process was last seen alive.
     * @Type("integer")
     * @SerializedName("AliveAt")
     */
    protected $AliveAt = null;

    /**
     * API key for which this batch job is destined.
     * @Type("integer")
     * @SerializedName("APIKeyID")
     */
    protected $APIKeyID = null;

    /**
     * Value of the APIKey field of the related APIKey resource
     * @Type("string")
     * @SerializedName("APIKeyALT")
     */
    protected $APIKeyALT = null;

    /**
     * Size of processing blocks (e.g. number of contacts to process as one block in a contact import job).
     * @Type("integer")
     * @SerializedName("Blocksize")
     */
    protected $Blocksize = null;

    /**
     * Total number of items to process. (if applicable)
     * @Type("integer")
     * @SerializedName("Count")
     */
    protected $Count = null;

    /**
     * Current item being processed (if applicable)
     * @Type("integer")
     * @SerializedName("Current")
     */
    protected $Current = null;

    /**
     * Reference to more data for this batch job.
     * @Type("array")
     * @SerializedName("Data")
     */
    protected $Data = null;

    /**
     * Number of errors encountered.
     * @Type("integer")
     * @SerializedName("Errcount")
     */
    protected $Errcount = null;

    /**
     * Maximum amount of errors allowed before aborting the job (as a percentage %)
     * @Type("integer")
     * @SerializedName("ErrTreshold")
     */
    protected $ErrTreshold = null;

    /**
     * Unique numerical ID for this object
     * @Type("integer")
     * @SerializedName("ID")
     */
    protected $ID = null;

    /**
     * Timestamp indicating when job was processed completely.
     * @Type("integer")
     * @SerializedName("JobEnd")
     */
    protected $JobEnd = null;

    /**
     * Timestamp indicating when job processing was started.
     * @Type("integer")
     * @SerializedName("JobStart")
     */
    protected $JobStart = null;

    /**
     * Type of job.
     * @Type("string")
     * @SerializedName("JobType")
     */
    protected $JobType = null;

    /**
     * Method to use when handling job (e.g. contact import: force, noforce etc.)
     * @Type("string")
     * @SerializedName("Method")
     */
    protected $Method = null;

    /**
     * Reference to object being handled (e.g. contact import: the contactslist ID.)
     * @Type("integer")
     * @SerializedName("RefId")
     */
    protected $RefId = null;

    /**
     * Timestamp when batch job request was submitted.
     * @Type("integer")
     * @SerializedName("RequestAt")
     */
    protected $RequestAt = null;

    /**
     * Current status of the job. Can be set to Abort to cancel treatment.
     * @Type("string")
     * @SerializedName("Status")
     */
    protected $Status = null;

    /**
     * General purpose processing speed limit indicator.
     * @Type("integer")
     * @SerializedName("Throttle")
     */
    protected $Throttle = null;

    /**
     * @return mixed
     */
    public function getAliveAt()
    {
        return $this->AliveAt;
    }

    /**
     * @param mixed $AliveAt
     */
    public function setAliveAt($AliveAt)
    {
        $this->AliveAt = $AliveAt;
    }

    /**
     * @return mixed
     */
    public function getAPIKeyID()
    {
        return $this->APIKeyID;
    }

    /**
     * @param mixed $APIKeyID
     */
    public function setAPIKeyID($APIKeyID)
    {
        $this->APIKeyID = $APIKeyID;
    }

    /**
     * @return mixed
     */
    public function getAPIKeyALT()
    {
        return $this->APIKeyALT;
    }

    /**
     * @param mixed $APIKeyALT
     */
    public function setAPIKeyALT($APIKeyALT)
    {
        $this->APIKeyALT = $APIKeyALT;
    }

    /**
     * @return mixed
     */
    public function getBlocksize()
    {
        return $this->Blocksize;
    }

    /**
     * @param mixed $Blocksize
     */
    public function setBlocksize($Blocksize)
    {
        $this->Blocksize = $Blocksize;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->Count;
    }

    /**
     * @param mixed $Count
     */
    public function setCount($Count)
    {
        $this->Count = $Count;
    }

    /**
     * @return mixed
     */
    public function getCurrent()
    {
        return $this->Current;
    }

    /**
     * @param mixed $Current
     */
    public function setCurrent($Current)
    {
        $this->Current = $Current;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param mixed $Data
     */
    public function setData($Data)
    {
        $this->Data = $Data;
    }

    /**
     * @return mixed
     */
    public function getErrcount()
    {
        return $this->Errcount;
    }

    /**
     * @param mixed $Errcount
     */
    public function setErrcount($Errcount)
    {
        $this->Errcount = $Errcount;
    }

    /**
     * @return mixed
     */
    public function getErrTreshold()
    {
        return $this->ErrTreshold;
    }

    /**
     * @param mixed $ErrTreshold
     */
    public function setErrTreshold($ErrTreshold)
    {
        $this->ErrTreshold = $ErrTreshold;
    }

    /**
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * @param mixed $ID
     */
    public function setID($ID)
    {
        $this->ID = $ID;
    }

    /**
     * @return mixed
     */
    public function getJobEnd()
    {
        return $this->JobEnd;
    }

    /**
     * @param mixed $JobEnd
     */
    public function setJobEnd($JobEnd)
    {
        $this->JobEnd = $JobEnd;
    }

    /**
     * @return mixed
     */
    public function getJobStart()
    {
        return $this->JobStart;
    }

    /**
     * @param mixed $JobStart
     */
    public function setJobStart($JobStart)
    {
        $this->JobStart = $JobStart;
    }

    /**
     * @return mixed
     */
    public function getJobType()
    {
        return $this->JobType;
    }

    /**
     * @param mixed $JobType
     */
    public function setJobType($JobType)
    {
        $this->JobType = $JobType;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->Method;
    }

    /**
     * @param mixed $Method
     */
    public function setMethod($Method)
    {
        $this->Method = $Method;
    }

    /**
     * @return mixed
     */
    public function getRefId()
    {
        return $this->RefId;
    }

    /**
     * @param mixed $RefId
     */
    public function setRefId($RefId)
    {
        $this->RefId = $RefId;
    }

    /**
     * @return mixed
     */
    public function getRequestAt()
    {
        return $this->RequestAt;
    }

    /**
     * @param mixed $RequestAt
     */
    public function setRequestAt($RequestAt)
    {
        $this->RequestAt = $RequestAt;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param mixed $Status
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
    }

    /**
     * @return mixed
     */
    public function getThrottle()
    {
        return $this->Throttle;
    }

    /**
     * @param mixed $Throttle
     */
    public function setThrottle($Throttle)
    {
        $this->Throttle = $Throttle;
    }
}
