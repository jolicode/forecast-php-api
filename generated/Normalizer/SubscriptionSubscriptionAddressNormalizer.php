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

class SubscriptionSubscriptionAddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress' === \get_class($data);
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
        $object = new \JoliCode\Forecast\Api\Model\SubscriptionSubscriptionAddress();
        if (property_exists($data, 'line_1') && null !== $data->{'line_1'}) {
            $object->setLine1($data->{'line_1'});
        } elseif (property_exists($data, 'line_1') && null === $data->{'line_1'}) {
            $object->setLine1(null);
        }
        if (property_exists($data, 'line_2') && null !== $data->{'line_2'}) {
            $object->setLine2($data->{'line_2'});
        } elseif (property_exists($data, 'line_2') && null === $data->{'line_2'}) {
            $object->setLine2(null);
        }
        if (property_exists($data, 'city') && null !== $data->{'city'}) {
            $object->setCity($data->{'city'});
        } elseif (property_exists($data, 'city') && null === $data->{'city'}) {
            $object->setCity(null);
        }
        if (property_exists($data, 'state') && null !== $data->{'state'}) {
            $object->setState($data->{'state'});
        } elseif (property_exists($data, 'state') && null === $data->{'state'}) {
            $object->setState(null);
        }
        if (property_exists($data, 'postal_code') && null !== $data->{'postal_code'}) {
            $object->setPostalCode($data->{'postal_code'});
        } elseif (property_exists($data, 'postal_code') && null === $data->{'postal_code'}) {
            $object->setPostalCode(null);
        }
        if (property_exists($data, 'country') && null !== $data->{'country'}) {
            $object->setCountry($data->{'country'});
        } elseif (property_exists($data, 'country') && null === $data->{'country'}) {
            $object->setCountry(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getLine1()) {
            $data->{'line_1'} = $object->getLine1();
        } else {
            $data->{'line_1'} = null;
        }
        if (null !== $object->getLine2()) {
            $data->{'line_2'} = $object->getLine2();
        } else {
            $data->{'line_2'} = null;
        }
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        } else {
            $data->{'city'} = null;
        }
        if (null !== $object->getState()) {
            $data->{'state'} = $object->getState();
        } else {
            $data->{'state'} = null;
        }
        if (null !== $object->getPostalCode()) {
            $data->{'postal_code'} = $object->getPostalCode();
        } else {
            $data->{'postal_code'} = null;
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        } else {
            $data->{'country'} = null;
        }

        return $data;
    }
}
