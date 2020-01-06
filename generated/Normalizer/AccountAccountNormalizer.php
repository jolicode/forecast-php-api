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
class AccountAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Forecast\\Api\\Model\\AccountAccount';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\AccountAccount';
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
        $object = new \JoliCode\Forecast\Api\Model\AccountAccount();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'weekly_capacity')) {
            $object->setWeeklyCapacity($data->{'weekly_capacity'});
        }
        if (property_exists($data, 'color_labels')) {
            $values = array();
            foreach ($data->{'color_labels'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Forecast\\Api\\Model\\AccountAccountColorLabelsItem', 'json', $context);
            }
            $object->setColorLabels($values);
        }
        if (property_exists($data, 'harvest_subdomain')) {
            $object->setHarvestSubdomain($data->{'harvest_subdomain'});
        }
        if (property_exists($data, 'harvest_name')) {
            $object->setHarvestName($data->{'harvest_name'});
        }
        if (property_exists($data, 'weekends_enabled')) {
            $object->setWeekendsEnabled($data->{'weekends_enabled'});
        }
        if (property_exists($data, 'created_at')) {
            $object->setCreatedAt($data->{'created_at'});
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
        if (null !== $object->getWeeklyCapacity()) {
            $data->{'weekly_capacity'} = $object->getWeeklyCapacity();
        }
        if (null !== $object->getColorLabels()) {
            $values = array();
            foreach ($object->getColorLabels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'color_labels'} = $values;
        }
        if (null !== $object->getHarvestSubdomain()) {
            $data->{'harvest_subdomain'} = $object->getHarvestSubdomain();
        }
        if (null !== $object->getHarvestName()) {
            $data->{'harvest_name'} = $object->getHarvestName();
        }
        if (null !== $object->getWeekendsEnabled()) {
            $data->{'weekends_enabled'} = $object->getWeekendsEnabled();
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt();
        }
        return $data;
    }
}