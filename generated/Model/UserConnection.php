<?php

namespace JoliCode\Forecast\Api\Model;

class UserConnection
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
    protected $lastActiveAt;
    /**
     * 
     *
     * @var int
     */
    protected $personId;
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
    public function getLastActiveAt() : string
    {
        return $this->lastActiveAt;
    }
    /**
     * 
     *
     * @param string $lastActiveAt
     *
     * @return self
     */
    public function setLastActiveAt(string $lastActiveAt) : self
    {
        $this->lastActiveAt = $lastActiveAt;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPersonId() : int
    {
        return $this->personId;
    }
    /**
     * 
     *
     * @param int $personId
     *
     * @return self
     */
    public function setPersonId(int $personId) : self
    {
        $this->personId = $personId;
        return $this;
    }
}