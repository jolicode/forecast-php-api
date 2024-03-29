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

use Jane\Component\JsonSchemaRuntime\Reference;
use JoliCode\Forecast\Api\Runtime\Normalizer\CheckArray;
use JoliCode\Forecast\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class SubscriptionSubscriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscription' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscription' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscription();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('next_billing_date', $data) && null !== $data['next_billing_date']) {
                $object->setNextBillingDate(\DateTime::createFromFormat('Y-m-d', $data['next_billing_date'])->setTime(0, 0, 0));
                unset($data['next_billing_date']);
            } elseif (\array_key_exists('next_billing_date', $data) && null === $data['next_billing_date']) {
                $object->setNextBillingDate(null);
            }
            if (\array_key_exists('days_until_next_billing_date', $data) && null !== $data['days_until_next_billing_date']) {
                $object->setDaysUntilNextBillingDate($data['days_until_next_billing_date']);
                unset($data['days_until_next_billing_date']);
            } elseif (\array_key_exists('days_until_next_billing_date', $data) && null === $data['days_until_next_billing_date']) {
                $object->setDaysUntilNextBillingDate(null);
            }
            if (\array_key_exists('amount', $data) && null !== $data['amount']) {
                $object->setAmount($data['amount']);
                unset($data['amount']);
            } elseif (\array_key_exists('amount', $data) && null === $data['amount']) {
                $object->setAmount(null);
            }
            if (\array_key_exists('amount_per_person', $data) && null !== $data['amount_per_person']) {
                $object->setAmountPerPerson($data['amount_per_person']);
                unset($data['amount_per_person']);
            } elseif (\array_key_exists('amount_per_person', $data) && null === $data['amount_per_person']) {
                $object->setAmountPerPerson(null);
            }
            if (\array_key_exists('receipt_recipient', $data) && null !== $data['receipt_recipient']) {
                $object->setReceiptRecipient($data['receipt_recipient']);
                unset($data['receipt_recipient']);
            } elseif (\array_key_exists('receipt_recipient', $data) && null === $data['receipt_recipient']) {
                $object->setReceiptRecipient(null);
            }
            if (\array_key_exists('status', $data) && null !== $data['status']) {
                $object->setStatus($data['status']);
                unset($data['status']);
            } elseif (\array_key_exists('status', $data) && null === $data['status']) {
                $object->setStatus(null);
            }
            if (\array_key_exists('purchased_people', $data) && null !== $data['purchased_people']) {
                $object->setPurchasedPeople($data['purchased_people']);
                unset($data['purchased_people']);
            } elseif (\array_key_exists('purchased_people', $data) && null === $data['purchased_people']) {
                $object->setPurchasedPeople(null);
            }
            if (\array_key_exists('interval', $data) && null !== $data['interval']) {
                $object->setInterval($data['interval']);
                unset($data['interval']);
            } elseif (\array_key_exists('interval', $data) && null === $data['interval']) {
                $object->setInterval(null);
            }
            if (\array_key_exists('paid_by_invoice', $data) && null !== $data['paid_by_invoice']) {
                $object->setPaidByInvoice($data['paid_by_invoice']);
                unset($data['paid_by_invoice']);
            } elseif (\array_key_exists('paid_by_invoice', $data) && null === $data['paid_by_invoice']) {
                $object->setPaidByInvoice(null);
            }
            if (\array_key_exists('discounts', $data) && null !== $data['discounts']) {
                $object->setDiscounts($this->denormalizer->denormalize($data['discounts'], 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts', 'json', $context));
                unset($data['discounts']);
            } elseif (\array_key_exists('discounts', $data) && null === $data['discounts']) {
                $object->setDiscounts(null);
            }
            if (\array_key_exists('placeholder_limit', $data) && null !== $data['placeholder_limit']) {
                $object->setPlaceholderLimit($data['placeholder_limit']);
                unset($data['placeholder_limit']);
            } elseif (\array_key_exists('placeholder_limit', $data) && null === $data['placeholder_limit']) {
                $object->setPlaceholderLimit(null);
            }
            if (\array_key_exists('card', $data) && null !== $data['card']) {
                $object->setCard($this->denormalizer->denormalize($data['card'], 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard', 'json', $context));
                unset($data['card']);
            } elseif (\array_key_exists('card', $data) && null === $data['card']) {
                $object->setCard(null);
            }
            if (\array_key_exists('address', $data) && null !== $data['address']) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress', 'json', $context));
                unset($data['address']);
            } elseif (\array_key_exists('address', $data) && null === $data['address']) {
                $object->setAddress(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('nextBillingDate') && null !== $object->getNextBillingDate()) {
                $data['next_billing_date'] = $object->getNextBillingDate()->format('Y-m-d');
            }
            if ($object->isInitialized('daysUntilNextBillingDate') && null !== $object->getDaysUntilNextBillingDate()) {
                $data['days_until_next_billing_date'] = $object->getDaysUntilNextBillingDate();
            }
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $object->getAmount();
            }
            if ($object->isInitialized('amountPerPerson') && null !== $object->getAmountPerPerson()) {
                $data['amount_per_person'] = $object->getAmountPerPerson();
            }
            if ($object->isInitialized('receiptRecipient') && null !== $object->getReceiptRecipient()) {
                $data['receipt_recipient'] = $object->getReceiptRecipient();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('purchasedPeople') && null !== $object->getPurchasedPeople()) {
                $data['purchased_people'] = $object->getPurchasedPeople();
            }
            if ($object->isInitialized('interval') && null !== $object->getInterval()) {
                $data['interval'] = $object->getInterval();
            }
            if ($object->isInitialized('paidByInvoice') && null !== $object->getPaidByInvoice()) {
                $data['paid_by_invoice'] = $object->getPaidByInvoice();
            }
            if ($object->isInitialized('discounts') && null !== $object->getDiscounts()) {
                $data['discounts'] = $this->normalizer->normalize($object->getDiscounts(), 'json', $context);
            }
            if ($object->isInitialized('placeholderLimit') && null !== $object->getPlaceholderLimit()) {
                $data['placeholder_limit'] = $object->getPlaceholderLimit();
            }
            if ($object->isInitialized('card') && null !== $object->getCard()) {
                $data['card'] = $this->normalizer->normalize($object->getCard(), 'json', $context);
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscription' => false];
        }
    }
} else {
    class SubscriptionSubscriptionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscription' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscription' === $data::class;
        }

        /**
         * @param mixed|null $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscription();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('next_billing_date', $data) && null !== $data['next_billing_date']) {
                $object->setNextBillingDate(\DateTime::createFromFormat('Y-m-d', $data['next_billing_date'])->setTime(0, 0, 0));
                unset($data['next_billing_date']);
            } elseif (\array_key_exists('next_billing_date', $data) && null === $data['next_billing_date']) {
                $object->setNextBillingDate(null);
            }
            if (\array_key_exists('days_until_next_billing_date', $data) && null !== $data['days_until_next_billing_date']) {
                $object->setDaysUntilNextBillingDate($data['days_until_next_billing_date']);
                unset($data['days_until_next_billing_date']);
            } elseif (\array_key_exists('days_until_next_billing_date', $data) && null === $data['days_until_next_billing_date']) {
                $object->setDaysUntilNextBillingDate(null);
            }
            if (\array_key_exists('amount', $data) && null !== $data['amount']) {
                $object->setAmount($data['amount']);
                unset($data['amount']);
            } elseif (\array_key_exists('amount', $data) && null === $data['amount']) {
                $object->setAmount(null);
            }
            if (\array_key_exists('amount_per_person', $data) && null !== $data['amount_per_person']) {
                $object->setAmountPerPerson($data['amount_per_person']);
                unset($data['amount_per_person']);
            } elseif (\array_key_exists('amount_per_person', $data) && null === $data['amount_per_person']) {
                $object->setAmountPerPerson(null);
            }
            if (\array_key_exists('receipt_recipient', $data) && null !== $data['receipt_recipient']) {
                $object->setReceiptRecipient($data['receipt_recipient']);
                unset($data['receipt_recipient']);
            } elseif (\array_key_exists('receipt_recipient', $data) && null === $data['receipt_recipient']) {
                $object->setReceiptRecipient(null);
            }
            if (\array_key_exists('status', $data) && null !== $data['status']) {
                $object->setStatus($data['status']);
                unset($data['status']);
            } elseif (\array_key_exists('status', $data) && null === $data['status']) {
                $object->setStatus(null);
            }
            if (\array_key_exists('purchased_people', $data) && null !== $data['purchased_people']) {
                $object->setPurchasedPeople($data['purchased_people']);
                unset($data['purchased_people']);
            } elseif (\array_key_exists('purchased_people', $data) && null === $data['purchased_people']) {
                $object->setPurchasedPeople(null);
            }
            if (\array_key_exists('interval', $data) && null !== $data['interval']) {
                $object->setInterval($data['interval']);
                unset($data['interval']);
            } elseif (\array_key_exists('interval', $data) && null === $data['interval']) {
                $object->setInterval(null);
            }
            if (\array_key_exists('paid_by_invoice', $data) && null !== $data['paid_by_invoice']) {
                $object->setPaidByInvoice($data['paid_by_invoice']);
                unset($data['paid_by_invoice']);
            } elseif (\array_key_exists('paid_by_invoice', $data) && null === $data['paid_by_invoice']) {
                $object->setPaidByInvoice(null);
            }
            if (\array_key_exists('discounts', $data) && null !== $data['discounts']) {
                $object->setDiscounts($this->denormalizer->denormalize($data['discounts'], 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts', 'json', $context));
                unset($data['discounts']);
            } elseif (\array_key_exists('discounts', $data) && null === $data['discounts']) {
                $object->setDiscounts(null);
            }
            if (\array_key_exists('placeholder_limit', $data) && null !== $data['placeholder_limit']) {
                $object->setPlaceholderLimit($data['placeholder_limit']);
                unset($data['placeholder_limit']);
            } elseif (\array_key_exists('placeholder_limit', $data) && null === $data['placeholder_limit']) {
                $object->setPlaceholderLimit(null);
            }
            if (\array_key_exists('card', $data) && null !== $data['card']) {
                $object->setCard($this->denormalizer->denormalize($data['card'], 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard', 'json', $context));
                unset($data['card']);
            } elseif (\array_key_exists('card', $data) && null === $data['card']) {
                $object->setCard(null);
            }
            if (\array_key_exists('address', $data) && null !== $data['address']) {
                $object->setAddress($this->denormalizer->denormalize($data['address'], 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress', 'json', $context));
                unset($data['address']);
            } elseif (\array_key_exists('address', $data) && null === $data['address']) {
                $object->setAddress(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @param mixed|null $format
         *
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('nextBillingDate') && null !== $object->getNextBillingDate()) {
                $data['next_billing_date'] = $object->getNextBillingDate()->format('Y-m-d');
            }
            if ($object->isInitialized('daysUntilNextBillingDate') && null !== $object->getDaysUntilNextBillingDate()) {
                $data['days_until_next_billing_date'] = $object->getDaysUntilNextBillingDate();
            }
            if ($object->isInitialized('amount') && null !== $object->getAmount()) {
                $data['amount'] = $object->getAmount();
            }
            if ($object->isInitialized('amountPerPerson') && null !== $object->getAmountPerPerson()) {
                $data['amount_per_person'] = $object->getAmountPerPerson();
            }
            if ($object->isInitialized('receiptRecipient') && null !== $object->getReceiptRecipient()) {
                $data['receipt_recipient'] = $object->getReceiptRecipient();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            if ($object->isInitialized('purchasedPeople') && null !== $object->getPurchasedPeople()) {
                $data['purchased_people'] = $object->getPurchasedPeople();
            }
            if ($object->isInitialized('interval') && null !== $object->getInterval()) {
                $data['interval'] = $object->getInterval();
            }
            if ($object->isInitialized('paidByInvoice') && null !== $object->getPaidByInvoice()) {
                $data['paid_by_invoice'] = $object->getPaidByInvoice();
            }
            if ($object->isInitialized('discounts') && null !== $object->getDiscounts()) {
                $data['discounts'] = $this->normalizer->normalize($object->getDiscounts(), 'json', $context);
            }
            if ($object->isInitialized('placeholderLimit') && null !== $object->getPlaceholderLimit()) {
                $data['placeholder_limit'] = $object->getPlaceholderLimit();
            }
            if ($object->isInitialized('card') && null !== $object->getCard()) {
                $data['card'] = $this->normalizer->normalize($object->getCard(), 'json', $context);
            }
            if ($object->isInitialized('address') && null !== $object->getAddress()) {
                $data['address'] = $this->normalizer->normalize($object->getAddress(), 'json', $context);
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscription' => false];
        }
    }
}
