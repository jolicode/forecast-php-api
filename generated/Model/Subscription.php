<?php

namespace JoliCode\Forecast\Api\Model;

class Subscription
{
    /**
     * 
     *
     * @var SubscriptionSubscription|null
     */
    protected $subscription;
    /**
     * 
     *
     * @return SubscriptionSubscription|null
     */
    public function getSubscription() : ?SubscriptionSubscription
    {
        return $this->subscription;
    }
    /**
     * 
     *
     * @param SubscriptionSubscription|null $subscription
     *
     * @return self
     */
    public function setSubscription(?SubscriptionSubscription $subscription) : self
    {
        $this->subscription = $subscription;
        return $this;
    }
}