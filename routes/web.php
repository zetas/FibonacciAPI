<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['namespace' => 'API', 'prefix' => 'api'], function () use ($router) {
    $router->group(['namespace' => 'V1', 'prefix' => 'v1'], function () use ($router) {
        $router->get('fibonacci', 'NumberController@fibonacci');
    });
});
