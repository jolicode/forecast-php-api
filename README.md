# [DEPRECATED] A PHP Client for Harvest Forecast API

> [!CAUTION]
> **This project is deprecated and no longer maintained.** Version 7.1.0 is the
> final release: there will be no further updates, bug fixes or security fixes,
> and this repository is archived. We no longer use Harvest nor Forecast and no
> longer recommend using this library. [Read why](#why-this-project-is-no-longer-maintained).

## Why this project is no longer maintained

[Forecast](https://www.getharvest.com/forecast) is a product built by Harvest.
JoliCode had been a Harvest customer for 14 years. We created this SDK in 2019
and maintained it ever since, as an open source contribution to the PHP
ecosystem.

In early August 2026, we were informed that the price of our subscription
would be **multiplied by 12**, with only a few weeks' notice, in the middle of
the summer, and without any meaningful change in the features provided.

We consider that a vendor changing its pricing in such proportions, with such
short notice, is not a partner we can rely on in the long run. We have
therefore moved away from Harvest and Forecast entirely, and have no reason
left to maintain this library. Our
[Harvest PHP client](https://github.com/jolicode/harvest-php-api) is deprecated
for the same reasons.

What this means:

 * no more releases: the SDK will not follow future changes of the Forecast API;
 * no support: issues and pull requests are closed, the repository is read-only;
 * the package is flagged as `abandoned` on Packagist: Composer warns on
   install, and `composer audit` reports it.

If you are a Harvest or Forecast customer, we encourage you to evaluate
alternatives. If you still need this library, it remains available under the
MIT license: feel free to fork it.

## Legacy documentation

The following documentation is kept for reference only.

[Harvest Forecast](https://www.getharvest.com/forecast) is a planification tool built by Harvest.

This PHP SDK was generated automatically with [JanePHP](https://github.com/janephp/janephp) using a [Forecast OpenAPI specification](Resources/forecast-openapi.yaml). It means that:

 * the code in the `generated` dorectory is not hand-written but *generated*;
 * if the API changes and you need to fix an API call in a fork, edit the OpenAPI specification file, then [regenerate the SDK](doc/updating-sdk.md).

### Installation

This library is built atop of [PSR-7](https://www.php-fig.org/psr/psr-7/) and
[PSR-18](https://www.php-fig.org/psr/psr-18/). So you will need to install some
implementations for those interfaces.

If no PSR-18 client or PSR-7 message factory is available yet in your project
or you don't care which one to use, just install some default:

```bash
composer require symfony/http-client nyholm/psr7
```

You can now install the Forecast client:

```bash
composer require jolicode/forecast-php-api
```

### Usage

First, you need to retrieve an access token. Please checkout Harvest's documentation about the [OAuth2 Authorization Flow](https://help.getharvest.com/api-v2/authentication-api/authentication/authentication/#for-server-side-applications).

Then, use the factory that is provided to create the client:

```php
// $client contains all the methods to interact with the API
$client = JoliCode\Forecast\ClientFactory::create(
  $accessToken,
  $forecastAccountId
);

$clients = $client->listClients()->getClients();
$assignments = $client->listAssignments([
  'start_date' => '2019-01-01',
  'end_date' => '2019-01-31',
])->getAssignments();

dump($clients);
dump($assignments);
```

In the above example, the `$client` variable is an instance of the [Client](./generated/Client.php) class, which you can browse through to learn more about the API features.

Want more example or documentation? See the [documentation](doc/index.md).

### Available operations

Instead of the `listClients()` method above, you can use all of these methods:

 * Account:
   * `getAccount()`
 * Aggregations:
   * `countScheduledHours()`
   * `getRemainingBudgetedHours()`
 * Assignments:
   * `createAssignment()`
   * `deleteAssignment()`
   * `editAssignment()`
   * `getAssignment()`
   * `listAssignments()`
 * Clients:
   * `getClient()`
   * `listClients()`
 * Persons:
   * `createPerson()`
   * `deletePerson()`
   * `editPerson()`
   * `getPerson()`
   * `listPeople()`
 * Placeholders:
   * `createPlaceholder()`
   * `deletePlaceholder()`
   * `editPlaceholder()`
   * `getPlaceholder()`
   * `listPlaceholders()`
 * Profile:
   * `whoAmI()`
 * Projects:
   * `getProject()`
   * `listProjects()`
 * RepeatedAssignmentSets:
   * `createRepeatedAssignmentSet()`
   * `deleteRepeatedAssignmentSet()`
   * `editRepeatedAssignmentSet()`
   * `getRepeatedAssignmentSet()`
   * `listRepeatedAssignmentSets()`
 * Roles:
   * `createRole()`
   * `deleteRole()`
   * `editRole()`
   * `getRole()`
   * `listRoles()`

### Further documentation

You can see the past versions using one of the following:

* the `git tag` command
* the [releases page on Github](https://github.com/jolicode/forecast-php-api/releases)
* the file listing the [changes between versions](CHANGELOG.md)

## License

This library is licensed under the MIT License - see the [LICENSE](LICENSE.md)
file for details.
