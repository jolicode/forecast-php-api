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
    class PlaceholderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\Placeholder' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Placeholder' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Forecast\Api\Model\Placeholder();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('archived', $data) && null !== $data['archived']) {
                $object->setArchived($data['archived']);
                unset($data['archived']);
            } elseif (\array_key_exists('archived', $data) && null === $data['archived']) {
                $object->setArchived(null);
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
            if (\array_key_exists('roles', $data) && null !== $data['roles']) {
                $values = [];
                foreach ($data['roles'] as $value) {
                    $values[] = $value;
                }
                $object->setRoles($values);
                unset($data['roles']);
            } elseif (\array_key_exists('roles', $data) && null === $data['roles']) {
                $object->setRoles(null);
            }
            if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.v\\Z', $data['updated_at']));
                unset($data['updated_at']);
            } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
                $object->setUpdatedAt(null);
            }
            if (\array_key_exists('updated_by_id', $data) && null !== $data['updated_by_id']) {
                $object->setUpdatedById($data['updated_by_id']);
                unset($data['updated_by_id']);
            } elseif (\array_key_exists('updated_by_id', $data) && null === $data['updated_by_id']) {
                $object->setUpdatedById(null);
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
            if ($object->isInitialized('archived') && null !== $object->getArchived()) {
                $data['archived'] = $object->getArchived();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            $data['name'] = $object->getName();
            if ($object->isInitialized('roles') && null !== $object->getRoles()) {
                $values = [];
                foreach ($object->getRoles() as $value) {
                    $values[] = $value;
                }
                $data['roles'] = $values;
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.v\\Z');
            }
            if ($object->isInitialized('updatedById') && null !== $object->getUpdatedById()) {
                $data['updated_by_id'] = $object->getUpdatedById();
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
            return ['JoliCode\\Forecast\\Api\\Model\\Placeholder' => false];
        }
    }
} else {
    class PlaceholderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\Placeholder' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Placeholder' === $data::class;
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
            $object = new \JoliCode\Forecast\Api\Model\Placeholder();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('archived', $data) && null !== $data['archived']) {
                $object->setArchived($data['archived']);
                unset($data['archived']);
            } elseif (\array_key_exists('archived', $data) && null === $data['archived']) {
                $object->setArchived(null);
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
            if (\array_key_exists('roles', $data) && null !== $data['roles']) {
                $values = [];
                foreach ($data['roles'] as $value) {
                    $values[] = $value;
                }
                $object->setRoles($values);
                unset($data['roles']);
            } elseif (\array_key_exists('roles', $data) && null === $data['roles']) {
                $object->setRoles(null);
            }
            if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.v\\Z', $data['updated_at']));
                unset($data['updated_at']);
            } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
                $object->setUpdatedAt(null);
            }
            if (\array_key_exists('updated_by_id', $data) && null !== $data['updated_by_id']) {
                $object->setUpdatedById($data['updated_by_id']);
                unset($data['updated_by_id']);
            } elseif (\array_key_exists('updated_by_id', $data) && null === $data['updated_by_id']) {
                $object->setUpdatedById(null);
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
            if ($object->isInitialized('archived') && null !== $object->getArchived()) {
                $data['archived'] = $object->getArchived();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            $data['name'] = $object->getName();
            if ($object->isInitialized('roles') && null !== $object->getRoles()) {
                $values = [];
                foreach ($object->getRoles() as $value) {
                    $values[] = $value;
                }
                $data['roles'] = $values;
            }
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.v\\Z');
            }
            if ($object->isInitialized('updatedById') && null !== $object->getUpdatedById()) {
                $data['updated_by_id'] = $object->getUpdatedById();
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
            return ['JoliCode\\Forecast\\Api\\Model\\Placeholder' => false];
        }
    }
}
