<?php

namespace JoliCode\Forecast\Api\Model;

class AccountAccountColorLabelsItem
{
    /**
     * Name of the color
     *
     * @var string
     */
    protected $name;
    /**
     * Label associated to the color
     *
     * @var string
     */
    protected $label;
    /**
     * Name of the color
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
    /**
     * Name of the color
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name) : self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Label associated to the color
     *
     * @return string
     */
    public function getLabel() : string
    {
        return $this->label;
    }
    /**
     * Label associated to the color
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label) : self
    {
        $this->label = $label;
        return $this;
    }
}