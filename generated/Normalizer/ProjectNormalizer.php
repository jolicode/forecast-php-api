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
        } elseif (property_exists($data, 'archived') && null === $data->{'archived'}) {
            $object->setArchived(null);
        }
        if (property_exists($data, 'client_id') && null !== $data->{'client_id'}) {
            $object->setClientId($data->{'client_id'});
        } elseif (property_exists($data, 'client_id') && null === $data->{'client_id'}) {
            $object->setClientId(null);
        }
        if (property_exists($data, 'code') && null !== $data->{'code'}) {
            $object->setCode($data->{'code'});
        } elseif (property_exists($data, 'code') && null === $data->{'code'}) {
            $object->setCode(null);
        }
        if (property_exists($data, 'color') && null !== $data->{'color'}) {
            $object->setColor($data->{'color'});
        } elseif (property_exists($data, 'color') && null === $data->{'color'}) {
            $object->setColor(null);
        }
        if (property_exists($data, 'end_date') && null !== $data->{'end_date'}) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data->{'end_date'})->setTime(0, 0, 0));
        } elseif (property_exists($data, 'end_date') && null === $data->{'end_date'}) {
            $object->setEndDate(null);
        }
        if (property_exists($data, 'harvest_id') && null !== $data->{'harvest_id'}) {
            $object->setHarvestId($data->{'harvest_id'});
        } elseif (property_exists($data, 'harvest_id') && null === $data->{'harvest_id'}) {
            $object->setHarvestId(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        } elseif (property_exists($data, 'name') && null === $data->{'name'}) {
            $object->setName(null);
        }
        if (property_exists($data, 'notes') && null !== $data->{'notes'}) {
            $object->setNotes($data->{'notes'});
        } elseif (property_exists($data, 'notes') && null === $data->{'notes'}) {
            $object->setNotes(null);
        }
        if (property_exists($data, 'start_date') && null !== $data->{'start_date'}) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data->{'start_date'})->setTime(0, 0, 0));
        } elseif (property_exists($data, 'start_date') && null === $data->{'start_date'}) {
            $object->setStartDate(null);
        }
        if (property_exists($data, 'tags') && null !== $data->{'tags'}) {
            $values = [];
            foreach ($data->{'tags'} as $value) {
                $values[] = $value;
            }
            $object->setTags($values);
        } elseif (property_exists($data, 'tags') && null === $data->{'tags'}) {
            $object->setTags(null);
        }
        if (property_exists($data, 'updated_at') && null !== $data->{'updated_at'}) {
            $object->setUpdatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:s.v\Z", $data->{'updated_at'}));
        } elseif (property_exists($data, 'updated_at') && null === $data->{'updated_at'}) {
            $object->setUpdatedAt(null);
        }
        if (property_exists($data, 'updated_by_id') && null !== $data->{'updated_by_id'}) {
            $object->setUpdatedById($data->{'updated_by_id'});
        } elseif (property_exists($data, 'updated_by_id') && null === $data->{'updated_by_id'}) {
            $object->setUpdatedById(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getArchived()) {
            $data->{'archived'} = $object->getArchived();
        } else {
            $data->{'archived'} = null;
        }
        if (null !== $object->getClientId()) {
            $data->{'client_id'} = $object->getClientId();
        } else {
            $data->{'client_id'} = null;
        }
        if (null !== $object->getCode()) {
            $data->{'code'} = $object->getCode();
        } else {
            $data->{'code'} = null;
        }
        if (null !== $object->getColor()) {
            $data->{'color'} = $object->getColor();
        } else {
            $data->{'color'} = null;
        }
        if (null !== $object->getEndDate()) {
            $data->{'end_date'} = $object->getEndDate()->format('Y-m-d');
        } else {
            $data->{'end_date'} = null;
        }
        if (null !== $object->getHarvestId()) {
            $data->{'harvest_id'} = $object->getHarvestId();
        } else {
            $data->{'harvest_id'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        } else {
            $data->{'name'} = null;
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        } else {
            $data->{'notes'} = null;
        }
        if (null !== $object->getStartDate()) {
            $data->{'start_date'} = $object->getStartDate()->format('Y-m-d');
        } else {
            $data->{'start_date'} = null;
        }
        if (null !== $object->getTags()) {
            $values = [];
            foreach ($object->getTags() as $value) {
                $values[] = $value;
            }
            $data->{'tags'} = $values;
        } else {
            $data->{'tags'} = null;
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt()->format("Y-m-d\TH:i:s.v\Z");
        } else {
            $data->{'updated_at'} = null;
        }
        if (null !== $object->getUpdatedById()) {
            $data->{'updated_by_id'} = $object->getUpdatedById();
        } else {
            $data->{'updated_by_id'} = null;
        }

        return $data;
    }
}
