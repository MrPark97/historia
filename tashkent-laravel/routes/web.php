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

Route::domain('{epoch}.'.config()->get('app.hostname'))->group(function () {
    Route::get('/{locale?}', 'MainController@index');
    Route::get('/{locale?}/lol', 'MainController@lol');
});


Route::get('/', function () {
    return view('index');
});
