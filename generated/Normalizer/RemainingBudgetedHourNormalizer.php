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

class RemainingBudgetedHourNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHour' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHour' === \get_class($data);
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
        $object = new \JoliCode\Forecast\Api\Model\RemainingBudgetedHour();
        if (property_exists($data, 'budget_by') && null !== $data->{'budget_by'}) {
            $object->setBudgetBy($data->{'budget_by'});
        } elseif (property_exists($data, 'budget_by') && null === $data->{'budget_by'}) {
            $object->setBudgetBy(null);
        }
        if (property_exists($data, 'budget_is_monthly') && null !== $data->{'budget_is_monthly'}) {
            $object->setBudgetIsMonthly($data->{'budget_is_monthly'});
        } elseif (property_exists($data, 'budget_is_monthly') && null === $data->{'budget_is_monthly'}) {
            $object->setBudgetIsMonthly(null);
        }
        if (property_exists($data, 'hours') && null !== $data->{'hours'}) {
            $object->setHours($data->{'hours'});
        } elseif (property_exists($data, 'hours') && null === $data->{'hours'}) {
            $object->setHours(null);
        }
        if (property_exists($data, 'project_id') && null !== $data->{'project_id'}) {
            $object->setProjectId($data->{'project_id'});
        } elseif (property_exists($data, 'project_id') && null === $data->{'project_id'}) {
            $object->setProjectId(null);
        }
        if (property_exists($data, 'response_code') && null !== $data->{'response_code'}) {
            $object->setResponseCode($data->{'response_code'});
        } elseif (property_exists($data, 'response_code') && null === $data->{'response_code'}) {
            $object->setResponseCode(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getBudgetBy()) {
            $data->{'budget_by'} = $object->getBudgetBy();
        } else {
            $data->{'budget_by'} = null;
        }
        if (null !== $object->getBudgetIsMonthly()) {
            $data->{'budget_is_monthly'} = $object->getBudgetIsMonthly();
        } else {
            $data->{'budget_is_monthly'} = null;
        }
        if (null !== $object->getHours()) {
            $data->{'hours'} = $object->getHours();
        } else {
            $data->{'hours'} = null;
        }
        if (null !== $object->getProjectId()) {
            $data->{'project_id'} = $object->getProjectId();
        } else {
            $data->{'project_id'} = null;
        }
        if (null !== $object->getResponseCode()) {
            $data->{'response_code'} = $object->getResponseCode();
        } else {
            $data->{'response_code'} = null;
        }

        return $data;
    }
}
