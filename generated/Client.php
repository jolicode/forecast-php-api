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

class Client extends \Jane\OpenApiRuntime\Client\Psr18Client
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
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\GetAccount($id), $fetch);
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
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\CountScheduledHours($date), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\RemainingBudgetedHours|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function getRemainingBudgetedHours(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\GetRemainingBudgetedHours(), $fetch);
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
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\GetAssignment($id), $fetch);
    }

    /**
     * Returns a list of assignments.
     *
     * @param array $queryParameters {
     *
     *     @var string $start_date Only return assignments after this date
     *     @var string $end_date Only return assignments before this date
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Assignments|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listAssignments(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\ListAssignments($queryParameters), $fetch);
    }

    /**
     * Creates an assignment.
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\AssignmentsPostResponse200|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function createAssignment(\JoliCode\Forecast\Api\Model\AssignmentsPostBody $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\CreateAssignment($requestBody), $fetch);
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
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\GetClient($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Clients|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listClients(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\ListClients(), $fetch);
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
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\GetPerson($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\People|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listPeople(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\ListPeople(), $fetch);
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
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\GetPlaceholder($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Placeholders|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listPlaceholders(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\ListPlaceholders(), $fetch);
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
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\GetProject($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Projects|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listProjects(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\ListProjects(), $fetch);
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
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\GetRole($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\Roles|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listRoles(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\ListRoles(), $fetch);
    }

    /**
     * Returns a RepeatedAssignmentSet.
     *
     * @param int    $id    Id of the RepeatedAssignmentSet
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\RepeatedAssignmentSetsIdGetResponse200|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function getRepeatedAssignmentSet(int $id, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\GetRepeatedAssignmentSet($id), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\RepeatedAssignmentSets|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function listRepeatedAssignmentSets(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\ListRepeatedAssignmentSets(), $fetch);
    }

    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \JoliCode\Forecast\Api\Model\User|\JoliCode\Forecast\Api\Model\Error|\Psr\Http\Message\ResponseInterface|null
     */
    public function whoAmI(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \JoliCode\Forecast\Api\Endpoint\WhoAmI(), $fetch);
    }

    public static function create($httpClient = null)
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://api.forecastapp.com/');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer(\JoliCode\Forecast\Api\Normalizer\NormalizerFactory::create(), [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
