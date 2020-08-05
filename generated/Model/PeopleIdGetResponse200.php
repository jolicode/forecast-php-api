<?php

namespace JoliCode\Forecast\Api\Model;

class PeopleIdGetResponse200
{
    /**
     * 
     *
     * @var Person|null
     */
    protected $person;
    /**
     * 
     *
     * @return Person|null
     */
    public function getPerson() : ?Person
    {
        return $this->person;
    }
    /**
     * 
     *
     * @param Person|null $person
     *
     * @return self
     */
    public function setPerson(?Person $person) : self
    {
        $this->person = $person;
        return $this;
    }
}