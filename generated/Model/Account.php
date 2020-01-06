<?php

namespace JoliCode\Forecast\Api\Model;

class Account
{
    /**
     * 
     *
     * @var AccountAccount
     */
    protected $account;
    /**
     * 
     *
     * @return AccountAccount
     */
    public function getAccount() : AccountAccount
    {
        return $this->account;
    }
    /**
     * 
     *
     * @param AccountAccount $account
     *
     * @return self
     */
    public function setAccount(AccountAccount $account) : self
    {
        $this->account = $account;
        return $this;
    }
}