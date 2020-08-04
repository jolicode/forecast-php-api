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

use Jane\JsonSchemaRuntime\Normalizer\CheckArray;
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
    use CheckArray;

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
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\RemainingBudgetedHour();
        if (\array_key_exists('budget_by', $data) && null !== $data['budget_by']) {
            $object->setBudgetBy($data['budget_by']);
        } elseif (\array_key_exists('budget_by', $data) && null === $data['budget_by']) {
            $object->setBudgetBy(null);
        }
        if (\array_key_exists('budget_is_monthly', $data) && null !== $data['budget_is_monthly']) {
            $object->setBudgetIsMonthly($data['budget_is_monthly']);
        } elseif (\array_key_exists('budget_is_monthly', $data) && null === $data['budget_is_monthly']) {
            $object->setBudgetIsMonthly(null);
        }
        if (\array_key_exists('hours', $data) && null !== $data['hours']) {
            $object->setHours($data['hours']);
        } elseif (\array_key_exists('hours', $data) && null === $data['hours']) {
            $object->setHours(null);
        }
        if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
            $object->setProjectId($data['project_id']);
        } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('response_code', $data) && null !== $data['response_code']) {
            $object->setResponseCode($data['response_code']);
        } elseif (\array_key_exists('response_code', $data) && null === $data['response_code']) {
            $object->setResponseCode(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getBudgetBy()) {
            $data['budget_by'] = $object->getBudgetBy();
        }
        if (null !== $object->getBudgetIsMonthly()) {
            $data['budget_is_monthly'] = $object->getBudgetIsMonthly();
        }
        if (null !== $object->getHours()) {
            $data['hours'] = $object->getHours();
        }
        if (null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if (null !== $object->getResponseCode()) {
            $data['response_code'] = $object->getResponseCode();
        }

        return $data;
    }
}
