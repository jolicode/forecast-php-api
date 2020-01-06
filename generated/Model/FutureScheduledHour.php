<?php

namespace JoliCode\Forecast\Api\Model;

class FutureScheduledHour
{
    /**
     * Number of hours allocated
     *
     * @var int
     */
    protected $allocation;
    /**
     * Id of the Person
     *
     * @var int
     */
    protected $personId;
    /**
     * Id of the Placeholder
     *
     * @var int
     */
    protected $placeholderId;
    /**
     * Id of the Project
     *
     * @var int
     */
    protected $projectId;
    /**
     * Number of hours allocated
     *
     * @return int
     */
    public function getAllocation() : int
    {
        return $this->allocation;
    }
    /**
     * Number of hours allocated
     *
     * @param int $allocation
     *
     * @return self
     */
    public function setAllocation(int $allocation) : self
    {
        $this->allocation = $allocation;
        return $this;
    }
    /**
     * Id of the Person
     *
     * @return int
     */
    public function getPersonId() : int
    {
        return $this->personId;
    }
    /**
     * Id of the Person
     *
     * @param int $personId
     *
     * @return self
     */
    public function setPersonId(int $personId) : self
    {
        $this->personId = $personId;
        return $this;
    }
    /**
     * Id of the Placeholder
     *
     * @return int
     */
    public function getPlaceholderId() : int
    {
        return $this->placeholderId;
    }
    /**
     * Id of the Placeholder
     *
     * @param int $placeholderId
     *
     * @return self
     */
    public function setPlaceholderId(int $placeholderId) : self
    {
        $this->placeholderId = $placeholderId;
        return $this;
    }
    /**
     * Id of the Project
     *
     * @return int
     */
    public function getProjectId() : int
    {
        return $this->projectId;
    }
    /**
     * Id of the Project
     *
     * @param int $projectId
     *
     * @return self
     */
    public function setProjectId(int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
}