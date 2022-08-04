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

class SubscriptionSubscriptionCardNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard' === \get_class($data);
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
        $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscriptionCard();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('brand', $data) && null !== $data['brand']) {
            $object->setBrand($data['brand']);
        } elseif (\array_key_exists('brand', $data) && null === $data['brand']) {
            $object->setBrand(null);
        }
        if (\array_key_exists('last_four', $data) && null !== $data['last_four']) {
            $object->setLastFour($data['last_four']);
        } elseif (\array_key_exists('last_four', $data) && null === $data['last_four']) {
            $object->setLastFour(null);
        }
        if (\array_key_exists('expiry_month', $data) && null !== $data['expiry_month']) {
            $object->setExpiryMonth($data['expiry_month']);
        } elseif (\array_key_exists('expiry_month', $data) && null === $data['expiry_month']) {
            $object->setExpiryMonth(null);
        }
        if (\array_key_exists('expiry_year', $data) && null !== $data['expiry_year']) {
            $object->setExpiryYear($data['expiry_year']);
        } elseif (\array_key_exists('expiry_year', $data) && null === $data['expiry_year']) {
            $object->setExpiryYear(null);
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
