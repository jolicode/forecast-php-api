<?php

namespace JoliCode\Forecast\Api\Model;

class Person
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $firstName;
    /**
     * 
     *
     * @var string
     */
    protected $lastName;
    /**
     * 
     *
     * @var string
     */
    protected $email;
    /**
     * If the user is allowed to login, contains "enabled". Else, contains "disabled".
     *
     * @var string
     */
    protected $login;
    /**
     * Is the user an admin?
     *
     * @var bool
     */
    protected $admin;
    /**
     * Is the user an admin?
     *
     * @var bool
     */
    protected $archived;
    /**
     * Did the user subscribe?
     *
     * @var bool
     */
    protected $subscribed;
    /**
     * URL of the user's avatar image
     *
     * @var string
     */
    protected $avatarUrl;
    /**
     * 
     *
     * @var string[]
     */
    protected $roles;
    /**
     * date when the Person was last updated
     *
     * @var string
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
     * @var int
     */
    protected $harvestUserId;
    /**
     * Number of seconds of capacity in each week
     *
     * @var int
     */
    protected $weeklyCapacity;
    /**
     * 
     *
     * @var PersonWorkingDays
     */
    protected $workingDays;
    /**
     * 
     *
     * @var bool
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
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    /**
     * 
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName) : self
    {
        $this->firstName = $firstName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastName() : string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName) : self
    {
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getEmail() : string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email) : self
    {
        $this->email = $email;
        return $this;
    }
    /**
     * If the user is allowed to login, contains "enabled". Else, contains "disabled".
     *
     * @return string
     */
    public function getLogin() : string
    {
        return $this->login;
    }
    /**
     * If the user is allowed to login, contains "enabled". Else, contains "disabled".
     *
     * @param string $login
     *
     * @return self
     */
    public function setLogin(string $login) : self
    {
        $this->login = $login;
        return $this;
    }
    /**
     * Is the user an admin?
     *
     * @return bool
     */
    public function getAdmin() : bool
    {
        return $this->admin;
    }
    /**
     * Is the user an admin?
     *
     * @param bool $admin
     *
     * @return self
     */
    public function setAdmin(bool $admin) : self
    {
        $this->admin = $admin;
        return $this;
    }
    /**
     * Is the user an admin?
     *
     * @return bool
     */
    public function getArchived() : bool
    {
        return $this->archived;
    }
    /**
     * Is the user an admin?
     *
     * @param bool $archived
     *
     * @return self
     */
    public function setArchived(bool $archived) : self
    {
        $this->archived = $archived;
        return $this;
    }
    /**
     * Did the user subscribe?
     *
     * @return bool
     */
    public function getSubscribed() : bool
    {
        return $this->subscribed;
    }
    /**
     * Did the user subscribe?
     *
     * @param bool $subscribed
     *
     * @return self
     */
    public function setSubscribed(bool $subscribed) : self
    {
        $this->subscribed = $subscribed;
        return $this;
    }
    /**
     * URL of the user's avatar image
     *
     * @return string
     */
    public function getAvatarUrl() : string
    {
        return $this->avatarUrl;
    }
    /**
     * URL of the user's avatar image
     *
     * @param string $avatarUrl
     *
     * @return self
     */
    public function setAvatarUrl(string $avatarUrl) : self
    {
        $this->avatarUrl = $avatarUrl;
        return $this;
    }
    /**
     * 
     *
     * @return string[]
     */
    public function getRoles() : array
    {
        return $this->roles;
    }
    /**
     * 
     *
     * @param string[] $roles
     *
     * @return self
     */
    public function setRoles(array $roles) : self
    {
        $this->roles = $roles;
        return $this;
    }
    /**
     * date when the Person was last updated
     *
     * @return string
     */
    public function getUpdatedAt() : string
    {
        return $this->updatedAt;
    }
    /**
     * date when the Person was last updated
     *
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(string $updatedAt) : self
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
     * @return int
     */
    public function getHarvestUserId() : int
    {
        return $this->harvestUserId;
    }
    /**
     * Id of the user in Harvest
     *
     * @param int $harvestUserId
     *
     * @return self
     */
    public function setHarvestUserId(int $harvestUserId) : self
    {
        $this->harvestUserId = $harvestUserId;
        return $this;
    }
    /**
     * Number of seconds of capacity in each week
     *
     * @return int
     */
    public function getWeeklyCapacity() : int
    {
        return $this->weeklyCapacity;
    }
    /**
     * Number of seconds of capacity in each week
     *
     * @param int $weeklyCapacity
     *
     * @return self
     */
    public function setWeeklyCapacity(int $weeklyCapacity) : self
    {
        $this->weeklyCapacity = $weeklyCapacity;
        return $this;
    }
    /**
     * 
     *
     * @return PersonWorkingDays
     */
    public function getWorkingDays() : PersonWorkingDays
    {
        return $this->workingDays;
    }
    /**
     * 
     *
     * @param PersonWorkingDays $workingDays
     *
     * @return self
     */
    public function setWorkingDays(PersonWorkingDays $workingDays) : self
    {
        $this->workingDays = $workingDays;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getColorBlind() : bool
    {
        return $this->colorBlind;
    }
    /**
     * 
     *
     * @param bool $colorBlind
     *
     * @return self
     */
    public function setColorBlind(bool $colorBlind) : self
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