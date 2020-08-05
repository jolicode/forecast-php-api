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
class UserConnectionNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Forecast\\Api\\Model\\UserConnection';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\UserConnection';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\UserConnection();
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('last_active_at', $data) && $data['last_active_at'] !== null) {
            $object->setLastActiveAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.v\\Z', $data['last_active_at']));
        }
        elseif (\array_key_exists('last_active_at', $data) && $data['last_active_at'] === null) {
            $object->setLastActiveAt(null);
        }
        if (\array_key_exists('person_id', $data) && $data['person_id'] !== null) {
            $object->setPersonId($data['person_id']);
        }
        elseif (\array_key_exists('person_id', $data) && $data['person_id'] === null) {
            $object->setPersonId(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getLastActiveAt()) {
            $data['last_active_at'] = $object->getLastActiveAt()->format('Y-m-d\\TH:i:s.v\\Z');
        }
        if (null !== $object->getPersonId()) {
            $data['person_id'] = $object->getPersonId();
        }
        return $data;
    }
}