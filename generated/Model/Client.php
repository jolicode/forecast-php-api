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

class Client
{
    /**
     * Is this client archived?
     *
     * @var bool|null
     */
    protected $archived;
    /**
     * id of this client in Harvest.
     *
     * @var int|null
     */
    protected $harvestId;
    /**
     * id of this client.
     *
     * @var int|null
     */
    protected $id;
    /**
     * Name of the client.
     *
     * @var string|null
     */
    protected $name;
    /**
     * date when the client was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * id of the user who last updated this client.
     *
     * @var int|null
     */
    protected $updatedById;

    /**
     * Is this client archived?
     */
    public function getArchived(): ?bool
    {
        return $this->archived;
    }

    /**
     * Is this client archived?
     */
    public function setArchived(?bool $archived): self
    {
        $this->archived = $archived;

        return $this;
    }

    /**
     * id of this client in Harvest.
     */
    public function getHarvestId(): ?int
    {
        return $this->harvestId;
    }

    /**
     * id of this client in Harvest.
     */
    public function setHarvestId(?int $harvestId): self
    {
        $this->harvestId = $harvestId;

        return $this;
    }

    /**
     * id of this client.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * id of this client.
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Name of the client.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the client.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * date when the client was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * date when the client was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * id of the user who last updated this client.
     */
    public function getUpdatedById(): ?int
    {
        return $this->updatedById;
    }

    /**
     * id of the user who last updated this client.
     */
    public function setUpdatedById(?int $updatedById): self
    {
        $this->updatedById = $updatedById;

        return $this;
    }
}
