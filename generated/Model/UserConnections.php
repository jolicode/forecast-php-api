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

class UserConnections extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<UserConnection>|null
     */
    protected $userConnections;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<UserConnection>|null
     */
    public function getUserConnections(): ?array
    {
        return $this->userConnections;
    }

    /**
     * @param list<UserConnection>|null $userConnections
     */
    public function setUserConnections(?array $userConnections): self
    {
        $this->initialized['userConnections'] = true;
        $this->userConnections = $userConnections;

        return $this;
    }
}
