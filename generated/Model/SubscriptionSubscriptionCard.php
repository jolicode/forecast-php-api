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

class SubscriptionSubscriptionCard extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): self
    {
        $this->initialized['brand'] = true;
        $this->brand = $brand;

        return $this;
    }

    public function getLastFour(): ?string
    {
        return $this->lastFour;
    }

    public function setLastFour(?string $lastFour): self
    {
        $this->initialized['lastFour'] = true;
        $this->lastFour = $lastFour;

        return $this;
    }

    public function getExpiryMonth(): ?int
    {
        return $this->expiryMonth;
    }

    public function setExpiryMonth(?int $expiryMonth): self
    {
        $this->initialized['expiryMonth'] = true;
        $this->expiryMonth = $expiryMonth;

        return $this;
    }

    public function getExpiryYear(): ?int
    {
        return $this->expiryYear;
    }

    public function setExpiryYear(?int $expiryYear): self
    {
        $this->initialized['expiryYear'] = true;
        $this->expiryYear = $expiryYear;

        return $this;
    }
}
