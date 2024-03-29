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

class PlaceholdersIdGetResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var Placeholder|null
     */
    protected $placeholder;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getPlaceholder(): ?Placeholder
    {
        return $this->placeholder;
    }

    public function setPlaceholder(?Placeholder $placeholder): self
    {
        $this->initialized['placeholder'] = true;
        $this->placeholder = $placeholder;

        return $this;
    }
}
