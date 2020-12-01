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

$router->get('/prosedur', [
    'as' => 'prosedur',
    'uses' => 'Prosedur\ProsedurController@index',
]);

$router->get('/contact', [
    'as' => 'contact',
    'uses' => 'Contact\ContactController@index',
]);

$router->get('/anime', [
    'as' => 'anime.index',
    'uses' => 'Anime\AnimeController@index',
]);

$router->get('/anime/create', [
    'as' => 'anime.create',
    'uses' => 'Anime\AnimeController@create'
]);

$router->post('/anime', [
   'as' => 'anime.store',
   'uses' => 'Anime\AnimeController@store'
]);

$router->get('/anime/{anime}/edit', [
    'as' => 'anime.edit',
    'uses' => 'Anime\AnimeController@edit'
]);

$router->put('/anime/{anime}', [
    'as' => 'anime.update',
    'uses' => 'Anime\AnimeController@update'
]);

$router->delete('/anime/{anime}', [
    'as' => 'anime.destroy',
    'uses' => 'Anime\AnimeController@destroy'
]);

