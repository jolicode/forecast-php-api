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

class RoleBodyRole extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var string|null
     */
    protected $name;
    /**
     * @var list<int>|null
     */
    protected $personIds;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    /**
     * @return list<int>|null
     */
    public function getPersonIds(): ?array
    {
        return $this->personIds;
    }

    /**
     * @param list<int>|null $personIds
     */
    public function setPersonIds(?array $personIds): self
    {
        $this->initialized['personIds'] = true;
        $this->personIds = $personIds;

        return $this;
    }
}
