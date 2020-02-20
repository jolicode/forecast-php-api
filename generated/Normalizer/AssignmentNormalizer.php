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

class AssignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return 'JoliCode\\Forecast\\Api\\Model\\Assignment' === $type;
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Assignment' === \get_class($data);
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
        $object = new \JoliCode\Forecast\Api\Model\Assignment();
        if (property_exists($data, 'active_on_days_off') && null !== $data->{'active_on_days_off'}) {
            $object->setActiveOnDaysOff($data->{'active_on_days_off'});
        } elseif (property_exists($data, 'active_on_days_off') && null === $data->{'active_on_days_off'}) {
            $object->setActiveOnDaysOff(null);
        }
        if (property_exists($data, 'allocation') && null !== $data->{'allocation'}) {
            $object->setAllocation($data->{'allocation'});
        } elseif (property_exists($data, 'allocation') && null === $data->{'allocation'}) {
            $object->setAllocation(null);
        }
        if (property_exists($data, 'end_date') && null !== $data->{'end_date'}) {
            $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data->{'end_date'})->setTime(0, 0, 0));
        } elseif (property_exists($data, 'end_date') && null === $data->{'end_date'}) {
            $object->setEndDate(null);
        }
        if (property_exists($data, 'id') && null !== $data->{'id'}) {
            $object->setId($data->{'id'});
        } elseif (property_exists($data, 'id') && null === $data->{'id'}) {
            $object->setId(null);
        }
        if (property_exists($data, 'notes') && null !== $data->{'notes'}) {
            $object->setNotes($data->{'notes'});
        } elseif (property_exists($data, 'notes') && null === $data->{'notes'}) {
            $object->setNotes(null);
        }
        if (property_exists($data, 'person_id') && null !== $data->{'person_id'}) {
            $object->setPersonId($data->{'person_id'});
        } elseif (property_exists($data, 'person_id') && null === $data->{'person_id'}) {
            $object->setPersonId(null);
        }
        if (property_exists($data, 'placeholder_id') && null !== $data->{'placeholder_id'}) {
            $object->setPlaceholderId($data->{'placeholder_id'});
        } elseif (property_exists($data, 'placeholder_id') && null === $data->{'placeholder_id'}) {
            $object->setPlaceholderId(null);
        }
        if (property_exists($data, 'project_id') && null !== $data->{'project_id'}) {
            $object->setProjectId($data->{'project_id'});
        } elseif (property_exists($data, 'project_id') && null === $data->{'project_id'}) {
            $object->setProjectId(null);
        }
        if (property_exists($data, 'repeated_assignment_set_id') && null !== $data->{'repeated_assignment_set_id'}) {
            $object->setRepeatedAssignmentSetId($data->{'repeated_assignment_set_id'});
        } elseif (property_exists($data, 'repeated_assignment_set_id') && null === $data->{'repeated_assignment_set_id'}) {
            $object->setRepeatedAssignmentSetId(null);
        }
        if (property_exists($data, 'start_date') && null !== $data->{'start_date'}) {
            $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data->{'start_date'})->setTime(0, 0, 0));
        } elseif (property_exists($data, 'start_date') && null === $data->{'start_date'}) {
            $object->setStartDate(null);
        }
        if (property_exists($data, 'updated_at') && null !== $data->{'updated_at'}) {
            $object->setUpdatedAt($data->{'updated_at'});
        } elseif (property_exists($data, 'updated_at') && null === $data->{'updated_at'}) {
            $object->setUpdatedAt(null);
        }
        if (property_exists($data, 'updated_by') && null !== $data->{'updated_by'}) {
            $object->setUpdatedBy($data->{'updated_by'});
        } elseif (property_exists($data, 'updated_by') && null === $data->{'updated_by'}) {
            $object->setUpdatedBy(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getActiveOnDaysOff()) {
            $data->{'active_on_days_off'} = $object->getActiveOnDaysOff();
        } else {
            $data->{'active_on_days_off'} = null;
        }
        if (null !== $object->getAllocation()) {
            $data->{'allocation'} = $object->getAllocation();
        } else {
            $data->{'allocation'} = null;
        }
        if (null !== $object->getEndDate()) {
            $data->{'end_date'} = $object->getEndDate()->format('Y-m-d');
        } else {
            $data->{'end_date'} = null;
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        } else {
            $data->{'id'} = null;
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        } else {
            $data->{'notes'} = null;
        }
        if (null !== $object->getPersonId()) {
            $data->{'person_id'} = $object->getPersonId();
        } else {
            $data->{'person_id'} = null;
        }
        if (null !== $object->getPlaceholderId()) {
            $data->{'placeholder_id'} = $object->getPlaceholderId();
        } else {
            $data->{'placeholder_id'} = null;
        }
        if (null !== $object->getProjectId()) {
            $data->{'project_id'} = $object->getProjectId();
        } else {
            $data->{'project_id'} = null;
        }
        if (null !== $object->getRepeatedAssignmentSetId()) {
            $data->{'repeated_assignment_set_id'} = $object->getRepeatedAssignmentSetId();
        } else {
            $data->{'repeated_assignment_set_id'} = null;
        }
        if (null !== $object->getStartDate()) {
            $data->{'start_date'} = $object->getStartDate()->format('Y-m-d');
        } else {
            $data->{'start_date'} = null;
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt();
        } else {
            $data->{'updated_at'} = null;
        }
        if (null !== $object->getUpdatedBy()) {
            $data->{'updated_by'} = $object->getUpdatedBy();
        } else {
            $data->{'updated_by'} = null;
        }

        return $data;
    }
}
