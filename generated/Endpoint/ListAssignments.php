<?php

/*
 * This file is part of JoliCode's Forecast PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Forecast\Api\Endpoint;

class ListAssignments extends \JoliCode\Forecast\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Forecast\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Forecast\Api\Runtime\Client\EndpointTrait;

    /**
     * Returns a list of assignments.
     *
     * @param array $queryParameters {
     *
     * @var int    $project_id Only return assignments for this project
     * @var int    $person_id Only return assignments for this person
     * @var int    $repeated_assignment_set Only return assignments for this repeated assignment set
     * @var string $start_date Only return assignments after this date
     * @var string $end_date Only return assignments before this date
     * @var string $state Pass "active" to only return assignments for currently active users
     *             }
     */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return '/assignments';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth', 'AccountAuth'];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['project_id', 'person_id', 'repeated_assignment_set', 'start_date', 'end_date', 'state']);
        $optionsResolver->setRequired(['start_date', 'end_date']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('project_id', ['int']);
        $optionsResolver->addAllowedTypes('person_id', ['int']);
        $optionsResolver->addAllowedTypes('repeated_assignment_set', ['int']);
        $optionsResolver->addAllowedTypes('start_date', ['string']);
        $optionsResolver->addAllowedTypes('end_date', ['string']);
        $optionsResolver->addAllowedTypes('state', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \JoliCode\Forecast\Api\Model\Assignments|\JoliCode\Forecast\Api\Model\Error|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'JoliCode\\Forecast\\Api\\Model\\Assignments', 'json');
        }
        if (false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'JoliCode\\Forecast\\Api\\Model\\Error', 'json');
        }
    }
}
