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

class Account extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var AccountAccount|null
     */
    protected $account;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getAccount(): ?AccountAccount
    {
        return $this->account;
    }

    public function setAccount(?AccountAccount $account): self
    {
        $this->initialized['account'] = true;
        $this->account = $account;

        return $this;
    }
}
