<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/login', [HomeController::class, 'login_register'])->name('login');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/adminviews/landing', [HomeController::class, 'landing'])->name('landing');
Route::get('/adminviews/drivers', [HomeController::class, 'drivers'])->name('drivers');
Route::get('/adminviews/trips', [HomeController::class, 'trips'])->name('trips');
Route::get('/adminviews/routes', [HomeController::class, 'routes'])->name('routes');
Route::get('/adminviews/buses', [HomeController::class, 'buses'])->name('buses');
