<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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

//Route::get('/login', [HomeController::class, 'login_register'])->name('login');
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'google']);
//Route::get('auth/callback/google', 'Auth\LoginController@handleGoogleCallback');


// Facebook login
Route::get('login/facebook', [App\Http\Controllers\Auth\LoginController::class, 'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleFacebookCallback']);

//dashboard
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
//profile 

Route::get('/adminviews/landing', [HomeController::class, 'landing'])->name('landing');
Route::get('/adminviews/drivers', [HomeController::class, 'drivers'])->name('drivers');
Route::get('/adminviews/trips', [HomeController::class, 'trips'])->name('trips');
Route::get('/adminviews/routes', [HomeController::class, 'routes'])->name('routes');
Route::get('/adminviews/buses', [HomeController::class, 'buses'])->name('buses');