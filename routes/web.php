<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\BusController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Drivercontroller;
use App\Http\Controllers\Auth\GoogleController;




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
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Auth::routes();

//b Route::get('/login', [HomeController::class, 'login_register'])->name('login');
//Route::resource('/adminviews/routes', 'RouteController');
//Route::resource('routes', [\App\Http\Controllers\RouteController::class]);
Route::get('/home', [HomeController::class, 'index'])->name('home');
//goole
Route::get('/auth/google', [App\Http\Controllers\Auth\GoogleController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [App\Http\Controllers\Auth\GoogleController::class, 'handleGoogleCallback']);
//Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
//Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');
//
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/adminviews/landing', [HomeController::class, 'landing'])->name('landing');
Route::get('/adminviews/drivers', [HomeController::class, 'drivers'])->name('drivers');
Route::get('/adminviews/trips', [HomeController::class, 'trips'])->name('trips');
//Route::get('/adminviews/routes', [HomeController::class, 'routes'])->name('routes');
//Route::get('/adminviews/buses', [HomeController::class, 'buses'])->name('buses');
Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/payment', [HomeController::class, 'payment'])->name('payment');
//Route::get('/booking',[BookingController::class, 'selectSeats']);
Route::get('/booking', [RouteController::class, 'search']);
//Route::get('/payment',[BookingController::class,'index']);
//Route::get('/payment', ['as' => 'BookingController', 'uses' => 'BookingController@index']);
Route::view('/selectSeat', 'customerViews.selectSeat');
//Route::get('/booking',[BookingController::class,'selectBus']);
//Route::get('/adminviews/drivers', 'App\Http\Controllers\DriverController@index');
Route::get('/adminviews/buses', 'App\Http\Controllers\BusController@index');
Route::get('/adminviews/routes', 'App\Http\Controllers\RouteController@index');



Route::get('/routes/create', [RouteController::class, 'create']);
Route::post('/routes', [RouteController::class, 'store']);

Route::get('/buses/create', [BusController::class, 'create']);
Route::post('/buses', [BusController::class, 'store']);

Route::get('/drivers/create', [DriverController::class, 'create']);
Route::post('/drivers', [DriverController::class, 'store']);
