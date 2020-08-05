<?php

namespace JoliCode\Forecast\Api\Model;

class SubscriptionSubscriptionAddress
{
    /**
     * 
     *
     * @var string|null
     */
    protected $line1;
    /**
     * 
     *
     * @var string|null
     */
    protected $line2;
    /**
     * 
     *
     * @var string|null
     */
    protected $city;
    /**
     * 
     *
     * @var string|null
     */
    protected $state;
    /**
     * 
     *
     * @var string|null
     */
    protected $postalCode;
    /**
     * 
     *
     * @var string|null
     */
    protected $country;
    /**
     * 
     *
     * @return string|null
     */
    public function getLine1() : ?string
    {
        return $this->line1;
    }
    /**
     * 
     *
     * @param string|null $line1
     *
     * @return self
     */
    public function setLine1(?string $line1) : self
    {
        $this->line1 = $line1;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getLine2() : ?string
    {
        return $this->line2;
    }
    /**
     * 
     *
     * @param string|null $line2
     *
     * @return self
     */
    public function setLine2(?string $line2) : self
    {
        $this->line2 = $line2;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCity() : ?string
    {
        return $this->city;
    }
    /**
     * 
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city) : self
    {
        $this->city = $city;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getState() : ?string
    {
        return $this->state;
    }
    /**
     * 
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state) : self
    {
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getPostalCode() : ?string
    {
        return $this->postalCode;
    }
    /**
     * 
     *
     * @param string|null $postalCode
     *
     * @return self
     */
    public function setPostalCode(?string $postalCode) : self
    {
        $this->postalCode = $postalCode;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getCountry() : ?string
    {
        return $this->country;
    }
    /**
     * 
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country) : self
    {
        $this->country = $country;
        return $this;
    }
}