<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\CountryController;
use App\Http\controllers\CityController;
use App\Http\controllers\AirlineController;
use App\Http\controllers\AirportController;
use App\Http\controllers\AirplaneController;
use App\Http\controllers\DirectionController;
use App\Http\controllers\AirplaneSeatController;
use     App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', function () {return view('dashboard');});

    Route::get('/country-create', [CountryController::class, 'create']);
    Route::post('/country-store', [CountryController::class,'store']);
    Route::get('/country-index', [CountryController::class,'index']);
    Route::delete('/country-destroy/{id}', [CountryController::class,'destroy']);
    Route::get('/country-edit/{id}', [CountryController::class,'edit']);
    Route::post('/country-update/{id}', [CountryController::class,'update']);

    // Route::resource('country', CountryController::class);

    Route::get('/city-create', [CityController::class, 'create']);
    Route::post('/city-store', [CityController::class,'store']);
    Route::get('/city-index', [CityController::class,'index']);
    Route::delete('/city-destroy/{id}', [CityController::class,'destroy']);
    Route::get('/city-edit/{id}', [CityController::class,'edit']);
    Route::post('/city-update/{id}', [CityController::class,'update']);

    // Route::resource('city', CityController::class);

    Route::get('/airline-create', [AirlineController::class, 'create']);
    Route::post('/airline-store', [AirlineController::class,'store']);
    Route::get('/airline-index', [AirlineController::class,'index']);
    Route::delete('/airline-destroy/{id}', [AirlineController::class,'destroy']);
    Route::get('/airline-edit/{id}', [AirlineController::class,'edit']);
    Route::post('/airline-update/{id}', [AirlineController::class,'update']);

    Route::get('/airport-create', [AirportController::class, 'create']);
    Route::post('/airport-store', [AirportController::class,'store']);
    Route::get('/airport-index', [AirportController::class,'index']);
    Route::delete('/airport-destroy/{id}', [AirportController::class,'destroy']);
    Route::get('/airport-edit/{id}', [AirportController::class,'edit']);
    Route::post('/airport-update/{id}', [AirportController::class,'update']);
    Route::get('/getCities/{country_id}',[AirportController::class,'getCities']);

    Route::get('/airplane-create', [AirplaneController::class, 'create']);
    Route::post('/airplane-store', [AirplaneController::class,'store']);
    Route::get('/airplane-index', [AirplaneController::class,'index']);
    Route::delete('/airplane-destroy/{id}', [AirplaneController::class,'destroy']);
    Route::get('/airplane-edit/{id}', [AirplaneController::class,'edit']);
    Route::post('/airplane-update/{id}', [AirplaneController::class,'update']);

    Route::get('/direction-create', [DirectionController::class, 'create']);
    Route::post('/direction-store', [DirectionController::class,'store']);
    Route::get('/direction-index', [DirectionController::class,'index']);
    Route::delete('/direction-destroy/{id}', [DirectionController::class,'destroy']);
    Route::get('/direction-edit/{id}', [DirectionController::class,'edit']);
    Route::post('/direction-update/{id}', [DirectionController::class,'update']);

    Route::get('/airplane_seat-add/{id}', [AirplaneSeatController::class,'create']);
    Route::post('/airplane_seat-store', [AirplaneSeatController::class,'store']);
    Route::get('/airplane_seat-index/{id}', [AirplaneSeatController::class,'index']);
    Route::get('/airplane_seat-edit/{id}', [AirplaneSeatController::class,'edit']);
    Route::post('/airplane_seat-update/{id}', [AirplaneSeatController::class,'update']);

});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
    
