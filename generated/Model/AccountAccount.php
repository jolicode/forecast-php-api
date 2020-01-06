<?php

namespace JoliCode\Forecast\Api\Model;

class AccountAccount
{
    /**
     * Id of the account
     *
     * @var int
     */
    protected $id;
    /**
     * Name of the account
     *
     * @var string
     */
    protected $name;
    /**
     * Number of seconds of capacity in each week
     *
     * @var int
     */
    protected $weeklyCapacity;
    /**
     * Available color labels
     *
     * @var AccountAccountColorLabelsItem[]
     */
    protected $colorLabels;
    /**
     * harvest subdomain associated with this forecast account
     *
     * @var string
     */
    protected $harvestSubdomain;
    /**
     * harvest account name associated with this forecast account
     *
     * @var string
     */
    protected $harvestName;
    /**
     * whether or not the grid shows weekends
     *
     * @var bool
     */
    protected $weekendsEnabled;
    /**
     * creation date
     *
     * @var string
     */
    protected $createdAt;
    /**
     * Id of the account
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * Id of the account
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
     * Name of the account
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the account
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
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
     * Available color labels
     *
     * @return AccountAccountColorLabelsItem[]
     */
    public function getColorLabels() : array
    {
        return $this->colorLabels;
    }
    /**
     * Available color labels
     *
     * @param AccountAccountColorLabelsItem[] $colorLabels
     *
     * @return self
     */
    public function setColorLabels(array $colorLabels) : self
    {
        $this->colorLabels = $colorLabels;
        return $this;
    }
    /**
     * harvest subdomain associated with this forecast account
     *
     * @return string
     */
    public function getHarvestSubdomain() : string
    {
        return $this->harvestSubdomain;
    }
    /**
     * harvest subdomain associated with this forecast account
     *
     * @param string $harvestSubdomain
     *
     * @return self
     */
    public function setHarvestSubdomain(string $harvestSubdomain) : self
    {
        $this->harvestSubdomain = $harvestSubdomain;
        return $this;
    }
    /**
     * harvest account name associated with this forecast account
     *
     * @return string
     */
    public function getHarvestName() : string
    {
        return $this->harvestName;
    }
    /**
     * harvest account name associated with this forecast account
     *
     * @param string $harvestName
     *
     * @return self
     */
    public function setHarvestName(string $harvestName) : self
    {
        $this->harvestName = $harvestName;
        return $this;
    }
    /**
     * whether or not the grid shows weekends
     *
     * @return bool
     */
    public function getWeekendsEnabled() : bool
    {
        return $this->weekendsEnabled;
    }
    /**
     * whether or not the grid shows weekends
     *
     * @param bool $weekendsEnabled
     *
     * @return self
     */
    public function setWeekendsEnabled(bool $weekendsEnabled) : self
    {
        $this->weekendsEnabled = $weekendsEnabled;
        return $this;
    }
    /**
     * creation date
     *
     * @return string
     */
    public function getCreatedAt() : string
    {
        return $this->createdAt;
    }
    /**
     * creation date
     *
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt(string $createdAt) : self
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}