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
class RemainingBudgetedHourNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHour';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHour';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\RemainingBudgetedHour();
        if (\array_key_exists('budget_by', $data) && $data['budget_by'] !== null) {
            $object->setBudgetBy($data['budget_by']);
        }
        elseif (\array_key_exists('budget_by', $data) && $data['budget_by'] === null) {
            $object->setBudgetBy(null);
        }
        if (\array_key_exists('budget_is_monthly', $data) && $data['budget_is_monthly'] !== null) {
            $object->setBudgetIsMonthly($data['budget_is_monthly']);
        }
        elseif (\array_key_exists('budget_is_monthly', $data) && $data['budget_is_monthly'] === null) {
            $object->setBudgetIsMonthly(null);
        }
        if (\array_key_exists('hours', $data) && $data['hours'] !== null) {
            $object->setHours($data['hours']);
        }
        elseif (\array_key_exists('hours', $data) && $data['hours'] === null) {
            $object->setHours(null);
        }
        if (\array_key_exists('project_id', $data) && $data['project_id'] !== null) {
            $object->setProjectId($data['project_id']);
        }
        elseif (\array_key_exists('project_id', $data) && $data['project_id'] === null) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('response_code', $data) && $data['response_code'] !== null) {
            $object->setResponseCode($data['response_code']);
        }
        elseif (\array_key_exists('response_code', $data) && $data['response_code'] === null) {
            $object->setResponseCode(null);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
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