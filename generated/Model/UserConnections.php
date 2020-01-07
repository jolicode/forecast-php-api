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

class UserConnections
{
    /**
     * @var UserConnection[]|null
     */
    protected $userConnections;

    /**
     * @return UserConnection[]|null
     */
    public function getUserConnections(): ?array
    {
        return $this->userConnections;
    }

    /**
     * @param UserConnection[]|null $userConnections
     */
    public function setUserConnections(?array $userConnections): self
    {
        $this->userConnections = $userConnections;

        return $this;
    }
}
