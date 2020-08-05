<?php

namespace JoliCode\Forecast\Api\Model;

class User
{
    /**
     * 
     *
     * @var UserCurrentUser|null
     */
    protected $currentUser;
    /**
     * 
     *
     * @return UserCurrentUser|null
     */
    public function getCurrentUser() : ?UserCurrentUser
    {
        return $this->currentUser;
    }
    /**
     * 
     *
     * @param UserCurrentUser|null $currentUser
     *
     * @return self
     */
    public function setCurrentUser(?UserCurrentUser $currentUser) : self
    {
        $this->currentUser = $currentUser;
        return $this;
    }
}