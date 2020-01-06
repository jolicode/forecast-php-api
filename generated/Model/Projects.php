<?php

namespace JoliCode\Forecast\Api\Model;

class Projects
{
    /**
     * 
     *
     * @var Project[]
     */
    protected $projects;
    /**
     * 
     *
     * @return Project[]
     */
    public function getProjects() : array
    {
        return $this->projects;
    }
    /**
     * 
     *
     * @param Project[] $projects
     *
     * @return self
     */
    public function setProjects(array $projects) : self
    {
        $this->projects = $projects;
        return $this;
    }
}