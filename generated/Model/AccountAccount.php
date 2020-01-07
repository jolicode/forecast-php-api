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

class AccountAccount
{
    /**
     * Id of the account.
     *
     * @var int|null
     */
    protected $id;
    /**
     * Name of the account.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Number of seconds of capacity in each week.
     *
     * @var int|null
     */
    protected $weeklyCapacity;
    /**
     * Available color labels.
     *
     * @var AccountAccountColorLabelsItem[]|null
     */
    protected $colorLabels;
    /**
     * harvest subdomain associated with this forecast account.
     *
     * @var string|null
     */
    protected $harvestSubdomain;
    /**
     * harvest account name associated with this forecast account.
     *
     * @var string|null
     */
    protected $harvestName;
    /**
     * whether or not the grid shows weekends.
     *
     * @var bool|null
     */
    protected $weekendsEnabled;
    /**
     * creation date.
     *
     * @var string|null
     */
    protected $createdAt;

    /**
     * Id of the account.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Id of the account.
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Name of the account.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the account.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

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
        $this->weeklyCapacity = $weeklyCapacity;

        return $this;
    }

    /**
     * Available color labels.
     *
     * @return AccountAccountColorLabelsItem[]|null
     */
    public function getColorLabels(): ?array
    {
        return $this->colorLabels;
    }

    /**
     * Available color labels.
     *
     * @param AccountAccountColorLabelsItem[]|null $colorLabels
     */
    public function setColorLabels(?array $colorLabels): self
    {
        $this->colorLabels = $colorLabels;

        return $this;
    }

    /**
     * harvest subdomain associated with this forecast account.
     */
    public function getHarvestSubdomain(): ?string
    {
        return $this->harvestSubdomain;
    }

    /**
     * harvest subdomain associated with this forecast account.
     */
    public function setHarvestSubdomain(?string $harvestSubdomain): self
    {
        $this->harvestSubdomain = $harvestSubdomain;

        return $this;
    }

    /**
     * harvest account name associated with this forecast account.
     */
    public function getHarvestName(): ?string
    {
        return $this->harvestName;
    }

    /**
     * harvest account name associated with this forecast account.
     */
    public function setHarvestName(?string $harvestName): self
    {
        $this->harvestName = $harvestName;

        return $this;
    }

    /**
     * whether or not the grid shows weekends.
     */
    public function getWeekendsEnabled(): ?bool
    {
        return $this->weekendsEnabled;
    }

    /**
     * whether or not the grid shows weekends.
     */
    public function setWeekendsEnabled(?bool $weekendsEnabled): self
    {
        $this->weekendsEnabled = $weekendsEnabled;

        return $this;
    }

    /**
     * creation date.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * creation date.
     */
    public function setCreatedAt(?string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
