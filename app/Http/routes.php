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

$app->get('/karton', ['middleware' => 'auth', function () use ($app) {
    return view('forma');
}]);


$app->get('/vezba', 'VezbaController@getAll');

$app->get('/katedra', 'KatedraController@getAll');

$app->post('/auth/login', 'AuthController@postLogin');

$app->group(['middleware' => 'auth:api'], function($app)
{
    $app->get('/test', function() {
        return response()->json([
            'message' => 'Hello World!',
        ]);
    });

    $app->get('/karton', function () use ($app) {
        return view('forma');
    });

});