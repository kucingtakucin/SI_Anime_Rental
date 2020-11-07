<?php

/** @var Router $router */

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

use Laravel\Lumen\Routing\Router;

$router->get('/', [
    'as' => 'home',
    'uses' => 'Home\HomeController@index',
]);

$router->get('/product', [
    'as' => 'product',
    'uses' => 'Product\ProductController@index',
]);

$router->get('/genres', [
    'as' => 'genres',
    'uses' => 'Genres\GenresController@index',
]);
