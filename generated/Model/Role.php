<?php

namespace JoliCode\Forecast\Api\Model;

class Role
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int[]
     */
    protected $placeholderIds;
    /**
     * 
     *
     * @var int[]
     */
    protected $personIds;
    /**
     * 
     *
     * @var int
     */
    protected $harvestRoleId;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getPlaceholderIds() : array
    {
        return $this->placeholderIds;
    }
    /**
     * 
     *
     * @param int[] $placeholderIds
     *
     * @return self
     */
    public function setPlaceholderIds(array $placeholderIds) : self
    {
        $this->placeholderIds = $placeholderIds;
        return $this;
    }
    /**
     * 
     *
     * @return int[]
     */
    public function getPersonIds() : array
    {
        return $this->personIds;
    }
    /**
     * 
     *
     * @param int[] $personIds
     *
     * @return self
     */
    public function setPersonIds(array $personIds) : self
    {
        $this->personIds = $personIds;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getHarvestRoleId() : int
    {
        return $this->harvestRoleId;
    }
    /**
     * 
     *
     * @param int $harvestRoleId
     *
     * @return self
     */
    public function setHarvestRoleId(int $harvestRoleId) : self
    {
        $this->harvestRoleId = $harvestRoleId;
        return $this;
    }
}