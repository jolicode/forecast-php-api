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

class CountScheduledHours extends \JoliCode\Forecast\Api\Runtime\Client\BaseEndpoint implements \JoliCode\Forecast\Api\Runtime\Client\Endpoint
{
    use \JoliCode\Forecast\Api\Runtime\Client\EndpointTrait;
    protected $date;

    /**
     * Returns the number of scheduled hours.
     *
     * @param string $date The date after which to lookup
     */
    public function __construct(string $date)
    {
        $this->date = $date;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{date}'], [$this->date], '/aggregate/future_scheduled_hours/{date}');
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

    /**
     * @return \JoliCode\Forecast\Api\Model\FutureScheduledHours|\JoliCode\Forecast\Api\Model\Error|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if ((null === $contentType) === false && (200 === $status && false !== mb_strpos($contentType, 'application/json'))) {
            return $serializer->deserialize($body, 'JoliCode\\Forecast\\Api\\Model\\FutureScheduledHours', 'json');
        }
        if (false !== mb_strpos($contentType, 'application/json')) {
            return $serializer->deserialize($body, 'JoliCode\\Forecast\\Api\\Model\\Error', 'json');
        }
    }
}
