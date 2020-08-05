<?php

namespace JoliCode\Forecast\Api\Model;

class SubscriptionSubscriptionDiscounts
{
    /**
     * 
     *
     * @var int|null
     */
    protected $monthlyPercentage;
    /**
     * 
     *
     * @var int|null
     */
    protected $yearlyPercentage;
    /**
     * 
     *
     * @return int|null
     */
    public function getMonthlyPercentage() : ?int
    {
        return $this->monthlyPercentage;
    }
    /**
     * 
     *
     * @param int|null $monthlyPercentage
     *
     * @return self
     */
    public function setMonthlyPercentage(?int $monthlyPercentage) : self
    {
        $this->monthlyPercentage = $monthlyPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getYearlyPercentage() : ?int
    {
        return $this->yearlyPercentage;
    }
    /**
     * 
     *
     * @param int|null $yearlyPercentage
     *
     * @return self
     */
    public function setYearlyPercentage(?int $yearlyPercentage) : self
    {
        $this->yearlyPercentage = $yearlyPercentage;
        return $this;
    }
}