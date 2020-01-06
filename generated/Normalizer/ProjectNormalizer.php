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
class ProjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Forecast\\Api\\Model\\Project';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\Project';
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
        $object = new \JoliCode\Forecast\Api\Model\Project();
        if (property_exists($data, 'archived')) {
            $object->setArchived($data->{'archived'});
        }
        if (property_exists($data, 'client_id')) {
            $object->setClientId($data->{'client_id'});
        }
        if (property_exists($data, 'code')) {
            $object->setCode($data->{'code'});
        }
        if (property_exists($data, 'color')) {
            $object->setColor($data->{'color'});
        }
        if (property_exists($data, 'end_date')) {
            $object->setEndDate($data->{'end_date'});
        }
        if (property_exists($data, 'harvest_id')) {
            $object->setHarvestId($data->{'harvest_id'});
        }
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'notes')) {
            $object->setNotes($data->{'notes'});
        }
        if (property_exists($data, 'start_date')) {
            $object->setStartDate($data->{'start_date'});
        }
        if (property_exists($data, 'tags')) {
            $values = array();
            foreach ($data->{'tags'} as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
        }
        if (property_exists($data, 'updated_at')) {
            $object->setUpdatedAt($data->{'updated_at'});
        }
        if (property_exists($data, 'updated_by_id')) {
            $object->setUpdatedById($data->{'updated_by_id'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getArchived()) {
            $data->{'archived'} = $object->getArchived();
        }
        $data->{'client_id'} = $object->getClientId();
        $data->{'code'} = $object->getCode();
        if (null !== $object->getColor()) {
            $data->{'color'} = $object->getColor();
        }
        $data->{'end_date'} = $object->getEndDate();
        $data->{'harvest_id'} = $object->getHarvestId();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        $data->{'notes'} = $object->getNotes();
        $data->{'start_date'} = $object->getStartDate();
        if (null !== $object->getTags()) {
            $values = array();
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data->{'tags'} = $values;
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt();
        }
        $data->{'updated_by_id'} = $object->getUpdatedById();
        return $data;
    }
}