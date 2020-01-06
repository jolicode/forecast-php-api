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
class SubscriptionSubscriptionAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress';
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
        $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscriptionAddress();
        if (property_exists($data, 'line_1')) {
            $object->setLine1($data->{'line_1'});
        }
        if (property_exists($data, 'line_2')) {
            $object->setLine2($data->{'line_2'});
        }
        if (property_exists($data, 'city')) {
            $object->setCity($data->{'city'});
        }
        if (property_exists($data, 'state')) {
            $object->setState($data->{'state'});
        }
        if (property_exists($data, 'postal_code')) {
            $object->setPostalCode($data->{'postal_code'});
        }
        if (property_exists($data, 'country')) {
            $object->setCountry($data->{'country'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getLine1()) {
            $data->{'line_1'} = $object->getLine1();
        }
        if (null !== $object->getLine2()) {
            $data->{'line_2'} = $object->getLine2();
        }
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        }
        if (null !== $object->getPostalCode()) {
            $data->{'postal_code'} = $object->getPostalCode();
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        }
        return $data;
    }
}