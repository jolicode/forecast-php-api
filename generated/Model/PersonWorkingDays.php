<?php

namespace JoliCode\Forecast\Api\Model;

class PersonWorkingDays
{
    /**
     * 
     *
     * @var bool
     */
    protected $monday;
    /**
     * 
     *
     * @var bool
     */
    protected $tuesday;
    /**
     * 
     *
     * @var bool
     */
    protected $wednesday;
    /**
     * 
     *
     * @var bool
     */
    protected $thursday;
    /**
     * 
     *
     * @var bool
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
     * @return bool
     */
    public function getMonday() : bool
    {
        return $this->monday;
    }
    /**
     * 
     *
     * @param bool $monday
     *
     * @return self
     */
    public function setMonday(bool $monday) : self
    {
        $this->monday = $monday;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTuesday() : bool
    {
        return $this->tuesday;
    }
    /**
     * 
     *
     * @param bool $tuesday
     *
     * @return self
     */
    public function setTuesday(bool $tuesday) : self
    {
        $this->tuesday = $tuesday;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getWednesday() : bool
    {
        return $this->wednesday;
    }
    /**
     * 
     *
     * @param bool $wednesday
     *
     * @return self
     */
    public function setWednesday(bool $wednesday) : self
    {
        $this->wednesday = $wednesday;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getThursday() : bool
    {
        return $this->thursday;
    }
    /**
     * 
     *
     * @param bool $thursday
     *
     * @return self
     */
    public function setThursday(bool $thursday) : self
    {
        $this->thursday = $thursday;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getFriday() : bool
    {
        return $this->friday;
    }
    /**
     * 
     *
     * @param bool $friday
     *
     * @return self
     */
    public function setFriday(bool $friday) : self
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