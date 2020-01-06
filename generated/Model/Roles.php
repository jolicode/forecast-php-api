<?php

namespace JoliCode\Forecast\Api\Model;

class Roles
{
    /**
     * 
     *
     * @var Role[]
     */
    protected $roles;
    /**
     * 
     *
     * @return Role[]
     */
    public function getRoles() : array
    {
        return $this->roles;
    }
    /**
     * 
     *
     * @param Role[] $roles
     *
     * @return self
     */
    public function setRoles(array $roles) : self
    {
        $this->roles = $roles;
        return $this;
    }
}