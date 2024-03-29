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
    class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\Project' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Project' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Forecast\Api\Model\Project();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('archived', $data) && null !== $data['archived']) {
                $object->setArchived($data['archived']);
                unset($data['archived']);
            } elseif (\array_key_exists('archived', $data) && null === $data['archived']) {
                $object->setArchived(null);
            }
            if (\array_key_exists('client_id', $data) && null !== $data['client_id']) {
                $object->setClientId($data['client_id']);
                unset($data['client_id']);
            } elseif (\array_key_exists('client_id', $data) && null === $data['client_id']) {
                $object->setClientId(null);
            }
            if (\array_key_exists('code', $data) && null !== $data['code']) {
                $object->setCode($data['code']);
                unset($data['code']);
            } elseif (\array_key_exists('code', $data) && null === $data['code']) {
                $object->setCode(null);
            }
            if (\array_key_exists('color', $data) && null !== $data['color']) {
                $object->setColor($data['color']);
                unset($data['color']);
            } elseif (\array_key_exists('color', $data) && null === $data['color']) {
                $object->setColor(null);
            }
            if (\array_key_exists('end_date', $data) && null !== $data['end_date']) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['end_date'])->setTime(0, 0, 0));
                unset($data['end_date']);
            } elseif (\array_key_exists('end_date', $data) && null === $data['end_date']) {
                $object->setEndDate(null);
            }
            if (\array_key_exists('harvest_id', $data) && null !== $data['harvest_id']) {
                $object->setHarvestId($data['harvest_id']);
                unset($data['harvest_id']);
            } elseif (\array_key_exists('harvest_id', $data) && null === $data['harvest_id']) {
                $object->setHarvestId(null);
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
            if (\array_key_exists('notes', $data) && null !== $data['notes']) {
                $object->setNotes($data['notes']);
                unset($data['notes']);
            } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
                $object->setNotes(null);
            }
            if (\array_key_exists('start_date', $data) && null !== $data['start_date']) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['start_date'])->setTime(0, 0, 0));
                unset($data['start_date']);
            } elseif (\array_key_exists('start_date', $data) && null === $data['start_date']) {
                $object->setStartDate(null);
            }
            if (\array_key_exists('tags', $data) && null !== $data['tags']) {
                $values = [];
                foreach ($data['tags'] as $value) {
                    $values[] = $value;
                }
                $object->setTags($values);
                unset($data['tags']);
            } elseif (\array_key_exists('tags', $data) && null === $data['tags']) {
                $object->setTags(null);
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
            if ($object->isInitialized('clientId') && null !== $object->getClientId()) {
                $data['client_id'] = $object->getClientId();
            }
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('color') && null !== $object->getColor()) {
                $data['color'] = $object->getColor();
            }
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['end_date'] = $object->getEndDate()->format('Y-m-d');
            }
            if ($object->isInitialized('harvestId') && null !== $object->getHarvestId()) {
                $data['harvest_id'] = $object->getHarvestId();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            $data['name'] = $object->getName();
            if ($object->isInitialized('notes') && null !== $object->getNotes()) {
                $data['notes'] = $object->getNotes();
            }
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['start_date'] = $object->getStartDate()->format('Y-m-d');
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values = [];
                foreach ($object->getTags() as $value) {
                    $values[] = $value;
                }
                $data['tags'] = $values;
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
            return ['JoliCode\\Forecast\\Api\\Model\\Project' => false];
        }
    }
} else {
    class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\Project' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Project' === $data::class;
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
            $object = new \JoliCode\Forecast\Api\Model\Project();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('archived', $data) && null !== $data['archived']) {
                $object->setArchived($data['archived']);
                unset($data['archived']);
            } elseif (\array_key_exists('archived', $data) && null === $data['archived']) {
                $object->setArchived(null);
            }
            if (\array_key_exists('client_id', $data) && null !== $data['client_id']) {
                $object->setClientId($data['client_id']);
                unset($data['client_id']);
            } elseif (\array_key_exists('client_id', $data) && null === $data['client_id']) {
                $object->setClientId(null);
            }
            if (\array_key_exists('code', $data) && null !== $data['code']) {
                $object->setCode($data['code']);
                unset($data['code']);
            } elseif (\array_key_exists('code', $data) && null === $data['code']) {
                $object->setCode(null);
            }
            if (\array_key_exists('color', $data) && null !== $data['color']) {
                $object->setColor($data['color']);
                unset($data['color']);
            } elseif (\array_key_exists('color', $data) && null === $data['color']) {
                $object->setColor(null);
            }
            if (\array_key_exists('end_date', $data) && null !== $data['end_date']) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['end_date'])->setTime(0, 0, 0));
                unset($data['end_date']);
            } elseif (\array_key_exists('end_date', $data) && null === $data['end_date']) {
                $object->setEndDate(null);
            }
            if (\array_key_exists('harvest_id', $data) && null !== $data['harvest_id']) {
                $object->setHarvestId($data['harvest_id']);
                unset($data['harvest_id']);
            } elseif (\array_key_exists('harvest_id', $data) && null === $data['harvest_id']) {
                $object->setHarvestId(null);
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
            if (\array_key_exists('notes', $data) && null !== $data['notes']) {
                $object->setNotes($data['notes']);
                unset($data['notes']);
            } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
                $object->setNotes(null);
            }
            if (\array_key_exists('start_date', $data) && null !== $data['start_date']) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['start_date'])->setTime(0, 0, 0));
                unset($data['start_date']);
            } elseif (\array_key_exists('start_date', $data) && null === $data['start_date']) {
                $object->setStartDate(null);
            }
            if (\array_key_exists('tags', $data) && null !== $data['tags']) {
                $values = [];
                foreach ($data['tags'] as $value) {
                    $values[] = $value;
                }
                $object->setTags($values);
                unset($data['tags']);
            } elseif (\array_key_exists('tags', $data) && null === $data['tags']) {
                $object->setTags(null);
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
            if ($object->isInitialized('clientId') && null !== $object->getClientId()) {
                $data['client_id'] = $object->getClientId();
            }
            if ($object->isInitialized('code') && null !== $object->getCode()) {
                $data['code'] = $object->getCode();
            }
            if ($object->isInitialized('color') && null !== $object->getColor()) {
                $data['color'] = $object->getColor();
            }
            if ($object->isInitialized('endDate') && null !== $object->getEndDate()) {
                $data['end_date'] = $object->getEndDate()->format('Y-m-d');
            }
            if ($object->isInitialized('harvestId') && null !== $object->getHarvestId()) {
                $data['harvest_id'] = $object->getHarvestId();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            $data['name'] = $object->getName();
            if ($object->isInitialized('notes') && null !== $object->getNotes()) {
                $data['notes'] = $object->getNotes();
            }
            if ($object->isInitialized('startDate') && null !== $object->getStartDate()) {
                $data['start_date'] = $object->getStartDate()->format('Y-m-d');
            }
            if ($object->isInitialized('tags') && null !== $object->getTags()) {
                $values = [];
                foreach ($object->getTags() as $value) {
                    $values[] = $value;
                }
                $data['tags'] = $values;
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
            return ['JoliCode\\Forecast\\Api\\Model\\Project' => false];
        }
    }
}
