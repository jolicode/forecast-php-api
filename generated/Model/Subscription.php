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

class Subscription extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var SubscriptionSubscription|null
     */
    protected $subscription;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getSubscription(): ?SubscriptionSubscription
    {
        return $this->subscription;
    }

    public function setSubscription(?SubscriptionSubscription $subscription): self
    {
        $this->initialized['subscription'] = true;
        $this->subscription = $subscription;

        return $this;
    }
}
