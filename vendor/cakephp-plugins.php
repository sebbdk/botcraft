<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Assets' => $baseDir . '/plugins/Assets/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'Crud' => $baseDir . '/vendor/friendsofcake/crud/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'FOC/Authenticate' => $baseDir . '/vendor/friendsofcake/authenticate/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/',
        'Search' => $baseDir . '/vendor/friendsofcake/search/'
    ]
];
