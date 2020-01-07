<?php

namespace JoliCode\Forecast\Api\Model;

class ClientsIdGetResponse200
{
    /**
     * 
     *
     * @var Client|null
     */
    protected $client;
    /**
     * 
     *
     * @return Client|null
     */
    public function getClient() : ?Client
    {
        return $this->client;
    }
    /**
     * 
     *
     * @param Client|null $client
     *
     * @return self
     */
    public function setClient(?Client $client) : self
    {
        $this->client = $client;
        return $this;
    }
}