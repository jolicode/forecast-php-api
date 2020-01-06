<?php

namespace JoliCode\Forecast\Api\Model;

class RepeatedAssignmentSetsIdGetResponse200
{
    /**
     * 
     *
     * @var RepeatedAssignmentSet
     */
    protected $repeatedAssignmentSet;
    /**
     * 
     *
     * @return RepeatedAssignmentSet
     */
    public function getRepeatedAssignmentSet() : RepeatedAssignmentSet
    {
        return $this->repeatedAssignmentSet;
    }
    /**
     * 
     *
     * @param RepeatedAssignmentSet $repeatedAssignmentSet
     *
     * @return self
     */
    public function setRepeatedAssignmentSet(RepeatedAssignmentSet $repeatedAssignmentSet) : self
    {
        $this->repeatedAssignmentSet = $repeatedAssignmentSet;
        return $this;
    }
}