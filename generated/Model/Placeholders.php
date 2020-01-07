<?php

namespace JoliCode\Forecast\Api\Model;

class Placeholders
{
    /**
     * 
     *
     * @var Placeholder[]|null
     */
    protected $placeholders;
    /**
     * 
     *
     * @return Placeholder[]|null
     */
    public function getPlaceholders() : ?array
    {
        return $this->placeholders;
    }
    /**
     * 
     *
     * @param Placeholder[]|null $placeholders
     *
     * @return self
     */
    public function setPlaceholders(?array $placeholders) : self
    {
        $this->placeholders = $placeholders;
        return $this;
    }
}