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

class Projects extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<Project>|null
     */
    protected $projects;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<Project>|null
     */
    public function getProjects(): ?array
    {
        return $this->projects;
    }

    /**
     * @param list<Project>|null $projects
     */
    public function setProjects(?array $projects): self
    {
        $this->initialized['projects'] = true;
        $this->projects = $projects;

        return $this;
    }
}
