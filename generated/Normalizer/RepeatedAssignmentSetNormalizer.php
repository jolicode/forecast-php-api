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
class RepeatedAssignmentSetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSet';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSet';
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
        $object = new \JoliCode\Forecast\Api\Model\RepeatedAssignmentSet();
        if (property_exists($data, 'assignment_ids')) {
            $values = array();
            foreach ($data->{'assignment_ids'} as $value) {
                $values[] = $value;
            }
            $object->setAssignmentIds($values);
        }
        if (property_exists($data, 'first_start_date')) {
            $object->setFirstStartDate($data->{'first_start_date'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'last_end_date')) {
            $object->setLastEndDate($data->{'last_end_date'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getAssignmentIds()) {
            $values = array();
            foreach ($object->getAssignmentIds() as $value) {
                $values[] = $value;
            }
            $data->{'assignment_ids'} = $values;
        }
        if (null !== $object->getFirstStartDate()) {
            $data->{'first_start_date'} = $object->getFirstStartDate();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getLastEndDate()) {
            $data->{'last_end_date'} = $object->getLastEndDate();
        }
        return $data;
    }
}