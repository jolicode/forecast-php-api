<?php

namespace JoliCode\Forecast\Api\Model;

class Role
{
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
     * @var int[]|null
     */
    protected $placeholderIds;
    /**
     * 
     *
     * @var int[]|null
     */
    protected $personIds;
    /**
     * 
     *
     * @var int|null
     */
    protected $harvestRoleId;
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
     * @return int[]|null
     */
    public function getPlaceholderIds() : ?array
    {
        return $this->placeholderIds;
    }
    /**
     * 
     *
     * @param int[]|null $placeholderIds
     *
     * @return self
     */
    public function setPlaceholderIds(?array $placeholderIds) : self
    {
        $this->placeholderIds = $placeholderIds;
        return $this;
    }
    /**
     * 
     *
     * @return int[]|null
     */
    public function getPersonIds() : ?array
    {
        return $this->personIds;
    }
    /**
     * 
     *
     * @param int[]|null $personIds
     *
     * @return self
     */
    public function setPersonIds(?array $personIds) : self
    {
        $this->personIds = $personIds;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHarvestRoleId() : ?int
    {
        return $this->harvestRoleId;
    }
    /**
     * 
     *
     * @param int|null $harvestRoleId
     *
     * @return self
     */
    public function setHarvestRoleId(?int $harvestRoleId) : self
    {
        $this->harvestRoleId = $harvestRoleId;
        return $this;
    }
}