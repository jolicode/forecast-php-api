<?php

namespace JoliCode\Forecast\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class SubscriptionSubscriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscription';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscription';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscription();
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('next_billing_date', $data) && $data['next_billing_date'] !== null) {
            $object->setNextBillingDate(\DateTime::createFromFormat('Y-m-d', $data['next_billing_date'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('next_billing_date', $data) && $data['next_billing_date'] === null) {
            $object->setNextBillingDate(null);
        }
        if (\array_key_exists('days_until_next_billing_date', $data) && $data['days_until_next_billing_date'] !== null) {
            $object->setDaysUntilNextBillingDate($data['days_until_next_billing_date']);
        }
        elseif (\array_key_exists('days_until_next_billing_date', $data) && $data['days_until_next_billing_date'] === null) {
            $object->setDaysUntilNextBillingDate(null);
        }
        if (\array_key_exists('amount', $data) && $data['amount'] !== null) {
            $object->setAmount($data['amount']);
        }
        elseif (\array_key_exists('amount', $data) && $data['amount'] === null) {
            $object->setAmount(null);
        }
        if (\array_key_exists('amount_per_person', $data) && $data['amount_per_person'] !== null) {
            $object->setAmountPerPerson($data['amount_per_person']);
        }
        elseif (\array_key_exists('amount_per_person', $data) && $data['amount_per_person'] === null) {
            $object->setAmountPerPerson(null);
        }
        if (\array_key_exists('receipt_recipient', $data) && $data['receipt_recipient'] !== null) {
            $object->setReceiptRecipient($data['receipt_recipient']);
        }
        elseif (\array_key_exists('receipt_recipient', $data) && $data['receipt_recipient'] === null) {
            $object->setReceiptRecipient(null);
        }
        if (\array_key_exists('status', $data) && $data['status'] !== null) {
            $object->setStatus($data['status']);
        }
        elseif (\array_key_exists('status', $data) && $data['status'] === null) {
            $object->setStatus(null);
        }
        if (\array_key_exists('purchased_people', $data) && $data['purchased_people'] !== null) {
            $object->setPurchasedPeople($data['purchased_people']);
        }
        elseif (\array_key_exists('purchased_people', $data) && $data['purchased_people'] === null) {
            $object->setPurchasedPeople(null);
        }
        if (\array_key_exists('interval', $data) && $data['interval'] !== null) {
            $object->setInterval($data['interval']);
        }
        elseif (\array_key_exists('interval', $data) && $data['interval'] === null) {
            $object->setInterval(null);
        }
        if (\array_key_exists('paid_by_invoice', $data) && $data['paid_by_invoice'] !== null) {
            $object->setPaidByInvoice($data['paid_by_invoice']);
        }
        elseif (\array_key_exists('paid_by_invoice', $data) && $data['paid_by_invoice'] === null) {
            $object->setPaidByInvoice(null);
        }
        if (\array_key_exists('discounts', $data) && $data['discounts'] !== null) {
            $object->setDiscounts($this->denormalizer->denormalize($data['discounts'], 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts', 'json', $context));
        }
        elseif (\array_key_exists('discounts', $data) && $data['discounts'] === null) {
            $object->setDiscounts(null);
        }
        if (\array_key_exists('placeholder_limit', $data) && $data['placeholder_limit'] !== null) {
            $object->setPlaceholderLimit($data['placeholder_limit']);
        }
        elseif (\array_key_exists('placeholder_limit', $data) && $data['placeholder_limit'] === null) {
            $object->setPlaceholderLimit(null);
        }
        if (\array_key_exists('card', $data) && $data['card'] !== null) {
            $object->setCard($this->denormalizer->denormalize($data['card'], 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard', 'json', $context));
        }
        elseif (\array_key_exists('card', $data) && $data['card'] === null) {
            $object->setCard(null);
        }
        if (\array_key_exists('address', $data) && $data['address'] !== null) {
            $object->setAddress($this->denormalizer->denormalize($data['address'], 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress', 'json', $context));
        }
        elseif (\array_key_exists('address', $data) && $data['address'] === null) {
            $object->setAddress(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getNextBillingDate()) {
            $data['next_billing_date'] = $object->getNextBillingDate()->format('Y-m-d');
        }
        if (null !== $object->getDaysUntilNextBillingDate()) {
            $data['days_until_next_billing_date'] = $object->getDaysUntilNextBillingDate();
        }
        if (null !== $object->getAmount()) {
            $data['amount'] = $object->getAmount();
        }
        if (null !== $object->getAmountPerPerson()) {
            $data['amount_per_person'] = $object->getAmountPerPerson();
        }
        if (null !== $object->getReceiptRecipient()) {
            $data['receipt_recipient'] = $object->getReceiptRecipient();
        }
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getPurchasedPeople()) {
            $data['purchased_people'] = $object->getPurchasedPeople();
        }
        if (null !== $object->getInterval()) {
            $data['interval'] = $object->getInterval();
        }
        if (null !== $object->getPaidByInvoice()) {
            $data['paid_by_invoice'] = $object->getPaidByInvoice();
        }
        if (null !== $object->getDiscounts()) {
            $data['discounts'] = $this->normalizer->normalize($object->getDiscounts(), 'json', $context);
        }
        if (null !== $object->getPlaceholderLimit()) {
            $data['placeholder_limit'] = $object->getPlaceholderLimit();
        }
        if (null !== $object->getCard()) {
            $data['card'] = $this->normalizer->normalize($object->getCard(), 'json', $context);
        }
        if (null !== $object->getAddress()) {
            $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        return $data;
    }
}