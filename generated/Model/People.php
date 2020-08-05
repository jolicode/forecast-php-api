<?php

namespace JoliCode\Forecast\Api\Model;

class People
{
    /**
     * 
     *
     * @var Person[]|null
     */
    protected $people;
    /**
     * 
     *
     * @return Person[]|null
     */
    public function getPeople() : ?array
    {
        return $this->people;
    }
    /**
     * 
     *
     * @param Person[]|null $people
     *
     * @return self
     */
    public function setPeople(?array $people) : self
    {
        $this->people = $people;
        return $this;
    }
}