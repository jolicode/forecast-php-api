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

class Clients
{
    /**
     * @var Client[]|null
     */
    protected $clients;

    /**
     * @return Client[]|null
     */
    public function getClients(): ?array
    {
        return $this->clients;
    }

    /**
     * @param Client[]|null $clients
     */
    public function setClients(?array $clients): self
    {
        $this->clients = $clients;

        return $this;
    }
}
