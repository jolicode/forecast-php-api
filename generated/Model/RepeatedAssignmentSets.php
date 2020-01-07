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

class RepeatedAssignmentSets
{
    /**
     * @var RepeatedAssignmentSet[]|null
     */
    protected $repeatedAssignmentSets;

    /**
     * @return RepeatedAssignmentSet[]|null
     */
    public function getRepeatedAssignmentSets(): ?array
    {
        return $this->repeatedAssignmentSets;
    }

    /**
     * @param RepeatedAssignmentSet[]|null $repeatedAssignmentSets
     */
    public function setRepeatedAssignmentSets(?array $repeatedAssignmentSets): self
    {
        $this->repeatedAssignmentSets = $repeatedAssignmentSets;

        return $this;
    }
}
