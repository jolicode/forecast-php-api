<?php

namespace JoliCode\Forecast\Api\Model;

class Assignment
{
    /**
     * should the assignement be also active on days off?
     *
     * @var bool|null
     */
    protected $activeOnDaysOff;
    /**
     * Number of seconds assigned
     *
     * @var int|null
     */
    protected $allocation;
    /**
     * end date
     *
     * @var string|null
     */
    protected $endDate;
    /**
     * Id of the assignement
     *
     * @var int|null
     */
    protected $id;
    /**
     * literature about the assignement
     *
     * @var string|null
     */
    protected $notes;
    /**
     * id of the user who is assigned
     *
     * @var int|null
     */
    protected $personId;
    /**
     * id of the placeholder who is assigned
     *
     * @var int|null
     */
    protected $placeholderId;
    /**
     * id of the project which is assigned
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * if the assignment belongs to a repeated_assignment_set, its id
     *
     * @var int|null
     */
    protected $repeatedAssignmentSetId;
    /**
     * start date
     *
     * @var string|null
     */
    protected $startDate;
    /**
     * date when the assignment was last updated
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * id of the user who last updated this assignment
     *
     * @var int|null
     */
    protected $updatedBy;
    /**
     * should the assignement be also active on days off?
     *
     * @return bool|null
     */
    public function getActiveOnDaysOff() : ?bool
    {
        return $this->activeOnDaysOff;
    }
    /**
     * should the assignement be also active on days off?
     *
     * @param bool|null $activeOnDaysOff
     *
     * @return self
     */
    public function setActiveOnDaysOff(?bool $activeOnDaysOff) : self
    {
        $this->activeOnDaysOff = $activeOnDaysOff;
        return $this;
    }
    /**
     * Number of seconds assigned
     *
     * @return int|null
     */
    public function getAllocation() : ?int
    {
        return $this->allocation;
    }
    /**
     * Number of seconds assigned
     *
     * @param int|null $allocation
     *
     * @return self
     */
    public function setAllocation(?int $allocation) : self
    {
        $this->allocation = $allocation;
        return $this;
    }
    /**
     * end date
     *
     * @return string|null
     */
    public function getEndDate() : ?string
    {
        return $this->endDate;
    }
    /**
     * end date
     *
     * @param string|null $endDate
     *
     * @return self
     */
    public function setEndDate(?string $endDate) : self
    {
        $this->endDate = $endDate;
        return $this;
    }
    /**
     * Id of the assignement
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Id of the assignement
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
     * literature about the assignement
     *
     * @return string|null
     */
    public function getNotes() : ?string
    {
        return $this->notes;
    }
    /**
     * literature about the assignement
     *
     * @param string|null $notes
     *
     * @return self
     */
    public function setNotes(?string $notes) : self
    {
        $this->notes = $notes;
        return $this;
    }
    /**
     * id of the user who is assigned
     *
     * @return int|null
     */
    public function getPersonId() : ?int
    {
        return $this->personId;
    }
    /**
     * id of the user who is assigned
     *
     * @param int|null $personId
     *
     * @return self
     */
    public function setPersonId(?int $personId) : self
    {
        $this->personId = $personId;
        return $this;
    }
    /**
     * id of the placeholder who is assigned
     *
     * @return int|null
     */
    public function getPlaceholderId() : ?int
    {
        return $this->placeholderId;
    }
    /**
     * id of the placeholder who is assigned
     *
     * @param int|null $placeholderId
     *
     * @return self
     */
    public function setPlaceholderId(?int $placeholderId) : self
    {
        $this->placeholderId = $placeholderId;
        return $this;
    }
    /**
     * id of the project which is assigned
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * id of the project which is assigned
     *
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * if the assignment belongs to a repeated_assignment_set, its id
     *
     * @return int|null
     */
    public function getRepeatedAssignmentSetId() : ?int
    {
        return $this->repeatedAssignmentSetId;
    }
    /**
     * if the assignment belongs to a repeated_assignment_set, its id
     *
     * @param int|null $repeatedAssignmentSetId
     *
     * @return self
     */
    public function setRepeatedAssignmentSetId(?int $repeatedAssignmentSetId) : self
    {
        $this->repeatedAssignmentSetId = $repeatedAssignmentSetId;
        return $this;
    }
    /**
     * start date
     *
     * @return string|null
     */
    public function getStartDate() : ?string
    {
        return $this->startDate;
    }
    /**
     * start date
     *
     * @param string|null $startDate
     *
     * @return self
     */
    public function setStartDate(?string $startDate) : self
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * date when the assignment was last updated
     *
     * @return string|null
     */
    public function getUpdatedAt() : ?string
    {
        return $this->updatedAt;
    }
    /**
     * date when the assignment was last updated
     *
     * @param string|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?string $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * id of the user who last updated this assignment
     *
     * @return int|null
     */
    public function getUpdatedBy() : ?int
    {
        return $this->updatedBy;
    }
    /**
     * id of the user who last updated this assignment
     *
     * @param int|null $updatedBy
     *
     * @return self
     */
    public function setUpdatedBy(?int $updatedBy) : self
    {
        $this->updatedBy = $updatedBy;
        return $this;
    }
}