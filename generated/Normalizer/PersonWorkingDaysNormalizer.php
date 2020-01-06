<?php

namespace JoliCode\Forecast\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
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
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\PersonWorkingDays();
        if (property_exists($data, 'monday')) {
            $object->setMonday($data->{'monday'});
        }
        if (property_exists($data, 'tuesday')) {
            $object->setTuesday($data->{'tuesday'});
        }
        if (property_exists($data, 'wednesday')) {
            $object->setWednesday($data->{'wednesday'});
        }
        if (property_exists($data, 'thursday')) {
            $object->setThursday($data->{'thursday'});
        }
        if (property_exists($data, 'friday')) {
            $object->setFriday($data->{'friday'});
        }
        if (property_exists($data, 'saturday')) {
            $object->setSaturday($data->{'saturday'});
        }
        if (property_exists($data, 'sunday')) {
            $object->setSunday($data->{'sunday'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getMonday()) {
            $data->{'monday'} = $object->getMonday();
        }
        if (null !== $object->getTuesday()) {
            $data->{'tuesday'} = $object->getTuesday();
        }
        if (null !== $object->getWednesday()) {
            $data->{'wednesday'} = $object->getWednesday();
        }
        if (null !== $object->getThursday()) {
            $data->{'thursday'} = $object->getThursday();
        }
        if (null !== $object->getFriday()) {
            $data->{'friday'} = $object->getFriday();
        }
        $data->{'saturday'} = $object->getSaturday();
        $data->{'sunday'} = $object->getSunday();
        return $data;
    }
}