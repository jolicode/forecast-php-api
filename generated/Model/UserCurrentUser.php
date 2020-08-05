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

class UserCurrentUser
{
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var int[]|null
     */
    protected $accountIds;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int[]|null
     */
    public function getAccountIds(): ?array
    {
        return $this->accountIds;
    }

    /**
     * @param int[]|null $accountIds
     */
    public function setAccountIds(?array $accountIds): self
    {
        $this->accountIds = $accountIds;

        return $this;
    }
}
