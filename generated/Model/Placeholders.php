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

class Placeholders
{
    /**
     * @var Placeholder[]|null
     */
    protected $placeholders;

    /**
     * @return Placeholder[]|null
     */
    public function getPlaceholders(): ?array
    {
        return $this->placeholders;
    }

    /**
     * @param Placeholder[]|null $placeholders
     */
    public function setPlaceholders(?array $placeholders): self
    {
        $this->placeholders = $placeholders;

        return $this;
    }
}
