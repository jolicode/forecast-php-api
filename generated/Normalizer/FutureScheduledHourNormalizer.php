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

use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
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
    use CheckArray;

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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\FutureScheduledHour();
        if (\array_key_exists('allocation', $data) && null !== $data['allocation']) {
            $object->setAllocation($data['allocation']);
        } elseif (\array_key_exists('allocation', $data) && null === $data['allocation']) {
            $object->setAllocation(null);
        }
        if (\array_key_exists('person_id', $data) && null !== $data['person_id']) {
            $object->setPersonId($data['person_id']);
        } elseif (\array_key_exists('person_id', $data) && null === $data['person_id']) {
            $object->setPersonId(null);
        }
        if (\array_key_exists('placeholder_id', $data) && null !== $data['placeholder_id']) {
            $object->setPlaceholderId($data['placeholder_id']);
        } elseif (\array_key_exists('placeholder_id', $data) && null === $data['placeholder_id']) {
            $object->setPlaceholderId(null);
        }
        if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
            $object->setProjectId($data['project_id']);
        } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
            $object->setProjectId(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getAllocation()) {
            $data['allocation'] = $object->getAllocation();
        }
        if (null !== $object->getPersonId()) {
            $data['person_id'] = $object->getPersonId();
        }
        if (null !== $object->getPlaceholderId()) {
            $data['placeholder_id'] = $object->getPlaceholderId();
        }
        if (null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }

        return $data;
    }
}
