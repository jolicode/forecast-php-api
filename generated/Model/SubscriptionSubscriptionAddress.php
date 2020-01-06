<?php

namespace JoliCode\Forecast\Api\Model;

class SubscriptionSubscriptionAddress
{
    /**
     * 
     *
     * @var string
     */
    protected $line1;
    /**
     * 
     *
     * @var string
     */
    protected $line2;
    /**
     * 
     *
     * @var string
     */
    protected $city;
    /**
     * 
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var string
     */
    protected $postalCode;
    /**
     * 
     *
     * @var string
     */
    protected $country;
    /**
     * 
     *
     * @return string
     */
    public function getLine1() : string
    {
        return $this->line1;
    }
    /**
     * 
     *
     * @param string $line1
     *
     * @return self
     */
    public function setLine1(string $line1) : self
    {
        $this->line1 = $line1;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getLine2() : string
    {
        return $this->line2;
    }
    /**
     * 
     *
     * @param string $line2
     *
     * @return self
     */
    public function setLine2(string $line2) : self
    {
        $this->line2 = $line2;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCity() : string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity(string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getState() : string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPostalCode() : string
    {
        return $this->postalCode;
    }
    /**
     * 
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(string $postalCode) : self
    {
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getCountry() : string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry(string $country) : self
    {
        $this->country = $country;
        return $this;
    }
}