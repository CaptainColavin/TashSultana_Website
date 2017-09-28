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
    //return view('welcome');
    return redirect('/homepage.php');
});

/*Route::get('/test', function () {
  return redirect('/test.php');
});*/

Route::get('/tour', function () {
    //return view('welcome');
    return redirect('/songkick.php');
});