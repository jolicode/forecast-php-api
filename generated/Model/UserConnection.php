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

class UserConnection extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var \DateTime|null
     */
    protected $lastActiveAt;
    /**
     * @var int|null
     */
    protected $personId;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getLastActiveAt(): ?\DateTime
    {
        return $this->lastActiveAt;
    }

    public function setLastActiveAt(?\DateTime $lastActiveAt): self
    {
        $this->initialized['lastActiveAt'] = true;
        $this->lastActiveAt = $lastActiveAt;

        return $this;
    }

    public function getPersonId(): ?int
    {
        return $this->personId;
    }

    public function setPersonId(?int $personId): self
    {
        $this->initialized['personId'] = true;
        $this->personId = $personId;

        return $this;
    }
}
