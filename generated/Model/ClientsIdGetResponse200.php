<?php

namespace JoliCode\Forecast\Api\Model;

class ClientsIdGetResponse200
{
    /**
     * 
     *
     * @var Client
     */
    protected $client;
    /**
     * 
     *
     * @return Client
     */
    public function getClient() : Client
    {
        return $this->client;
    }
    /**
     * 
     *
     * @param Client $client
     *
     * @return self
     */
    public function setClient(Client $client) : self
    {
        $this->client = $client;
        return $this;
    }
}