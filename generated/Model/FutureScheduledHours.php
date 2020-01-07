<?php

namespace JoliCode\Forecast\Api\Model;

class FutureScheduledHours
{
    /**
     * 
     *
     * @var FutureScheduledHour[]|null
     */
    protected $futureScheduledHours;
    /**
     * 
     *
     * @return FutureScheduledHour[]|null
     */
    public function getFutureScheduledHours() : ?array
    {
        return $this->futureScheduledHours;
    }
    /**
     * 
     *
     * @param FutureScheduledHour[]|null $futureScheduledHours
     *
     * @return self
     */
    public function setFutureScheduledHours(?array $futureScheduledHours) : self
    {
        $this->futureScheduledHours = $futureScheduledHours;
        return $this;
    }
}