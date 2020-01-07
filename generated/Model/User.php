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

class User
{
    /**
     * @var UserCurrentUser|null
     */
    protected $currentUser;

    public function getCurrentUser(): ?UserCurrentUser
    {
        return $this->currentUser;
    }

    public function setCurrentUser(?UserCurrentUser $currentUser): self
    {
        $this->currentUser = $currentUser;

        return $this;
    }
}
