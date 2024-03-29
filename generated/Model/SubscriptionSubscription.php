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

class SubscriptionSubscription extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    /**
     * @var int|null
     */
    protected $id;
    /**
     * @var \DateTime|null
     */
    protected $nextBillingDate;
    /**
     * @var int|null
     */
    protected $daysUntilNextBillingDate;
    /**
     * Subscription price, in cents.
     *
     * @var int|null
     */
    protected $amount;
    /**
     * Subscription price per Person, in cents.
     *
     * @var int|null
     */
    protected $amountPerPerson;
    /**
     * @var string|null
     */
    protected $receiptRecipient;
    /**
     * @var string|null
     */
    protected $status;
    /**
     * @var int|null
     */
    protected $purchasedPeople;
    /**
     * @var string|null
     */
    protected $interval;
    /**
     * @var bool|null
     */
    protected $paidByInvoice;
    /**
     * @var SubscriptionSubscriptionDiscounts|null
     */
    protected $discounts;
    /**
     * @var int|null
     */
    protected $placeholderLimit;
    /**
     * @var SubscriptionSubscriptionCard|null
     */
    protected $card;
    /**
     * @var SubscriptionSubscriptionAddress|null
     */
    protected $address;

    public function isInitialized($property): bool
    {
        return \array_key_exists($property, $this->initialized);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getNextBillingDate(): ?\DateTime
    {
        return $this->nextBillingDate;
    }

    public function setNextBillingDate(?\DateTime $nextBillingDate): self
    {
        $this->initialized['nextBillingDate'] = true;
        $this->nextBillingDate = $nextBillingDate;

        return $this;
    }

    public function getDaysUntilNextBillingDate(): ?int
    {
        return $this->daysUntilNextBillingDate;
    }

    public function setDaysUntilNextBillingDate(?int $daysUntilNextBillingDate): self
    {
        $this->initialized['daysUntilNextBillingDate'] = true;
        $this->daysUntilNextBillingDate = $daysUntilNextBillingDate;

        return $this;
    }

    /**
     * Subscription price, in cents.
     */
    public function getAmount(): ?int
    {
        return $this->amount;
    }

    /**
     * Subscription price, in cents.
     */
    public function setAmount(?int $amount): self
    {
        $this->initialized['amount'] = true;
        $this->amount = $amount;

        return $this;
    }

    /**
     * Subscription price per Person, in cents.
     */
    public function getAmountPerPerson(): ?int
    {
        return $this->amountPerPerson;
    }

    /**
     * Subscription price per Person, in cents.
     */
    public function setAmountPerPerson(?int $amountPerPerson): self
    {
        $this->initialized['amountPerPerson'] = true;
        $this->amountPerPerson = $amountPerPerson;

        return $this;
    }

    public function getReceiptRecipient(): ?string
    {
        return $this->receiptRecipient;
    }

    public function setReceiptRecipient(?string $receiptRecipient): self
    {
        $this->initialized['receiptRecipient'] = true;
        $this->receiptRecipient = $receiptRecipient;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    public function getPurchasedPeople(): ?int
    {
        return $this->purchasedPeople;
    }

    public function setPurchasedPeople(?int $purchasedPeople): self
    {
        $this->initialized['purchasedPeople'] = true;
        $this->purchasedPeople = $purchasedPeople;

        return $this;
    }

    public function getInterval(): ?string
    {
        return $this->interval;
    }

    public function setInterval(?string $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;

        return $this;
    }

    public function getPaidByInvoice(): ?bool
    {
        return $this->paidByInvoice;
    }

    public function setPaidByInvoice(?bool $paidByInvoice): self
    {
        $this->initialized['paidByInvoice'] = true;
        $this->paidByInvoice = $paidByInvoice;

        return $this;
    }

    public function getDiscounts(): ?SubscriptionSubscriptionDiscounts
    {
        return $this->discounts;
    }

    public function setDiscounts(?SubscriptionSubscriptionDiscounts $discounts): self
    {
        $this->initialized['discounts'] = true;
        $this->discounts = $discounts;

        return $this;
    }

    public function getPlaceholderLimit(): ?int
    {
        return $this->placeholderLimit;
    }

    public function setPlaceholderLimit(?int $placeholderLimit): self
    {
        $this->initialized['placeholderLimit'] = true;
        $this->placeholderLimit = $placeholderLimit;

        return $this;
    }

    public function getCard(): ?SubscriptionSubscriptionCard
    {
        return $this->card;
    }

    public function setCard(?SubscriptionSubscriptionCard $card): self
    {
        $this->initialized['card'] = true;
        $this->card = $card;

        return $this;
    }

    public function getAddress(): ?SubscriptionSubscriptionAddress
    {
        return $this->address;
    }

    public function setAddress(?SubscriptionSubscriptionAddress $address): self
    {
        $this->initialized['address'] = true;
        $this->address = $address;

        return $this;
    }
}
