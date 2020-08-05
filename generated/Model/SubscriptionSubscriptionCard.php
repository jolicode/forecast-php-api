<?php

namespace JoliCode\Forecast\Api\Model;

class SubscriptionSubscriptionCard
{
    /**
     * 
     *
     * @var string|null
     */
    protected $brand;
    /**
     * 
     *
     * @var string|null
     */
    protected $lastFour;
    /**
     * 
     *
     * @var int|null
     */
    protected $expiryMonth;
    /**
     * 
     *
     * @var int|null
     */
    protected $expiryYear;
    /**
     * 
     *
     * @return string|null
     */
    public function getBrand() : ?string
    {
        return $this->brand;
    }
    /**
     * 
     *
     * @param string|null $brand
     *
     * @return self
     */
    public function setBrand(?string $brand) : self
    {
        $this->brand = $brand;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLastFour() : ?string
    {
        return $this->lastFour;
    }
    /**
     * 
     *
     * @param string|null $lastFour
     *
     * @return self
     */
    public function setLastFour(?string $lastFour) : self
    {
        $this->lastFour = $lastFour;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExpiryMonth() : ?int
    {
        return $this->expiryMonth;
    }
    /**
     * 
     *
     * @param int|null $expiryMonth
     *
     * @return self
     */
    public function setExpiryMonth(?int $expiryMonth) : self
    {
        $this->expiryMonth = $expiryMonth;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getExpiryYear() : ?int
    {
        return $this->expiryYear;
    }
    /**
     * 
     *
     * @param int|null $expiryYear
     *
     * @return self
     */
    public function setExpiryYear(?int $expiryYear) : self
    {
        $this->expiryYear = $expiryYear;
        return $this;
    }
}