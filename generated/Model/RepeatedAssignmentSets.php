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

class RepeatedAssignmentSets extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<RepeatedAssignmentSet>|null
     */
    protected $repeatedAssignmentSets;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<RepeatedAssignmentSet>|null
     */
    public function getRepeatedAssignmentSets(): ?array
    {
        return $this->repeatedAssignmentSets;
    }

    /**
     * @param list<RepeatedAssignmentSet>|null $repeatedAssignmentSets
     */
    public function setRepeatedAssignmentSets(?array $repeatedAssignmentSets): self
    {
        $this->initialized['repeatedAssignmentSets'] = true;
        $this->repeatedAssignmentSets = $repeatedAssignmentSets;

        return $this;
    }
}
