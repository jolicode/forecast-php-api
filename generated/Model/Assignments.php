<?php

namespace JoliCode\Forecast\Api\Model;

class Assignments
{
    /**
     * 
     *
     * @var Assignment[]|null
     */
    protected $assignments;
    /**
     * 
     *
     * @return Assignment[]|null
     */
    public function getAssignments() : ?array
    {
        return $this->assignments;
    }
    /**
     * 
     *
     * @param Assignment[]|null $assignments
     *
     * @return self
     */
    public function setAssignments(?array $assignments) : self
    {
        $this->assignments = $assignments;
        return $this;
    }
}