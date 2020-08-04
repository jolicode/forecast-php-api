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

class RemainingBudgetedHoursNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHours' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHours' === \get_class($data);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\RemainingBudgetedHours();
        if (\array_key_exists('remaining_budgeted_hours', $data) && null !== $data['remaining_budgeted_hours']) {
            $values = [];
            foreach ($data['remaining_budgeted_hours'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHour', 'json', $context);
            }
            $object->setRemainingBudgetedHours($values);
        } elseif (\array_key_exists('remaining_budgeted_hours', $data) && null === $data['remaining_budgeted_hours']) {
            $object->setRemainingBudgetedHours(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if (null !== $object->getRemainingBudgetedHours()) {
            $values = [];
            foreach ($object->getRemainingBudgetedHours() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data['remaining_budgeted_hours'] = $values;
        }

        return $data;
    }
}
