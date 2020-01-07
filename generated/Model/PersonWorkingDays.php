<?php

namespace JoliCode\Forecast\Api\Model;

class PersonWorkingDays
{
    /**
     * 
     *
     * @var bool|null
     */
    protected $monday;
    /**
     * 
     *
     * @var bool|null
     */
    protected $tuesday;
    /**
     * 
     *
     * @var bool|null
     */
    protected $wednesday;
    /**
     * 
     *
     * @var bool|null
     */
    protected $thursday;
    /**
     * 
     *
     * @var bool|null
     */
    protected $friday;
    /**
     * 
     *
     * @var bool|null
     */
    protected $saturday;
    /**
     * 
     *
     * @var bool|null
     */
    protected $sunday;
    /**
     * 
     *
     * @return bool|null
     */
    public function getMonday() : ?bool
    {
        return $this->monday;
    }
    /**
     * 
     *
     * @param bool|null $monday
     *
     * @return self
     */
    public function setMonday(?bool $monday) : self
    {
        $this->monday = $monday;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getTuesday() : ?bool
    {
        return $this->tuesday;
    }
    /**
     * 
     *
     * @param bool|null $tuesday
     *
     * @return self
     */
    public function setTuesday(?bool $tuesday) : self
    {
        $this->tuesday = $tuesday;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getWednesday() : ?bool
    {
        return $this->wednesday;
    }
    /**
     * 
     *
     * @param bool|null $wednesday
     *
     * @return self
     */
    public function setWednesday(?bool $wednesday) : self
    {
        $this->wednesday = $wednesday;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getThursday() : ?bool
    {
        return $this->thursday;
    }
    /**
     * 
     *
     * @param bool|null $thursday
     *
     * @return self
     */
    public function setThursday(?bool $thursday) : self
    {
        $this->thursday = $thursday;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getFriday() : ?bool
    {
        return $this->friday;
    }
    /**
     * 
     *
     * @param bool|null $friday
     *
     * @return self
     */
    public function setFriday(?bool $friday) : self
    {
        $this->friday = $friday;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSaturday() : ?bool
    {
        return $this->saturday;
    }
    /**
     * 
     *
     * @param bool|null $saturday
     *
     * @return self
     */
    public function setSaturday(?bool $saturday) : self
    {
        $this->saturday = $saturday;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getSunday() : ?bool
    {
        return $this->sunday;
    }
    /**
     * 
     *
     * @param bool|null $sunday
     *
     * @return self
     */
    public function setSunday(?bool $sunday) : self
    {
        $this->sunday = $sunday;
        return $this;
    }
}