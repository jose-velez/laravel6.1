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

//app()->bind('example', function () {
//    return new \App\Example();
//});

Route::get('/', 'PagesController@home');

Route::get('/contact', 'ContactController@show');

Route::post('/contact', 'ContactController@store');

Route::get('/payments/create', 'PaymentsController@Create')->middleware('auth');

Route::post('payments', 'PaymentsController@store')->middleware('auth');

Route::get('notifications', 'UserNotificationsController@show')->middleware('auth');

//Route::get('/', function () {
//
//    $example = resolve(App\Example::class);
//
//    ddd($example);
//
//
//    // return view('welcome');
//
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

