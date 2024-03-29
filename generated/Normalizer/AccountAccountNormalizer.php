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
    class AccountAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\AccountAccount' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\AccountAccount' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Forecast\Api\Model\AccountAccount();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('name', $data) && null !== $data['name']) {
                $object->setName($data['name']);
                unset($data['name']);
            } elseif (\array_key_exists('name', $data) && null === $data['name']) {
                $object->setName(null);
            }
            if (\array_key_exists('weekly_capacity', $data) && null !== $data['weekly_capacity']) {
                $object->setWeeklyCapacity($data['weekly_capacity']);
                unset($data['weekly_capacity']);
            } elseif (\array_key_exists('weekly_capacity', $data) && null === $data['weekly_capacity']) {
                $object->setWeeklyCapacity(null);
            }
            if (\array_key_exists('color_labels', $data) && null !== $data['color_labels']) {
                $values = [];
                foreach ($data['color_labels'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Forecast\\Api\\Model\\AccountAccountColorLabelsItem', 'json', $context);
                }
                $object->setColorLabels($values);
                unset($data['color_labels']);
            } elseif (\array_key_exists('color_labels', $data) && null === $data['color_labels']) {
                $object->setColorLabels(null);
            }
            if (\array_key_exists('harvest_subdomain', $data) && null !== $data['harvest_subdomain']) {
                $object->setHarvestSubdomain($data['harvest_subdomain']);
                unset($data['harvest_subdomain']);
            } elseif (\array_key_exists('harvest_subdomain', $data) && null === $data['harvest_subdomain']) {
                $object->setHarvestSubdomain(null);
            }
            if (\array_key_exists('harvest_name', $data) && null !== $data['harvest_name']) {
                $object->setHarvestName($data['harvest_name']);
                unset($data['harvest_name']);
            } elseif (\array_key_exists('harvest_name', $data) && null === $data['harvest_name']) {
                $object->setHarvestName(null);
            }
            if (\array_key_exists('weekends_enabled', $data) && null !== $data['weekends_enabled']) {
                $object->setWeekendsEnabled($data['weekends_enabled']);
                unset($data['weekends_enabled']);
            } elseif (\array_key_exists('weekends_enabled', $data) && null === $data['weekends_enabled']) {
                $object->setWeekendsEnabled(null);
            }
            if (\array_key_exists('created_at', $data) && null !== $data['created_at']) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.v\\Z', $data['created_at']));
                unset($data['created_at']);
            } elseif (\array_key_exists('created_at', $data) && null === $data['created_at']) {
                $object->setCreatedAt(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            if ($object->isInitialized('weeklyCapacity') && null !== $object->getWeeklyCapacity()) {
                $data['weekly_capacity'] = $object->getWeeklyCapacity();
            }
            if ($object->isInitialized('colorLabels') && null !== $object->getColorLabels()) {
                $values = [];
                foreach ($object->getColorLabels() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['color_labels'] = $values;
            }
            if ($object->isInitialized('harvestSubdomain') && null !== $object->getHarvestSubdomain()) {
                $data['harvest_subdomain'] = $object->getHarvestSubdomain();
            }
            if ($object->isInitialized('harvestName') && null !== $object->getHarvestName()) {
                $data['harvest_name'] = $object->getHarvestName();
            }
            if ($object->isInitialized('weekendsEnabled') && null !== $object->getWeekendsEnabled()) {
                $data['weekends_enabled'] = $object->getWeekendsEnabled();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.v\\Z');
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Forecast\\Api\\Model\\AccountAccount' => false];
        }
    }
} else {
    class AccountAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\AccountAccount' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\AccountAccount' === $data::class;
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
            $object = new \JoliCode\Forecast\Api\Model\AccountAccount();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('name', $data) && null !== $data['name']) {
                $object->setName($data['name']);
                unset($data['name']);
            } elseif (\array_key_exists('name', $data) && null === $data['name']) {
                $object->setName(null);
            }
            if (\array_key_exists('weekly_capacity', $data) && null !== $data['weekly_capacity']) {
                $object->setWeeklyCapacity($data['weekly_capacity']);
                unset($data['weekly_capacity']);
            } elseif (\array_key_exists('weekly_capacity', $data) && null === $data['weekly_capacity']) {
                $object->setWeeklyCapacity(null);
            }
            if (\array_key_exists('color_labels', $data) && null !== $data['color_labels']) {
                $values = [];
                foreach ($data['color_labels'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Forecast\\Api\\Model\\AccountAccountColorLabelsItem', 'json', $context);
                }
                $object->setColorLabels($values);
                unset($data['color_labels']);
            } elseif (\array_key_exists('color_labels', $data) && null === $data['color_labels']) {
                $object->setColorLabels(null);
            }
            if (\array_key_exists('harvest_subdomain', $data) && null !== $data['harvest_subdomain']) {
                $object->setHarvestSubdomain($data['harvest_subdomain']);
                unset($data['harvest_subdomain']);
            } elseif (\array_key_exists('harvest_subdomain', $data) && null === $data['harvest_subdomain']) {
                $object->setHarvestSubdomain(null);
            }
            if (\array_key_exists('harvest_name', $data) && null !== $data['harvest_name']) {
                $object->setHarvestName($data['harvest_name']);
                unset($data['harvest_name']);
            } elseif (\array_key_exists('harvest_name', $data) && null === $data['harvest_name']) {
                $object->setHarvestName(null);
            }
            if (\array_key_exists('weekends_enabled', $data) && null !== $data['weekends_enabled']) {
                $object->setWeekendsEnabled($data['weekends_enabled']);
                unset($data['weekends_enabled']);
            } elseif (\array_key_exists('weekends_enabled', $data) && null === $data['weekends_enabled']) {
                $object->setWeekendsEnabled(null);
            }
            if (\array_key_exists('created_at', $data) && null !== $data['created_at']) {
                $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.v\\Z', $data['created_at']));
                unset($data['created_at']);
            } elseif (\array_key_exists('created_at', $data) && null === $data['created_at']) {
                $object->setCreatedAt(null);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
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
            $data['id'] = $object->getId();
            $data['name'] = $object->getName();
            if ($object->isInitialized('weeklyCapacity') && null !== $object->getWeeklyCapacity()) {
                $data['weekly_capacity'] = $object->getWeeklyCapacity();
            }
            if ($object->isInitialized('colorLabels') && null !== $object->getColorLabels()) {
                $values = [];
                foreach ($object->getColorLabels() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['color_labels'] = $values;
            }
            if ($object->isInitialized('harvestSubdomain') && null !== $object->getHarvestSubdomain()) {
                $data['harvest_subdomain'] = $object->getHarvestSubdomain();
            }
            if ($object->isInitialized('harvestName') && null !== $object->getHarvestName()) {
                $data['harvest_name'] = $object->getHarvestName();
            }
            if ($object->isInitialized('weekendsEnabled') && null !== $object->getWeekendsEnabled()) {
                $data['weekends_enabled'] = $object->getWeekendsEnabled();
            }
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.v\\Z');
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Forecast\\Api\\Model\\AccountAccount' => false];
        }
    }
}
