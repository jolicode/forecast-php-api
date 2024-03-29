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

class Assignments extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<Assignment>|null
     */
    protected $assignments;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<Assignment>|null
     */
    public function getAssignments(): ?array
    {
        return $this->assignments;
    }

    /**
     * @param list<Assignment>|null $assignments
     */
    public function setAssignments(?array $assignments): self
    {
        $this->initialized['assignments'] = true;
        $this->assignments = $assignments;

        return $this;
    }
}
