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

//uključivanje potrebnih modela
use App\Models\Vezba;
use App\Models\Film;

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/home', 'HomeController@getHome');

$app->post('/auth/login',  'AuthController@postLogin');

$app->group(['middleware' => 'jwt.auth'], function($app)
{
    $app->get('/test', function() {
        return response()->json([
            'message' => 'Hello World!',
        ]);
    });

    $app->get('/karton', function () use ($app) {
        return view('forma', ['admin' => 1]);
    });
    
    $app->get('/homeAdmin', 'App\Http\Controllers\HomeController@getHomeAdmin');

    $app->get('/katedra', 'App\Http\Controllers\KatedraController@getAll');

    $app->get('/vezba', 'App\Http\Controllers\VezbaController@getAll');

    $app->get('/logout', 'App\Http\Controllers\AuthController@logout');

});