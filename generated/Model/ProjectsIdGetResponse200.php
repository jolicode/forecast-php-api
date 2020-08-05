<?php

namespace JoliCode\Forecast\Api\Model;

class ProjectsIdGetResponse200
{
    /**
     * 
     *
     * @var Project|null
     */
    protected $project;
    /**
     * 
     *
     * @return Project|null
     */
    public function getProject() : ?Project
    {
        return $this->project;
    }
    /**
     * 
     *
     * @param Project|null $project
     *
     * @return self
     */
    public function setProject(?Project $project) : self
    {
        $this->project = $project;
        return $this;
    }
}