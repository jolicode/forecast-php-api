<?php

namespace JoliCode\Forecast\Api\Model;

class UserCurrentUser
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
     * @var int[]|null
     */
    protected $accountIds;
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
     * @return int[]|null
     */
    public function getAccountIds() : ?array
    {
        return $this->accountIds;
    }
    /**
     * 
     *
     * @param int[]|null $accountIds
     *
     * @return self
     */
    public function setAccountIds(?array $accountIds) : self
    {
        $this->accountIds = $accountIds;
        return $this;
    }
}