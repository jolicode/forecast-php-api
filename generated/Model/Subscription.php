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

class Subscription
{
    /**
     * @var SubscriptionSubscription|null
     */
    protected $subscription;

    public function getSubscription(): ?SubscriptionSubscription
    {
        return $this->subscription;
    }

    public function setSubscription(?SubscriptionSubscription $subscription): self
    {
        $this->subscription = $subscription;

        return $this;
    }
}
