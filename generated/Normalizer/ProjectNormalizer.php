<?php

/*
 * This file is part of JoliCode's Forecast PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Forecast\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
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
        return 'JoliCode\\Forecast\\Api\\Model\\Project' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Project' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!\is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\Project();
        if (property_exists($data, 'archived') && null !== $data->{'archived'}) {
            $object->setArchived($data->{'archived'});
        }
        if (property_exists($data, 'client_id') && null !== $data->{'client_id'}) {
            $object->setClientId($data->{'client_id'});
        }
        if (property_exists($data, 'code') && null !== $data->{'code'}) {
            $object->setCode($data->{'code'});
        }
        if (property_exists($data, 'color') && null !== $data->{'color'}) {
            $object->setColor($data->{'color'});
        }
        if (property_exists($data, 'end_date') && null !== $data->{'end_date'}) {
            $object->setEndDate($data->{'end_date'});
        }
        if (property_exists($data, 'harvest_id') && null !== $data->{'harvest_id'}) {
            $object->setHarvestId($data->{'harvest_id'});
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'notes') && null !== $data->{'notes'}) {
            $object->setNotes($data->{'notes'});
        }
        if (property_exists($data, 'start_date') && null !== $data->{'start_date'}) {
            $object->setStartDate($data->{'start_date'});
        }
        if (property_exists($data, 'tags') && null !== $data->{'tags'}) {
            $values = [];
            foreach ($data->{'tags'} as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
        }
        if (property_exists($data, 'updated_at') && null !== $data->{'updated_at'}) {
            $object->setUpdatedAt($data->{'updated_at'});
        }
        if (property_exists($data, 'updated_by_id') && null !== $data->{'updated_by_id'}) {
            $object->setUpdatedById($data->{'updated_by_id'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getArchived()) {
            $data->{'archived'} = $object->getArchived();
        }
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
        }
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        }
        if (null !== $object->getColor()) {
            $data->{'color'} = $object->getColor();
        }
        if (null !== $object->getEndDate()) {
            $data->{'end_date'} = $object->getEndDate();
        }
        if (null !== $object->getHarvestId()) {
            $data->{'harvest_id'} = $object->getHarvestId();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        }
        if (null !== $object->getStartDate()) {
            $data->{'start_date'} = $object->getStartDate();
        }
        if (null !== $object->getTags()) {
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data->{'tags'} = $values;
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt();
        }
        if (null !== $object->getUpdatedById()) {
            $data->{'updated_by_id'} = $object->getUpdatedById();
        }

        return $data;
    }
}
