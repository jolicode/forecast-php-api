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

class Person extends \ArrayObject
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
     * @var string|null
     */
    protected $firstName;
    /**
     * @var string|null
     */
    protected $lastName;
    /**
     * @var string|null
     */
    protected $email;
    /**
     * If the user is allowed to login, contains "enabled". Else, contains "disabled".
     *
     * @var string|null
     */
    protected $login;
    /**
     * Is the user an admin?
     *
     * @var bool|null
     */
    protected $admin;
    /**
     * Is the user an admin?
     *
     * @var bool|null
     */
    protected $archived;
    /**
     * Did the user subscribe?
     *
     * @var bool|null
     */
    protected $subscribed;
    /**
     * URL of the user's avatar image.
     *
     * @var string|null
     */
    protected $avatarUrl;
    /**
     * @var list<string>|null
     */
    protected $roles;
    /**
     * date when the Person was last updated.
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * id of the user who last updated this Person.
     *
     * @var int|null
     */
    protected $updatedById;
    /**
     * Id of the user in Harvest.
     *
     * @var int|null
     */
    protected $harvestUserId;
    /**
     * Number of seconds of capacity in each week.
     *
     * @var int|null
     */
    protected $weeklyCapacity;
    /**
     * @var PersonWorkingDays|null
     */
    protected $workingDays;
    /**
     * @var bool|null
     */
    protected $colorBlind;
    /**
     * @var int|null
     */
    protected $personalFeedTokenId;

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

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->initialized['firstName'] = true;
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;

        return $this;
    }

    /**
     * If the user is allowed to login, contains "enabled". Else, contains "disabled".
     */
    public function getLogin(): ?string
    {
        return $this->login;
    }

    /**
     * If the user is allowed to login, contains "enabled". Else, contains "disabled".
     */
    public function setLogin(?string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;

        return $this;
    }

    /**
     * Is the user an admin?
     */
    public function getAdmin(): ?bool
    {
        return $this->admin;
    }

    /**
     * Is the user an admin?
     */
    public function setAdmin(?bool $admin): self
    {
        $this->initialized['admin'] = true;
        $this->admin = $admin;

        return $this;
    }

    /**
     * Is the user an admin?
     */
    public function getArchived(): ?bool
    {
        return $this->archived;
    }

    /**
     * Is the user an admin?
     */
    public function setArchived(?bool $archived): self
    {
        $this->initialized['archived'] = true;
        $this->archived = $archived;

        return $this;
    }

    /**
     * Did the user subscribe?
     */
    public function getSubscribed(): ?bool
    {
        return $this->subscribed;
    }

    /**
     * Did the user subscribe?
     */
    public function setSubscribed(?bool $subscribed): self
    {
        $this->initialized['subscribed'] = true;
        $this->subscribed = $subscribed;

        return $this;
    }

    /**
     * URL of the user's avatar image.
     */
    public function getAvatarUrl(): ?string
    {
        return $this->avatarUrl;
    }

    /**
     * URL of the user's avatar image.
     */
    public function setAvatarUrl(?string $avatarUrl): self
    {
        $this->initialized['avatarUrl'] = true;
        $this->avatarUrl = $avatarUrl;

        return $this;
    }

    /**
     * @return list<string>|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * @param list<string>|null $roles
     */
    public function setRoles(?array $roles): self
    {
        $this->initialized['roles'] = true;
        $this->roles = $roles;

        return $this;
    }

    /**
     * date when the Person was last updated.
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * date when the Person was last updated.
     */
    public function setUpdatedAt(?\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * id of the user who last updated this Person.
     */
    public function getUpdatedById(): ?int
    {
        return $this->updatedById;
    }

    /**
     * id of the user who last updated this Person.
     */
    public function setUpdatedById(?int $updatedById): self
    {
        $this->initialized['updatedById'] = true;
        $this->updatedById = $updatedById;

        return $this;
    }

    /**
     * Id of the user in Harvest.
     */
    public function getHarvestUserId(): ?int
    {
        return $this->harvestUserId;
    }

    /**
     * Id of the user in Harvest.
     */
    public function setHarvestUserId(?int $harvestUserId): self
    {
        $this->initialized['harvestUserId'] = true;
        $this->harvestUserId = $harvestUserId;

        return $this;
    }

    /**
     * Number of seconds of capacity in each week.
     */
    public function getWeeklyCapacity(): ?int
    {
        return $this->weeklyCapacity;
    }

    /**
     * Number of seconds of capacity in each week.
     */
    public function setWeeklyCapacity(?int $weeklyCapacity): self
    {
        $this->initialized['weeklyCapacity'] = true;
        $this->weeklyCapacity = $weeklyCapacity;

        return $this;
    }

    public function getWorkingDays(): ?PersonWorkingDays
    {
        return $this->workingDays;
    }

    public function setWorkingDays(?PersonWorkingDays $workingDays): self
    {
        $this->initialized['workingDays'] = true;
        $this->workingDays = $workingDays;

        return $this;
    }

    public function getColorBlind(): ?bool
    {
        return $this->colorBlind;
    }

    public function setColorBlind(?bool $colorBlind): self
    {
        $this->initialized['colorBlind'] = true;
        $this->colorBlind = $colorBlind;

        return $this;
    }

    public function getPersonalFeedTokenId(): ?int
    {
        return $this->personalFeedTokenId;
    }

    public function setPersonalFeedTokenId(?int $personalFeedTokenId): self
    {
        $this->initialized['personalFeedTokenId'] = true;
        $this->personalFeedTokenId = $personalFeedTokenId;

        return $this;
    }
}
