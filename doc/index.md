# Forecast PHP API documentation

## Hunder the hood

This library mostly contains automatically generated code from a
[Forecast OpenAPI specification](../Resources/forecast-openapi.yaml). As
Forecast's API is not official nor documented, some API options might be
missing or incomplete.

The library provides three kinds of PHP classes:

 * [endpoints](generated/Endpoint/) represent requests to API methods
 * [models](generated/Model) represent data from the API
 * [normalizers](generated/Normalizer) transform JSON from the API to PHP models

If you use the provided [Client](generated/Client.php), you don't have to
understand how the library works internally. Calling one of its method will
make the HTTP request to the API and return the corresponding PHP object.

## Using the client

Use the `ClientFactory` to generate a `Client` configured with your token:

```php
<?php

use JoliCode\Forecast\Api\Client;
use JoliCode\Forecast\ClientFactory;

/** @var Client $client */
$client = ClientFactory::create(
  $accessToken,
  $forecastAccountId
);
```

The client contains all the methods to communicate with Forecast'API. Checkout its
PHP doc to know which option you can provide to each method:

```php
<?php
//...

$assignments = $client->listAssignments([
  'start_date' => '2019-01-01',
  'end_date' => '2019-01-31',
])->getAssignments()
```

## Bypassing the incomplete API specification

Forecast's API is not official nor documented hence some API options might be
missing or incomplete.

If you miss an option in a method, please open a pull request to add it to
the [Forecast OpenAPI specification](Resources/forecast-openapi.yaml) that
we maintain, then [regenerate](updating-sdk.md) and release a new version of
the library.
