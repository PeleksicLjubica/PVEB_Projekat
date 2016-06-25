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
	$app->post('/vezba', 'App\Http\Controllers\VezbaController@obradi');

	$app->get('/katedra', 'App\Http\Controllers\KatedraController@getView');
	$app->post('/katedra', 'App\Http\Controllers\KatedraController@dodajKatedre') ;


	$app->get('/studentiPodaci', 'App\Http\Controllers\StudentController@getAll');
	$app->get('/studenti', 'App\Http\Controllers\StudentController@getView');
	$app->post('/studenti', 'App\Http\Controllers\StudentController@obradi');
	//$app->post('/studentInkrement', 'App\Http\Controllers\StudentController@inkrementGodine');
    $app->get('/studentInkrement_{id}','App\Http\Controllers\StudentController@inkrementGodine');

});

$app->post('/filmPretraga', 'FilmController@pretrazi');

$app->get('/filmPodaci', 'FilmController@getAll');
$app->get('/filmPodaciTrajanje', 'FilmController@getAllDistinctTrajanje');
$app->get('/filmPodaciGodina', 'FilmController@getAllDistinctGodina');

$app->get('/katedraPodaci', 'KatedraController@getAll');
$app->get('/katedraPodaciGodina', 'KatedraController@getAllGodina');
$app->get('/katedraPodaciNazivGodina', 'KatedraController@getAllNazivGodina');

$app->get('/vezbePodaci', 'VezbaController@getAll');
$app->get('/vezbePodaciRazlicito', 'VezbaController@getAllDistinct');
$app->get('/predmetPodaci', 'PredmetController@getAll');
$app->get('/profesorPodaci', 'ProfesorController@getAll');
$app->get('/producentPodaci', 'ProducentController@getAll');
$app->get('/scenaristaPodaci', 'ScenaristaController@getAll');
$app->get('/snimateljPodaci', 'SnimateljController@getAll');
$app->get('/reziserPodaci', 'ReziserController@getAll');
$app->get('/montazerPodaci', 'MontazerController@getAll');
$app->get('/glumacPodaci', 'GlumacController@getAll');
$app->get('/podrskaPodaci', 'PodrskaController@getAll');
$app->get('/film','FilmController@prikaziFilm');

$app->get('/film_{id}', 'FilmController@getFilm');
$app->get('/file_{id}', 'FilmController@downloadPrilog');
$app->post('/studentInkrement_{id}','StudentController@inkrementGodine');










