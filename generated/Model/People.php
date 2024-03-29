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

class People extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<Person>|null
     */
    protected $people;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<Person>|null
     */
    public function getPeople(): ?array
    {
        return $this->people;
    }

    /**
     * @param list<Person>|null $people
     */
    public function setPeople(?array $people): self
    {
        $this->initialized['people'] = true;
        $this->people = $people;

        return $this;
    }
}
