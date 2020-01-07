<?php

namespace JoliCode\Forecast\Api\Model;

class RolesIdGetResponse200
{
    /**
     * 
     *
     * @var Role|null
     */
    protected $role;
    /**
     * 
     *
     * @return Role|null
     */
    public function getRole() : ?Role
    {
        return $this->role;
    }
    /**
     * 
     *
     * @param Role|null $role
     *
     * @return self
     */
    public function setRole(?Role $role) : self
    {
        $this->role = $role;
        return $this;
    }
}