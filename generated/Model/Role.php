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

class Role extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var list<int>|null
     */
    protected $placeholderIds;
    /**
     * @var list<int>|null
     */
    protected $personIds;
    /**
     * @var int|null
     */
    protected $harvestRoleId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * @return list<int>|null
     */
    public function getPlaceholderIds(): ?array
    {
        return $this->placeholderIds;
    }

    /**
     * @param list<int>|null $placeholderIds
     */
    public function setPlaceholderIds(?array $placeholderIds): self
    {
        $this->initialized['placeholderIds'] = true;
        $this->placeholderIds = $placeholderIds;

        return $this;
    }

    /**
     * @return list<int>|null
     */
    public function getPersonIds(): ?array
    {
        return $this->personIds;
    }

    /**
     * @param list<int>|null $personIds
     */
    public function setPersonIds(?array $personIds): self
    {
        $this->initialized['personIds'] = true;
        $this->personIds = $personIds;

        return $this;
    }

    public function getHarvestRoleId(): ?int
    {
        return $this->harvestRoleId;
    }

    public function setHarvestRoleId(?int $harvestRoleId): self
    {
        $this->initialized['harvestRoleId'] = true;
        $this->harvestRoleId = $harvestRoleId;

        return $this;
    }
}
