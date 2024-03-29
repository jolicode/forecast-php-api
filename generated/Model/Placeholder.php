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

class Placeholder extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var bool|null
     */
    protected $archived;
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var list<string>|null
     */
    protected $roles;
    /**
     * date when the Placeholder was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * id of the user who last updated this Placeholder.
     *
     * @var int|null
     */
    protected $updatedById;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getArchived(): ?bool
    {
        return $this->archived;
    }

    public function setArchived(?bool $archived): self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;

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
     * @return list<string>|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * @param list<string>|null $roles
     */
    public function setRoles(?array $roles): self
    {
        $this->initialized['roles'] = true;
        $this->roles = $roles;

        return $this;
    }

    /**
     * date when the Placeholder was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * date when the Placeholder was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * id of the user who last updated this Placeholder.
     */
    public function getUpdatedById(): ?int
    {
        return $this->updatedById;
    }

    /**
     * id of the user who last updated this Placeholder.
     */
    public function setUpdatedById(?int $updatedById): self
    {
        $this->initialized['updatedById'] = true;
        $this->updatedById = $updatedById;

        return $this;
    }
}
