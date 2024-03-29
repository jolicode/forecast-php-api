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
    class FutureScheduledHourNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHour' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHour' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Forecast\Api\Model\FutureScheduledHour();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('allocation', $data) && null !== $data['allocation']) {
                $object->setAllocation($data['allocation']);
                unset($data['allocation']);
            } elseif (\array_key_exists('allocation', $data) && null === $data['allocation']) {
                $object->setAllocation(null);
            }
            if (\array_key_exists('person_id', $data) && null !== $data['person_id']) {
                $object->setPersonId($data['person_id']);
                unset($data['person_id']);
            } elseif (\array_key_exists('person_id', $data) && null === $data['person_id']) {
                $object->setPersonId(null);
            }
            if (\array_key_exists('placeholder_id', $data) && null !== $data['placeholder_id']) {
                $object->setPlaceholderId($data['placeholder_id']);
                unset($data['placeholder_id']);
            } elseif (\array_key_exists('placeholder_id', $data) && null === $data['placeholder_id']) {
                $object->setPlaceholderId(null);
            }
            if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
            } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
                $object->setProjectId(null);
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
            $data['allocation'] = $object->getAllocation();
            if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
                $data['person_id'] = $object->getPersonId();
            }
            if ($object->isInitialized('placeholderId') && null !== $object->getPlaceholderId()) {
                $data['placeholder_id'] = $object->getPlaceholderId();
            }
            $data['project_id'] = $object->getProjectId();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Forecast\\Api\\Model\\FutureScheduledHour' => false];
        }
    }
} else {
    class FutureScheduledHourNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHour' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHour' === $data::class;
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
            $object = new \JoliCode\Forecast\Api\Model\FutureScheduledHour();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('allocation', $data) && null !== $data['allocation']) {
                $object->setAllocation($data['allocation']);
                unset($data['allocation']);
            } elseif (\array_key_exists('allocation', $data) && null === $data['allocation']) {
                $object->setAllocation(null);
            }
            if (\array_key_exists('person_id', $data) && null !== $data['person_id']) {
                $object->setPersonId($data['person_id']);
                unset($data['person_id']);
            } elseif (\array_key_exists('person_id', $data) && null === $data['person_id']) {
                $object->setPersonId(null);
            }
            if (\array_key_exists('placeholder_id', $data) && null !== $data['placeholder_id']) {
                $object->setPlaceholderId($data['placeholder_id']);
                unset($data['placeholder_id']);
            } elseif (\array_key_exists('placeholder_id', $data) && null === $data['placeholder_id']) {
                $object->setPlaceholderId(null);
            }
            if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
            } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
                $object->setProjectId(null);
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
            $data['allocation'] = $object->getAllocation();
            if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
                $data['person_id'] = $object->getPersonId();
            }
            if ($object->isInitialized('placeholderId') && null !== $object->getPlaceholderId()) {
                $data['placeholder_id'] = $object->getPlaceholderId();
            }
            $data['project_id'] = $object->getProjectId();
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Forecast\\Api\\Model\\FutureScheduledHour' => false];
        }
    }
}
