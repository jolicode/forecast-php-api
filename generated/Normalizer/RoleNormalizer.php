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

class RoleNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'JoliCode\\Forecast\\Api\\Model\\Role' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Role' === \get_class($data);
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
        $object = new \JoliCode\Forecast\Api\Model\Role();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('name', $data) && null !== $data['name']) {
            $object->setName($data['name']);
        } elseif (\array_key_exists('name', $data) && null === $data['name']) {
            $object->setName(null);
        }
        if (\array_key_exists('placeholder_ids', $data) && null !== $data['placeholder_ids']) {
            $values = [];
            foreach ($data['placeholder_ids'] as $value) {
                $values[] = $value;
            }
            $object->setPlaceholderIds($values);
        } elseif (\array_key_exists('placeholder_ids', $data) && null === $data['placeholder_ids']) {
            $object->setPlaceholderIds(null);
        }
        if (\array_key_exists('person_ids', $data) && null !== $data['person_ids']) {
            $values_1 = [];
            foreach ($data['person_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setPersonIds($values_1);
        } elseif (\array_key_exists('person_ids', $data) && null === $data['person_ids']) {
            $object->setPersonIds(null);
        }
        if (\array_key_exists('harvest_role_id', $data) && null !== $data['harvest_role_id']) {
            $object->setHarvestRoleId($data['harvest_role_id']);
        } elseif (\array_key_exists('harvest_role_id', $data) && null === $data['harvest_role_id']) {
            $object->setHarvestRoleId(null);
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
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        $data['name'] = $object->getName();
        if (null !== $object->getPlaceholderIds()) {
            $values = [];
            foreach ($object->getPlaceholderIds() as $value) {
                $values[] = $value;
            }
            $data['placeholder_ids'] = $values;
        }
        if (null !== $object->getPersonIds()) {
            $values_1 = [];
            foreach ($object->getPersonIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['person_ids'] = $values_1;
        }
        if (null !== $object->getHarvestRoleId()) {
            $data['harvest_role_id'] = $object->getHarvestRoleId();
        }

        return $data;
    }
}
