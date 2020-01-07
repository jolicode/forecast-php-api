<?php

namespace JoliCode\Forecast\Api\Model;

class RepeatedAssignmentSets
{
    /**
     * 
     *
     * @var RepeatedAssignmentSet[]|null
     */
    protected $repeatedAssignmentSets;
    /**
     * 
     *
     * @return RepeatedAssignmentSet[]|null
     */
    public function getRepeatedAssignmentSets() : ?array
    {
        return $this->repeatedAssignmentSets;
    }
    /**
     * 
     *
     * @param RepeatedAssignmentSet[]|null $repeatedAssignmentSets
     *
     * @return self
     */
    public function setRepeatedAssignmentSets(?array $repeatedAssignmentSets) : self
    {
        $this->repeatedAssignmentSets = $repeatedAssignmentSets;
        return $this;
    }
}