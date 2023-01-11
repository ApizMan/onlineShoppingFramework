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

Route::get('main', function () {
    return view('mainpage');
});


Route::get('/profile','App\Http\Controllers\ProfileController@index');
Route::get('/profile/{id}/edit','App\Http\Controllers\ProfileController@edit');
Route::post('/profile/{id}/update','App\Http\Controllers\ProfileController@update');
Route::get('/profile/{id}/view','App\Http\Controllers\ProfileController@view');