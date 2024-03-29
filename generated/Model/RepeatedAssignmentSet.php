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

class RepeatedAssignmentSet extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<int>|null
     */
    protected $assignmentIds;
    /**
     * @var \DateTime|null
     */
    protected $firstStartDate;
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var \DateTime|null
     */
    protected $lastEndDate;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<int>|null
     */
    public function getAssignmentIds(): ?array
    {
        return $this->assignmentIds;
    }

    /**
     * @param list<int>|null $assignmentIds
     */
    public function setAssignmentIds(?array $assignmentIds): self
    {
        $this->initialized['assignmentIds'] = true;
        $this->assignmentIds = $assignmentIds;

        return $this;
    }

    public function getFirstStartDate(): ?\DateTime
    {
        return $this->firstStartDate;
    }

    public function setFirstStartDate(?\DateTime $firstStartDate): self
    {
        $this->initialized['firstStartDate'] = true;
        $this->firstStartDate = $firstStartDate;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getLastEndDate(): ?\DateTime
    {
        return $this->lastEndDate;
    }

    public function setLastEndDate(?\DateTime $lastEndDate): self
    {
        $this->initialized['lastEndDate'] = true;
        $this->lastEndDate = $lastEndDate;

        return $this;
    }
}
