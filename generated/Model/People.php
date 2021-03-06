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

class People
{
    /**
     * @var Person[]|null
     */
    protected $people;

    /**
     * @return Person[]|null
     */
    public function getPeople(): ?array
    {
        return $this->people;
    }

    /**
     * @param Person[]|null $people
     */
    public function setPeople(?array $people): self
    {
        $this->people = $people;

        return $this;
    }
}
