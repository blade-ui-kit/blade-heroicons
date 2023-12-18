<?php

return [
    [ // Regular Outline...
        'source' => __DIR__.'/../node_modules/heroicons/24/outline',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'o-',
        'safe' => true,
    ],
    [ // Regular Solid...
        'source' => __DIR__.'/../node_modules/heroicons/24/solid',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 's-',
        'safe' => true,
    ],
    [ // Mini...
        'source' => __DIR__.'/../node_modules/heroicons/20/solid',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'm-',
        'safe' => true,
    ],
    [ // Micro...
        'source' => __DIR__.'/../node_modules/heroicons/16/solid',
        'destination' => __DIR__.'/../resources/svg',
        'output-prefix' => 'c-',
        'safe' => true,
    ],
];
