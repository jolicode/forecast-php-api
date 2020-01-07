<?php

namespace JoliCode\Forecast\Api\Model;

class AssignmentsIdGetResponse200
{
    /**
     * 
     *
     * @var Assignment|null
     */
    protected $assignment;
    /**
     * 
     *
     * @return Assignment|null
     */
    public function getAssignment() : ?Assignment
    {
        return $this->assignment;
    }
    /**
     * 
     *
     * @param Assignment|null $assignment
     *
     * @return self
     */
    public function setAssignment(?Assignment $assignment) : self
    {
        $this->assignment = $assignment;
        return $this;
    }
}