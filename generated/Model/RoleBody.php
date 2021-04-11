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

class RoleBody
{
    /**
     * @var RoleBodyRole|null
     */
    protected $role;

    public function getRole(): ?RoleBodyRole
    {
        return $this->role;
    }

    public function setRole(?RoleBodyRole $role): self
    {
        $this->role = $role;

        return $this;
    }
}
