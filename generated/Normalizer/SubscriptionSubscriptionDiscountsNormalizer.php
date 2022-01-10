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

use Jane\Component\JsonSchemaRuntime\Reference;
use JoliCode\Forecast\Api\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SubscriptionSubscriptionDiscountsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    /**
     * @param mixed      $data
     * @param mixed      $type
     * @param mixed|null $format
     *
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts' === \get_class($data);
    }

    /**
     * @param mixed      $data
     * @param mixed      $class
     * @param mixed|null $format
     *
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscriptionDiscounts();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('monthly_percentage', $data) && null !== $data['monthly_percentage']) {
            $object->setMonthlyPercentage($data['monthly_percentage']);
        } elseif (\array_key_exists('monthly_percentage', $data) && null === $data['monthly_percentage']) {
            $object->setMonthlyPercentage(null);
        }
        if (\array_key_exists('yearly_percentage', $data) && null !== $data['yearly_percentage']) {
            $object->setYearlyPercentage($data['yearly_percentage']);
        } elseif (\array_key_exists('yearly_percentage', $data) && null === $data['yearly_percentage']) {
            $object->setYearlyPercentage(null);
        }

        return $object;
    }

    /**
     * @param mixed      $object
     * @param mixed|null $format
     *
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getMonthlyPercentage()) {
            $data['monthly_percentage'] = $object->getMonthlyPercentage();
        }
        if (null !== $object->getYearlyPercentage()) {
            $data['yearly_percentage'] = $object->getYearlyPercentage();
        }

        return $data;
    }
}
