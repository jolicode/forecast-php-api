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

class FutureScheduledHours extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<FutureScheduledHour>|null
     */
    protected $futureScheduledHours;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<FutureScheduledHour>|null
     */
    public function getFutureScheduledHours(): ?array
    {
        return $this->futureScheduledHours;
    }

    /**
     * @param list<FutureScheduledHour>|null $futureScheduledHours
     */
    public function setFutureScheduledHours(?array $futureScheduledHours): self
    {
        $this->initialized['futureScheduledHours'] = true;
        $this->futureScheduledHours = $futureScheduledHours;

        return $this;
    }
}
