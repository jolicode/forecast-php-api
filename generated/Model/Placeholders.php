<?php

namespace JoliCode\Forecast\Api\Model;

class Placeholders
{
    /**
     * 
     *
     * @var Placeholder[]
     */
    protected $placeholders;
    /**
     * 
     *
     * @return Placeholder[]
     */
    public function getPlaceholders() : array
    {
        return $this->placeholders;
    }
    /**
     * 
     *
     * @param Placeholder[] $placeholders
     *
     * @return self
     */
    public function setPlaceholders(array $placeholders) : self
    {
        $this->placeholders = $placeholders;
        return $this;
    }
}