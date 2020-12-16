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

class CreateAssignment extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Endpoint
{
    use \Jane\OpenApiRuntime\Client\EndpointTrait;

    /**
     * Creates an assignment.
     */
    public function __construct(\JoliCode\Forecast\Api\Model\AssignmentsPostBody $requestBody)
    {
        $this->body = $requestBody;
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function getUri(): string
    {
        return '/assignments';
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \JoliCode\Forecast\Api\Model\AssignmentsPostBody) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }

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

    /**
     * {@inheritdoc}
     *
     * @return \JoliCode\Forecast\Api\Model\AssignmentsPostResponse200|\JoliCode\Forecast\Api\Model\Error|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (201 === $status && false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'JoliCode\\Forecast\\Api\\Model\\AssignmentsPostResponse200', 'json');
        }
        if (false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'JoliCode\\Forecast\\Api\\Model\\Error', 'json');
        }
    }
}
