<?php

namespace JoliCode\Forecast\Api\Model;

class RepeatedAssignmentSetsIdGetResponse200
{
    /**
     * 
     *
     * @var RepeatedAssignmentSet|null
     */
    protected $repeatedAssignmentSet;
    /**
     * 
     *
     * @return RepeatedAssignmentSet|null
     */
    public function getRepeatedAssignmentSet() : ?RepeatedAssignmentSet
    {
        return $this->repeatedAssignmentSet;
    }
    /**
     * 
     *
     * @param RepeatedAssignmentSet|null $repeatedAssignmentSet
     *
     * @return self
     */
    public function setRepeatedAssignmentSet(?RepeatedAssignmentSet $repeatedAssignmentSet) : self
    {
        $this->repeatedAssignmentSet = $repeatedAssignmentSet;
        return $this;
    }
}