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
    class SubscriptionSubscriptionAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscriptionAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('line_1', $data) && null !== $data['line_1']) {
                $object->setLine1($data['line_1']);
                unset($data['line_1']);
            } elseif (\array_key_exists('line_1', $data) && null === $data['line_1']) {
                $object->setLine1(null);
            }
            if (\array_key_exists('line_2', $data) && null !== $data['line_2']) {
                $object->setLine2($data['line_2']);
                unset($data['line_2']);
            } elseif (\array_key_exists('line_2', $data) && null === $data['line_2']) {
                $object->setLine2(null);
            }
            if (\array_key_exists('city', $data) && null !== $data['city']) {
                $object->setCity($data['city']);
                unset($data['city']);
            } elseif (\array_key_exists('city', $data) && null === $data['city']) {
                $object->setCity(null);
            }
            if (\array_key_exists('state', $data) && null !== $data['state']) {
                $object->setState($data['state']);
                unset($data['state']);
            } elseif (\array_key_exists('state', $data) && null === $data['state']) {
                $object->setState(null);
            }
            if (\array_key_exists('postal_code', $data) && null !== $data['postal_code']) {
                $object->setPostalCode($data['postal_code']);
                unset($data['postal_code']);
            } elseif (\array_key_exists('postal_code', $data) && null === $data['postal_code']) {
                $object->setPostalCode(null);
            }
            if (\array_key_exists('country', $data) && null !== $data['country']) {
                $object->setCountry($data['country']);
                unset($data['country']);
            } elseif (\array_key_exists('country', $data) && null === $data['country']) {
                $object->setCountry(null);
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
            if ($object->isInitialized('line1') && null !== $object->getLine1()) {
                $data['line_1'] = $object->getLine1();
            }
            if ($object->isInitialized('line2') && null !== $object->getLine2()) {
                $data['line_2'] = $object->getLine2();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postal_code'] = $object->getPostalCode();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
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
            return ['JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress' => false];
        }
    }
} else {
    class SubscriptionSubscriptionAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress' === $data::class;
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
            $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscriptionAddress();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('line_1', $data) && null !== $data['line_1']) {
                $object->setLine1($data['line_1']);
                unset($data['line_1']);
            } elseif (\array_key_exists('line_1', $data) && null === $data['line_1']) {
                $object->setLine1(null);
            }
            if (\array_key_exists('line_2', $data) && null !== $data['line_2']) {
                $object->setLine2($data['line_2']);
                unset($data['line_2']);
            } elseif (\array_key_exists('line_2', $data) && null === $data['line_2']) {
                $object->setLine2(null);
            }
            if (\array_key_exists('city', $data) && null !== $data['city']) {
                $object->setCity($data['city']);
                unset($data['city']);
            } elseif (\array_key_exists('city', $data) && null === $data['city']) {
                $object->setCity(null);
            }
            if (\array_key_exists('state', $data) && null !== $data['state']) {
                $object->setState($data['state']);
                unset($data['state']);
            } elseif (\array_key_exists('state', $data) && null === $data['state']) {
                $object->setState(null);
            }
            if (\array_key_exists('postal_code', $data) && null !== $data['postal_code']) {
                $object->setPostalCode($data['postal_code']);
                unset($data['postal_code']);
            } elseif (\array_key_exists('postal_code', $data) && null === $data['postal_code']) {
                $object->setPostalCode(null);
            }
            if (\array_key_exists('country', $data) && null !== $data['country']) {
                $object->setCountry($data['country']);
                unset($data['country']);
            } elseif (\array_key_exists('country', $data) && null === $data['country']) {
                $object->setCountry(null);
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
            if ($object->isInitialized('line1') && null !== $object->getLine1()) {
                $data['line_1'] = $object->getLine1();
            }
            if ($object->isInitialized('line2') && null !== $object->getLine2()) {
                $data['line_2'] = $object->getLine2();
            }
            if ($object->isInitialized('city') && null !== $object->getCity()) {
                $data['city'] = $object->getCity();
            }
            if ($object->isInitialized('state') && null !== $object->getState()) {
                $data['state'] = $object->getState();
            }
            if ($object->isInitialized('postalCode') && null !== $object->getPostalCode()) {
                $data['postal_code'] = $object->getPostalCode();
            }
            if ($object->isInitialized('country') && null !== $object->getCountry()) {
                $data['country'] = $object->getCountry();
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
            return ['JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress' => false];
        }
    }
}
