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
    class SubscriptionSubscriptionCardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscriptionCard();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('brand', $data) && null !== $data['brand']) {
                $object->setBrand($data['brand']);
                unset($data['brand']);
            } elseif (\array_key_exists('brand', $data) && null === $data['brand']) {
                $object->setBrand(null);
            }
            if (\array_key_exists('last_four', $data) && null !== $data['last_four']) {
                $object->setLastFour($data['last_four']);
                unset($data['last_four']);
            } elseif (\array_key_exists('last_four', $data) && null === $data['last_four']) {
                $object->setLastFour(null);
            }
            if (\array_key_exists('expiry_month', $data) && null !== $data['expiry_month']) {
                $object->setExpiryMonth($data['expiry_month']);
                unset($data['expiry_month']);
            } elseif (\array_key_exists('expiry_month', $data) && null === $data['expiry_month']) {
                $object->setExpiryMonth(null);
            }
            if (\array_key_exists('expiry_year', $data) && null !== $data['expiry_year']) {
                $object->setExpiryYear($data['expiry_year']);
                unset($data['expiry_year']);
            } elseif (\array_key_exists('expiry_year', $data) && null === $data['expiry_year']) {
                $object->setExpiryYear(null);
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
            if ($object->isInitialized('brand') && null !== $object->getBrand()) {
                $data['brand'] = $object->getBrand();
            }
            if ($object->isInitialized('lastFour') && null !== $object->getLastFour()) {
                $data['last_four'] = $object->getLastFour();
            }
            if ($object->isInitialized('expiryMonth') && null !== $object->getExpiryMonth()) {
                $data['expiry_month'] = $object->getExpiryMonth();
            }
            if ($object->isInitialized('expiryYear') && null !== $object->getExpiryYear()) {
                $data['expiry_year'] = $object->getExpiryYear();
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
            return ['JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard' => false];
        }
    }
} else {
    class SubscriptionSubscriptionCardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard' === $data::class;
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
            $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscriptionCard();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('brand', $data) && null !== $data['brand']) {
                $object->setBrand($data['brand']);
                unset($data['brand']);
            } elseif (\array_key_exists('brand', $data) && null === $data['brand']) {
                $object->setBrand(null);
            }
            if (\array_key_exists('last_four', $data) && null !== $data['last_four']) {
                $object->setLastFour($data['last_four']);
                unset($data['last_four']);
            } elseif (\array_key_exists('last_four', $data) && null === $data['last_four']) {
                $object->setLastFour(null);
            }
            if (\array_key_exists('expiry_month', $data) && null !== $data['expiry_month']) {
                $object->setExpiryMonth($data['expiry_month']);
                unset($data['expiry_month']);
            } elseif (\array_key_exists('expiry_month', $data) && null === $data['expiry_month']) {
                $object->setExpiryMonth(null);
            }
            if (\array_key_exists('expiry_year', $data) && null !== $data['expiry_year']) {
                $object->setExpiryYear($data['expiry_year']);
                unset($data['expiry_year']);
            } elseif (\array_key_exists('expiry_year', $data) && null === $data['expiry_year']) {
                $object->setExpiryYear(null);
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
            if ($object->isInitialized('brand') && null !== $object->getBrand()) {
                $data['brand'] = $object->getBrand();
            }
            if ($object->isInitialized('lastFour') && null !== $object->getLastFour()) {
                $data['last_four'] = $object->getLastFour();
            }
            if ($object->isInitialized('expiryMonth') && null !== $object->getExpiryMonth()) {
                $data['expiry_month'] = $object->getExpiryMonth();
            }
            if ($object->isInitialized('expiryYear') && null !== $object->getExpiryYear()) {
                $data['expiry_year'] = $object->getExpiryYear();
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
            return ['JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard' => false];
        }
    }
}
