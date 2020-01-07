<?php

namespace JoliCode\Forecast\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
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
        return $type === 'JoliCode\\Forecast\\Api\\Model\\Assignment';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'JoliCode\\Forecast\\Api\\Model\\Assignment';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \JoliCode\Forecast\Api\Model\Assignment();
        if (property_exists($data, 'active_on_days_off') && $data->{'active_on_days_off'} !== null) {
            $object->setActiveOnDaysOff($data->{'active_on_days_off'});
        }
        if (property_exists($data, 'allocation') && $data->{'allocation'} !== null) {
            $object->setAllocation($data->{'allocation'});
        }
        if (property_exists($data, 'end_date') && $data->{'end_date'} !== null) {
            $object->setEndDate($data->{'end_date'});
        }
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'notes') && $data->{'notes'} !== null) {
            $object->setNotes($data->{'notes'});
        }
        if (property_exists($data, 'person_id') && $data->{'person_id'} !== null) {
            $object->setPersonId($data->{'person_id'});
        }
        if (property_exists($data, 'placeholder_id') && $data->{'placeholder_id'} !== null) {
            $object->setPlaceholderId($data->{'placeholder_id'});
        }
        if (property_exists($data, 'project_id') && $data->{'project_id'} !== null) {
            $object->setProjectId($data->{'project_id'});
        }
        if (property_exists($data, 'repeated_assignment_set_id') && $data->{'repeated_assignment_set_id'} !== null) {
            $object->setRepeatedAssignmentSetId($data->{'repeated_assignment_set_id'});
        }
        if (property_exists($data, 'start_date') && $data->{'start_date'} !== null) {
            $object->setStartDate($data->{'start_date'});
        }
        if (property_exists($data, 'updated_at') && $data->{'updated_at'} !== null) {
            $object->setUpdatedAt($data->{'updated_at'});
        }
        if (property_exists($data, 'updated_by') && $data->{'updated_by'} !== null) {
            $object->setUpdatedBy($data->{'updated_by'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getActiveOnDaysOff()) {
            $data->{'active_on_days_off'} = $object->getActiveOnDaysOff();
        }
        if (null !== $object->getAllocation()) {
            $data->{'allocation'} = $object->getAllocation();
        }
        if (null !== $object->getEndDate()) {
            $data->{'end_date'} = $object->getEndDate();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getNotes()) {
            $data->{'notes'} = $object->getNotes();
        }
        if (null !== $object->getPersonId()) {
            $data->{'person_id'} = $object->getPersonId();
        }
        if (null !== $object->getPlaceholderId()) {
            $data->{'placeholder_id'} = $object->getPlaceholderId();
        }
        if (null !== $object->getProjectId()) {
            $data->{'project_id'} = $object->getProjectId();
        }
        if (null !== $object->getRepeatedAssignmentSetId()) {
            $data->{'repeated_assignment_set_id'} = $object->getRepeatedAssignmentSetId();
        }
        if (null !== $object->getStartDate()) {
            $data->{'start_date'} = $object->getStartDate();
        }
        if (null !== $object->getUpdatedAt()) {
            $data->{'updated_at'} = $object->getUpdatedAt();
        }
        if (null !== $object->getUpdatedBy()) {
            $data->{'updated_by'} = $object->getUpdatedBy();
        }
        return $data;
    }
}