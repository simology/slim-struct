<?php

use Slim\App;

return function (App $app) {
    $app->get('/', \App\Action\HomeAction::class);
	$app->get('/home', \App\Controllers\Home::class . ':index');
	$app->get('/welcome', \App\Controllers\Home::class . ':getUser');
	$app->get('/users', \App\Controllers\Home::class . ':getUser');
};
