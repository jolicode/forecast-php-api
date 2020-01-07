<?php

namespace JoliCode\Forecast\Api\Model;

class Placeholder
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $archived;
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
    protected $name;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $roles;
    /**
     * date when the Placeholder was last updated
     *
     * @var string|null
     */
    protected $updatedAt;
    /**
     * id of the user who last updated this Placeholder
     *
     * @var int|null
     */
    protected $updatedById;
    /**
     * 
     *
     * @return bool|null
     */
    public function getArchived() : ?bool
    {
        return $this->archived;
    }
    /**
     * 
     *
     * @param bool|null $archived
     *
     * @return self
     */
    public function setArchived(?bool $archived) : self
    {
        $this->archived = $archived;
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
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getRoles() : ?array
    {
        return $this->roles;
    }
    /**
     * 
     *
     * @param string[]|null $roles
     *
     * @return self
     */
    public function setRoles(?array $roles) : self
    {
        $this->roles = $roles;
        return $this;
    }
    /**
     * date when the Placeholder was last updated
     *
     * @return string|null
     */
    public function getUpdatedAt() : ?string
    {
        return $this->updatedAt;
    }
    /**
     * date when the Placeholder was last updated
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
     * id of the user who last updated this Placeholder
     *
     * @return int|null
     */
    public function getUpdatedById() : ?int
    {
        return $this->updatedById;
    }
    /**
     * id of the user who last updated this Placeholder
     *
     * @param int|null $updatedById
     *
     * @return self
     */
    public function setUpdatedById(?int $updatedById) : self
    {
        $this->updatedById = $updatedById;
        return $this;
    }
}