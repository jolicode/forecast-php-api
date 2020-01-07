<?php

return [
    'openapi-file' => __DIR__ . '/Resources/forecast-openapi-v3.yaml',
    'namespace' => 'JoliCode\Forecast\Api',
    'directory' => __DIR__ . '/generated',
    'reference' => true,
    'strict' => false,
    'client' => 'psr18',
];
