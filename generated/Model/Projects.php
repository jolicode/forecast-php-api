<?php

namespace JoliCode\Forecast\Api\Model;

class Projects
{
    /**
     * 
     *
     * @var Project[]|null
     */
    protected $projects;
    /**
     * 
     *
     * @return Project[]|null
     */
    public function getProjects() : ?array
    {
        return $this->projects;
    }
    /**
     * 
     *
     * @param Project[]|null $projects
     *
     * @return self
     */
    public function setProjects(?array $projects) : self
    {
        $this->projects = $projects;
        return $this;
    }
}