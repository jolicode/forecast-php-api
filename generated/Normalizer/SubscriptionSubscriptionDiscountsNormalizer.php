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

class SubscriptionSubscriptionDiscountsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts' === \get_class($data);
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
        $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscriptionDiscounts();
        if (property_exists($data, 'monthly_percentage') && null !== $data->{'monthly_percentage'}) {
            $object->setMonthlyPercentage($data->{'monthly_percentage'});
        } elseif (property_exists($data, 'monthly_percentage') && null === $data->{'monthly_percentage'}) {
            $object->setMonthlyPercentage(null);
        }
        if (property_exists($data, 'yearly_percentage') && null !== $data->{'yearly_percentage'}) {
            $object->setYearlyPercentage($data->{'yearly_percentage'});
        } elseif (property_exists($data, 'yearly_percentage') && null === $data->{'yearly_percentage'}) {
            $object->setYearlyPercentage(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getMonthlyPercentage()) {
            $data->{'monthly_percentage'} = $object->getMonthlyPercentage();
        } else {
            $data->{'monthly_percentage'} = null;
        }
        if (null !== $object->getYearlyPercentage()) {
            $data->{'yearly_percentage'} = $object->getYearlyPercentage();
        } else {
            $data->{'yearly_percentage'} = null;
        }

        return $data;
    }
}
