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
class FutureScheduledHourNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHour';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHour';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\FutureScheduledHour();
        if (\array_key_exists('allocation', $data) && $data['allocation'] !== null) {
            $object->setAllocation($data['allocation']);
        }
        elseif (\array_key_exists('allocation', $data) && $data['allocation'] === null) {
            $object->setAllocation(null);
        }
        if (\array_key_exists('person_id', $data) && $data['person_id'] !== null) {
            $object->setPersonId($data['person_id']);
        }
        elseif (\array_key_exists('person_id', $data) && $data['person_id'] === null) {
            $object->setPersonId(null);
        }
        if (\array_key_exists('placeholder_id', $data) && $data['placeholder_id'] !== null) {
            $object->setPlaceholderId($data['placeholder_id']);
        }
        elseif (\array_key_exists('placeholder_id', $data) && $data['placeholder_id'] === null) {
            $object->setPlaceholderId(null);
        }
        if (\array_key_exists('project_id', $data) && $data['project_id'] !== null) {
            $object->setProjectId($data['project_id']);
        }
        elseif (\array_key_exists('project_id', $data) && $data['project_id'] === null) {
            $object->setProjectId(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAllocation()) {
            $data['allocation'] = $object->getAllocation();
        }
        if (null !== $object->getPersonId()) {
            $data['person_id'] = $object->getPersonId();
        }
        if (null !== $object->getPlaceholderId()) {
            $data['placeholder_id'] = $object->getPlaceholderId();
        }
        if (null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        return $data;
    }
}