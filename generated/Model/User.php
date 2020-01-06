<?php

namespace JoliCode\Forecast\Api\Model;

class User
{
    /**
     * 
     *
     * @var UserCurrentUser
     */
    protected $currentUser;
    /**
     * 
     *
     * @return UserCurrentUser
     */
    public function getCurrentUser() : UserCurrentUser
    {
        return $this->currentUser;
    }
    /**
     * 
     *
     * @param UserCurrentUser $currentUser
     *
     * @return self
     */
    public function setCurrentUser(UserCurrentUser $currentUser) : self
    {
        $this->currentUser = $currentUser;
        return $this;
    }
}