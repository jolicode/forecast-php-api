<?php

namespace JoliCode\Forecast\Api\Model;

class Roles
{
    /**
     * 
     *
     * @var Role[]|null
     */
    protected $roles;
    /**
     * 
     *
     * @return Role[]|null
     */
    public function getRoles() : ?array
    {
        return $this->roles;
    }
    /**
     * 
     *
     * @param Role[]|null $roles
     *
     * @return self
     */
    public function setRoles(?array $roles) : self
    {
        $this->roles = $roles;
        return $this;
    }
}