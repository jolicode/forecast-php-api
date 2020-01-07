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
class RoleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Forecast\\Api\\Model\\Role';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\Role';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\Role();
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'placeholder_ids') && $data->{'placeholder_ids'} !== null) {
            $values = array();
            foreach ($data->{'placeholder_ids'} as $value) {
                $values[] = $value;
            }
            $object->setPlaceholderIds($values);
        }
        if (property_exists($data, 'person_ids') && $data->{'person_ids'} !== null) {
            $values_1 = array();
            foreach ($data->{'person_ids'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPersonIds($values_1);
        }
        if (property_exists($data, 'harvest_role_id') && $data->{'harvest_role_id'} !== null) {
            $object->setHarvestRoleId($data->{'harvest_role_id'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getPlaceholderIds()) {
            $values = array();
            foreach ($object->getPlaceholderIds() as $value) {
                $values[] = $value;
            }
            $data->{'placeholder_ids'} = $values;
        }
        if (null !== $object->getPersonIds()) {
            $values_1 = array();
            foreach ($object->getPersonIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'person_ids'} = $values_1;
        }
        if (null !== $object->getHarvestRoleId()) {
            $data->{'harvest_role_id'} = $object->getHarvestRoleId();
        }
        return $data;
    }
}