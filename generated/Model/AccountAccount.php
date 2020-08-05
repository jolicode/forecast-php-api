<?php

namespace JoliCode\Forecast\Api\Model;

class AccountAccount
{
    /**
     * Id of the account
     *
     * @var int|null
     */
    protected $id;
    /**
     * Name of the account
     *
     * @var string|null
     */
    protected $name;
    /**
     * Number of seconds of capacity in each week
     *
     * @var int|null
     */
    protected $weeklyCapacity;
    /**
     * Available color labels
     *
     * @var AccountAccountColorLabelsItem[]|null
     */
    protected $colorLabels;
    /**
     * harvest subdomain associated with this forecast account
     *
     * @var string|null
     */
    protected $harvestSubdomain;
    /**
     * harvest account name associated with this forecast account
     *
     * @var string|null
     */
    protected $harvestName;
    /**
     * whether or not the grid shows weekends
     *
     * @var bool|null
     */
    protected $weekendsEnabled;
    /**
     * creation date
     *
     * @var \DateTime|null
     */
    protected $createdAt;
    /**
     * Id of the account
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * Id of the account
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
     * Name of the account
     *
     * @return string|null
     */
    public function getName() : ?string
    {
        return $this->name;
    }
    /**
     * Name of the account
     *
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name) : self
    {
        $this->name = $name;
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
     * Available color labels
     *
     * @return AccountAccountColorLabelsItem[]|null
     */
    public function getColorLabels() : ?array
    {
        return $this->colorLabels;
    }
    /**
     * Available color labels
     *
     * @param AccountAccountColorLabelsItem[]|null $colorLabels
     *
     * @return self
     */
    public function setColorLabels(?array $colorLabels) : self
    {
        $this->colorLabels = $colorLabels;
        return $this;
    }
    /**
     * harvest subdomain associated with this forecast account
     *
     * @return string|null
     */
    public function getHarvestSubdomain() : ?string
    {
        return $this->harvestSubdomain;
    }
    /**
     * harvest subdomain associated with this forecast account
     *
     * @param string|null $harvestSubdomain
     *
     * @return self
     */
    public function setHarvestSubdomain(?string $harvestSubdomain) : self
    {
        $this->harvestSubdomain = $harvestSubdomain;
        return $this;
    }
    /**
     * harvest account name associated with this forecast account
     *
     * @return string|null
     */
    public function getHarvestName() : ?string
    {
        return $this->harvestName;
    }
    /**
     * harvest account name associated with this forecast account
     *
     * @param string|null $harvestName
     *
     * @return self
     */
    public function setHarvestName(?string $harvestName) : self
    {
        $this->harvestName = $harvestName;
        return $this;
    }
    /**
     * whether or not the grid shows weekends
     *
     * @return bool|null
     */
    public function getWeekendsEnabled() : ?bool
    {
        return $this->weekendsEnabled;
    }
    /**
     * whether or not the grid shows weekends
     *
     * @param bool|null $weekendsEnabled
     *
     * @return self
     */
    public function setWeekendsEnabled(?bool $weekendsEnabled) : self
    {
        $this->weekendsEnabled = $weekendsEnabled;
        return $this;
    }
    /**
     * creation date
     *
     * @return \DateTime|null
     */
    public function getCreatedAt() : ?\DateTime
    {
        return $this->createdAt;
    }
    /**
     * creation date
     *
     * @param \DateTime|null $createdAt
     *
     * @return self
     */
    public function setCreatedAt(?\DateTime $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}