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
use JoliCode\Forecast\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class RepeatedAssignmentSetBodyRepeatedAssignmentSetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetBodyRepeatedAssignmentSet' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetBodyRepeatedAssignmentSet' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\RepeatedAssignmentSetBodyRepeatedAssignmentSet();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('assignment', $data) && null !== $data['assignment']) {
            $object->setAssignment($this->denormalizer->denormalize($data['assignment'], 'JoliCode\\Forecast\\Api\\Model\\Assignment', 'json', $context));
        } elseif (\array_key_exists('assignment', $data) && null === $data['assignment']) {
            $object->setAssignment(null);
        }
        if (\array_key_exists('weeks', $data) && null !== $data['weeks']) {
            $object->setWeeks($data['weeks']);
        } elseif (\array_key_exists('weeks', $data) && null === $data['weeks']) {
            $object->setWeeks(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        $data['assignment'] = $this->normalizer->normalize($object->getAssignment(), 'json', $context);
        $data['weeks'] = $object->getWeeks();

        return $data;
    }
}
