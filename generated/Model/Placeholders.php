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

class Placeholders extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var list<Placeholder>|null
     */
    protected $placeholders;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    /**
     * @return list<Placeholder>|null
     */
    public function getPlaceholders(): ?array
    {
        return $this->placeholders;
    }

    /**
     * @param list<Placeholder>|null $placeholders
     */
    public function setPlaceholders(?array $placeholders): self
    {
        $this->initialized['placeholders'] = true;
        $this->placeholders = $placeholders;

        return $this;
    }
}
