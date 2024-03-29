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
use JoliCode\Forecast\Api\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) || (Kernel::MAJOR_VERSION >= 7 || Kernel::MAJOR_VERSION === 6 && Kernel::MINOR_VERSION === 4)) {
    class AssignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\Assignment' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Assignment' === $data::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
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
                unset($data['active_on_days_off']);
            } elseif (\array_key_exists('active_on_days_off', $data) && null === $data['active_on_days_off']) {
                $object->setActiveOnDaysOff(null);
            }
            if (\array_key_exists('allocation', $data) && null !== $data['allocation']) {
                $object->setAllocation($data['allocation']);
                unset($data['allocation']);
            } elseif (\array_key_exists('allocation', $data) && null === $data['allocation']) {
                $object->setAllocation(null);
            }
            if (\array_key_exists('end_date', $data) && null !== $data['end_date']) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['end_date'])->setTime(0, 0, 0));
                unset($data['end_date']);
            } elseif (\array_key_exists('end_date', $data) && null === $data['end_date']) {
                $object->setEndDate(null);
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('notes', $data) && null !== $data['notes']) {
                $object->setNotes($data['notes']);
                unset($data['notes']);
            } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
                $object->setNotes(null);
            }
            if (\array_key_exists('person_id', $data) && null !== $data['person_id']) {
                $object->setPersonId($data['person_id']);
                unset($data['person_id']);
            } elseif (\array_key_exists('person_id', $data) && null === $data['person_id']) {
                $object->setPersonId(null);
            }
            if (\array_key_exists('placeholder_id', $data) && null !== $data['placeholder_id']) {
                $object->setPlaceholderId($data['placeholder_id']);
                unset($data['placeholder_id']);
            } elseif (\array_key_exists('placeholder_id', $data) && null === $data['placeholder_id']) {
                $object->setPlaceholderId(null);
            }
            if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
            } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
                $object->setProjectId(null);
            }
            if (\array_key_exists('repeated_assignment_set_id', $data) && null !== $data['repeated_assignment_set_id']) {
                $object->setRepeatedAssignmentSetId($data['repeated_assignment_set_id']);
                unset($data['repeated_assignment_set_id']);
            } elseif (\array_key_exists('repeated_assignment_set_id', $data) && null === $data['repeated_assignment_set_id']) {
                $object->setRepeatedAssignmentSetId(null);
            }
            if (\array_key_exists('start_date', $data) && null !== $data['start_date']) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['start_date'])->setTime(0, 0, 0));
                unset($data['start_date']);
            } elseif (\array_key_exists('start_date', $data) && null === $data['start_date']) {
                $object->setStartDate(null);
            }
            if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.v\\Z', $data['updated_at']));
                unset($data['updated_at']);
            } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
                $object->setUpdatedAt(null);
            }
            if (\array_key_exists('updated_by_id', $data) && null !== $data['updated_by_id']) {
                $object->setUpdatedById($data['updated_by_id']);
                unset($data['updated_by_id']);
            } elseif (\array_key_exists('updated_by_id', $data) && null === $data['updated_by_id']) {
                $object->setUpdatedById(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('activeOnDaysOff') && null !== $object->getActiveOnDaysOff()) {
                $data['active_on_days_off'] = $object->getActiveOnDaysOff();
            }
            $data['allocation'] = $object->getAllocation();
            $data['end_date'] = $object->getEndDate()->format('Y-m-d');
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('notes') && null !== $object->getNotes()) {
                $data['notes'] = $object->getNotes();
            }
            if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
                $data['person_id'] = $object->getPersonId();
            }
            if ($object->isInitialized('placeholderId') && null !== $object->getPlaceholderId()) {
                $data['placeholder_id'] = $object->getPlaceholderId();
            }
            if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
                $data['project_id'] = $object->getProjectId();
            }
            if ($object->isInitialized('repeatedAssignmentSetId') && null !== $object->getRepeatedAssignmentSetId()) {
                $data['repeated_assignment_set_id'] = $object->getRepeatedAssignmentSetId();
            }
            $data['start_date'] = $object->getStartDate()->format('Y-m-d');
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.v\\Z');
            }
            if ($object->isInitialized('updatedById') && null !== $object->getUpdatedById()) {
                $data['updated_by_id'] = $object->getUpdatedById();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Forecast\\Api\\Model\\Assignment' => false];
        }
    }
} else {
    class AssignmentNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return 'JoliCode\\Forecast\\Api\\Model\\Assignment' === $type;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return \is_object($data) && 'JoliCode\\Forecast\\Api\\Model\\Assignment' === $data::class;
        }

        /**
         * @param mixed|null $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
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
                unset($data['active_on_days_off']);
            } elseif (\array_key_exists('active_on_days_off', $data) && null === $data['active_on_days_off']) {
                $object->setActiveOnDaysOff(null);
            }
            if (\array_key_exists('allocation', $data) && null !== $data['allocation']) {
                $object->setAllocation($data['allocation']);
                unset($data['allocation']);
            } elseif (\array_key_exists('allocation', $data) && null === $data['allocation']) {
                $object->setAllocation(null);
            }
            if (\array_key_exists('end_date', $data) && null !== $data['end_date']) {
                $object->setEndDate(\DateTime::createFromFormat('Y-m-d', $data['end_date'])->setTime(0, 0, 0));
                unset($data['end_date']);
            } elseif (\array_key_exists('end_date', $data) && null === $data['end_date']) {
                $object->setEndDate(null);
            }
            if (\array_key_exists('id', $data) && null !== $data['id']) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && null === $data['id']) {
                $object->setId(null);
            }
            if (\array_key_exists('notes', $data) && null !== $data['notes']) {
                $object->setNotes($data['notes']);
                unset($data['notes']);
            } elseif (\array_key_exists('notes', $data) && null === $data['notes']) {
                $object->setNotes(null);
            }
            if (\array_key_exists('person_id', $data) && null !== $data['person_id']) {
                $object->setPersonId($data['person_id']);
                unset($data['person_id']);
            } elseif (\array_key_exists('person_id', $data) && null === $data['person_id']) {
                $object->setPersonId(null);
            }
            if (\array_key_exists('placeholder_id', $data) && null !== $data['placeholder_id']) {
                $object->setPlaceholderId($data['placeholder_id']);
                unset($data['placeholder_id']);
            } elseif (\array_key_exists('placeholder_id', $data) && null === $data['placeholder_id']) {
                $object->setPlaceholderId(null);
            }
            if (\array_key_exists('project_id', $data) && null !== $data['project_id']) {
                $object->setProjectId($data['project_id']);
                unset($data['project_id']);
            } elseif (\array_key_exists('project_id', $data) && null === $data['project_id']) {
                $object->setProjectId(null);
            }
            if (\array_key_exists('repeated_assignment_set_id', $data) && null !== $data['repeated_assignment_set_id']) {
                $object->setRepeatedAssignmentSetId($data['repeated_assignment_set_id']);
                unset($data['repeated_assignment_set_id']);
            } elseif (\array_key_exists('repeated_assignment_set_id', $data) && null === $data['repeated_assignment_set_id']) {
                $object->setRepeatedAssignmentSetId(null);
            }
            if (\array_key_exists('start_date', $data) && null !== $data['start_date']) {
                $object->setStartDate(\DateTime::createFromFormat('Y-m-d', $data['start_date'])->setTime(0, 0, 0));
                unset($data['start_date']);
            } elseif (\array_key_exists('start_date', $data) && null === $data['start_date']) {
                $object->setStartDate(null);
            }
            if (\array_key_exists('updated_at', $data) && null !== $data['updated_at']) {
                $object->setUpdatedAt(\DateTime::createFromFormat('Y-m-d\\TH:i:s.v\\Z', $data['updated_at']));
                unset($data['updated_at']);
            } elseif (\array_key_exists('updated_at', $data) && null === $data['updated_at']) {
                $object->setUpdatedAt(null);
            }
            if (\array_key_exists('updated_by_id', $data) && null !== $data['updated_by_id']) {
                $object->setUpdatedById($data['updated_by_id']);
                unset($data['updated_by_id']);
            } elseif (\array_key_exists('updated_by_id', $data) && null === $data['updated_by_id']) {
                $object->setUpdatedById(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        /**
         * @param mixed|null $format
         *
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('activeOnDaysOff') && null !== $object->getActiveOnDaysOff()) {
                $data['active_on_days_off'] = $object->getActiveOnDaysOff();
            }
            $data['allocation'] = $object->getAllocation();
            $data['end_date'] = $object->getEndDate()->format('Y-m-d');
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('notes') && null !== $object->getNotes()) {
                $data['notes'] = $object->getNotes();
            }
            if ($object->isInitialized('personId') && null !== $object->getPersonId()) {
                $data['person_id'] = $object->getPersonId();
            }
            if ($object->isInitialized('placeholderId') && null !== $object->getPlaceholderId()) {
                $data['placeholder_id'] = $object->getPlaceholderId();
            }
            if ($object->isInitialized('projectId') && null !== $object->getProjectId()) {
                $data['project_id'] = $object->getProjectId();
            }
            if ($object->isInitialized('repeatedAssignmentSetId') && null !== $object->getRepeatedAssignmentSetId()) {
                $data['repeated_assignment_set_id'] = $object->getRepeatedAssignmentSetId();
            }
            $data['start_date'] = $object->getStartDate()->format('Y-m-d');
            if ($object->isInitialized('updatedAt') && null !== $object->getUpdatedAt()) {
                $data['updated_at'] = $object->getUpdatedAt()->format('Y-m-d\\TH:i:s.v\\Z');
            }
            if ($object->isInitialized('updatedById') && null !== $object->getUpdatedById()) {
                $data['updated_by_id'] = $object->getUpdatedById();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Forecast\\Api\\Model\\Assignment' => false];
        }
    }
}
