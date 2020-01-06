<?php

namespace JoliCode\Forecast\Api\Model;

class UserCurrentUser
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
     * @var int[]
     */
    protected $accountIds;
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
     * @return int[]
     */
    public function getAccountIds() : array
    {
        return $this->accountIds;
    }
    /**
     * 
     *
     * @param int[] $accountIds
     *
     * @return self
     */
    public function setAccountIds(array $accountIds) : self
    {
        $this->accountIds = $accountIds;
        return $this;
    }
}