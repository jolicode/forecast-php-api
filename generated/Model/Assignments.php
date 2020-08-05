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

class Assignments
{
    /**
     * @var Assignment[]|null
     */
    protected $assignments;

    /**
     * @return Assignment[]|null
     */
    public function getAssignments(): ?array
    {
        return $this->assignments;
    }

    /**
     * @param Assignment[]|null $assignments
     */
    public function setAssignments(?array $assignments): self
    {
        $this->assignments = $assignments;

        return $this;
    }
}
