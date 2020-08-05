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

class RemainingBudgetedHour
{
    /**
     * @var string|null
     */
    protected $budgetBy;
    /**
     * @var bool|null
     */
    protected $budgetIsMonthly;
    /**
     * @var int|null
     */
    protected $hours;
    /**
     * @var int|null
     */
    protected $projectId;
    /**
     * @var int|null
     */
    protected $responseCode;

    public function getBudgetBy(): ?string
    {
        return $this->budgetBy;
    }

    public function setBudgetBy(?string $budgetBy): self
    {
        $this->budgetBy = $budgetBy;

        return $this;
    }

    public function getBudgetIsMonthly(): ?bool
    {
        return $this->budgetIsMonthly;
    }

    public function setBudgetIsMonthly(?bool $budgetIsMonthly): self
    {
        $this->budgetIsMonthly = $budgetIsMonthly;

        return $this;
    }

    public function getHours(): ?int
    {
        return $this->hours;
    }

    public function setHours(?int $hours): self
    {
        $this->hours = $hours;

        return $this;
    }

    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    public function setProjectId(?int $projectId): self
    {
        $this->projectId = $projectId;

        return $this;
    }

    public function getResponseCode(): ?int
    {
        return $this->responseCode;
    }

    public function setResponseCode(?int $responseCode): self
    {
        $this->responseCode = $responseCode;

        return $this;
    }
}
