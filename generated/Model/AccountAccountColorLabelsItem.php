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

class AccountAccountColorLabelsItem
{
    /**
     * Name of the color.
     *
     * @var string|null
     */
    protected $name;
    /**
     * Label associated to the color.
     *
     * @var string|null
     */
    protected $label;

    /**
     * Name of the color.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Name of the color.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Label associated to the color.
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Label associated to the color.
     */
    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }
}
