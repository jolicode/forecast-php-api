<?php

namespace JoliCode\Forecast\Api\Model;

class RolesIdGetResponse200
{
    /**
     * 
     *
     * @var Role
     */
    protected $role;
    /**
     * 
     *
     * @return Role
     */
    public function getRole() : Role
    {
        return $this->role;
    }
    /**
     * 
     *
     * @param Role $role
     *
     * @return self
     */
    public function setRole(Role $role) : self
    {
        $this->role = $role;
        return $this;
    }
}