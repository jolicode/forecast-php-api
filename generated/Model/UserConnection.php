<?php

namespace JoliCode\Forecast\Api\Model;

class UserConnection
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
    protected $lastActiveAt;
    /**
     * 
     *
     * @var int|null
     */
    protected $personId;
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
    public function getLastActiveAt() : ?string
    {
        return $this->lastActiveAt;
    }
    /**
     * 
     *
     * @param string|null $lastActiveAt
     *
     * @return self
     */
    public function setLastActiveAt(?string $lastActiveAt) : self
    {
        $this->lastActiveAt = $lastActiveAt;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPersonId() : ?int
    {
        return $this->personId;
    }
    /**
     * 
     *
     * @param int|null $personId
     *
     * @return self
     */
    public function setPersonId(?int $personId) : self
    {
        $this->personId = $personId;
        return $this;
    }
}