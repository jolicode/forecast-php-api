<?php

namespace JoliCode\Forecast\Api\Model;

class RepeatedAssignmentSet
{
    /**
     * 
     *
     * @var int[]|null
     */
    protected $assignmentIds;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $firstStartDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var \DateTime|null
     */
    protected $lastEndDate;
    /**
     * 
     *
     * @return int[]|null
     */
    public function getAssignmentIds() : ?array
    {
        return $this->assignmentIds;
    }
    /**
     * 
     *
     * @param int[]|null $assignmentIds
     *
     * @return self
     */
    public function setAssignmentIds(?array $assignmentIds) : self
    {
        $this->assignmentIds = $assignmentIds;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getFirstStartDate() : ?\DateTime
    {
        return $this->firstStartDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $firstStartDate
     *
     * @return self
     */
    public function setFirstStartDate(?\DateTime $firstStartDate) : self
    {
        $this->firstStartDate = $firstStartDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime|null
     */
    public function getLastEndDate() : ?\DateTime
    {
        return $this->lastEndDate;
    }
    /**
     * 
     *
     * @param \DateTime|null $lastEndDate
     *
     * @return self
     */
    public function setLastEndDate(?\DateTime $lastEndDate) : self
    {
        $this->lastEndDate = $lastEndDate;
        return $this;
    }
}