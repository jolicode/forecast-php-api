<?php

namespace JoliCode\Forecast\Api\Model;

class SubscriptionSubscription
{
    /**
     * 
     *
     * @var int|null
     */
    protected $id;
    /**
     * 
     *
     * @var string|null
     */
    protected $nextBillingDate;
    /**
     * 
     *
     * @var int|null
     */
    protected $daysUntilNextBillingDate;
    /**
     * Subscription price, in cents
     *
     * @var int|null
     */
    protected $amount;
    /**
     * Subscription price per Person, in cents
     *
     * @var int|null
     */
    protected $amountPerPerson;
    /**
     * 
     *
     * @var string|null
     */
    protected $receiptRecipient;
    /**
     * 
     *
     * @var string|null
     */
    protected $status;
    /**
     * 
     *
     * @var int|null
     */
    protected $purchasedPeople;
    /**
     * 
     *
     * @var string|null
     */
    protected $interval;
    /**
     * 
     *
     * @var bool|null
     */
    protected $paidByInvoice;
    /**
     * 
     *
     * @var SubscriptionSubscriptionDiscounts|null
     */
    protected $discounts;
    /**
     * 
     *
     * @var int|null
     */
    protected $placeholderLimit;
    /**
     * 
     *
     * @var SubscriptionSubscriptionCard|null
     */
    protected $card;
    /**
     * 
     *
     * @var SubscriptionSubscriptionAddress|null
     */
    protected $address;
    /**
     * 
     *
     * @return int|null
     */
    public function getId() : ?int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getNextBillingDate() : ?string
    {
        return $this->nextBillingDate;
    }
    /**
     * 
     *
     * @param string|null $nextBillingDate
     *
     * @return self
     */
    public function setNextBillingDate(?string $nextBillingDate) : self
    {
        $this->nextBillingDate = $nextBillingDate;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getDaysUntilNextBillingDate() : ?int
    {
        return $this->daysUntilNextBillingDate;
    }
    /**
     * 
     *
     * @param int|null $daysUntilNextBillingDate
     *
     * @return self
     */
    public function setDaysUntilNextBillingDate(?int $daysUntilNextBillingDate) : self
    {
        $this->daysUntilNextBillingDate = $daysUntilNextBillingDate;
        return $this;
    }
    /**
     * Subscription price, in cents
     *
     * @return int|null
     */
    public function getAmount() : ?int
    {
        return $this->amount;
    }
    /**
     * Subscription price, in cents
     *
     * @param int|null $amount
     *
     * @return self
     */
    public function setAmount(?int $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Subscription price per Person, in cents
     *
     * @return int|null
     */
    public function getAmountPerPerson() : ?int
    {
        return $this->amountPerPerson;
    }
    /**
     * Subscription price per Person, in cents
     *
     * @param int|null $amountPerPerson
     *
     * @return self
     */
    public function setAmountPerPerson(?int $amountPerPerson) : self
    {
        $this->amountPerPerson = $amountPerPerson;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getReceiptRecipient() : ?string
    {
        return $this->receiptRecipient;
    }
    /**
     * 
     *
     * @param string|null $receiptRecipient
     *
     * @return self
     */
    public function setReceiptRecipient(?string $receiptRecipient) : self
    {
        $this->receiptRecipient = $receiptRecipient;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getStatus() : ?string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPurchasedPeople() : ?int
    {
        return $this->purchasedPeople;
    }
    /**
     * 
     *
     * @param int|null $purchasedPeople
     *
     * @return self
     */
    public function setPurchasedPeople(?int $purchasedPeople) : self
    {
        $this->purchasedPeople = $purchasedPeople;
        return $this;
    }
    /**
     * 
     *
     * @return string|null
     */
    public function getInterval() : ?string
    {
        return $this->interval;
    }
    /**
     * 
     *
     * @param string|null $interval
     *
     * @return self
     */
    public function setInterval(?string $interval) : self
    {
        $this->interval = $interval;
        return $this;
    }
    /**
     * 
     *
     * @return bool|null
     */
    public function getPaidByInvoice() : ?bool
    {
        return $this->paidByInvoice;
    }
    /**
     * 
     *
     * @param bool|null $paidByInvoice
     *
     * @return self
     */
    public function setPaidByInvoice(?bool $paidByInvoice) : self
    {
        $this->paidByInvoice = $paidByInvoice;
        return $this;
    }
    /**
     * 
     *
     * @return SubscriptionSubscriptionDiscounts|null
     */
    public function getDiscounts() : ?SubscriptionSubscriptionDiscounts
    {
        return $this->discounts;
    }
    /**
     * 
     *
     * @param SubscriptionSubscriptionDiscounts|null $discounts
     *
     * @return self
     */
    public function setDiscounts(?SubscriptionSubscriptionDiscounts $discounts) : self
    {
        $this->discounts = $discounts;
        return $this;
    }
    /**
     * 
     *
     * @return int|null
     */
    public function getPlaceholderLimit() : ?int
    {
        return $this->placeholderLimit;
    }
    /**
     * 
     *
     * @param int|null $placeholderLimit
     *
     * @return self
     */
    public function setPlaceholderLimit(?int $placeholderLimit) : self
    {
        $this->placeholderLimit = $placeholderLimit;
        return $this;
    }
    /**
     * 
     *
     * @return SubscriptionSubscriptionCard|null
     */
    public function getCard() : ?SubscriptionSubscriptionCard
    {
        return $this->card;
    }
    /**
     * 
     *
     * @param SubscriptionSubscriptionCard|null $card
     *
     * @return self
     */
    public function setCard(?SubscriptionSubscriptionCard $card) : self
    {
        $this->card = $card;
        return $this;
    }
    /**
     * 
     *
     * @return SubscriptionSubscriptionAddress|null
     */
    public function getAddress() : ?SubscriptionSubscriptionAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param SubscriptionSubscriptionAddress|null $address
     *
     * @return self
     */
    public function setAddress(?SubscriptionSubscriptionAddress $address) : self
    {
        $this->address = $address;
        return $this;
    }
}