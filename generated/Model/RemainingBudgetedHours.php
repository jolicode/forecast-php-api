<?php

namespace JoliCode\Forecast\Api\Model;

class RemainingBudgetedHours
{
    /**
     * 
     *
     * @var RemainingBudgetedHour[]|null
     */
    protected $remainingBudgetedHours;
    /**
     * 
     *
     * @return RemainingBudgetedHour[]|null
     */
    public function getRemainingBudgetedHours() : ?array
    {
        return $this->remainingBudgetedHours;
    }
    /**
     * 
     *
     * @param RemainingBudgetedHour[]|null $remainingBudgetedHours
     *
     * @return self
     */
    public function setRemainingBudgetedHours(?array $remainingBudgetedHours) : self
    {
        $this->remainingBudgetedHours = $remainingBudgetedHours;
        return $this;
    }
}