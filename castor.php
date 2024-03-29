<?php

/*
 * This file is part of JoliCode's Forecast PHP API project.
 *
 * (c) JoliCode <coucou@jolicode.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace sdk;

use Castor\Attribute\AsTask;

use function Castor\exit_code;
use function Castor\import;
use function Castor\io;

import(__DIR__.'/tools/php-cs-fixer/castor.php');

#[AsTask(description: 'Re-generates the SDK using the local specification')]
function generate(): int
{
    io()->comment('Generating the SDK using Jane OpenAPI...');
    $result = exit_code('./vendor/bin/jane-openapi generate -c .jane-openapi.php');

    if (0 !== $result) {
        io()->error('An error occurred while generating the SDK.');
    } else {
        io()->success('Successfully generated the SDK');
    }

    return $result;
}
