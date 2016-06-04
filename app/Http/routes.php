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

$app->get('/home', function () use ($app) {
    return view('index');
});

//$app->get('/karton', ['middleware' => 'auth', function () use ($app) {
//    return view('forma');
//}]);

$app->get('/karton', function () use ($app) {
    return view('forma');
});

$app->post('/karton', 'FilmController@obradi');

$app->get('/vezba', 'VezbaController@getView');
$app->get('/vezbePodaci', 'VezbaController@getAll');
$app->post('/vezbeUnos', 'VezbaController@obradi');


$app->get('/katedra', 'KatedraController@getView');
$app->get('/katedraPodaci', 'KatedraController@getAll');
$app->get('/studenti', 'StudentController@getAll');

