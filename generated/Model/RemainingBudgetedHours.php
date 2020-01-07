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

class RemainingBudgetedHours
{
    /**
     * @var RemainingBudgetedHour[]|null
     */
    protected $remainingBudgetedHours;

    /**
     * @return RemainingBudgetedHour[]|null
     */
    public function getRemainingBudgetedHours(): ?array
    {
        return $this->remainingBudgetedHours;
    }

    /**
     * @param RemainingBudgetedHour[]|null $remainingBudgetedHours
     */
    public function setRemainingBudgetedHours(?array $remainingBudgetedHours): self
    {
        $this->remainingBudgetedHours = $remainingBudgetedHours;

        return $this;
    }
}
