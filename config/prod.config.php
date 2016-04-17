<?php

$app['debug'] = false;

// Eloquent
$app['capsule.connections'] = [
    'default' => [
        'username' => 'foo',
        'password' => 'bar',
        'database' => 'silex_boilerplate',
    ],
];

$app['capsule.options'] = [
    'setAsGlobal' => false,
    'bootEloquent' => true,
    'enableQueryLog' => true,
];

// Twig
$app['twig.path'] = __DIR__.'/../src/Template/views/';

$app['twig.options'] = [
    'cache' => __DIR__.'/../var/cache/twig/',
    'strict_variables' => true,
    'debug' => false,
    'autoescape' => true,
];

// App
$app['app.blog'] = [
    'articlesPerPage' => 10,
];
