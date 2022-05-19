<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/reserve', function () {
    return view('reservations.reserve');
});
Route::get('/detail', function () {
    return view('details.detail');
});
Route::get('/login', function () {
    return view('logins.login');
});

Route::get('/reservations/create', function () {
    return view('reservations.create');
});
Route::get('/show', function () {
    return view('events.show');
});

Route::get('/top', function () {
    return view('top');
});

Route::post('/contact','ContactController@store')->name('contact.store');

Route::get('/contact', function () {
    return view('contact.create');
});

// Route::get('/contact','ContactController@create')->name('contact.create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/reservations', 'ReservationsController@store')->name('reservations.store');

Route::get('/philippines/{philippine}', 'EventController@show')->name('philippines.show');

Route::get('/philippines', 'PhilippineController@index')->name('philippines.index');

Route::get('/okinawa', 'OkinawaController@index')->name('okinawa.index');

Route::get('/events/{event}', 'EventController@show')->name('events.show');

Route::get('/events/{event}/comments/create','CommentController@create')->name('comment.create');

Route::post('/events/{event}/comments','CommentController@store')->name('comment.store');