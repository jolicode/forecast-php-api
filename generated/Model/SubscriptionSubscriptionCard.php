<?php

namespace JoliCode\Forecast\Api\Model;

class SubscriptionSubscriptionCard
{
    /**
     * 
     *
     * @var string
     */
    protected $brand;
    /**
     * 
     *
     * @var string
     */
    protected $lastFour;
    /**
     * 
     *
     * @var int
     */
    protected $expiryMonth;
    /**
     * 
     *
     * @var int
     */
    protected $expiryYear;
    /**
     * 
     *
     * @return string
     */
    public function getBrand() : string
    {
        return $this->brand;
    }
    /**
     * 
     *
     * @param string $brand
     *
     * @return self
     */
    public function setBrand(string $brand) : self
    {
        $this->brand = $brand;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLastFour() : string
    {
        return $this->lastFour;
    }
    /**
     * 
     *
     * @param string $lastFour
     *
     * @return self
     */
    public function setLastFour(string $lastFour) : self
    {
        $this->lastFour = $lastFour;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExpiryMonth() : int
    {
        return $this->expiryMonth;
    }
    /**
     * 
     *
     * @param int $expiryMonth
     *
     * @return self
     */
    public function setExpiryMonth(int $expiryMonth) : self
    {
        $this->expiryMonth = $expiryMonth;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getExpiryYear() : int
    {
        return $this->expiryYear;
    }
    /**
     * 
     *
     * @param int $expiryYear
     *
     * @return self
     */
    public function setExpiryYear(int $expiryYear) : self
    {
        $this->expiryYear = $expiryYear;
        return $this;
    }
}