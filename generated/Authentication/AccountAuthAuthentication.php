<?php

namespace JoliCode\Forecast\Api\Authentication;

class AccountAuthAuthentication implements \Jane\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function authentication(\Psr\Http\Message\RequestInterface $request) : \Psr\Http\Message\RequestInterface
    {
        $request = $request->withHeader('Forecast-Account-Id', $this->{'apiKey'});
        return $request;
    }
    public function getScope() : string
    {
        return 'AccountAuth';
    }
}