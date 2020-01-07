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
     * @var string|null
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
     * @var string|null
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
     * @return string|null
     */
    public function getFirstStartDate() : ?string
    {
        return $this->firstStartDate;
    }
    /**
     * 
     *
     * @param string|null $firstStartDate
     *
     * @return self
     */
    public function setFirstStartDate(?string $firstStartDate) : self
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
     * @return string|null
     */
    public function getLastEndDate() : ?string
    {
        return $this->lastEndDate;
    }
    /**
     * 
     *
     * @param string|null $lastEndDate
     *
     * @return self
     */
    public function setLastEndDate(?string $lastEndDate) : self
    {
        $this->lastEndDate = $lastEndDate;
        return $this;
    }
}