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

class RepeatedAssignmentSetBody extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var RepeatedAssignmentSetBodyRepeatedAssignmentSet|null
     */
    protected $repeatedAssignmentSet;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getRepeatedAssignmentSet(): ?RepeatedAssignmentSetBodyRepeatedAssignmentSet
    {
        return $this->repeatedAssignmentSet;
    }

    public function setRepeatedAssignmentSet(?RepeatedAssignmentSetBodyRepeatedAssignmentSet $repeatedAssignmentSet): self
    {
        $this->initialized['repeatedAssignmentSet'] = true;
        $this->repeatedAssignmentSet = $repeatedAssignmentSet;

        return $this;
    }
}
