<?php

namespace JoliCode\Forecast\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
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
    use CheckArray;
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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscriptionCard();
        if (\array_key_exists('brand', $data) && $data['brand'] !== null) {
            $object->setBrand($data['brand']);
        }
        elseif (\array_key_exists('brand', $data) && $data['brand'] === null) {
            $object->setBrand(null);
        }
        if (\array_key_exists('last_four', $data) && $data['last_four'] !== null) {
            $object->setLastFour($data['last_four']);
        }
        elseif (\array_key_exists('last_four', $data) && $data['last_four'] === null) {
            $object->setLastFour(null);
        }
        if (\array_key_exists('expiry_month', $data) && $data['expiry_month'] !== null) {
            $object->setExpiryMonth($data['expiry_month']);
        }
        elseif (\array_key_exists('expiry_month', $data) && $data['expiry_month'] === null) {
            $object->setExpiryMonth(null);
        }
        if (\array_key_exists('expiry_year', $data) && $data['expiry_year'] !== null) {
            $object->setExpiryYear($data['expiry_year']);
        }
        elseif (\array_key_exists('expiry_year', $data) && $data['expiry_year'] === null) {
            $object->setExpiryYear(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getBrand()) {
            $data['brand'] = $object->getBrand();
        }
        if (null !== $object->getLastFour()) {
            $data['last_four'] = $object->getLastFour();
        }
        if (null !== $object->getExpiryMonth()) {
            $data['expiry_month'] = $object->getExpiryMonth();
        }
        if (null !== $object->getExpiryYear()) {
            $data['expiry_year'] = $object->getExpiryYear();
        }
        return $data;
    }
}