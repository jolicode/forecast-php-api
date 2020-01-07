<?php

namespace JoliCode\Forecast\Api\Model;

class Account
{
    /**
     * 
     *
     * @var AccountAccount|null
     */
    protected $account;
    /**
     * 
     *
     * @return AccountAccount|null
     */
    public function getAccount() : ?AccountAccount
    {
        return $this->account;
    }
    /**
     * 
     *
     * @param AccountAccount|null $account
     *
     * @return self
     */
    public function setAccount(?AccountAccount $account) : self
    {
        $this->account = $account;
        return $this;
    }
}