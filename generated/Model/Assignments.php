<?php

namespace JoliCode\Forecast\Api\Model;

class Assignments
{
    /**
     * 
     *
     * @var Assignment[]
     */
    protected $assignments;
    /**
     * 
     *
     * @return Assignment[]
     */
    public function getAssignments() : array
    {
        return $this->assignments;
    }
    /**
     * 
     *
     * @param Assignment[] $assignments
     *
     * @return self
     */
    public function setAssignments(array $assignments) : self
    {
        $this->assignments = $assignments;
        return $this;
    }
}