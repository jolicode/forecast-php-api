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

class SubscriptionSubscriptionDiscounts
{
    /**
     * @var int|null
     */
    protected $monthlyPercentage;
    /**
     * @var int|null
     */
    protected $yearlyPercentage;

    public function getMonthlyPercentage(): ?int
    {
        return $this->monthlyPercentage;
    }

    public function setMonthlyPercentage(?int $monthlyPercentage): self
    {
        $this->monthlyPercentage = $monthlyPercentage;

        return $this;
    }

    public function getYearlyPercentage(): ?int
    {
        return $this->yearlyPercentage;
    }

    public function setYearlyPercentage(?int $yearlyPercentage): self
    {
        $this->yearlyPercentage = $yearlyPercentage;

        return $this;
    }
}
