<?php
require_once __DIR__ . '/../src/bootstrap.php';
require_once __DIR__ . '/../src/app/chapter1.php';
require_once __DIR__ . '/../src/app/chapter2.php';
require_once __DIR__ . '/../src/app/chapter3.php';

$app->run();

/*
$app->before(function (Request $request) use ($app) {
    if ('GET_' === $request->attributes->get('_route') && empty($app['session']->get('user_id'))) {
        return $app->redirect('/login');
    }
});

*/
