<?php

namespace JoliCode\Forecast\Api\Model;

class Person
{
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $firstName;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastName;
    /**
     * 
     *
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
     * URL of the user's avatar image
     *
     * @var string|null
     */
    protected $avatarUrl;
    /**
     * 
     *
     * @var string[]|null
     */
    protected $roles;
    /**
     * date when the Person was last updated
     *
     * @var \DateTime|null
     */
    protected $updatedAt;
    /**
     * id of the user who last updated this Person
     *
     * @var int|null
     */
    protected $updatedById;
    /**
     * Id of the user in Harvest
     *
     * @var int|null
     */
    protected $harvestUserId;
    /**
     * Number of seconds of capacity in each week
     *
     * @var int|null
     */
    protected $weeklyCapacity;
    /**
     * 
     *
     * @var PersonWorkingDays|null
     */
    protected $workingDays;
    /**
     * 
     *
     * @var bool|null
     */
    protected $colorBlind;
    /**
     * 
     *
     * @var int|null
     */
    protected $personalFeedTokenId;
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getFirstName() : ?string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastName() : ?string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getEmail() : ?string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * If the user is allowed to login, contains "enabled". Else, contains "disabled".
     *
     * @return string|null
     */
    public function getLogin() : ?string
    {
        return $this->login;
    }
    /**
     * If the user is allowed to login, contains "enabled". Else, contains "disabled".
     *
     * @param string|null $login
     *
     * @return self
     */
    public function setLogin(?string $login) : self
    {
        $this->login = $login;
        return $this;
    }
    /**
     * Is the user an admin?
     *
     * @return bool|null
     */
    public function getAdmin() : ?bool
    {
        return $this->admin;
    }
    /**
     * Is the user an admin?
     *
     * @param bool|null $admin
     *
     * @return self
     */
    public function setAdmin(?bool $admin) : self
    {
        $this->admin = $admin;
        return $this;
    }
    /**
     * Is the user an admin?
     *
     * @return bool|null
     */
    public function getArchived() : ?bool
    {
        return $this->archived;
    }
    /**
     * Is the user an admin?
     *
     * @param bool|null $archived
     *
     * @return self
     */
    public function setArchived(?bool $archived) : self
    {
        $this->archived = $archived;
        return $this;
    }
    /**
     * Did the user subscribe?
     *
     * @return bool|null
     */
    public function getSubscribed() : ?bool
    {
        return $this->subscribed;
    }
    /**
     * Did the user subscribe?
     *
     * @param bool|null $subscribed
     *
     * @return self
     */
    public function setSubscribed(?bool $subscribed) : self
    {
        $this->subscribed = $subscribed;
        return $this;
    }
    /**
     * URL of the user's avatar image
     *
     * @return string|null
     */
    public function getAvatarUrl() : ?string
    {
        return $this->avatarUrl;
    }
    /**
     * URL of the user's avatar image
     *
     * @param string|null $avatarUrl
     *
     * @return self
     */
    public function setAvatarUrl(?string $avatarUrl) : self
    {
        $this->avatarUrl = $avatarUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string[]|null
     */
    public function getRoles() : ?array
    {
        return $this->roles;
    }
    /**
     * 
     *
     * @param string[]|null $roles
     *
     * @return self
     */
    public function setRoles(?array $roles) : self
    {
        $this->roles = $roles;
        return $this;
    }
    /**
     * date when the Person was last updated
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt() : ?\DateTime
    {
        return $this->updatedAt;
    }
    /**
     * date when the Person was last updated
     *
     * @param \DateTime|null $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(?\DateTime $updatedAt) : self
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * id of the user who last updated this Person
     *
     * @return int|null
     */
    public function getUpdatedById() : ?int
    {
        return $this->updatedById;
    }
    /**
     * id of the user who last updated this Person
     *
     * @param int|null $updatedById
     *
     * @return self
     */
    public function setUpdatedById(?int $updatedById) : self
    {
        $this->updatedById = $updatedById;
        return $this;
    }
    /**
     * Id of the user in Harvest
     *
     * @return int|null
     */
    public function getHarvestUserId() : ?int
    {
        return $this->harvestUserId;
    }
    /**
     * Id of the user in Harvest
     *
     * @param int|null $harvestUserId
     *
     * @return self
     */
    public function setHarvestUserId(?int $harvestUserId) : self
    {
        $this->harvestUserId = $harvestUserId;
        return $this;
    }
    /**
     * Number of seconds of capacity in each week
     *
     * @return int|null
     */
    public function getWeeklyCapacity() : ?int
    {
        return $this->weeklyCapacity;
    }
    /**
     * Number of seconds of capacity in each week
     *
     * @param int|null $weeklyCapacity
     *
     * @return self
     */
    public function setWeeklyCapacity(?int $weeklyCapacity) : self
    {
        $this->weeklyCapacity = $weeklyCapacity;
        return $this;
    }
    /**
     * 
     *
     * @return PersonWorkingDays|null
     */
    public function getWorkingDays() : ?PersonWorkingDays
    {
        return $this->workingDays;
    }
    /**
     * 
     *
     * @param PersonWorkingDays|null $workingDays
     *
     * @return self
     */
    public function setWorkingDays(?PersonWorkingDays $workingDays) : self
    {
        $this->workingDays = $workingDays;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getColorBlind() : ?bool
    {
        return $this->colorBlind;
    }
    /**
     * 
     *
     * @param bool|null $colorBlind
     *
     * @return self
     */
    public function setColorBlind(?bool $colorBlind) : self
    {
        $this->colorBlind = $colorBlind;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPersonalFeedTokenId() : ?int
    {
        return $this->personalFeedTokenId;
    }
    /**
     * 
     *
     * @param int|null $personalFeedTokenId
     *
     * @return self
     */
    public function setPersonalFeedTokenId(?int $personalFeedTokenId) : self
    {
        $this->personalFeedTokenId = $personalFeedTokenId;
        return $this;
    }
}