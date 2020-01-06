<?php

namespace JoliCode\Forecast\Api\Model;

class People
{
    /**
     * 
     *
     * @var Person[]
     */
    protected $people;
    /**
     * 
     *
     * @return Person[]
     */
    public function getPeople() : array
    {
        return $this->people;
    }
    /**
     * 
     *
     * @param Person[] $people
     *
     * @return self
     */
    public function setPeople(array $people) : self
    {
        $this->people = $people;
        return $this;
    }
}