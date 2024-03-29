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

class RemainingBudgetedHours extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<RemainingBudgetedHour>|null
     */
    protected $remainingBudgetedHours;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<RemainingBudgetedHour>|null
     */
    public function getRemainingBudgetedHours(): ?array
    {
        return $this->remainingBudgetedHours;
    }

    /**
     * @param list<RemainingBudgetedHour>|null $remainingBudgetedHours
     */
    public function setRemainingBudgetedHours(?array $remainingBudgetedHours): self
    {
        $this->initialized['remainingBudgetedHours'] = true;
        $this->remainingBudgetedHours = $remainingBudgetedHours;

        return $this;
    }
}
