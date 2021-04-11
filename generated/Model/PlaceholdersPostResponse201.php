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

class PlaceholdersPostResponse201
{
    /**
     * @var Placeholder|null
     */
    protected $placeholder;

    public function getPlaceholder(): ?Placeholder
    {
        return $this->placeholder;
    }

    public function setPlaceholder(?Placeholder $placeholder): self
    {
        $this->placeholder = $placeholder;

        return $this;
    }
}
