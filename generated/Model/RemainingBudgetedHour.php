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

class RemainingBudgetedHour extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
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

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getBudgetBy(): ?string
    {
        return $this->budgetBy;
    }

    public function setBudgetBy(?string $budgetBy): self
    {
        $this->initialized['budgetBy'] = true;
        $this->budgetBy = $budgetBy;

        return $this;
    }

    public function getBudgetIsMonthly(): ?bool
    {
        return $this->budgetIsMonthly;
    }

    public function setBudgetIsMonthly(?bool $budgetIsMonthly): self
    {
        $this->initialized['budgetIsMonthly'] = true;
        $this->budgetIsMonthly = $budgetIsMonthly;

        return $this;
    }

    public function getHours(): ?int
    {
        return $this->hours;
    }

    public function setHours(?int $hours): self
    {
        $this->initialized['hours'] = true;
        $this->hours = $hours;

        return $this;
    }

    public function getProjectId(): ?int
    {
        return $this->projectId;
    }

    public function setProjectId(?int $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;

        return $this;
    }

    public function getResponseCode(): ?int
    {
        return $this->responseCode;
    }

    public function setResponseCode(?int $responseCode): self
    {
        $this->initialized['responseCode'] = true;
        $this->responseCode = $responseCode;

        return $this;
    }
}
