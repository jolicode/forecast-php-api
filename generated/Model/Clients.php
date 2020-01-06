<?php

namespace JoliCode\Forecast\Api\Model;

class Clients
{
    /**
     * 
     *
     * @var Client[]
     */
    protected $clients;
    /**
     * 
     *
     * @return Client[]
     */
    public function getClients() : array
    {
        return $this->clients;
    }
    /**
     * 
     *
     * @param Client[] $clients
     *
     * @return self
     */
    public function setClients(array $clients) : self
    {
        $this->clients = $clients;
        return $this;
    }
}