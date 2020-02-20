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

class FutureScheduledHourNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHour' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHour' === \get_class($data);
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
        $object = new \JoliCode\Forecast\Api\Model\FutureScheduledHour();
        if (property_exists($data, 'allocation') && null !== $data->{'allocation'}) {
            $object->setAllocation($data->{'allocation'});
        } elseif (property_exists($data, 'allocation') && null === $data->{'allocation'}) {
            $object->setAllocation(null);
        }
        if (property_exists($data, 'person_id') && null !== $data->{'person_id'}) {
            $object->setPersonId($data->{'person_id'});
        } elseif (property_exists($data, 'person_id') && null === $data->{'person_id'}) {
            $object->setPersonId(null);
        }
        if (property_exists($data, 'placeholder_id') && null !== $data->{'placeholder_id'}) {
            $object->setPlaceholderId($data->{'placeholder_id'});
        } elseif (property_exists($data, 'placeholder_id') && null === $data->{'placeholder_id'}) {
            $object->setPlaceholderId(null);
        }
        if (property_exists($data, 'project_id') && null !== $data->{'project_id'}) {
            $object->setProjectId($data->{'project_id'});
        } elseif (property_exists($data, 'project_id') && null === $data->{'project_id'}) {
            $object->setProjectId(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAllocation()) {
            $data->{'allocation'} = $object->getAllocation();
        } else {
            $data->{'allocation'} = null;
        }
        if (null !== $object->getPersonId()) {
            $data->{'person_id'} = $object->getPersonId();
        } else {
            $data->{'person_id'} = null;
        }
        if (null !== $object->getPlaceholderId()) {
            $data->{'placeholder_id'} = $object->getPlaceholderId();
        } else {
            $data->{'placeholder_id'} = null;
        }
        if (null !== $object->getProjectId()) {
            $data->{'project_id'} = $object->getProjectId();
        } else {
            $data->{'project_id'} = null;
        }

        return $data;
    }
}
