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

class PersonWorkingDays
{
    /**
     * @var bool|null
     */
    protected $monday;
    /**
     * @var bool|null
     */
    protected $tuesday;
    /**
     * @var bool|null
     */
    protected $wednesday;
    /**
     * @var bool|null
     */
    protected $thursday;
    /**
     * @var bool|null
     */
    protected $friday;
    /**
     * @var bool|null
     */
    protected $saturday;
    /**
     * @var bool|null
     */
    protected $sunday;

    public function getMonday(): ?bool
    {
        return $this->monday;
    }

    public function setMonday(?bool $monday): self
    {
        $this->monday = $monday;

        return $this;
    }

    public function getTuesday(): ?bool
    {
        return $this->tuesday;
    }

    public function setTuesday(?bool $tuesday): self
    {
        $this->tuesday = $tuesday;

        return $this;
    }

    public function getWednesday(): ?bool
    {
        return $this->wednesday;
    }

    public function setWednesday(?bool $wednesday): self
    {
        $this->wednesday = $wednesday;

        return $this;
    }

    public function getThursday(): ?bool
    {
        return $this->thursday;
    }

    public function setThursday(?bool $thursday): self
    {
        $this->thursday = $thursday;

        return $this;
    }

    public function getFriday(): ?bool
    {
        return $this->friday;
    }

    public function setFriday(?bool $friday): self
    {
        $this->friday = $friday;

        return $this;
    }

    public function getSaturday(): ?bool
    {
        return $this->saturday;
    }

    public function setSaturday(?bool $saturday): self
    {
        $this->saturday = $saturday;

        return $this;
    }

    public function getSunday(): ?bool
    {
        return $this->sunday;
    }

    public function setSunday(?bool $sunday): self
    {
        $this->sunday = $sunday;

        return $this;
    }
}
