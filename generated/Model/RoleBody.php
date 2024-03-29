<?php

/*
 * This file is part of JoliCode's Forecast PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Forecast\Api\Model;

class RoleBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var RoleBodyRole|null
     */
    protected $role;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getRole(): ?RoleBodyRole
    {
        return $this->role;
    }

    public function setRole(?RoleBodyRole $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;

        return $this;
    }
}
