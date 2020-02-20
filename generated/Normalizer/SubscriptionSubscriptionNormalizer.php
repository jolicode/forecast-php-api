<?php

/*
 * This file is part of JoliCode's Forecast PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Forecast\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
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
        return 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscription' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscription' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscription();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'next_billing_date') && null !== $data->{'next_billing_date'}) {
            $object->setNextBillingDate(\DateTime::createFromFormat('Y-m-d', $data->{'next_billing_date'})->setTime(0, 0, 0));
        } elseif (property_exists($data, 'next_billing_date') && null === $data->{'next_billing_date'}) {
            $object->setNextBillingDate(null);
        }
        if (property_exists($data, 'days_until_next_billing_date') && null !== $data->{'days_until_next_billing_date'}) {
            $object->setDaysUntilNextBillingDate($data->{'days_until_next_billing_date'});
        } elseif (property_exists($data, 'days_until_next_billing_date') && null === $data->{'days_until_next_billing_date'}) {
            $object->setDaysUntilNextBillingDate(null);
        }
        if (property_exists($data, 'amount') && null !== $data->{'amount'}) {
            $object->setAmount($data->{'amount'});
        } elseif (property_exists($data, 'amount') && null === $data->{'amount'}) {
            $object->setAmount(null);
        }
        if (property_exists($data, 'amount_per_person') && null !== $data->{'amount_per_person'}) {
            $object->setAmountPerPerson($data->{'amount_per_person'});
        } elseif (property_exists($data, 'amount_per_person') && null === $data->{'amount_per_person'}) {
            $object->setAmountPerPerson(null);
        }
        if (property_exists($data, 'receipt_recipient') && null !== $data->{'receipt_recipient'}) {
            $object->setReceiptRecipient($data->{'receipt_recipient'});
        } elseif (property_exists($data, 'receipt_recipient') && null === $data->{'receipt_recipient'}) {
            $object->setReceiptRecipient(null);
        }
        if (property_exists($data, 'status') && null !== $data->{'status'}) {
            $object->setStatus($data->{'status'});
        } elseif (property_exists($data, 'status') && null === $data->{'status'}) {
            $object->setStatus(null);
        }
        if (property_exists($data, 'purchased_people') && null !== $data->{'purchased_people'}) {
            $object->setPurchasedPeople($data->{'purchased_people'});
        } elseif (property_exists($data, 'purchased_people') && null === $data->{'purchased_people'}) {
            $object->setPurchasedPeople(null);
        }
        if (property_exists($data, 'interval') && null !== $data->{'interval'}) {
            $object->setInterval($data->{'interval'});
        } elseif (property_exists($data, 'interval') && null === $data->{'interval'}) {
            $object->setInterval(null);
        }
        if (property_exists($data, 'paid_by_invoice') && null !== $data->{'paid_by_invoice'}) {
            $object->setPaidByInvoice($data->{'paid_by_invoice'});
        } elseif (property_exists($data, 'paid_by_invoice') && null === $data->{'paid_by_invoice'}) {
            $object->setPaidByInvoice(null);
        }
        if (property_exists($data, 'discounts') && null !== $data->{'discounts'}) {
            $object->setDiscounts($this->denormalizer->denormalize($data->{'discounts'}, 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts', 'json', $context));
        } elseif (property_exists($data, 'discounts') && null === $data->{'discounts'}) {
            $object->setDiscounts(null);
        }
        if (property_exists($data, 'placeholder_limit') && null !== $data->{'placeholder_limit'}) {
            $object->setPlaceholderLimit($data->{'placeholder_limit'});
        } elseif (property_exists($data, 'placeholder_limit') && null === $data->{'placeholder_limit'}) {
            $object->setPlaceholderLimit(null);
        }
        if (property_exists($data, 'card') && null !== $data->{'card'}) {
            $object->setCard($this->denormalizer->denormalize($data->{'card'}, 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard', 'json', $context));
        } elseif (property_exists($data, 'card') && null === $data->{'card'}) {
            $object->setCard(null);
        }
        if (property_exists($data, 'address') && null !== $data->{'address'}) {
            $object->setAddress($this->denormalizer->denormalize($data->{'address'}, 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress', 'json', $context));
        } elseif (property_exists($data, 'address') && null === $data->{'address'}) {
            $object->setAddress(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getNextBillingDate()) {
            $data->{'next_billing_date'} = $object->getNextBillingDate()->format('Y-m-d');
        } else {
            $data->{'next_billing_date'} = null;
        }
        if (null !== $object->getDaysUntilNextBillingDate()) {
            $data->{'days_until_next_billing_date'} = $object->getDaysUntilNextBillingDate();
        } else {
            $data->{'days_until_next_billing_date'} = null;
        }
        if (null !== $object->getAmount()) {
            $data->{'amount'} = $object->getAmount();
        } else {
            $data->{'amount'} = null;
        }
        if (null !== $object->getAmountPerPerson()) {
            $data->{'amount_per_person'} = $object->getAmountPerPerson();
        } else {
            $data->{'amount_per_person'} = null;
        }
        if (null !== $object->getReceiptRecipient()) {
            $data->{'receipt_recipient'} = $object->getReceiptRecipient();
        } else {
            $data->{'receipt_recipient'} = null;
        }
        if (null !== $object->getStatus()) {
            $data->{'status'} = $object->getStatus();
        } else {
            $data->{'status'} = null;
        }
        if (null !== $object->getPurchasedPeople()) {
            $data->{'purchased_people'} = $object->getPurchasedPeople();
        } else {
            $data->{'purchased_people'} = null;
        }
        if (null !== $object->getInterval()) {
            $data->{'interval'} = $object->getInterval();
        } else {
            $data->{'interval'} = null;
        }
        if (null !== $object->getPaidByInvoice()) {
            $data->{'paid_by_invoice'} = $object->getPaidByInvoice();
        } else {
            $data->{'paid_by_invoice'} = null;
        }
        if (null !== $object->getDiscounts()) {
            $data->{'discounts'} = $this->normalizer->normalize($object->getDiscounts(), 'json', $context);
        } else {
            $data->{'discounts'} = null;
        }
        if (null !== $object->getPlaceholderLimit()) {
            $data->{'placeholder_limit'} = $object->getPlaceholderLimit();
        } else {
            $data->{'placeholder_limit'} = null;
        }
        if (null !== $object->getCard()) {
            $data->{'card'} = $this->normalizer->normalize($object->getCard(), 'json', $context);
        } else {
            $data->{'card'} = null;
        }
        if (null !== $object->getAddress()) {
            $data->{'address'} = $this->normalizer->normalize($object->getAddress(), 'json', $context);
        } else {
            $data->{'address'} = null;
        }

        return $data;
    }
}
