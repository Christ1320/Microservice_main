<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Routes for users1
$router->get('/users1','User1Controller@index');
$router->post('/users1','User1Controller@add');
$router->get('/users1/{userID}','User1Controller@show');
$router->put('/users1/{userID}','User1Controller@update');
$router->delete('/users1/{userID}','User1Controller@delete');

//Routes for users2
$router->get('/users2','User2Controller@index');
$router->post('/users2','User2Controller@add');
$router->get('/users2/{userID}','User2Controller@show');
$router->put('/users2/{userID}','User2Controller@update');
$router->delete('/users2/{userID}','User2Controller@delete');
