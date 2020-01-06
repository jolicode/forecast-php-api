<?php

namespace JoliCode\Forecast\Api\Endpoint;

class ListAssignments extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    /**
     * Returns a list of assignments.
     *
     * @param array $queryParameters {
     *     @var string $start_date Only return assignments after this date
     *     @var string $end_date Only return assignments before this date
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
        $optionsResolver->setDefined(array('start_date', 'end_date'));
        $optionsResolver->setRequired(array());
        $optionsResolver->setDefaults(array());
        $optionsResolver->setAllowedTypes('start_date', array('string'));
        $optionsResolver->setAllowedTypes('end_date', array('string'));
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
}