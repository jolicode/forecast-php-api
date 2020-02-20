<?php

/*
 * This file is part of JoliCode's Forecast PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Forecast\Api\Authentication;

class AccountAuthAuthentication implements \Jane\OpenApiRuntime\Client\Authentication
{
    private $apiKey;

    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }

    public function getPlugin(): \Http\Client\Common\Plugin
    {
        return new \Http\Client\Common\Plugin\AuthenticationPlugin(new class($this->{'apiKey'}) implements \Http\Message\Authentication {
            private $apiKey;

            public function __construct(string $apiKey)
            {
                $this->{'apiKey'} = $apiKey;
            }

            public function authenticate(\Psr\Http\Message\RequestInterface $request)
            {
                return $request->withHeader('Forecast-Account-Id', $this->{'apiKey'});
            }
        });
    }
}
