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

// Default route: Menampilkan versi aplikasi
$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Grup route untuk semua operasi CRUD berdasarkan nama tabel
$router->group(['prefix' => '{table}'], function () use ($router) {
    $router->get('/', 'TabelController@getAll'); // GET semua data
    $router->get('/{id}', 'TabelController@getById'); // GET data berdasarkan ID
    $router->post('/', 'TabelController@create'); // POST data baru
    $router->put('/{id}', 'TabelController@update'); // PUT untuk update data
    $router->delete('/{id}', 'TabelController@delete'); // DELETE data
});
