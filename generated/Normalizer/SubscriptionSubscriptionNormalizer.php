<?php

namespace JoliCode\Forecast\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
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
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscription();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'next_billing_date')) {
            $object->setNextBillingDate($data->{'next_billing_date'});
        }
        if (property_exists($data, 'days_until_next_billing_date')) {
            $object->setDaysUntilNextBillingDate($data->{'days_until_next_billing_date'});
        }
        if (property_exists($data, 'amount')) {
            $object->setAmount($data->{'amount'});
        }
        if (property_exists($data, 'amount_per_person')) {
            $object->setAmountPerPerson($data->{'amount_per_person'});
        }
        if (property_exists($data, 'receipt_recipient')) {
            $object->setReceiptRecipient($data->{'receipt_recipient'});
        }
        if (property_exists($data, 'status')) {
            $object->setStatus($data->{'status'});
        }
        if (property_exists($data, 'purchased_people')) {
            $object->setPurchasedPeople($data->{'purchased_people'});
        }
        if (property_exists($data, 'interval')) {
            $object->setInterval($data->{'interval'});
        }
        if (property_exists($data, 'paid_by_invoice')) {
            $object->setPaidByInvoice($data->{'paid_by_invoice'});
        }
        if (property_exists($data, 'discounts')) {
            $object->setDiscounts($this->denormalizer->denormalize($data->{'discounts'}, 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts', 'json', $context));
        }
        if (property_exists($data, 'placeholder_limit')) {
            $object->setPlaceholderLimit($data->{'placeholder_limit'});
        }
        if (property_exists($data, 'card')) {
            $object->setCard($this->denormalizer->denormalize($data->{'card'}, 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard', 'json', $context));
        }
        if (property_exists($data, 'address')) {
            $object->setAddress($this->denormalizer->denormalize($data->{'address'}, 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress', 'json', $context));
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getNextBillingDate()) {
            $data->{'next_billing_date'} = $object->getNextBillingDate();
        }
        if (null !== $object->getDaysUntilNextBillingDate()) {
            $data->{'days_until_next_billing_date'} = $object->getDaysUntilNextBillingDate();
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        }
        if (null !== $object->getAmountPerPerson()) {
            $data->{'amount_per_person'} = $object->getAmountPerPerson();
        }
        if (null !== $object->getReceiptRecipient()) {
            $data->{'receipt_recipient'} = $object->getReceiptRecipient();
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        }
        if (null !== $object->getPurchasedPeople()) {
            $data->{'purchased_people'} = $object->getPurchasedPeople();
        }
        if (null !== $object->getInterval()) {
            $data->{'interval'} = $object->getInterval();
        }
        if (null !== $object->getPaidByInvoice()) {
            $data->{'paid_by_invoice'} = $object->getPaidByInvoice();
        }
        if (null !== $object->getDiscounts()) {
            $data->{'discounts'} = $this->normalizer->normalize($object->getDiscounts(), 'json', $context);
        }
        if (null !== $object->getPlaceholderLimit()) {
            $data->{'placeholder_limit'} = $object->getPlaceholderLimit();
        }
        if (null !== $object->getCard()) {
            $data->{'card'} = $this->normalizer->normalize($object->getCard(), 'json', $context);
        }
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        }
        return $data;
    }
}