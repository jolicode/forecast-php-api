<?php

namespace JoliCode\Forecast\Api\Model;

class RemainingBudgetedHours
{
    /**
     * 
     *
     * @var RemainingBudgetedHour[]
     */
    protected $remainingBudgetedHours;
    /**
     * 
     *
     * @return RemainingBudgetedHour[]
     */
    public function getRemainingBudgetedHours() : array
    {
        return $this->remainingBudgetedHours;
    }
    /**
     * 
     *
     * @param RemainingBudgetedHour[] $remainingBudgetedHours
     *
     * @return self
     */
    public function setRemainingBudgetedHours(array $remainingBudgetedHours) : self
    {
        $this->remainingBudgetedHours = $remainingBudgetedHours;
        return $this;
    }
}