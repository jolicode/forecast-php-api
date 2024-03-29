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

class AccountAccount extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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
     * @var list<AccountAccountColorLabelsItem>|null
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
     * @var \DateTime|null
     */
    protected $createdAt;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

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
        $this->initialized['id'] = true;
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
        $this->initialized['name'] = true;
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
        $this->initialized['weeklyCapacity'] = true;
        $this->weeklyCapacity = $weeklyCapacity;

        return $this;
    }

    /**
     * Available color labels.
     *
     * @return list<AccountAccountColorLabelsItem>|null
     */
    public function getColorLabels(): ?array
    {
        return $this->colorLabels;
    }

    /**
     * Available color labels.
     *
     * @param list<AccountAccountColorLabelsItem>|null $colorLabels
     */
    public function setColorLabels(?array $colorLabels): self
    {
        $this->initialized['colorLabels'] = true;
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
        $this->initialized['harvestSubdomain'] = true;
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
        $this->initialized['harvestName'] = true;
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
        $this->initialized['weekendsEnabled'] = true;
        $this->weekendsEnabled = $weekendsEnabled;

        return $this;
    }

    /**
     * creation date.
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * creation date.
     */
    public function setCreatedAt(?\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }
}
