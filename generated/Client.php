<?php

/*
 * This file is part of JoliCode's Forecast PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Forecast\Api;

class Client extends \JoliCode\Forecast\Api\Runtime\Client\Client
{
    /**
     * Returns an account details.
     *
     * @param int    $id    Id of the account
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Account|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function getAccount(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\GetAccount($id), $fetch);
    }

    /**
     * Returns the number of scheduled hours.
     *
     * @param string $date  The date after which to lookup
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\FutureScheduledHours|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function countScheduledHours(string $date, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\CountScheduledHours($date), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\RemainingBudgetedHours|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function getRemainingBudgetedHours(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\GetRemainingBudgetedHours(), $fetch);
    }

    /**
     * Delete an Assignment.
     *
     * @param int    $id    Id of the Assignment
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteAssignment(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\DeleteAssignment($id), $fetch);
    }

    /**
     * Returns an Assignment.
     *
     * @param int    $id    Id of the Assignment
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\AssignmentsIdGetResponse200|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function getAssignment(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\GetAssignment($id), $fetch);
    }

    /**
     * Edits an assignment.
     *
     * @param int                                                    $id          Id of the Assignment
     * @param \JoliCode\Forecast\Api\Model\AssignmentsIdPutBody|null $requestBody
     * @param string                                                 $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\AssignmentsIdPutResponse200|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function editAssignment(int $id, ?Model\AssignmentsIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\EditAssignment($id, $requestBody), $fetch);
    }

    /**
     * Returns a list of assignments.
     *
     * @param array $queryParameters {
     *
     *     @var int $project_id Only return assignments for this project
     *     @var int $person_id Only return assignments for this person
     *     @var int $repeated_assignment_set Only return assignments for this repeated assignment set
     *     @var string $start_date Only return assignments after this date
     *     @var string $end_date Only return assignments before this date
     *     @var string $state Pass "active" to only return assignments for currently active users
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Assignments|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listAssignments(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\ListAssignments($queryParameters), $fetch);
    }

    /**
     * Creates an assignment.
     *
     * @param \JoliCode\Forecast\Api\Model\AssignmentsPostBody|null $requestBody
     * @param string                                                $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\AssignmentsPostResponse201|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createAssignment(?Model\AssignmentsPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\CreateAssignment($requestBody), $fetch);
    }

    /**
     * Returns a Client.
     *
     * @param int    $id    Id of the Client
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\ClientsIdGetResponse200|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function getClient(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\GetClient($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Clients|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listClients(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\ListClients(), $fetch);
    }

    /**
     * Delete a Person.
     *
     * @param int    $id    Id of the Person
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deletePerson(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\DeletePerson($id), $fetch);
    }

    /**
     * Returns a Person.
     *
     * @param int    $id    Id of the Person
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\PeopleIdGetResponse200|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function getPerson(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\GetPerson($id), $fetch);
    }

    /**
     * Edits a Person.
     *
     * @param int                                               $id          Id of the Person
     * @param \JoliCode\Forecast\Api\Model\PeopleIdPutBody|null $requestBody
     * @param string                                            $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\PeopleIdPutResponse200|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function editPerson(int $id, ?Model\PeopleIdPutBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\EditPerson($id, $requestBody), $fetch);
    }

    /**
     * Returns a list of people.
     *
     * @param array $queryParameters {
     *
     *     @var string $state Pass "active" to only return active users. Any other value also returns archived users.
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\People|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listPeople(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\ListPeople($queryParameters), $fetch);
    }

    /**
     * Create a Person.
     *
     * @param \JoliCode\Forecast\Api\Model\PeoplePostBody|null $requestBody
     * @param string                                           $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\PeoplePostResponse201|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createPerson(?Model\PeoplePostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\CreatePerson($requestBody), $fetch);
    }

    /**
     * Delete a Placeholder.
     *
     * @param int    $id    Id of the Placeholder
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deletePlaceholder(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\DeletePlaceholder($id), $fetch);
    }

    /**
     * Returns a Placeholder.
     *
     * @param int    $id    Id of the Placeholder
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\PlaceholdersIdGetResponse200|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function getPlaceholder(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\GetPlaceholder($id), $fetch);
    }

    /**
     * Edit a Placeholder.
     *
     * @param int                                               $id          Id of the Placeholder
     * @param \JoliCode\Forecast\Api\Model\PlaceholderBody|null $requestBody
     * @param string                                            $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\PlaceholdersIdPutResponse200|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function editPlaceholder(int $id, ?Model\PlaceholderBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\EditPlaceholder($id, $requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Placeholders|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listPlaceholders(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\ListPlaceholders(), $fetch);
    }

    /**
     * Create a Placeholder.
     *
     * @param \JoliCode\Forecast\Api\Model\PlaceholderBody|null $requestBody
     * @param string                                            $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\PlaceholdersPostResponse201|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createPlaceholder(?Model\PlaceholderBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\CreatePlaceholder($requestBody), $fetch);
    }

    /**
     * Returns a Project.
     *
     * @param int    $id    Id of the Project
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\ProjectsIdGetResponse200|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function getProject(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\GetProject($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Projects|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listProjects(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\ListProjects(), $fetch);
    }

    /**
     * Delete a Role.
     *
     * @param int    $id    Id of the Role
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteRole(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\DeleteRole($id), $fetch);
    }

    /**
     * Returns a Role.
     *
     * @param int    $id    Id of the Role
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\RolesIdGetResponse200|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function getRole(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\GetRole($id), $fetch);
    }

    /**
     * Edit a Role.
     *
     * @param int                                        $id          Id of the Role
     * @param \JoliCode\Forecast\Api\Model\RoleBody|null $requestBody
     * @param string                                     $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\RolesIdPutResponse200|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function editRole(int $id, ?Model\RoleBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\EditRole($id, $requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Roles|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listRoles(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\ListRoles(), $fetch);
    }

    /**
     * Creates a Role.
     *
     * @param \JoliCode\Forecast\Api\Model\RoleBody|null $requestBody
     * @param string                                     $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\RolesPostResponse201|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createRole(?Model\RoleBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\CreateRole($requestBody), $fetch);
    }

    /**
     * Delete a Repeated Assignment Set.
     *
     * @param int    $id    Id of the Repeated Assignment Set
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteRepeatedAssignmentSet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\DeleteRepeatedAssignmentSet($id), $fetch);
    }

    /**
     * Returns a Repeated Assignment Set.
     *
     * @param int    $id    Id of the RepeatedAssignmentSet
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\RepeatedAssignmentSetsIdGetResponse200|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function getRepeatedAssignmentSet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\GetRepeatedAssignmentSet($id), $fetch);
    }

    /**
     * Modifies a Repeated Assignment Set.
     *
     * @param int                                                         $id          Id of the RepeatedAssignmentSet
     * @param \JoliCode\Forecast\Api\Model\RepeatedAssignmentSetBody|null $requestBody
     * @param string                                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\RepeatedAssignmentSetsIdPutResponse200|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function editRepeatedAssignmentSet(int $id, ?Model\RepeatedAssignmentSetBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\EditRepeatedAssignmentSet($id, $requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\RepeatedAssignmentSets|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listRepeatedAssignmentSets(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\ListRepeatedAssignmentSets(), $fetch);
    }

    /**
     * Creates a Repeated Assignment Set.
     *
     * @param \JoliCode\Forecast\Api\Model\RepeatedAssignmentSetBody|null $requestBody
     * @param string                                                      $fetch       Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\RepeatedAssignmentSetsPostResponse201|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createRepeatedAssignmentSet(?Model\RepeatedAssignmentSetBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\CreateRepeatedAssignmentSet($requestBody), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\User|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function whoAmI(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \JoliCode\Forecast\Api\Endpoint\WhoAmI(), $fetch);
    }

    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.forecastapp.com/');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (\count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \JoliCode\Forecast\Api\Normalizer\JaneObjectNormalizer()];
        if (\count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
