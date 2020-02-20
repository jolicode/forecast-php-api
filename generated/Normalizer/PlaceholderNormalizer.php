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

class PlaceholderNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\Placeholder' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Placeholder' === \get_class($data);
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
        $object = new \JoliCode\Forecast\Api\Model\Placeholder();
        if (property_exists($data, 'archived') && null !== $data->{'archived'}) {
            $object->setArchived($data->{'archived'});
        } elseif (property_exists($data, 'archived') && null === $data->{'archived'}) {
            $object->setArchived(null);
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
        if (property_exists($data, 'roles') && null !== $data->{'roles'}) {
            $values = [];
            foreach ($data->{'roles'} as $value) {
                $values[] = $value;
            }
            $object->setRoles($values);
        } elseif (property_exists($data, 'roles') && null === $data->{'roles'}) {
            $object->setRoles(null);
        }
        if (property_exists($data, 'updated_at') && null !== $data->{'updated_at'}) {
            $object->setUpdatedAt($data->{'updated_at'});
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
        if (null !== $object->getRoles()) {
            $values = [];
            foreach ($object->getRoles() as $value) {
                $values[] = $value;
            }
            $data->{'roles'} = $values;
        } else {
            $data->{'roles'} = null;
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt();
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
