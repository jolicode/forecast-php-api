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

class RepeatedAssignmentSetBodyRepeatedAssignmentSet extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var Assignment|null
     */
    protected $assignment;
    /**
     * Number of weeks to repeat.
     *
     * @var int|null
     */
    protected $weeks;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getAssignment(): ?Assignment
    {
        return $this->assignment;
    }

    public function setAssignment(?Assignment $assignment): self
    {
        $this->initialized['assignment'] = true;
        $this->assignment = $assignment;

        return $this;
    }

    /**
     * Number of weeks to repeat.
     */
    public function getWeeks(): ?int
    {
        return $this->weeks;
    }

    /**
     * Number of weeks to repeat.
     */
    public function setWeeks(?int $weeks): self
    {
        $this->initialized['weeks'] = true;
        $this->weeks = $weeks;

        return $this;
    }
}
