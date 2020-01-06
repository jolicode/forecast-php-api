<?php

namespace JoliCode\Forecast\Api\Model;

class RepeatedAssignmentSets
{
    /**
     * 
     *
     * @var RepeatedAssignmentSet[]
     */
    protected $repeatedAssignmentSets;
    /**
     * 
     *
     * @return RepeatedAssignmentSet[]
     */
    public function getRepeatedAssignmentSets() : array
    {
        return $this->repeatedAssignmentSets;
    }
    /**
     * 
     *
     * @param RepeatedAssignmentSet[] $repeatedAssignmentSets
     *
     * @return self
     */
    public function setRepeatedAssignmentSets(array $repeatedAssignmentSets) : self
    {
        $this->repeatedAssignmentSets = $repeatedAssignmentSets;
        return $this;
    }
}