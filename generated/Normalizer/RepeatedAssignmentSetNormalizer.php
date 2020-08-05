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
class RepeatedAssignmentSetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\RepeatedAssignmentSet();
        if (\array_key_exists('assignment_ids', $data) && $data['assignment_ids'] !== null) {
            $values = array();
            foreach ($data['assignment_ids'] as $value) {
                $values[] = $value;
            }
            $object->setAssignmentIds($values);
        }
        elseif (\array_key_exists('assignment_ids', $data) && $data['assignment_ids'] === null) {
            $object->setAssignmentIds(null);
        }
        if (\array_key_exists('first_start_date', $data) && $data['first_start_date'] !== null) {
            $object->setFirstStartDate(\DateTime::createFromFormat('Y-m-d', $data['first_start_date'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('first_start_date', $data) && $data['first_start_date'] === null) {
            $object->setFirstStartDate(null);
        }
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('last_end_date', $data) && $data['last_end_date'] !== null) {
            $object->setLastEndDate(\DateTime::createFromFormat('Y-m-d', $data['last_end_date'])->setTime(0, 0, 0));
        }
        elseif (\array_key_exists('last_end_date', $data) && $data['last_end_date'] === null) {
            $object->setLastEndDate(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAssignmentIds()) {
            $values = array();
            foreach ($object->getAssignmentIds() as $value) {
                $values[] = $value;
            }
            $data['assignment_ids'] = $values;
        }
        if (null !== $object->getFirstStartDate()) {
            $data['first_start_date'] = $object->getFirstStartDate()->format('Y-m-d');
        }
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getLastEndDate()) {
            $data['last_end_date'] = $object->getLastEndDate()->format('Y-m-d');
        }
        return $data;
    }
}