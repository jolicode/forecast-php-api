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
    class RepeatedAssignmentSetsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSets' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSets' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Forecast\Api\Model\RepeatedAssignmentSets();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('repeated_assignment_sets', $data) && null !== $data['repeated_assignment_sets']) {
                $values = [];
                foreach ($data['repeated_assignment_sets'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSet', 'json', $context);
                }
                $object->setRepeatedAssignmentSets($values);
                unset($data['repeated_assignment_sets']);
            } elseif (\array_key_exists('repeated_assignment_sets', $data) && null === $data['repeated_assignment_sets']) {
                $object->setRepeatedAssignmentSets(null);
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
            $values = [];
            foreach ($object->getRepeatedAssignmentSets() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['repeated_assignment_sets'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSets' => false];
        }
    }
} else {
    class RepeatedAssignmentSetsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSets' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSets' === $data::class;
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
            $object = new \JoliCode\Forecast\Api\Model\RepeatedAssignmentSets();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('repeated_assignment_sets', $data) && null !== $data['repeated_assignment_sets']) {
                $values = [];
                foreach ($data['repeated_assignment_sets'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSet', 'json', $context);
                }
                $object->setRepeatedAssignmentSets($values);
                unset($data['repeated_assignment_sets']);
            } elseif (\array_key_exists('repeated_assignment_sets', $data) && null === $data['repeated_assignment_sets']) {
                $object->setRepeatedAssignmentSets(null);
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
            $values = [];
            foreach ($object->getRepeatedAssignmentSets() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['repeated_assignment_sets'] = $values;
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSets' => false];
        }
    }
}
