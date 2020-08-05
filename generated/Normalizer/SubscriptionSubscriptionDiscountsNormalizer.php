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
class SubscriptionSubscriptionDiscountsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscriptionDiscounts();
        if (\array_key_exists('monthly_percentage', $data) && $data['monthly_percentage'] !== null) {
            $object->setMonthlyPercentage($data['monthly_percentage']);
        }
        elseif (\array_key_exists('monthly_percentage', $data) && $data['monthly_percentage'] === null) {
            $object->setMonthlyPercentage(null);
        }
        if (\array_key_exists('yearly_percentage', $data) && $data['yearly_percentage'] !== null) {
            $object->setYearlyPercentage($data['yearly_percentage']);
        }
        elseif (\array_key_exists('yearly_percentage', $data) && $data['yearly_percentage'] === null) {
            $object->setYearlyPercentage(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getMonthlyPercentage()) {
            $data['monthly_percentage'] = $object->getMonthlyPercentage();
        }
        if (null !== $object->getYearlyPercentage()) {
            $data['yearly_percentage'] = $object->getYearlyPercentage();
        }
        return $data;
    }
}