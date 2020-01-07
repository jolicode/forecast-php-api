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

class Account
{
    /**
     * @var AccountAccount|null
     */
    protected $account;

    public function getAccount(): ?AccountAccount
    {
        return $this->account;
    }

    public function setAccount(?AccountAccount $account): self
    {
        $this->account = $account;

        return $this;
    }
}
