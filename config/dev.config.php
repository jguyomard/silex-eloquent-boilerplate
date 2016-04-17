<?php

require __DIR__.'/prod.config.php';

// Eloquent
$app['capsule.connections'] = [
    'default' => [
        'username' => 'root',
        'password' => 'root',
        'database' => 'silex_boilerplate',
    ],
];

// Twig
$app['twig.options'] = array_merge($app['twig.options'], [
    'cache' => false,
    'debug' => true,
]);

// Enable WebDebuger + VarDumper
$app['debug'] = true;

$app->register(new \Silex\Provider\WebProfilerServiceProvider(), array(
    'profiler.cache_dir' => __DIR__.'/../var/cache/profiler',
));
$app->register(new Silex\Provider\DebugServiceProvider(), array(
    'debug.max_items' => 250,
    'debug.max_string_length' => -1,
));

// Logs
$app->register(new \Silex\Provider\MonologServiceProvider(), array(
    'monolog.logfile' => __DIR__.'/../var/logs/silex.dev.log',
));
