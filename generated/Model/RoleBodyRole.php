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

class RoleBodyRole
{
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var int[]|null
     */
    protected $personIds;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getPersonIds(): ?array
    {
        return $this->personIds;
    }

    /**
     * @param int[]|null $personIds
     */
    public function setPersonIds(?array $personIds): self
    {
        $this->personIds = $personIds;

        return $this;
    }
}
