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

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new \Jane\JsonSchemaRuntime\Normalizer\ReferenceNormalizer();
        $normalizers[] = new AccountNormalizer();
        $normalizers[] = new AccountAccountNormalizer();
        $normalizers[] = new AccountAccountColorLabelsItemNormalizer();
        $normalizers[] = new AssignmentNormalizer();
        $normalizers[] = new AssignmentsNormalizer();
        $normalizers[] = new ClientNormalizer();
        $normalizers[] = new ClientsNormalizer();
        $normalizers[] = new FutureScheduledHourNormalizer();
        $normalizers[] = new FutureScheduledHoursNormalizer();
        $normalizers[] = new PeopleNormalizer();
        $normalizers[] = new PersonNormalizer();
        $normalizers[] = new PersonWorkingDaysNormalizer();
        $normalizers[] = new PlaceholderNormalizer();
        $normalizers[] = new PlaceholdersNormalizer();
        $normalizers[] = new ProjectNormalizer();
        $normalizers[] = new ProjectsNormalizer();
        $normalizers[] = new RemainingBudgetedHourNormalizer();
        $normalizers[] = new RemainingBudgetedHoursNormalizer();
        $normalizers[] = new RepeatedAssignmentSetNormalizer();
        $normalizers[] = new RepeatedAssignmentSetsNormalizer();
        $normalizers[] = new RoleNormalizer();
        $normalizers[] = new RolesNormalizer();
        $normalizers[] = new SubscriptionNormalizer();
        $normalizers[] = new SubscriptionSubscriptionNormalizer();
        $normalizers[] = new SubscriptionSubscriptionDiscountsNormalizer();
        $normalizers[] = new SubscriptionSubscriptionCardNormalizer();
        $normalizers[] = new SubscriptionSubscriptionAddressNormalizer();
        $normalizers[] = new UserNormalizer();
        $normalizers[] = new UserCurrentUserNormalizer();
        $normalizers[] = new UserConnectionNormalizer();
        $normalizers[] = new UserConnectionsNormalizer();
        $normalizers[] = new ErrorNormalizer();
        $normalizers[] = new AssignmentsIdGetResponse200Normalizer();
        $normalizers[] = new AssignmentsPostBodyNormalizer();
        $normalizers[] = new AssignmentsPostResponse200Normalizer();
        $normalizers[] = new ClientsIdGetResponse200Normalizer();
        $normalizers[] = new PeopleIdGetResponse200Normalizer();
        $normalizers[] = new PlaceholdersIdGetResponse200Normalizer();
        $normalizers[] = new ProjectsIdGetResponse200Normalizer();
        $normalizers[] = new RolesIdGetResponse200Normalizer();
        $normalizers[] = new RepeatedAssignmentSetsIdGetResponse200Normalizer();

        return $normalizers;
    }
}
