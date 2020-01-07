<?php

namespace JoliCode\Forecast\Api\Model;

class RemainingBudgetedHour
{
    /**
     * 
     *
     * @var string|null
     */
    protected $budgetBy;
    /**
     * 
     *
     * @var bool|null
     */
    protected $budgetIsMonthly;
    /**
     * 
     *
     * @var int|null
     */
    protected $hours;
    /**
     * 
     *
     * @var int|null
     */
    protected $projectId;
    /**
     * 
     *
     * @var int|null
     */
    protected $responseCode;
    /**
     * 
     *
     * @return string|null
     */
    public function getBudgetBy() : ?string
    {
        return $this->budgetBy;
    }
    /**
     * 
     *
     * @param string|null $budgetBy
     *
     * @return self
     */
    public function setBudgetBy(?string $budgetBy) : self
    {
        $this->budgetBy = $budgetBy;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getBudgetIsMonthly() : ?bool
    {
        return $this->budgetIsMonthly;
    }
    /**
     * 
     *
     * @param bool|null $budgetIsMonthly
     *
     * @return self
     */
    public function setBudgetIsMonthly(?bool $budgetIsMonthly) : self
    {
        $this->budgetIsMonthly = $budgetIsMonthly;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getHours() : ?int
    {
        return $this->hours;
    }
    /**
     * 
     *
     * @param int|null $hours
     *
     * @return self
     */
    public function setHours(?int $hours) : self
    {
        $this->hours = $hours;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getProjectId() : ?int
    {
        return $this->projectId;
    }
    /**
     * 
     *
     * @param int|null $projectId
     *
     * @return self
     */
    public function setProjectId(?int $projectId) : self
    {
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getResponseCode() : ?int
    {
        return $this->responseCode;
    }
    /**
     * 
     *
     * @param int|null $responseCode
     *
     * @return self
     */
    public function setResponseCode(?int $responseCode) : self
    {
        $this->responseCode = $responseCode;
        return $this;
    }
}