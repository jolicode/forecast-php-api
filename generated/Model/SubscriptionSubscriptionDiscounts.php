<?php

namespace JoliCode\Forecast\Api\Model;

class SubscriptionSubscriptionDiscounts
{
    /**
     * 
     *
     * @var int
     */
    protected $monthlyPercentage;
    /**
     * 
     *
     * @var int
     */
    protected $yearlyPercentage;
    /**
     * 
     *
     * @return int
     */
    public function getMonthlyPercentage() : int
    {
        return $this->monthlyPercentage;
    }
    /**
     * 
     *
     * @param int $monthlyPercentage
     *
     * @return self
     */
    public function setMonthlyPercentage(int $monthlyPercentage) : self
    {
        $this->monthlyPercentage = $monthlyPercentage;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getYearlyPercentage() : int
    {
        return $this->yearlyPercentage;
    }
    /**
     * 
     *
     * @param int $yearlyPercentage
     *
     * @return self
     */
    public function setYearlyPercentage(int $yearlyPercentage) : self
    {
        $this->yearlyPercentage = $yearlyPercentage;
        return $this;
    }
}