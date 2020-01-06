<?php

namespace JoliCode\Forecast\Api\Model;

class PlaceholdersIdGetResponse200
{
    /**
     * 
     *
     * @var Placeholder
     */
    protected $placeholder;
    /**
     * 
     *
     * @return Placeholder
     */
    public function getPlaceholder() : Placeholder
    {
        return $this->placeholder;
    }
    /**
     * 
     *
     * @param Placeholder $placeholder
     *
     * @return self
     */
    public function setPlaceholder(Placeholder $placeholder) : self
    {
        $this->placeholder = $placeholder;
        return $this;
    }
}