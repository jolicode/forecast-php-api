<?php

namespace JoliCode\Forecast\Api\Model;

class AssignmentsPostResponse200
{
    /**
     * 
     *
     * @var Assignment
     */
    protected $assignment;
    /**
     * 
     *
     * @return Assignment
     */
    public function getAssignment() : Assignment
    {
        return $this->assignment;
    }
    /**
     * 
     *
     * @param Assignment $assignment
     *
     * @return self
     */
    public function setAssignment(Assignment $assignment) : self
    {
        $this->assignment = $assignment;
        return $this;
    }
}