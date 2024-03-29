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
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;
        protected $normalizers = ['JoliCode\\Forecast\\Api\\Model\\Account' => 'JoliCode\\Forecast\\Api\\Normalizer\\AccountNormalizer', 'JoliCode\\Forecast\\Api\\Model\\AccountAccount' => 'JoliCode\\Forecast\\Api\\Normalizer\\AccountAccountNormalizer', 'JoliCode\\Forecast\\Api\\Model\\AccountAccountColorLabelsItem' => 'JoliCode\\Forecast\\Api\\Normalizer\\AccountAccountColorLabelsItemNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Assignment' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Assignments' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Client' => 'JoliCode\\Forecast\\Api\\Normalizer\\ClientNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Clients' => 'JoliCode\\Forecast\\Api\\Normalizer\\ClientsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHour' => 'JoliCode\\Forecast\\Api\\Normalizer\\FutureScheduledHourNormalizer', 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHours' => 'JoliCode\\Forecast\\Api\\Normalizer\\FutureScheduledHoursNormalizer', 'JoliCode\\Forecast\\Api\\Model\\People' => 'JoliCode\\Forecast\\Api\\Normalizer\\PeopleNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Person' => 'JoliCode\\Forecast\\Api\\Normalizer\\PersonNormalizer', 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays' => 'JoliCode\\Forecast\\Api\\Normalizer\\PersonWorkingDaysNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Placeholder' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholderNormalizer', 'JoliCode\\Forecast\\Api\\Model\\PlaceholderBody' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholderBodyNormalizer', 'JoliCode\\Forecast\\Api\\Model\\PlaceholderBodyPlaceholder' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholderBodyPlaceholderNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Placeholders' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholdersNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Project' => 'JoliCode\\Forecast\\Api\\Normalizer\\ProjectNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Projects' => 'JoliCode\\Forecast\\Api\\Normalizer\\ProjectsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHour' => 'JoliCode\\Forecast\\Api\\Normalizer\\RemainingBudgetedHourNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHours' => 'JoliCode\\Forecast\\Api\\Normalizer\\RemainingBudgetedHoursNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSet' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetBody' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetBodyNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetBodyRepeatedAssignmentSet' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetBodyRepeatedAssignmentSetNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSets' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Role' => 'JoliCode\\Forecast\\Api\\Normalizer\\RoleNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RoleBody' => 'JoliCode\\Forecast\\Api\\Normalizer\\RoleBodyNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RoleBodyRole' => 'JoliCode\\Forecast\\Api\\Normalizer\\RoleBodyRoleNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Roles' => 'JoliCode\\Forecast\\Api\\Normalizer\\RolesNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Subscription' => 'JoliCode\\Forecast\\Api\\Normalizer\\SubscriptionNormalizer', 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscription' => 'JoliCode\\Forecast\\Api\\Normalizer\\SubscriptionSubscriptionNormalizer', 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts' => 'JoliCode\\Forecast\\Api\\Normalizer\\SubscriptionSubscriptionDiscountsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard' => 'JoliCode\\Forecast\\Api\\Normalizer\\SubscriptionSubscriptionCardNormalizer', 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress' => 'JoliCode\\Forecast\\Api\\Normalizer\\SubscriptionSubscriptionAddressNormalizer', 'JoliCode\\Forecast\\Api\\Model\\User' => 'JoliCode\\Forecast\\Api\\Normalizer\\UserNormalizer', 'JoliCode\\Forecast\\Api\\Model\\UserCurrentUser' => 'JoliCode\\Forecast\\Api\\Normalizer\\UserCurrentUserNormalizer', 'JoliCode\\Forecast\\Api\\Model\\UserConnection' => 'JoliCode\\Forecast\\Api\\Normalizer\\UserConnectionNormalizer', 'JoliCode\\Forecast\\Api\\Model\\UserConnections' => 'JoliCode\\Forecast\\Api\\Normalizer\\UserConnectionsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Error' => 'JoliCode\\Forecast\\Api\\Normalizer\\ErrorNormalizer', 'JoliCode\\Forecast\\Api\\Model\\AssignmentsIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\AssignmentsIdPutBody' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsIdPutBodyNormalizer', 'JoliCode\\Forecast\\Api\\Model\\AssignmentsIdPutResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsIdPutResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\AssignmentsPostBody' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsPostBodyNormalizer', 'JoliCode\\Forecast\\Api\\Model\\AssignmentsPostResponse201' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsPostResponse201Normalizer', 'JoliCode\\Forecast\\Api\\Model\\ClientsIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\ClientsIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\PeopleIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\PeopleIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\PeopleIdPutBody' => 'JoliCode\\Forecast\\Api\\Normalizer\\PeopleIdPutBodyNormalizer', 'JoliCode\\Forecast\\Api\\Model\\PeopleIdPutResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\PeopleIdPutResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\PeoplePostBody' => 'JoliCode\\Forecast\\Api\\Normalizer\\PeoplePostBodyNormalizer', 'JoliCode\\Forecast\\Api\\Model\\PeoplePostResponse201' => 'JoliCode\\Forecast\\Api\\Normalizer\\PeoplePostResponse201Normalizer', 'JoliCode\\Forecast\\Api\\Model\\PlaceholdersIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholdersIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\PlaceholdersIdPutResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholdersIdPutResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\PlaceholdersPostResponse201' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholdersPostResponse201Normalizer', 'JoliCode\\Forecast\\Api\\Model\\ProjectsIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\ProjectsIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\RolesIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\RolesIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\RolesIdPutResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\RolesIdPutResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\RolesPostResponse201' => 'JoliCode\\Forecast\\Api\\Normalizer\\RolesPostResponse201Normalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetsIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetsIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetsIdPutResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetsIdPutResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetsPostResponse201' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetsPostResponse201Normalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\JoliCode\\Forecast\\Api\\Runtime\\Normalizer\\ReferenceNormalizer'];
        protected $normalizersCache = [];

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return \array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return \is_object($data) && \array_key_exists($data::class, $this->normalizers);
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $normalizerClass = $this->normalizers[$object::class];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Forecast\\Api\\Model\\Account' => false, 'JoliCode\\Forecast\\Api\\Model\\AccountAccount' => false, 'JoliCode\\Forecast\\Api\\Model\\AccountAccountColorLabelsItem' => false, 'JoliCode\\Forecast\\Api\\Model\\Assignment' => false, 'JoliCode\\Forecast\\Api\\Model\\Assignments' => false, 'JoliCode\\Forecast\\Api\\Model\\Client' => false, 'JoliCode\\Forecast\\Api\\Model\\Clients' => false, 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHour' => false, 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHours' => false, 'JoliCode\\Forecast\\Api\\Model\\People' => false, 'JoliCode\\Forecast\\Api\\Model\\Person' => false, 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays' => false, 'JoliCode\\Forecast\\Api\\Model\\Placeholder' => false, 'JoliCode\\Forecast\\Api\\Model\\PlaceholderBody' => false, 'JoliCode\\Forecast\\Api\\Model\\PlaceholderBodyPlaceholder' => false, 'JoliCode\\Forecast\\Api\\Model\\Placeholders' => false, 'JoliCode\\Forecast\\Api\\Model\\Project' => false, 'JoliCode\\Forecast\\Api\\Model\\Projects' => false, 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHour' => false, 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHours' => false, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSet' => false, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetBody' => false, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetBodyRepeatedAssignmentSet' => false, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSets' => false, 'JoliCode\\Forecast\\Api\\Model\\Role' => false, 'JoliCode\\Forecast\\Api\\Model\\RoleBody' => false, 'JoliCode\\Forecast\\Api\\Model\\RoleBodyRole' => false, 'JoliCode\\Forecast\\Api\\Model\\Roles' => false, 'JoliCode\\Forecast\\Api\\Model\\Subscription' => false, 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscription' => false, 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts' => false, 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard' => false, 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress' => false, 'JoliCode\\Forecast\\Api\\Model\\User' => false, 'JoliCode\\Forecast\\Api\\Model\\UserCurrentUser' => false, 'JoliCode\\Forecast\\Api\\Model\\UserConnection' => false, 'JoliCode\\Forecast\\Api\\Model\\UserConnections' => false, 'JoliCode\\Forecast\\Api\\Model\\Error' => false, 'JoliCode\\Forecast\\Api\\Model\\AssignmentsIdGetResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\AssignmentsIdPutBody' => false, 'JoliCode\\Forecast\\Api\\Model\\AssignmentsIdPutResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\AssignmentsPostBody' => false, 'JoliCode\\Forecast\\Api\\Model\\AssignmentsPostResponse201' => false, 'JoliCode\\Forecast\\Api\\Model\\ClientsIdGetResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\PeopleIdGetResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\PeopleIdPutBody' => false, 'JoliCode\\Forecast\\Api\\Model\\PeopleIdPutResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\PeoplePostBody' => false, 'JoliCode\\Forecast\\Api\\Model\\PeoplePostResponse201' => false, 'JoliCode\\Forecast\\Api\\Model\\PlaceholdersIdGetResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\PlaceholdersIdPutResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\PlaceholdersPostResponse201' => false, 'JoliCode\\Forecast\\Api\\Model\\ProjectsIdGetResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\RolesIdGetResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\RolesIdPutResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\RolesPostResponse201' => false, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetsIdGetResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetsIdPutResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetsPostResponse201' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false];
        }

        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }

        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;

            return $normalizer;
        }
    }
} else {
    class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use CheckArray;
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use ValidatorTrait;
        protected $normalizers = ['JoliCode\\Forecast\\Api\\Model\\Account' => 'JoliCode\\Forecast\\Api\\Normalizer\\AccountNormalizer', 'JoliCode\\Forecast\\Api\\Model\\AccountAccount' => 'JoliCode\\Forecast\\Api\\Normalizer\\AccountAccountNormalizer', 'JoliCode\\Forecast\\Api\\Model\\AccountAccountColorLabelsItem' => 'JoliCode\\Forecast\\Api\\Normalizer\\AccountAccountColorLabelsItemNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Assignment' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Assignments' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Client' => 'JoliCode\\Forecast\\Api\\Normalizer\\ClientNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Clients' => 'JoliCode\\Forecast\\Api\\Normalizer\\ClientsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHour' => 'JoliCode\\Forecast\\Api\\Normalizer\\FutureScheduledHourNormalizer', 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHours' => 'JoliCode\\Forecast\\Api\\Normalizer\\FutureScheduledHoursNormalizer', 'JoliCode\\Forecast\\Api\\Model\\People' => 'JoliCode\\Forecast\\Api\\Normalizer\\PeopleNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Person' => 'JoliCode\\Forecast\\Api\\Normalizer\\PersonNormalizer', 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays' => 'JoliCode\\Forecast\\Api\\Normalizer\\PersonWorkingDaysNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Placeholder' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholderNormalizer', 'JoliCode\\Forecast\\Api\\Model\\PlaceholderBody' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholderBodyNormalizer', 'JoliCode\\Forecast\\Api\\Model\\PlaceholderBodyPlaceholder' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholderBodyPlaceholderNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Placeholders' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholdersNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Project' => 'JoliCode\\Forecast\\Api\\Normalizer\\ProjectNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Projects' => 'JoliCode\\Forecast\\Api\\Normalizer\\ProjectsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHour' => 'JoliCode\\Forecast\\Api\\Normalizer\\RemainingBudgetedHourNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHours' => 'JoliCode\\Forecast\\Api\\Normalizer\\RemainingBudgetedHoursNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSet' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetBody' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetBodyNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetBodyRepeatedAssignmentSet' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetBodyRepeatedAssignmentSetNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSets' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Role' => 'JoliCode\\Forecast\\Api\\Normalizer\\RoleNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RoleBody' => 'JoliCode\\Forecast\\Api\\Normalizer\\RoleBodyNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RoleBodyRole' => 'JoliCode\\Forecast\\Api\\Normalizer\\RoleBodyRoleNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Roles' => 'JoliCode\\Forecast\\Api\\Normalizer\\RolesNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Subscription' => 'JoliCode\\Forecast\\Api\\Normalizer\\SubscriptionNormalizer', 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscription' => 'JoliCode\\Forecast\\Api\\Normalizer\\SubscriptionSubscriptionNormalizer', 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts' => 'JoliCode\\Forecast\\Api\\Normalizer\\SubscriptionSubscriptionDiscountsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard' => 'JoliCode\\Forecast\\Api\\Normalizer\\SubscriptionSubscriptionCardNormalizer', 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress' => 'JoliCode\\Forecast\\Api\\Normalizer\\SubscriptionSubscriptionAddressNormalizer', 'JoliCode\\Forecast\\Api\\Model\\User' => 'JoliCode\\Forecast\\Api\\Normalizer\\UserNormalizer', 'JoliCode\\Forecast\\Api\\Model\\UserCurrentUser' => 'JoliCode\\Forecast\\Api\\Normalizer\\UserCurrentUserNormalizer', 'JoliCode\\Forecast\\Api\\Model\\UserConnection' => 'JoliCode\\Forecast\\Api\\Normalizer\\UserConnectionNormalizer', 'JoliCode\\Forecast\\Api\\Model\\UserConnections' => 'JoliCode\\Forecast\\Api\\Normalizer\\UserConnectionsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Error' => 'JoliCode\\Forecast\\Api\\Normalizer\\ErrorNormalizer', 'JoliCode\\Forecast\\Api\\Model\\AssignmentsIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\AssignmentsIdPutBody' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsIdPutBodyNormalizer', 'JoliCode\\Forecast\\Api\\Model\\AssignmentsIdPutResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsIdPutResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\AssignmentsPostBody' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsPostBodyNormalizer', 'JoliCode\\Forecast\\Api\\Model\\AssignmentsPostResponse201' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsPostResponse201Normalizer', 'JoliCode\\Forecast\\Api\\Model\\ClientsIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\ClientsIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\PeopleIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\PeopleIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\PeopleIdPutBody' => 'JoliCode\\Forecast\\Api\\Normalizer\\PeopleIdPutBodyNormalizer', 'JoliCode\\Forecast\\Api\\Model\\PeopleIdPutResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\PeopleIdPutResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\PeoplePostBody' => 'JoliCode\\Forecast\\Api\\Normalizer\\PeoplePostBodyNormalizer', 'JoliCode\\Forecast\\Api\\Model\\PeoplePostResponse201' => 'JoliCode\\Forecast\\Api\\Normalizer\\PeoplePostResponse201Normalizer', 'JoliCode\\Forecast\\Api\\Model\\PlaceholdersIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholdersIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\PlaceholdersIdPutResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholdersIdPutResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\PlaceholdersPostResponse201' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholdersPostResponse201Normalizer', 'JoliCode\\Forecast\\Api\\Model\\ProjectsIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\ProjectsIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\RolesIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\RolesIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\RolesIdPutResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\RolesIdPutResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\RolesPostResponse201' => 'JoliCode\\Forecast\\Api\\Normalizer\\RolesPostResponse201Normalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetsIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetsIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetsIdPutResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetsIdPutResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetsPostResponse201' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetsPostResponse201Normalizer', '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => '\\JoliCode\\Forecast\\Api\\Runtime\\Normalizer\\ReferenceNormalizer'];
        protected $normalizersCache = [];

        public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
        {
            return \array_key_exists($type, $this->normalizers);
        }

        public function supportsNormalization($data, $format = null, array $context = []): bool
        {
            return \is_object($data) && \array_key_exists($data::class, $this->normalizers);
        }

        /**
         * @param mixed|null $format
         *
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $normalizerClass = $this->normalizers[$object::class];
            $normalizer = $this->getNormalizer($normalizerClass);

            return $normalizer->normalize($object, $format, $context);
        }

        /**
         * @param mixed|null $format
         */
        public function denormalize($data, $type, $format = null, array $context = [])
        {
            $denormalizerClass = $this->normalizers[$type];
            $denormalizer = $this->getNormalizer($denormalizerClass);

            return $denormalizer->denormalize($data, $type, $format, $context);
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return ['JoliCode\\Forecast\\Api\\Model\\Account' => false, 'JoliCode\\Forecast\\Api\\Model\\AccountAccount' => false, 'JoliCode\\Forecast\\Api\\Model\\AccountAccountColorLabelsItem' => false, 'JoliCode\\Forecast\\Api\\Model\\Assignment' => false, 'JoliCode\\Forecast\\Api\\Model\\Assignments' => false, 'JoliCode\\Forecast\\Api\\Model\\Client' => false, 'JoliCode\\Forecast\\Api\\Model\\Clients' => false, 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHour' => false, 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHours' => false, 'JoliCode\\Forecast\\Api\\Model\\People' => false, 'JoliCode\\Forecast\\Api\\Model\\Person' => false, 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays' => false, 'JoliCode\\Forecast\\Api\\Model\\Placeholder' => false, 'JoliCode\\Forecast\\Api\\Model\\PlaceholderBody' => false, 'JoliCode\\Forecast\\Api\\Model\\PlaceholderBodyPlaceholder' => false, 'JoliCode\\Forecast\\Api\\Model\\Placeholders' => false, 'JoliCode\\Forecast\\Api\\Model\\Project' => false, 'JoliCode\\Forecast\\Api\\Model\\Projects' => false, 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHour' => false, 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHours' => false, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSet' => false, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetBody' => false, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetBodyRepeatedAssignmentSet' => false, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSets' => false, 'JoliCode\\Forecast\\Api\\Model\\Role' => false, 'JoliCode\\Forecast\\Api\\Model\\RoleBody' => false, 'JoliCode\\Forecast\\Api\\Model\\RoleBodyRole' => false, 'JoliCode\\Forecast\\Api\\Model\\Roles' => false, 'JoliCode\\Forecast\\Api\\Model\\Subscription' => false, 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscription' => false, 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts' => false, 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard' => false, 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress' => false, 'JoliCode\\Forecast\\Api\\Model\\User' => false, 'JoliCode\\Forecast\\Api\\Model\\UserCurrentUser' => false, 'JoliCode\\Forecast\\Api\\Model\\UserConnection' => false, 'JoliCode\\Forecast\\Api\\Model\\UserConnections' => false, 'JoliCode\\Forecast\\Api\\Model\\Error' => false, 'JoliCode\\Forecast\\Api\\Model\\AssignmentsIdGetResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\AssignmentsIdPutBody' => false, 'JoliCode\\Forecast\\Api\\Model\\AssignmentsIdPutResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\AssignmentsPostBody' => false, 'JoliCode\\Forecast\\Api\\Model\\AssignmentsPostResponse201' => false, 'JoliCode\\Forecast\\Api\\Model\\ClientsIdGetResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\PeopleIdGetResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\PeopleIdPutBody' => false, 'JoliCode\\Forecast\\Api\\Model\\PeopleIdPutResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\PeoplePostBody' => false, 'JoliCode\\Forecast\\Api\\Model\\PeoplePostResponse201' => false, 'JoliCode\\Forecast\\Api\\Model\\PlaceholdersIdGetResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\PlaceholdersIdPutResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\PlaceholdersPostResponse201' => false, 'JoliCode\\Forecast\\Api\\Model\\ProjectsIdGetResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\RolesIdGetResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\RolesIdPutResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\RolesPostResponse201' => false, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetsIdGetResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetsIdPutResponse200' => false, 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetsPostResponse201' => false, '\\Jane\\Component\\JsonSchemaRuntime\\Reference' => false];
        }

        private function getNormalizer(string $normalizerClass)
        {
            return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
        }

        private function initNormalizer(string $normalizerClass)
        {
            $normalizer = new $normalizerClass();
            $normalizer->setNormalizer($this->normalizer);
            $normalizer->setDenormalizer($this->denormalizer);
            $this->normalizersCache[$normalizerClass] = $normalizer;

            return $normalizer;
        }
    }
}
