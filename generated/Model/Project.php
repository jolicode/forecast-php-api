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

class Project
{
    /**
     * @var bool|null
     */
    protected $archived;
    /**
     * @var int|null
     */
    protected $clientId;
    /**
     * @var string|null
     */
    protected $code;
    /**
     * @var string|null
     */
    protected $color;
    /**
     * @var \DateTime|null
     */
    protected $endDate;
    /**
     * @var int|null
     */
    protected $harvestId;
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * literature.
     *
     * @var string|null
     */
    protected $notes;
    /**
     * @var \DateTime|null
     */
    protected $startDate;
    /**
     * @var string[]|null
     */
    protected $tags;
    /**
     * date when the Project was last updated.
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * id of the user who last updated this Project.
     *
     * @var int|null
     */
    protected $updatedById;

    public function getArchived(): ?bool
    {
        return $this->archived;
    }

    public function setArchived(?bool $archived): self
    {
        $this->archived = $archived;

        return $this;
    }

    public function getClientId(): ?int
    {
        return $this->clientId;
    }

    public function setClientId(?int $clientId): self
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    public function setEndDate(?\DateTime $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getHarvestId(): ?int
    {
        return $this->harvestId;
    }

    public function setHarvestId(?int $harvestId): self
    {
        $this->harvestId = $harvestId;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * literature.
     */
    public function getNotes(): ?string
    {
        return $this->notes;
    }

    /**
     * literature.
     */
    public function setNotes(?string $notes): self
    {
        $this->notes = $notes;

        return $this;
    }

    public function getStartDate(): ?\DateTime
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTime $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getTags(): ?array
    {
        return $this->tags;
    }

    /**
     * @param string[]|null $tags
     */
    public function setTags(?array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * date when the Project was last updated.
     */
    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    /**
     * date when the Project was last updated.
     */
    public function setUpdatedAt(?string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * id of the user who last updated this Project.
     */
    public function getUpdatedById(): ?int
    {
        return $this->updatedById;
    }

    /**
     * id of the user who last updated this Project.
     */
    public function setUpdatedById(?int $updatedById): self
    {
        $this->updatedById = $updatedById;

        return $this;
    }
}
