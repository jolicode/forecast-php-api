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
class RepeatedAssignmentSetsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSets';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSets';
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
        $object = new \JoliCode\Forecast\Api\Model\RepeatedAssignmentSets();
        if (property_exists($data, 'repeated_assignment_sets')) {
            $values = array();
            foreach ($data->{'repeated_assignment_sets'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSet', 'json', $context);
            }
            $object->setRepeatedAssignmentSets($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getRepeatedAssignmentSets()) {
            $values = array();
            foreach ($object->getRepeatedAssignmentSets() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'repeated_assignment_sets'} = $values;
        }
        return $data;
    }
}