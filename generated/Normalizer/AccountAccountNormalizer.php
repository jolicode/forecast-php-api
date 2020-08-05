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
class AccountAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\AccountAccount();
        if (\array_key_exists('id', $data) && $data['id'] !== null) {
            $object->setId($data['id']);
        }
        elseif (\array_key_exists('id', $data) && $data['id'] === null) {
            $object->setId(null);
        }
        if (\array_key_exists('name', $data) && $data['name'] !== null) {
            $object->setName($data['name']);
        }
        elseif (\array_key_exists('name', $data) && $data['name'] === null) {
            $object->setName(null);
        }
        if (\array_key_exists('weekly_capacity', $data) && $data['weekly_capacity'] !== null) {
            $object->setWeeklyCapacity($data['weekly_capacity']);
        }
        elseif (\array_key_exists('weekly_capacity', $data) && $data['weekly_capacity'] === null) {
            $object->setWeeklyCapacity(null);
        }
        if (\array_key_exists('color_labels', $data) && $data['color_labels'] !== null) {
            $values = array();
            foreach ($data['color_labels'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Forecast\\Api\\Model\\AccountAccountColorLabelsItem', 'json', $context);
            }
            $object->setColorLabels($values);
        }
        elseif (\array_key_exists('color_labels', $data) && $data['color_labels'] === null) {
            $object->setColorLabels(null);
        }
        if (\array_key_exists('harvest_subdomain', $data) && $data['harvest_subdomain'] !== null) {
            $object->setHarvestSubdomain($data['harvest_subdomain']);
        }
        elseif (\array_key_exists('harvest_subdomain', $data) && $data['harvest_subdomain'] === null) {
            $object->setHarvestSubdomain(null);
        }
        if (\array_key_exists('harvest_name', $data) && $data['harvest_name'] !== null) {
            $object->setHarvestName($data['harvest_name']);
        }
        elseif (\array_key_exists('harvest_name', $data) && $data['harvest_name'] === null) {
            $object->setHarvestName(null);
        }
        if (\array_key_exists('weekends_enabled', $data) && $data['weekends_enabled'] !== null) {
            $object->setWeekendsEnabled($data['weekends_enabled']);
        }
        elseif (\array_key_exists('weekends_enabled', $data) && $data['weekends_enabled'] === null) {
            $object->setWeekendsEnabled(null);
        }
        if (\array_key_exists('created_at', $data) && $data['created_at'] !== null) {
            $object->setCreatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.v\\Z', $data['created_at']));
        }
        elseif (\array_key_exists('created_at', $data) && $data['created_at'] === null) {
            $object->setCreatedAt(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        if (null !== $object->getWeeklyCapacity()) {
            $data['weekly_capacity'] = $object->getWeeklyCapacity();
        }
        if (null !== $object->getColorLabels()) {
            $values = array();
            foreach ($object->getColorLabels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['color_labels'] = $values;
        }
        if (null !== $object->getHarvestSubdomain()) {
            $data['harvest_subdomain'] = $object->getHarvestSubdomain();
        }
        if (null !== $object->getHarvestName()) {
            $data['harvest_name'] = $object->getHarvestName();
        }
        if (null !== $object->getWeekendsEnabled()) {
            $data['weekends_enabled'] = $object->getWeekendsEnabled();
        }
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt()->format('Y-m-d\\TH:i:s.v\\Z');
        }
        return $data;
    }
}