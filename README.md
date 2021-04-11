# A PHP Client for Harvest Forecast API

![test workflow](https://github.com/jolicode/forecast-php-api/actions/workflows/tests.yml/badge.svg)

[Harvest Forecast](https://www.getharvest.com/forecast) is a planification tool built by Harvest.

This PHP SDK is generated automatically with [JanePHP](https://github.com/janephp/janephp) using a [Forecast OpenAPI specification](Resources/forecast-openapi.yaml). It means that:

 * the code in the `generated` dorectory is not hand-written but *generated*;
 * if the API changes and you need to fix an API call, please edit the OpenAPI specification file, then [regenerate the SDK](doc/updating-sdk.md).

## Installation

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

## Usage

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

## Available operations

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

## Troubleshoot

Got some problems using this library? Need a missing feature?
Do not hesitate to [open an issue](https://github.com/jolicode/forecast-php-api/issues)
and share it with us.

If some operation is missing or not working correctly, please follow the steps to [regenerate the SDK](doc/updating-sdk.md).

## Further documentation

You can see the current and past versions using one of the following:

* the `git tag` command
* the [releases page on Github](https://github.com/jolicode/forecast-php-api/releases)
* the file listing the [changes between versions](CHANGELOG.md)

And finally some meta documentation:

* [versioning and branching models](VERSIONING.md)
* [contribution instructions](CONTRIBUTING.md)

## License

This library is licensed under the MIT License - see the [LICENSE](LICENSE.md)
file for details.
