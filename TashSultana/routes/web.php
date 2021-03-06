<?php

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
    return redirect('/home');
});

Auth::routes();
// Permet de se logout via /logout (Pour test)
Route::get('logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('guestbook', 'goldenbookController', ['only' => ['index', 'store']]);

Route::get('/music', 'homeController@music');
Route::get('/contact', 'homeController@contact');
Route::get('/about', 'homeController@about');
Route::get('/tour', 'homeController@tour');
