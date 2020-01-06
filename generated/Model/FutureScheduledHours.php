<?php

namespace JoliCode\Forecast\Api\Model;

class FutureScheduledHours
{
    /**
     * 
     *
     * @var FutureScheduledHour[]
     */
    protected $futureScheduledHours;
    /**
     * 
     *
     * @return FutureScheduledHour[]
     */
    public function getFutureScheduledHours() : array
    {
        return $this->futureScheduledHours;
    }
    /**
     * 
     *
     * @param FutureScheduledHour[] $futureScheduledHours
     *
     * @return self
     */
    public function setFutureScheduledHours(array $futureScheduledHours) : self
    {
        $this->futureScheduledHours = $futureScheduledHours;
        return $this;
    }
}