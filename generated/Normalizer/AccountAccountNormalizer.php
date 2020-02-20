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

class AccountAccountNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\AccountAccount' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\AccountAccount' === \get_class($data);
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
        $object = new \JoliCode\Forecast\Api\Model\AccountAccount();
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'name') && null !== $data->{'name'}) {
            $object->setName($data->{'name'});
        } elseif (property_exists($data, 'name') && null === $data->{'name'}) {
            $object->setName(null);
        }
        if (property_exists($data, 'weekly_capacity') && null !== $data->{'weekly_capacity'}) {
            $object->setWeeklyCapacity($data->{'weekly_capacity'});
        } elseif (property_exists($data, 'weekly_capacity') && null === $data->{'weekly_capacity'}) {
            $object->setWeeklyCapacity(null);
        }
        if (property_exists($data, 'color_labels') && null !== $data->{'color_labels'}) {
            $values = [];
            foreach ($data->{'color_labels'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Forecast\\Api\\Model\\AccountAccountColorLabelsItem', 'json', $context);
            }
            $object->setColorLabels($values);
        } elseif (property_exists($data, 'color_labels') && null === $data->{'color_labels'}) {
            $object->setColorLabels(null);
        }
        if (property_exists($data, 'harvest_subdomain') && null !== $data->{'harvest_subdomain'}) {
            $object->setHarvestSubdomain($data->{'harvest_subdomain'});
        } elseif (property_exists($data, 'harvest_subdomain') && null === $data->{'harvest_subdomain'}) {
            $object->setHarvestSubdomain(null);
        }
        if (property_exists($data, 'harvest_name') && null !== $data->{'harvest_name'}) {
            $object->setHarvestName($data->{'harvest_name'});
        } elseif (property_exists($data, 'harvest_name') && null === $data->{'harvest_name'}) {
            $object->setHarvestName(null);
        }
        if (property_exists($data, 'weekends_enabled') && null !== $data->{'weekends_enabled'}) {
            $object->setWeekendsEnabled($data->{'weekends_enabled'});
        } elseif (property_exists($data, 'weekends_enabled') && null === $data->{'weekends_enabled'}) {
            $object->setWeekendsEnabled(null);
        }
        if (property_exists($data, 'created_at') && null !== $data->{'created_at'}) {
            $object->setCreatedAt(\DateTime::createFromFormat("Y-m-d\TH:i:s.v\Z", $data->{'created_at'}));
        } elseif (property_exists($data, 'created_at') && null === $data->{'created_at'}) {
            $object->setCreatedAt(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        } else {
            $data->{'name'} = null;
        }
        if (null !== $object->getWeeklyCapacity()) {
            $data->{'weekly_capacity'} = $object->getWeeklyCapacity();
        } else {
            $data->{'weekly_capacity'} = null;
        }
        if (null !== $object->getColorLabels()) {
            $values = [];
            foreach ($object->getColorLabels() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'color_labels'} = $values;
        } else {
            $data->{'color_labels'} = null;
        }
        if (null !== $object->getHarvestSubdomain()) {
            $data->{'harvest_subdomain'} = $object->getHarvestSubdomain();
        } else {
            $data->{'harvest_subdomain'} = null;
        }
        if (null !== $object->getHarvestName()) {
            $data->{'harvest_name'} = $object->getHarvestName();
        } else {
            $data->{'harvest_name'} = null;
        }
        if (null !== $object->getWeekendsEnabled()) {
            $data->{'weekends_enabled'} = $object->getWeekendsEnabled();
        } else {
            $data->{'weekends_enabled'} = null;
        }
        if (null !== $object->getCreatedAt()) {
            $data->{'created_at'} = $object->getCreatedAt()->format("Y-m-d\TH:i:s.v\Z");
        } else {
            $data->{'created_at'} = null;
        }

        return $data;
    }
}
