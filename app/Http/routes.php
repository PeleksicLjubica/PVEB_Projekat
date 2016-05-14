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


use App\Models\Vezba;

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/home', function () use ($app) {
    return view('index');
});

$app->get('/karton', function () use ($app) {
    return view('forma');
});


$app->get('/vezba', function() use ($app) {
    $vezbe = Vezba::all();
    echo "Sve vezbe u bazi: " . PHP_EOL;
    foreach ($vezbe as $vezba) {
        echo $vezba->id_vezbe . ": Naziv: " . $vezba->naziv . " Tip vezbe: " . $vezba->tip . PHP_EOL;
    }
    echo "------------------------------" . PHP_EOL;
});