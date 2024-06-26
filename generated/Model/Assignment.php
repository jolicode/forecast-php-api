<?php

/*
 * This file is part of JoliCode's Forecast PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Forecast\Api\Model;

class Assignment extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * should the assignement be also active on days off?
     *
     * @var bool|null
     */
    protected $activeOnDaysOff;
    /**
     * Number of seconds assigned.
     *
     * @var int|null
     */
    protected $allocation;
    /**
     * end date.
     *
     * @var \DateTime|null
     */
    protected $endDate;
    /**
     * Id of the assignement.
     *
     * @var int|null
     */
    protected $id;
    /**
     * literature about the assignement.
     *
     * @var string|null
     */
    protected $notes;
    /**
     * id of the user who is assigned.
     *
     * @var int|null
     */
    protected $personId;
    /**
     * id of the placeholder who is assigned.
     *
     * @var int|null
     */
    protected $placeholderId;
    /**
     * id of the project which is assigned.
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * if the assignment belongs to a repeated_assignment_set, its id.
     *
     * @var int|null
     */
    protected $repeatedAssignmentSetId;
    /**
     * start date.
     *
     * @var \DateTime|null
     */
    protected $startDate;
    /**
     * date when the assignment was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * id of the user who last updated this assignment.
     *
     * @var int|null
     */
    protected $updatedById;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * should the assignement be also active on days off?
     */
    public function getActiveOnDaysOff(): ?bool
    {
        return $this->activeOnDaysOff;
    }

    /**
     * should the assignement be also active on days off?
     */
    public function setActiveOnDaysOff(?bool $activeOnDaysOff): self
    {
        $this->initialized['activeOnDaysOff'] = true;
        $this->activeOnDaysOff = $activeOnDaysOff;

        return $this;
    }

    /**
     * Number of seconds assigned.
     */
    public function getAllocation(): ?int
    {
        return $this->allocation;
    }

    /**
     * Number of seconds assigned.
     */
    public function setAllocation(?int $allocation): self
    {
        $this->initialized['allocation'] = true;
        $this->allocation = $allocation;

        return $this;
    }

    /**
     * end date.
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * end date.
     */
    public function setEndDate(?\DateTime $endDate): self
    {
        $this->initialized['endDate'] = true;
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Id of the assignement.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Id of the assignement.
     */
    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    /**
     * literature about the assignement.
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * literature about the assignement.
     */
    public function setNotes(?string $notes): self
    {
        $this->initialized['notes'] = true;
        $this->notes = $notes;

        return $this;
    }

    /**
     * id of the user who is assigned.
     */
    public function getPersonId(): ?int
    {
        return $this->personId;
    }

    /**
     * id of the user who is assigned.
     */
    public function setPersonId(?int $personId): self
    {
        $this->initialized['personId'] = true;
        $this->personId = $personId;

        return $this;
    }

    /**
     * id of the placeholder who is assigned.
     */
    public function getPlaceholderId(): ?int
    {
        return $this->placeholderId;
    }

    /**
     * id of the placeholder who is assigned.
     */
    public function setPlaceholderId(?int $placeholderId): self
    {
        $this->initialized['placeholderId'] = true;
        $this->placeholderId = $placeholderId;

        return $this;
    }

    /**
     * id of the project which is assigned.
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * id of the project which is assigned.
     */
    public function setProjectId(?int $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * if the assignment belongs to a repeated_assignment_set, its id.
     */
    public function getRepeatedAssignmentSetId(): ?int
    {
        return $this->repeatedAssignmentSetId;
    }

    /**
     * if the assignment belongs to a repeated_assignment_set, its id.
     */
    public function setRepeatedAssignmentSetId(?int $repeatedAssignmentSetId): self
    {
        $this->initialized['repeatedAssignmentSetId'] = true;
        $this->repeatedAssignmentSetId = $repeatedAssignmentSetId;

        return $this;
    }

    /**
     * start date.
     */
    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    /**
     * start date.
     */
    public function setStartDate(?\DateTime $startDate): self
    {
        $this->initialized['startDate'] = true;
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * date when the assignment was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * date when the assignment was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * id of the user who last updated this assignment.
     */
    public function getUpdatedById(): ?int
    {
        return $this->updatedById;
    }

    /**
     * id of the user who last updated this assignment.
     */
    public function setUpdatedById(?int $updatedById): self
    {
        $this->initialized['updatedById'] = true;
        $this->updatedById = $updatedById;

        return $this;
    }
}
