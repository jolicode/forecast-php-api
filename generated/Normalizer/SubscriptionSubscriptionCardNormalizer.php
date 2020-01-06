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
class SubscriptionSubscriptionCardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard';
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
        $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscriptionCard();
        if (property_exists($data, 'brand')) {
            $object->setBrand($data->{'brand'});
        }
        if (property_exists($data, 'last_four')) {
            $object->setLastFour($data->{'last_four'});
        }
        if (property_exists($data, 'expiry_month')) {
            $object->setExpiryMonth($data->{'expiry_month'});
        }
        if (property_exists($data, 'expiry_year')) {
            $object->setExpiryYear($data->{'expiry_year'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getBrand()) {
            $data->{'brand'} = $object->getBrand();
        }
        if (null !== $object->getLastFour()) {
            $data->{'last_four'} = $object->getLastFour();
        }
        if (null !== $object->getExpiryMonth()) {
            $data->{'expiry_month'} = $object->getExpiryMonth();
        }
        if (null !== $object->getExpiryYear()) {
            $data->{'expiry_year'} = $object->getExpiryYear();
        }
        return $data;
    }
}