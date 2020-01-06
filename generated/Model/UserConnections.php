<?php

namespace JoliCode\Forecast\Api\Model;

class UserConnections
{
    /**
     * 
     *
     * @var UserConnection[]
     */
    protected $userConnections;
    /**
     * 
     *
     * @return UserConnection[]
     */
    public function getUserConnections() : array
    {
        return $this->userConnections;
    }
    /**
     * 
     *
     * @param UserConnection[] $userConnections
     *
     * @return self
     */
    public function setUserConnections(array $userConnections) : self
    {
        $this->userConnections = $userConnections;
        return $this;
    }
}