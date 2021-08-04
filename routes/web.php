<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\MpesaController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Drivercontroller;
use App\Http\Controllers\Auth\GoogleController;
use App\User;
use Illuminate\Support\Facades\Input;
//use Symfony\Component\Console\Input\Input;


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


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/aboutUs', [HomeController::class, 'aboutUs'])->name('aboutUs');


//Route::get('profile', function() { return view('customerViews.profile');});
//Route::get('users/profile', UsersController::class,'UsersController@edit')->name('users.edit_profile');
//Route::put('users/profile', 'UsersController@update')->name('users.update_profile');

Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit'])->name('profile');
Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);


Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

//google authentication 
Route::get('/auth/google', [App\Http\Controllers\Auth\GoogleController::class, 'redirectToGoogle']);
Route::get('/auth/google/callback', [App\Http\Controllers\Auth\GoogleController::class, 'handleGoogleCallback']);

//
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/adminviews/landing', [HomeController::class, 'landing'])->name('landing');



Route::get('/booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/payment', [HomeController::class, 'payment'])->name('payment');

Route::get('/booking', [RouteController::class, 'search']);

Route::get('/selectSeat', [BookingController::class, 'selectSeats'])->name('selectSeat');



Route::post('/customerViews/profile', [UserController::class,'edit']);
// Route::put('/customerViews/profile/{id}', [UserController::class,'Update']);
Route::get('/customerViews/profile', [UserController::class,'index']);


// Route related codes
Route::get('/adminviews/routes', [RouteController::class, 'index']);
Route::get('/routes/create', [RouteController::class, 'create']);
Route::post('/routes', [RouteController::class, 'store']);
Route::post('/edit_routes', [RouteController::class, 'edit']);
Route::post('/delete_routes', [RouteController::class, 'destroy']);


// Bus related codes
Route::get('/adminviews/buses', [BusController::class, 'index']);
Route::get('/buses/create', [BusController::class, 'create']);
Route::post('/buses', [BusController::class, 'store']);
Route::post('/edit_buses', [BusController::class, 'edit']);
Route::post('/delete_buses', [BusController::class, 'destroy']);


// Driver related codes
Route::get('/adminviews/drivers', [DriverController::class, 'index'])->name('drivers');
Route::get('/drivers/create', [DriverController::class, 'create']);
Route::post('/drivers', [DriverController::class, 'store']);
Route::post('/edit_drivers',[DriverController::class,'edit']);
Route::post('/delete_drivers',[DriverController::class,'destroy']);

// Trip related codes
Route::get('/adminviews/trips', [TripController::class, 'index']);
Route::get('/trips/create',[TripController::class, 'create']);
Route::post('/trips',[TripController::class,'store']);
Route::post('/edit_trips',[TripController::class,'edit']);
Route::post('/delete_trips',[TripController::class,'destroy']);

//payment related codes
Route::post('payment', [MpesaController::class,'stkpush']);

// Trip search realted codes
Route::get('/searchTrip', [SearchController::class, 'index'])->name('searchTrip');
Route::get('/searchTrip', [SearchController::class, 'tripSearch'])->name('searchTrip');



// You will find all the commented codes down here. I don't know who commented what but everyone can find
//whatever commented down here.... :)



//Route::get ( '/', function () {
//    return view ( 'welcome' );
//} );
//Route::any ( '/search', function () {
//    $searchSource = Input::get ( "searchSource" );
//    $searchDestination = Input::get ( "searchDestination" );
//    $user = Booking::where ( 'source', 'LIKE', '%' . $searchSource . '%' )->andWhere ( 'destination', 'LIKE', '%' . $searchDestination . '%' )->get ();
//    if (count ( $user ) > 0)
//        return view ( 'customerViews.booking' )->withDetails ( $user )->withQuery ( $searchSource,$searchDestination );
//    else
//        return view ( 'customerViews.booking' )->withMessage ( 'No Details found. Try to search again !' );
//} );


//Route::get('/search','SearchController@index')->name('search');
//Route::get('/search', 'SearchController@index')->name('search');;

//Route::get('/booking',[BookingController::class,'selectBus']);
//Route::get('/adminviews/drivers', 'App\Http\Controllers\DriverController@index');

//Route::get('/payment',[BookingController::class,'index']);
//Route::get('/payment', ['as' => 'BookingController', 'uses' => 'BookingController@index']);
//Route::view('/selectSeat', 'customerViews.selectSeat');

//Route::get('/adminviews/routes', [HomeController::class, 'routes'])->name('routes');
//Route::get('/adminviews/buses', [HomeController::class, 'buses'])->name('buses');

//Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
//Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

//Route::get('/booking',[BookingController::class, 'selectSeats']);

//Route::get('/login', [HomeController::class, 'login_register'])->name('login');
//Route::resource('/adminviews/routes', 'RouteController');
//Route::resource('routes', [\App\Http\Controllers\RouteController::class]);