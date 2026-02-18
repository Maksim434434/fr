<?php

/** @var \PHPFramework\Application $app */

use App\Controllers\HomeController;

$app->router->add('/', function (){
        return 'Hello from home!';
    }, ['GET', 'post']);

    $app->router->get('/test', [HomeController::class, 'test']);
    $app->router->get('/contact/', [HomeController::class, 'contact']);
    
    $app->router->get('/post/(?P<slug>[a-z0-9-]+)/?', function ()
    {
        return '<p>Some Post</p>';
    });

    // dump($app->router->getRoutes());