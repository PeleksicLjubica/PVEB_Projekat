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

	$app->get('/homeAdmin', 'App\Http\Controllers\HomeController@getHomeAdmin');

	$app->get('/logout', 'App\Http\Controllers\AuthController@logout');

	$app->get('/karton', 'App\Http\Controllers\FilmController@getKartonView');
	$app->post('/karton', 'App\Http\Controllers\FilmController@obradi');

	$app->get('/vezba', 'App\Http\Controllers\VezbaController@getView');
	$app->get('/vezbePodaci', 'App\Http\Controllers\VezbaController@getAll');
	$app->post('/vezba', 'App\Http\Controllers\VezbaController@obradi');

	$app->get('/katedra', 'App\Http\Controllers\KatedraController@getView');
	$app->get('/katedraPodaci', 'App\Http\Controllers\KatedraController@getAll');
	$app->get('/studentiPodaci', 'App\Http\Controllers\StudentController@getAll');
	$app->get('/studenti', 'App\Http\Controllers\StudentController@getView');
	$app->post('/student', 'App\Http\Controllers\StudentController@obradi');

	$app->get('/predmetPodaci', 'App\Http\Controllers\PredmetController@getAll');

	$app->get('/profesorPodaci', 'App\Http\Controllers\ProfesorController@getAll');


});