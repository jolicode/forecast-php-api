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

class RepeatedAssignmentSetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSet' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSet' === \get_class($data);
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
        $object = new \JoliCode\Forecast\Api\Model\RepeatedAssignmentSet();
        if (property_exists($data, 'assignment_ids') && null !== $data->{'assignment_ids'}) {
            $values = [];
            foreach ($data->{'assignment_ids'} as $value) {
                $values[] = $value;
            }
            $object->setAssignmentIds($values);
        } elseif (property_exists($data, 'assignment_ids') && null === $data->{'assignment_ids'}) {
            $object->setAssignmentIds(null);
        }
        if (property_exists($data, 'first_start_date') && null !== $data->{'first_start_date'}) {
            $object->setFirstStartDate(\DateTime::createFromFormat('Y-m-d', $data->{'first_start_date'})->setTime(0, 0, 0));
        } elseif (property_exists($data, 'first_start_date') && null === $data->{'first_start_date'}) {
            $object->setFirstStartDate(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'last_end_date') && null !== $data->{'last_end_date'}) {
            $object->setLastEndDate(\DateTime::createFromFormat('Y-m-d', $data->{'last_end_date'})->setTime(0, 0, 0));
        } elseif (property_exists($data, 'last_end_date') && null === $data->{'last_end_date'}) {
            $object->setLastEndDate(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAssignmentIds()) {
            $values = [];
            foreach ($object->getAssignmentIds() as $value) {
                $values[] = $value;
            }
            $data->{'assignment_ids'} = $values;
        } else {
            $data->{'assignment_ids'} = null;
        }
        if (null !== $object->getFirstStartDate()) {
            $data->{'first_start_date'} = $object->getFirstStartDate()->format('Y-m-d');
        } else {
            $data->{'first_start_date'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getLastEndDate()) {
            $data->{'last_end_date'} = $object->getLastEndDate()->format('Y-m-d');
        } else {
            $data->{'last_end_date'} = null;
        }

        return $data;
    }
}
