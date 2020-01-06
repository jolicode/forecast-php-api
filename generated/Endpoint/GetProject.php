<?php

namespace JoliCode\Forecast\Api\Endpoint;

class GetProject extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    protected $id;
    /**
     * Returns a Project.
     *
     * @param int $id Id of the Project
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{id}'), array($this->id), '/projects/{id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\JoliCode\Forecast\Api\Model\ProjectsIdGetResponse200|\JoliCode\Forecast\Api\Model\Error
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'JoliCode\\Forecast\\Api\\Model\\ProjectsIdGetResponse200', 'json');
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'JoliCode\\Forecast\\Api\\Model\\Error', 'json');
        }
    }
}