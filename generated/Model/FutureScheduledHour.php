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

class FutureScheduledHour
{
    /**
     * Number of hours allocated.
     *
     * @var int|null
     */
    protected $allocation;
    /**
     * Id of the Person.
     *
     * @var int|null
     */
    protected $personId;
    /**
     * Id of the Placeholder.
     *
     * @var int|null
     */
    protected $placeholderId;
    /**
     * Id of the Project.
     *
     * @var int|null
     */
    protected $projectId;

    /**
     * Number of hours allocated.
     */
    public function getAllocation(): ?int
    {
        return $this->allocation;
    }

    /**
     * Number of hours allocated.
     */
    public function setAllocation(?int $allocation): self
    {
        $this->allocation = $allocation;

        return $this;
    }

    /**
     * Id of the Person.
     */
    public function getPersonId(): ?int
    {
        return $this->personId;
    }

    /**
     * Id of the Person.
     */
    public function setPersonId(?int $personId): self
    {
        $this->personId = $personId;

        return $this;
    }

    /**
     * Id of the Placeholder.
     */
    public function getPlaceholderId(): ?int
    {
        return $this->placeholderId;
    }

    /**
     * Id of the Placeholder.
     */
    public function setPlaceholderId(?int $placeholderId): self
    {
        $this->placeholderId = $placeholderId;

        return $this;
    }

    /**
     * Id of the Project.
     */
    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    /**
     * Id of the Project.
     */
    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;

        return $this;
    }
}
