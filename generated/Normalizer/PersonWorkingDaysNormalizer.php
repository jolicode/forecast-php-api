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
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class PersonWorkingDaysNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @param mixed      $data
     * @param mixed      $type
     * @param mixed|null $format
     *
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays' === \get_class($data);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param mixed|null $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
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
        } elseif (\array_key_exists('monday', $data) && null === $data['monday']) {
            $object->setMonday(null);
        }
        if (\array_key_exists('tuesday', $data) && null !== $data['tuesday']) {
            $object->setTuesday($data['tuesday']);
        } elseif (\array_key_exists('tuesday', $data) && null === $data['tuesday']) {
            $object->setTuesday(null);
        }
        if (\array_key_exists('wednesday', $data) && null !== $data['wednesday']) {
            $object->setWednesday($data['wednesday']);
        } elseif (\array_key_exists('wednesday', $data) && null === $data['wednesday']) {
            $object->setWednesday(null);
        }
        if (\array_key_exists('thursday', $data) && null !== $data['thursday']) {
            $object->setThursday($data['thursday']);
        } elseif (\array_key_exists('thursday', $data) && null === $data['thursday']) {
            $object->setThursday(null);
        }
        if (\array_key_exists('friday', $data) && null !== $data['friday']) {
            $object->setFriday($data['friday']);
        } elseif (\array_key_exists('friday', $data) && null === $data['friday']) {
            $object->setFriday(null);
        }
        if (\array_key_exists('saturday', $data) && null !== $data['saturday']) {
            $object->setSaturday($data['saturday']);
        } elseif (\array_key_exists('saturday', $data) && null === $data['saturday']) {
            $object->setSaturday(null);
        }
        if (\array_key_exists('sunday', $data) && null !== $data['sunday']) {
            $object->setSunday($data['sunday']);
        } elseif (\array_key_exists('sunday', $data) && null === $data['sunday']) {
            $object->setSunday(null);
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getMonday()) {
            $data['monday'] = $object->getMonday();
        }
        if (null !== $object->getTuesday()) {
            $data['tuesday'] = $object->getTuesday();
        }
        if (null !== $object->getWednesday()) {
            $data['wednesday'] = $object->getWednesday();
        }
        if (null !== $object->getThursday()) {
            $data['thursday'] = $object->getThursday();
        }
        if (null !== $object->getFriday()) {
            $data['friday'] = $object->getFriday();
        }
        if (null !== $object->getSaturday()) {
            $data['saturday'] = $object->getSaturday();
        }
        if (null !== $object->getSunday()) {
            $data['sunday'] = $object->getSunday();
        }

        return $data;
    }
}
