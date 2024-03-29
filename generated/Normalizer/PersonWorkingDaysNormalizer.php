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
    class PersonWorkingDaysNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \JoliCode\Forecast\Api\Model\PersonWorkingDays();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('monday', $data) && null !== $data['monday']) {
                $object->setMonday($data['monday']);
                unset($data['monday']);
            } elseif (\array_key_exists('monday', $data) && null === $data['monday']) {
                $object->setMonday(null);
            }
            if (\array_key_exists('tuesday', $data) && null !== $data['tuesday']) {
                $object->setTuesday($data['tuesday']);
                unset($data['tuesday']);
            } elseif (\array_key_exists('tuesday', $data) && null === $data['tuesday']) {
                $object->setTuesday(null);
            }
            if (\array_key_exists('wednesday', $data) && null !== $data['wednesday']) {
                $object->setWednesday($data['wednesday']);
                unset($data['wednesday']);
            } elseif (\array_key_exists('wednesday', $data) && null === $data['wednesday']) {
                $object->setWednesday(null);
            }
            if (\array_key_exists('thursday', $data) && null !== $data['thursday']) {
                $object->setThursday($data['thursday']);
                unset($data['thursday']);
            } elseif (\array_key_exists('thursday', $data) && null === $data['thursday']) {
                $object->setThursday(null);
            }
            if (\array_key_exists('friday', $data) && null !== $data['friday']) {
                $object->setFriday($data['friday']);
                unset($data['friday']);
            } elseif (\array_key_exists('friday', $data) && null === $data['friday']) {
                $object->setFriday(null);
            }
            if (\array_key_exists('saturday', $data) && null !== $data['saturday']) {
                $object->setSaturday($data['saturday']);
                unset($data['saturday']);
            } elseif (\array_key_exists('saturday', $data) && null === $data['saturday']) {
                $object->setSaturday(null);
            }
            if (\array_key_exists('sunday', $data) && null !== $data['sunday']) {
                $object->setSunday($data['sunday']);
                unset($data['sunday']);
            } elseif (\array_key_exists('sunday', $data) && null === $data['sunday']) {
                $object->setSunday(null);
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
            if ($object->isInitialized('monday') && null !== $object->getMonday()) {
                $data['monday'] = $object->getMonday();
            }
            if ($object->isInitialized('tuesday') && null !== $object->getTuesday()) {
                $data['tuesday'] = $object->getTuesday();
            }
            if ($object->isInitialized('wednesday') && null !== $object->getWednesday()) {
                $data['wednesday'] = $object->getWednesday();
            }
            if ($object->isInitialized('thursday') && null !== $object->getThursday()) {
                $data['thursday'] = $object->getThursday();
            }
            if ($object->isInitialized('friday') && null !== $object->getFriday()) {
                $data['friday'] = $object->getFriday();
            }
            if ($object->isInitialized('saturday') && null !== $object->getSaturday()) {
                $data['saturday'] = $object->getSaturday();
            }
            if ($object->isInitialized('sunday') && null !== $object->getSunday()) {
                $data['sunday'] = $object->getSunday();
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
            return ['JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays' => false];
        }
    }
} else {
    class PersonWorkingDaysNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays' === $data::class;
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
            $object = new \JoliCode\Forecast\Api\Model\PersonWorkingDays();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('monday', $data) && null !== $data['monday']) {
                $object->setMonday($data['monday']);
                unset($data['monday']);
            } elseif (\array_key_exists('monday', $data) && null === $data['monday']) {
                $object->setMonday(null);
            }
            if (\array_key_exists('tuesday', $data) && null !== $data['tuesday']) {
                $object->setTuesday($data['tuesday']);
                unset($data['tuesday']);
            } elseif (\array_key_exists('tuesday', $data) && null === $data['tuesday']) {
                $object->setTuesday(null);
            }
            if (\array_key_exists('wednesday', $data) && null !== $data['wednesday']) {
                $object->setWednesday($data['wednesday']);
                unset($data['wednesday']);
            } elseif (\array_key_exists('wednesday', $data) && null === $data['wednesday']) {
                $object->setWednesday(null);
            }
            if (\array_key_exists('thursday', $data) && null !== $data['thursday']) {
                $object->setThursday($data['thursday']);
                unset($data['thursday']);
            } elseif (\array_key_exists('thursday', $data) && null === $data['thursday']) {
                $object->setThursday(null);
            }
            if (\array_key_exists('friday', $data) && null !== $data['friday']) {
                $object->setFriday($data['friday']);
                unset($data['friday']);
            } elseif (\array_key_exists('friday', $data) && null === $data['friday']) {
                $object->setFriday(null);
            }
            if (\array_key_exists('saturday', $data) && null !== $data['saturday']) {
                $object->setSaturday($data['saturday']);
                unset($data['saturday']);
            } elseif (\array_key_exists('saturday', $data) && null === $data['saturday']) {
                $object->setSaturday(null);
            }
            if (\array_key_exists('sunday', $data) && null !== $data['sunday']) {
                $object->setSunday($data['sunday']);
                unset($data['sunday']);
            } elseif (\array_key_exists('sunday', $data) && null === $data['sunday']) {
                $object->setSunday(null);
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
            if ($object->isInitialized('monday') && null !== $object->getMonday()) {
                $data['monday'] = $object->getMonday();
            }
            if ($object->isInitialized('tuesday') && null !== $object->getTuesday()) {
                $data['tuesday'] = $object->getTuesday();
            }
            if ($object->isInitialized('wednesday') && null !== $object->getWednesday()) {
                $data['wednesday'] = $object->getWednesday();
            }
            if ($object->isInitialized('thursday') && null !== $object->getThursday()) {
                $data['thursday'] = $object->getThursday();
            }
            if ($object->isInitialized('friday') && null !== $object->getFriday()) {
                $data['friday'] = $object->getFriday();
            }
            if ($object->isInitialized('saturday') && null !== $object->getSaturday()) {
                $data['saturday'] = $object->getSaturday();
            }
            if ($object->isInitialized('sunday') && null !== $object->getSunday()) {
                $data['sunday'] = $object->getSunday();
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
            return ['JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays' => false];
        }
    }
}
