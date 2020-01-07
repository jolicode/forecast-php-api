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

class Role
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var int[]|null
     */
    protected $placeholderIds;
    /**
     * @var int[]|null
     */
    protected $personIds;
    /**
     * @var int|null
     */
    protected $harvestRoleId;

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
     * @return int[]|null
     */
    public function getPlaceholderIds(): ?array
    {
        return $this->placeholderIds;
    }

    /**
     * @param int[]|null $placeholderIds
     */
    public function setPlaceholderIds(?array $placeholderIds): self
    {
        $this->placeholderIds = $placeholderIds;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getPersonIds(): ?array
    {
        return $this->personIds;
    }

    /**
     * @param int[]|null $personIds
     */
    public function setPersonIds(?array $personIds): self
    {
        $this->personIds = $personIds;

        return $this;
    }

    public function getHarvestRoleId(): ?int
    {
        return $this->harvestRoleId;
    }

    public function setHarvestRoleId(?int $harvestRoleId): self
    {
        $this->harvestRoleId = $harvestRoleId;

        return $this;
    }
}
