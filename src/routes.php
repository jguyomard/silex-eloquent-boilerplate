<?php

/** @var \Silex\Application $app */


$app['controllers']->convert('article', function ($id) use ($app) {
    if (empty($id) || !ctype_digit($id)) {
        return null;
    }
    return \Blog\Model\ArticleModel::find($id);
});

$app->get('/',              '\Blog\Controller\BlogController::indexAction')
    ->bind('homepage');

$app->get('/{article}',     '\Blog\Controller\BlogController::articleAction')
    ->assert('article', '\d+')
    ->bind('article');

$app->get('/api',           '\Blog\Controller\BlogController::apiAction')
    ->bind('api');
