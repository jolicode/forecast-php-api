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
    class RoleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\Role' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Role' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Forecast\Api\Model\Role();
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
            if (\array_key_exists('placeholder_ids', $data) && null !== $data['placeholder_ids']) {
                $values = [];
                foreach ($data['placeholder_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setPlaceholderIds($values);
                unset($data['placeholder_ids']);
            } elseif (\array_key_exists('placeholder_ids', $data) && null === $data['placeholder_ids']) {
                $object->setPlaceholderIds(null);
            }
            if (\array_key_exists('person_ids', $data) && null !== $data['person_ids']) {
                $values_1 = [];
                foreach ($data['person_ids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setPersonIds($values_1);
                unset($data['person_ids']);
            } elseif (\array_key_exists('person_ids', $data) && null === $data['person_ids']) {
                $object->setPersonIds(null);
            }
            if (\array_key_exists('harvest_role_id', $data) && null !== $data['harvest_role_id']) {
                $object->setHarvestRoleId($data['harvest_role_id']);
                unset($data['harvest_role_id']);
            } elseif (\array_key_exists('harvest_role_id', $data) && null === $data['harvest_role_id']) {
                $object->setHarvestRoleId(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['name'] = $object->getName();
            if ($object->isInitialized('placeholderIds') && null !== $object->getPlaceholderIds()) {
                $values = [];
                foreach ($object->getPlaceholderIds() as $value) {
                    $values[] = $value;
                }
                $data['placeholder_ids'] = $values;
            }
            if ($object->isInitialized('personIds') && null !== $object->getPersonIds()) {
                $values_1 = [];
                foreach ($object->getPersonIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['person_ids'] = $values_1;
            }
            if ($object->isInitialized('harvestRoleId') && null !== $object->getHarvestRoleId()) {
                $data['harvest_role_id'] = $object->getHarvestRoleId();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Forecast\\Api\\Model\\Role' => false];
        }
    }
} else {
    class RoleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\Role' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Role' === $data::class;
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
            $object = new \JoliCode\Forecast\Api\Model\Role();
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
            if (\array_key_exists('placeholder_ids', $data) && null !== $data['placeholder_ids']) {
                $values = [];
                foreach ($data['placeholder_ids'] as $value) {
                    $values[] = $value;
                }
                $object->setPlaceholderIds($values);
                unset($data['placeholder_ids']);
            } elseif (\array_key_exists('placeholder_ids', $data) && null === $data['placeholder_ids']) {
                $object->setPlaceholderIds(null);
            }
            if (\array_key_exists('person_ids', $data) && null !== $data['person_ids']) {
                $values_1 = [];
                foreach ($data['person_ids'] as $value_1) {
                    $values_1[] = $value_1;
                }
                $object->setPersonIds($values_1);
                unset($data['person_ids']);
            } elseif (\array_key_exists('person_ids', $data) && null === $data['person_ids']) {
                $object->setPersonIds(null);
            }
            if (\array_key_exists('harvest_role_id', $data) && null !== $data['harvest_role_id']) {
                $object->setHarvestRoleId($data['harvest_role_id']);
                unset($data['harvest_role_id']);
            } elseif (\array_key_exists('harvest_role_id', $data) && null === $data['harvest_role_id']) {
                $object->setHarvestRoleId(null);
            }
            foreach ($data as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_2;
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
            $data['name'] = $object->getName();
            if ($object->isInitialized('placeholderIds') && null !== $object->getPlaceholderIds()) {
                $values = [];
                foreach ($object->getPlaceholderIds() as $value) {
                    $values[] = $value;
                }
                $data['placeholder_ids'] = $values;
            }
            if ($object->isInitialized('personIds') && null !== $object->getPersonIds()) {
                $values_1 = [];
                foreach ($object->getPersonIds() as $value_1) {
                    $values_1[] = $value_1;
                }
                $data['person_ids'] = $values_1;
            }
            if ($object->isInitialized('harvestRoleId') && null !== $object->getHarvestRoleId()) {
                $data['harvest_role_id'] = $object->getHarvestRoleId();
            }
            foreach ($object as $key => $value_2) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_2;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Forecast\\Api\\Model\\Role' => false];
        }
    }
}
