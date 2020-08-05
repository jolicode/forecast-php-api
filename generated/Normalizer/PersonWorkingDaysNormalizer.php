<?php

namespace JoliCode\Forecast\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class PersonWorkingDaysNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\PersonWorkingDays();
        if (\array_key_exists('monday', $data) && $data['monday'] !== null) {
            $object->setMonday($data['monday']);
        }
        elseif (\array_key_exists('monday', $data) && $data['monday'] === null) {
            $object->setMonday(null);
        }
        if (\array_key_exists('tuesday', $data) && $data['tuesday'] !== null) {
            $object->setTuesday($data['tuesday']);
        }
        elseif (\array_key_exists('tuesday', $data) && $data['tuesday'] === null) {
            $object->setTuesday(null);
        }
        if (\array_key_exists('wednesday', $data) && $data['wednesday'] !== null) {
            $object->setWednesday($data['wednesday']);
        }
        elseif (\array_key_exists('wednesday', $data) && $data['wednesday'] === null) {
            $object->setWednesday(null);
        }
        if (\array_key_exists('thursday', $data) && $data['thursday'] !== null) {
            $object->setThursday($data['thursday']);
        }
        elseif (\array_key_exists('thursday', $data) && $data['thursday'] === null) {
            $object->setThursday(null);
        }
        if (\array_key_exists('friday', $data) && $data['friday'] !== null) {
            $object->setFriday($data['friday']);
        }
        elseif (\array_key_exists('friday', $data) && $data['friday'] === null) {
            $object->setFriday(null);
        }
        if (\array_key_exists('saturday', $data) && $data['saturday'] !== null) {
            $object->setSaturday($data['saturday']);
        }
        elseif (\array_key_exists('saturday', $data) && $data['saturday'] === null) {
            $object->setSaturday(null);
        }
        if (\array_key_exists('sunday', $data) && $data['sunday'] !== null) {
            $object->setSunday($data['sunday']);
        }
        elseif (\array_key_exists('sunday', $data) && $data['sunday'] === null) {
            $object->setSunday(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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