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

class RoleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\Role' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Role' === \get_class($data);
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
        $object = new \JoliCode\Forecast\Api\Model\Role();
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
        if (property_exists($data, 'placeholder_ids') && null !== $data->{'placeholder_ids'}) {
            $values = [];
            foreach ($data->{'placeholder_ids'} as $value) {
                $values[] = $value;
            }
            $object->setPlaceholderIds($values);
        } elseif (property_exists($data, 'placeholder_ids') && null === $data->{'placeholder_ids'}) {
            $object->setPlaceholderIds(null);
        }
        if (property_exists($data, 'person_ids') && null !== $data->{'person_ids'}) {
            $values_1 = [];
            foreach ($data->{'person_ids'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPersonIds($values_1);
        } elseif (property_exists($data, 'person_ids') && null === $data->{'person_ids'}) {
            $object->setPersonIds(null);
        }
        if (property_exists($data, 'harvest_role_id') && null !== $data->{'harvest_role_id'}) {
            $object->setHarvestRoleId($data->{'harvest_role_id'});
        } elseif (property_exists($data, 'harvest_role_id') && null === $data->{'harvest_role_id'}) {
            $object->setHarvestRoleId(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
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
        if (null !== $object->getPlaceholderIds()) {
            $values = [];
            foreach ($object->getPlaceholderIds() as $value) {
                $values[] = $value;
            }
            $data->{'placeholder_ids'} = $values;
        } else {
            $data->{'placeholder_ids'} = null;
        }
        if (null !== $object->getPersonIds()) {
            $values_1 = [];
            foreach ($object->getPersonIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'person_ids'} = $values_1;
        } else {
            $data->{'person_ids'} = null;
        }
        if (null !== $object->getHarvestRoleId()) {
            $data->{'harvest_role_id'} = $object->getHarvestRoleId();
        } else {
            $data->{'harvest_role_id'} = null;
        }

        return $data;
    }
}
