<?php

/*
 * This file is part of JoliCode's Forecast PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Forecast\Api\Model;

class Projects
{
    /**
     * @var Project[]|null
     */
    protected $projects;

    /**
     * @return Project[]|null
     */
    public function getProjects(): ?array
    {
        return $this->projects;
    }

    /**
     * @param Project[]|null $projects
     */
    public function setProjects(?array $projects): self
    {
        $this->projects = $projects;

        return $this;
    }
}
