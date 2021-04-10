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
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    protected $normalizers = ['JoliCode\\Forecast\\Api\\Model\\Account' => 'JoliCode\\Forecast\\Api\\Normalizer\\AccountNormalizer', 'JoliCode\\Forecast\\Api\\Model\\AccountAccount' => 'JoliCode\\Forecast\\Api\\Normalizer\\AccountAccountNormalizer', 'JoliCode\\Forecast\\Api\\Model\\AccountAccountColorLabelsItem' => 'JoliCode\\Forecast\\Api\\Normalizer\\AccountAccountColorLabelsItemNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Assignment' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Assignments' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Client' => 'JoliCode\\Forecast\\Api\\Normalizer\\ClientNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Clients' => 'JoliCode\\Forecast\\Api\\Normalizer\\ClientsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHour' => 'JoliCode\\Forecast\\Api\\Normalizer\\FutureScheduledHourNormalizer', 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHours' => 'JoliCode\\Forecast\\Api\\Normalizer\\FutureScheduledHoursNormalizer', 'JoliCode\\Forecast\\Api\\Model\\People' => 'JoliCode\\Forecast\\Api\\Normalizer\\PeopleNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Person' => 'JoliCode\\Forecast\\Api\\Normalizer\\PersonNormalizer', 'JoliCode\\Forecast\\Api\\Model\\PersonWorkingDays' => 'JoliCode\\Forecast\\Api\\Normalizer\\PersonWorkingDaysNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Placeholder' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholderNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Placeholders' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholdersNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Project' => 'JoliCode\\Forecast\\Api\\Normalizer\\ProjectNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Projects' => 'JoliCode\\Forecast\\Api\\Normalizer\\ProjectsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHour' => 'JoliCode\\Forecast\\Api\\Normalizer\\RemainingBudgetedHourNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RemainingBudgetedHours' => 'JoliCode\\Forecast\\Api\\Normalizer\\RemainingBudgetedHoursNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSet' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetNormalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSets' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Role' => 'JoliCode\\Forecast\\Api\\Normalizer\\RoleNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Roles' => 'JoliCode\\Forecast\\Api\\Normalizer\\RolesNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Subscription' => 'JoliCode\\Forecast\\Api\\Normalizer\\SubscriptionNormalizer', 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscription' => 'JoliCode\\Forecast\\Api\\Normalizer\\SubscriptionSubscriptionNormalizer', 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionDiscounts' => 'JoliCode\\Forecast\\Api\\Normalizer\\SubscriptionSubscriptionDiscountsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionCard' => 'JoliCode\\Forecast\\Api\\Normalizer\\SubscriptionSubscriptionCardNormalizer', 'JoliCode\\Forecast\\Api\\Model\\SubscriptionSubscriptionAddress' => 'JoliCode\\Forecast\\Api\\Normalizer\\SubscriptionSubscriptionAddressNormalizer', 'JoliCode\\Forecast\\Api\\Model\\User' => 'JoliCode\\Forecast\\Api\\Normalizer\\UserNormalizer', 'JoliCode\\Forecast\\Api\\Model\\UserCurrentUser' => 'JoliCode\\Forecast\\Api\\Normalizer\\UserCurrentUserNormalizer', 'JoliCode\\Forecast\\Api\\Model\\UserConnection' => 'JoliCode\\Forecast\\Api\\Normalizer\\UserConnectionNormalizer', 'JoliCode\\Forecast\\Api\\Model\\UserConnections' => 'JoliCode\\Forecast\\Api\\Normalizer\\UserConnectionsNormalizer', 'JoliCode\\Forecast\\Api\\Model\\Error' => 'JoliCode\\Forecast\\Api\\Normalizer\\ErrorNormalizer', 'JoliCode\\Forecast\\Api\\Model\\AssignmentsIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\AssignmentsPostBody' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsPostBodyNormalizer', 'JoliCode\\Forecast\\Api\\Model\\AssignmentsPostResponse201' => 'JoliCode\\Forecast\\Api\\Normalizer\\AssignmentsPostResponse201Normalizer', 'JoliCode\\Forecast\\Api\\Model\\ClientsIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\ClientsIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\PeopleIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\PeopleIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\PlaceholdersIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\PlaceholdersIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\ProjectsIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\ProjectsIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\RolesIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\RolesIdGetResponse200Normalizer', 'JoliCode\\Forecast\\Api\\Model\\RepeatedAssignmentSetsIdGetResponse200' => 'JoliCode\\Forecast\\Api\\Normalizer\\RepeatedAssignmentSetsIdGetResponse200Normalizer', '\\Jane\\JsonSchemaRuntime\\Reference' => '\\Jane\\JsonSchemaRuntime\\Normalizer\\ReferenceNormalizer'];
    protected $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null)
    {
        return \array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null)
    {
        return \is_object($data) && \array_key_exists(\get_class($data), $this->normalizers);
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[\get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($object, $format, $context);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $class, $format, $context);
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
