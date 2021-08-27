<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
// Dashboard
Route::get('/', function () {
    return view('login');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');
Route::get('/dashboard', 'App\Http\Controllers\BookingController@index')->name('dashboard.index');
Route::view('/calendar', 'calendar')->name('calendar');
Route::view('/faqs', 'faqs')->name('faqs');
Route::view('/user_profile', 'user_profile')->name('user_profile');

//Route::get('/user_profile', 'App\Http\Controllers\UserController@edit2')->name('user_profile');

Route::get('/view_user', 'App\Http\Controllers\UserController@index')->name('view_user');
Route::post('/invite', 'App\Http\Controllers\UserController@store')->name('invite');
Route::get('/user/logout', [Controller::class, 'Logout'])->name('user.logout');
Route::view('/invitation', 'invitation')->name('invitation');
Route::get('/edit/{user}', 'App\Http\Controllers\UserController@edit')->name('edit_user');
Route::put('/update_user/{user}', 'App\Http\Controllers\UserController@update')->name('update_user');
Route::get('/destroy/{user}', 'App\Http\Controllers\UserController@destroy')->name('delete_user');

// Hall
Route::view('/add_hall', 'add_hall')->name('add_hall');
Route::post('/store_hall', 'App\Http\Controllers\HallController@store')->name('store_hall');
Route::get('/view_halls', 'App\Http\Controllers\HallController@index')->name('view_halls');
Route::get('/edit_hall/{hall}', 'App\Http\Controllers\HallController@edit')->name('edit_hall');
Route::put('/update_hall/{hall}', 'App\Http\Controllers\HallController@update')->name('update_hall');
Route::get('/delete_hall/{hall}', 'App\Http\Controllers\HallController@destroy')->name('delete_hall');

// Vehicle
Route::get('/add_vehicle', 'App\Http\Controllers\VehicleController@create')->name('add_vehicle');
Route::post('/store_vehicle', 'App\Http\Controllers\VehicleController@store')->name('store_vehicle');
Route::get('/view_vehicles', 'App\Http\Controllers\VehicleController@index')->name('view_vehicles');
Route::get('/edit_vehicle/{vehicle}', 'App\Http\Controllers\VehicleController@edit')->name('edit_vehicle');
Route::put('/update_vehicle/{vehicle}', 'App\Http\Controllers\VehicleController@update')->name('update_vehicle');
Route::get('/delete_vehicle/{vehicle}', 'App\Http\Controllers\VehicleController@destroy')->name('delete_vehicle');

// Vehicle Booking
Route::get('/vehicle_booking/{id}', 'App\Http\Controllers\BookingController@vehicle_booking')->name('vehicle_booking');
Route::post('/apply_vehicle_booking/{id}', 'App\Http\Controllers\BookingController@apply_vehicle_booking')->name('apply_vehicle_booking');

// Meeting Hall Booking
Route::get('/hall_booking/{id}', 'App\Http\Controllers\BookingController@hall_booking')->name('hall_booking');
Route::post('/apply_hall_booking/{id}', 'App\Http\Controllers\BookingController@apply_hall_booking')->name('hall_vehicle_booking');
