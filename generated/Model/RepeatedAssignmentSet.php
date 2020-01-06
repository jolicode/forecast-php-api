<?php

namespace JoliCode\Forecast\Api\Model;

class RepeatedAssignmentSet
{
    /**
     * 
     *
     * @var int[]
     */
    protected $assignmentIds;
    /**
     * 
     *
     * @var string
     */
    protected $firstStartDate;
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $lastEndDate;
    /**
     * 
     *
     * @return int[]
     */
    public function getAssignmentIds() : array
    {
        return $this->assignmentIds;
    }
    /**
     * 
     *
     * @param int[] $assignmentIds
     *
     * @return self
     */
    public function setAssignmentIds(array $assignmentIds) : self
    {
        $this->assignmentIds = $assignmentIds;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstStartDate() : string
    {
        return $this->firstStartDate;
    }
    /**
     * 
     *
     * @param string $firstStartDate
     *
     * @return self
     */
    public function setFirstStartDate(string $firstStartDate) : self
    {
        $this->firstStartDate = $firstStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastEndDate() : string
    {
        return $this->lastEndDate;
    }
    /**
     * 
     *
     * @param string $lastEndDate
     *
     * @return self
     */
    public function setLastEndDate(string $lastEndDate) : self
    {
        $this->lastEndDate = $lastEndDate;
        return $this;
    }
}