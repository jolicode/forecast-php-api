<?php

namespace JoliCode\Forecast\Api\Model;

class PlaceholdersIdGetResponse200
{
    /**
     * 
     *
     * @var Placeholder|null
     */
    protected $placeholder;
    /**
     * 
     *
     * @return Placeholder|null
     */
    public function getPlaceholder() : ?Placeholder
    {
        return $this->placeholder;
    }
    /**
     * 
     *
     * @param Placeholder|null $placeholder
     *
     * @return self
     */
    public function setPlaceholder(?Placeholder $placeholder) : self
    {
        $this->placeholder = $placeholder;
        return $this;
    }
}