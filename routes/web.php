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



Route::prefix('/')->name('movies.')->group(function () {
    Route::get('', 'MovieController@index')->name('index');
    Route::get('{id}', 'MovieController@show')->name('show');
});
