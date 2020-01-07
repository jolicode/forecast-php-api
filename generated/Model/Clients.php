<?php

namespace JoliCode\Forecast\Api\Model;

class Clients
{
    /**
     * 
     *
     * @var Client[]|null
     */
    protected $clients;
    /**
     * 
     *
     * @return Client[]|null
     */
    public function getClients() : ?array
    {
        return $this->clients;
    }
    /**
     * 
     *
     * @param Client[]|null $clients
     *
     * @return self
     */
    public function setClients(?array $clients) : self
    {
        $this->clients = $clients;
        return $this;
    }
}