<?php

namespace JoliCode\Forecast\Api\Model;

class SubscriptionSubscription
{
    /**
     * 
     *
     * @var int
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $nextBillingDate;
    /**
     * 
     *
     * @var int
     */
    protected $daysUntilNextBillingDate;
    /**
     * Subscription price, in cents
     *
     * @var int
     */
    protected $amount;
    /**
     * Subscription price per Person, in cents
     *
     * @var int
     */
    protected $amountPerPerson;
    /**
     * 
     *
     * @var string
     */
    protected $receiptRecipient;
    /**
     * 
     *
     * @var string
     */
    protected $status;
    /**
     * 
     *
     * @var int
     */
    protected $purchasedPeople;
    /**
     * 
     *
     * @var string
     */
    protected $interval;
    /**
     * 
     *
     * @var bool
     */
    protected $paidByInvoice;
    /**
     * 
     *
     * @var SubscriptionSubscriptionDiscounts
     */
    protected $discounts;
    /**
     * 
     *
     * @var int
     */
    protected $placeholderLimit;
    /**
     * 
     *
     * @var SubscriptionSubscriptionCard
     */
    protected $card;
    /**
     * 
     *
     * @var SubscriptionSubscriptionAddress
     */
    protected $address;
    /**
     * 
     *
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getNextBillingDate() : string
    {
        return $this->nextBillingDate;
    }
    /**
     * 
     *
     * @param string $nextBillingDate
     *
     * @return self
     */
    public function setNextBillingDate(string $nextBillingDate) : self
    {
        $this->nextBillingDate = $nextBillingDate;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getDaysUntilNextBillingDate() : int
    {
        return $this->daysUntilNextBillingDate;
    }
    /**
     * 
     *
     * @param int $daysUntilNextBillingDate
     *
     * @return self
     */
    public function setDaysUntilNextBillingDate(int $daysUntilNextBillingDate) : self
    {
        $this->daysUntilNextBillingDate = $daysUntilNextBillingDate;
        return $this;
    }
    /**
     * Subscription price, in cents
     *
     * @return int
     */
    public function getAmount() : int
    {
        return $this->amount;
    }
    /**
     * Subscription price, in cents
     *
     * @param int $amount
     *
     * @return self
     */
    public function setAmount(int $amount) : self
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Subscription price per Person, in cents
     *
     * @return int
     */
    public function getAmountPerPerson() : int
    {
        return $this->amountPerPerson;
    }
    /**
     * Subscription price per Person, in cents
     *
     * @param int $amountPerPerson
     *
     * @return self
     */
    public function setAmountPerPerson(int $amountPerPerson) : self
    {
        $this->amountPerPerson = $amountPerPerson;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getReceiptRecipient() : string
    {
        return $this->receiptRecipient;
    }
    /**
     * 
     *
     * @param string $receiptRecipient
     *
     * @return self
     */
    public function setReceiptRecipient(string $receiptRecipient) : self
    {
        $this->receiptRecipient = $receiptRecipient;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getStatus() : string
    {
        return $this->status;
    }
    /**
     * 
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status) : self
    {
        $this->status = $status;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPurchasedPeople() : int
    {
        return $this->purchasedPeople;
    }
    /**
     * 
     *
     * @param int $purchasedPeople
     *
     * @return self
     */
    public function setPurchasedPeople(int $purchasedPeople) : self
    {
        $this->purchasedPeople = $purchasedPeople;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getInterval() : string
    {
        return $this->interval;
    }
    /**
     * 
     *
     * @param string $interval
     *
     * @return self
     */
    public function setInterval(string $interval) : self
    {
        $this->interval = $interval;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getPaidByInvoice() : bool
    {
        return $this->paidByInvoice;
    }
    /**
     * 
     *
     * @param bool $paidByInvoice
     *
     * @return self
     */
    public function setPaidByInvoice(bool $paidByInvoice) : self
    {
        $this->paidByInvoice = $paidByInvoice;
        return $this;
    }
    /**
     * 
     *
     * @return SubscriptionSubscriptionDiscounts
     */
    public function getDiscounts() : SubscriptionSubscriptionDiscounts
    {
        return $this->discounts;
    }
    /**
     * 
     *
     * @param SubscriptionSubscriptionDiscounts $discounts
     *
     * @return self
     */
    public function setDiscounts(SubscriptionSubscriptionDiscounts $discounts) : self
    {
        $this->discounts = $discounts;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getPlaceholderLimit() : int
    {
        return $this->placeholderLimit;
    }
    /**
     * 
     *
     * @param int $placeholderLimit
     *
     * @return self
     */
    public function setPlaceholderLimit(int $placeholderLimit) : self
    {
        $this->placeholderLimit = $placeholderLimit;
        return $this;
    }
    /**
     * 
     *
     * @return SubscriptionSubscriptionCard
     */
    public function getCard() : SubscriptionSubscriptionCard
    {
        return $this->card;
    }
    /**
     * 
     *
     * @param SubscriptionSubscriptionCard $card
     *
     * @return self
     */
    public function setCard(SubscriptionSubscriptionCard $card) : self
    {
        $this->card = $card;
        return $this;
    }
    /**
     * 
     *
     * @return SubscriptionSubscriptionAddress
     */
    public function getAddress() : SubscriptionSubscriptionAddress
    {
        return $this->address;
    }
    /**
     * 
     *
     * @param SubscriptionSubscriptionAddress $address
     *
     * @return self
     */
    public function setAddress(SubscriptionSubscriptionAddress $address) : self
    {
        $this->address = $address;
        return $this;
    }
}