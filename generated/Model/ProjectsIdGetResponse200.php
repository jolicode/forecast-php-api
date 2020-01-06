<?php

namespace JoliCode\Forecast\Api\Model;

class ProjectsIdGetResponse200
{
    /**
     * 
     *
     * @var Project
     */
    protected $project;
    /**
     * 
     *
     * @return Project
     */
    public function getProject() : Project
    {
        return $this->project;
    }
    /**
     * 
     *
     * @param Project $project
     *
     * @return self
     */
    public function setProject(Project $project) : self
    {
        $this->project = $project;
        return $this;
    }
}