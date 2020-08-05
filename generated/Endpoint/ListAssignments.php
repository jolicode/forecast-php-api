<?php

namespace JoliCode\Forecast\Api\Endpoint;

class ListAssignments extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Returns a list of assignments.
     *
     * @param array $queryParameters {
     *     @var int $project_id Only return assignments for this project
     *     @var int $person_id Only return assignments for this person
     *     @var int $repeated_assignment_set Only return assignments for this repeated assignment set
     *     @var string $start_date Only return assignments after this date
     *     @var string $end_date Only return assignments before this date
     *     @var string $state Only return assignments before this date
     * }
     */
    public function __construct(array $queryParameters = array())
    {
        $this->queryParameters = $queryParameters;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return '/assignments';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    protected function getQueryOptionsResolver() : \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(array('project_id', 'person_id', 'repeated_assignment_set', 'start_date', 'end_date', 'state'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('project_id', array('int'));
        $optionsResolver->setAllowedTypes('person_id', array('int'));
        $optionsResolver->setAllowedTypes('repeated_assignment_set', array('int'));
        $optionsResolver->setAllowedTypes('start_date', array('string'));
        $optionsResolver->setAllowedTypes('end_date', array('string'));
        $optionsResolver->setAllowedTypes('state', array('string'));
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Forecast\Api\Model\Assignments|\JoliCode\Forecast\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'JoliCode\\Forecast\\Api\\Model\\Assignments', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'JoliCode\\Forecast\\Api\\Model\\Error', 'json');
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array('BearerAuth', 'AccountAuth');
    }
}