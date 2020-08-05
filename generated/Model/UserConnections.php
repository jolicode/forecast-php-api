<?php

namespace JoliCode\Forecast\Api\Model;

class UserConnections
{
    /**
     * 
     *
     * @var UserConnection[]|null
     */
    protected $userConnections;
    /**
     * 
     *
     * @return UserConnection[]|null
     */
    public function getUserConnections() : ?array
    {
        return $this->userConnections;
    }
    /**
     * 
     *
     * @param UserConnection[]|null $userConnections
     *
     * @return self
     */
    public function setUserConnections(?array $userConnections) : self
    {
        $this->userConnections = $userConnections;
        return $this;
    }
}