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

class SubscriptionSubscriptionCard
{
    /**
     * @var string|null
     */
    protected $brand;
    /**
     * @var string|null
     */
    protected $lastFour;
    /**
     * @var int|null
     */
    protected $expiryMonth;
    /**
     * @var int|null
     */
    protected $expiryYear;

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getLastFour(): ?string
    {
        return $this->lastFour;
    }

    public function setLastFour(?string $lastFour): self
    {
        $this->lastFour = $lastFour;

        return $this;
    }

    public function getExpiryMonth(): ?int
    {
        return $this->expiryMonth;
    }

    public function setExpiryMonth(?int $expiryMonth): self
    {
        $this->expiryMonth = $expiryMonth;

        return $this;
    }

    public function getExpiryYear(): ?int
    {
        return $this->expiryYear;
    }

    public function setExpiryYear(?int $expiryYear): self
    {
        $this->expiryYear = $expiryYear;

        return $this;
    }
}
