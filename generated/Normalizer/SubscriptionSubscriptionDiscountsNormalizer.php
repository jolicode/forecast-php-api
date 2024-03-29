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
    class SubscriptionSubscriptionDiscountsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscriptionDiscounts();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('monthly_percentage', $data) && null !== $data['monthly_percentage']) {
                $object->setMonthlyPercentage($data['monthly_percentage']);
                unset($data['monthly_percentage']);
            } elseif (\array_key_exists('monthly_percentage', $data) && null === $data['monthly_percentage']) {
                $object->setMonthlyPercentage(null);
            }
            if (\array_key_exists('yearly_percentage', $data) && null !== $data['yearly_percentage']) {
                $object->setYearlyPercentage($data['yearly_percentage']);
                unset($data['yearly_percentage']);
            } elseif (\array_key_exists('yearly_percentage', $data) && null === $data['yearly_percentage']) {
                $object->setYearlyPercentage(null);
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
            if ($object->isInitialized('monthlyPercentage') && null !== $object->getMonthlyPercentage()) {
                $data['monthly_percentage'] = $object->getMonthlyPercentage();
            }
            if ($object->isInitialized('yearlyPercentage') && null !== $object->getYearlyPercentage()) {
                $data['yearly_percentage'] = $object->getYearlyPercentage();
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
            return ['JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts' => false];
        }
    }
} else {
    class SubscriptionSubscriptionDiscountsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts' === $data::class;
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
            $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscriptionDiscounts();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('monthly_percentage', $data) && null !== $data['monthly_percentage']) {
                $object->setMonthlyPercentage($data['monthly_percentage']);
                unset($data['monthly_percentage']);
            } elseif (\array_key_exists('monthly_percentage', $data) && null === $data['monthly_percentage']) {
                $object->setMonthlyPercentage(null);
            }
            if (\array_key_exists('yearly_percentage', $data) && null !== $data['yearly_percentage']) {
                $object->setYearlyPercentage($data['yearly_percentage']);
                unset($data['yearly_percentage']);
            } elseif (\array_key_exists('yearly_percentage', $data) && null === $data['yearly_percentage']) {
                $object->setYearlyPercentage(null);
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
            if ($object->isInitialized('monthlyPercentage') && null !== $object->getMonthlyPercentage()) {
                $data['monthly_percentage'] = $object->getMonthlyPercentage();
            }
            if ($object->isInitialized('yearlyPercentage') && null !== $object->getYearlyPercentage()) {
                $data['yearly_percentage'] = $object->getYearlyPercentage();
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
            return ['JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts' => false];
        }
    }
}
