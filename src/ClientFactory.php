<?php

/*
 * This file is part of JoliCode's Forecast PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JoliCode\Forecast;

use Http\Client\Common\Plugin\HeaderAppendPlugin;
use Jane\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;
use JoliCode\Forecast\Api\Authentication\AccountAuthAuthentication;
use JoliCode\Forecast\Api\Authentication\BearerAuthAuthentication;
use Psr\Http\Client\ClientInterface;

class ClientFactory
{
    public static function create(string $token, string $accountId, ClientInterface $httpClient = null): Client
    {
        return Client::create($httpClient, [
            new HeaderAppendPlugin([
                'User-Agent' => 'Forecast API Example',
            ]),
            new AuthenticationRegistry([
                new AccountAuthAuthentication($accountId),
                new BearerAuthAuthentication('Bearer '.$token),
            ]),
        ]);
    }
}
