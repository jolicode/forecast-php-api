<?php

namespace JoliCode\Forecast\Api\Model;

class Subscription
{
    /**
     * 
     *
     * @var SubscriptionSubscription
     */
    protected $subscription;
    /**
     * 
     *
     * @return SubscriptionSubscription
     */
    public function getSubscription() : SubscriptionSubscription
    {
        return $this->subscription;
    }
    /**
     * 
     *
     * @param SubscriptionSubscription $subscription
     *
     * @return self
     */
    public function setSubscription(SubscriptionSubscription $subscription) : self
    {
        $this->subscription = $subscription;
        return $this;
    }
}