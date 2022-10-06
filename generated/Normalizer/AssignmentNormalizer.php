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

class AssignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use CheckArray;
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return 'JoliCode\\Forecast\\Api\\Model\\Assignment' === $type;
    }

    public function supportsNormalization($data, $format = null): bool
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Assignment' === \get_class($data);
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
        $object = new \JoliCode\Forecast\Api\Model\Assignment();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('active_on_days_off', $data) && null !== $data['active_on_days_off']) {
            $object->setActiveOnDaysOff($data['active_on_days_off']);
        } elseif (\array_key_exists('active_on_days_off', $data) && null === $data['active_on_days_off']) {
            $object->setActiveOnDaysOff(null);
        }
        if (\array_key_exists('allocation', $data) && null !== $data['allocation']) {
            $object->setAllocation($data['allocation']);
        } elseif (\array_key_exists('allocation', $data) && null === $data['allocation']) {
            $object->setAllocation(null);
        }
        if (\array_key_exists('end_date', $data) && null !== $data['end_date']) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['end_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('end_date', $data) && null === $data['end_date']) {
            $object->setEndDate(null);
        }
        if (\array_key_exists('id', $data) && null !== $data['id']) {
            $object->setId($data['id']);
        } elseif (\array_key_exists('id', $data) && null === $data['id']) {
            $object->setId(null);
        }
        if (\array_key_exists('notes', $data) && null !== $data['notes']) {
            $object->setNotes($data['notes']);
        } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
            $object->setNotes(null);
        }
        if (\array_key_exists('person_id', $data) && null !== $data['person_id']) {
            $object->setPersonId($data['person_id']);
        } elseif (\array_key_exists('person_id', $data) && null === $data['person_id']) {
            $object->setPersonId(null);
        }
        if (\array_key_exists('placeholder_id', $data) && null !== $data['placeholder_id']) {
            $object->setPlaceholderId($data['placeholder_id']);
        } elseif (\array_key_exists('placeholder_id', $data) && null === $data['placeholder_id']) {
            $object->setPlaceholderId(null);
        }
        if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
            $object->setProjectId($data['project_id']);
        } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
            $object->setProjectId(null);
        }
        if (\array_key_exists('repeated_assignment_set_id', $data) && null !== $data['repeated_assignment_set_id']) {
            $object->setRepeatedAssignmentSetId($data['repeated_assignment_set_id']);
        } elseif (\array_key_exists('repeated_assignment_set_id', $data) && null === $data['repeated_assignment_set_id']) {
            $object->setRepeatedAssignmentSetId(null);
        }
        if (\array_key_exists('start_date', $data) && null !== $data['start_date']) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['start_date'])->setTime(0, 0, 0));
        } elseif (\array_key_exists('start_date', $data) && null === $data['start_date']) {
            $object->setStartDate(null);
        }
        if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
            $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.v\\Z', $data['updated_at']));
        } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
            $object->setUpdatedAt(null);
        }
        if (\array_key_exists('updated_by_id', $data) && null !== $data['updated_by_id']) {
            $object->setUpdatedById($data['updated_by_id']);
        } elseif (\array_key_exists('updated_by_id', $data) && null === $data['updated_by_id']) {
            $object->setUpdatedById(null);
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
        if (null !== $object->getActiveOnDaysOff()) {
            $data['active_on_days_off'] = $object->getActiveOnDaysOff();
        }
        $data['allocation'] = $object->getAllocation();
        $data['end_date'] = $object->getEndDate()->format('Y-m-d');
        if (null !== $object->getId()) {
            $data['id'] = $object->getId();
        }
        if (null !== $object->getNotes()) {
            $data['notes'] = $object->getNotes();
        }
        if (null !== $object->getPersonId()) {
            $data['person_id'] = $object->getPersonId();
        }
        if (null !== $object->getPlaceholderId()) {
            $data['placeholder_id'] = $object->getPlaceholderId();
        }
        if (null !== $object->getProjectId()) {
            $data['project_id'] = $object->getProjectId();
        }
        if (null !== $object->getRepeatedAssignmentSetId()) {
            $data['repeated_assignment_set_id'] = $object->getRepeatedAssignmentSetId();
        }
        $data['start_date'] = $object->getStartDate()->format('Y-m-d');
        if (null !== $object->getUpdatedAt()) {
            $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.v\\Z');
        }
        if (null !== $object->getUpdatedById()) {
            $data['updated_by_id'] = $object->getUpdatedById();
        }

        return $data;
    }
}
