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

class FutureScheduledHours
{
    /**
     * @var FutureScheduledHour[]|null
     */
    protected $futureScheduledHours;

    /**
     * @return FutureScheduledHour[]|null
     */
    public function getFutureScheduledHours(): ?array
    {
        return $this->futureScheduledHours;
    }

    /**
     * @param FutureScheduledHour[]|null $futureScheduledHours
     */
    public function setFutureScheduledHours(?array $futureScheduledHours): self
    {
        $this->futureScheduledHours = $futureScheduledHours;

        return $this;
    }
}
