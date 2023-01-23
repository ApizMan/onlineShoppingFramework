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

///////////////////////////////////////////////Profile Route/////////////////////////////////////////////////
Route::get('/', function () {
    return view('mainpage');
});

Route::get('/profile','App\Http\Controllers\ProfileController@index');
Route::get('/profile/{id}/view','App\Http\Controllers\ProfileController@view');
Route::get('/profile/{id}/edit','App\Http\Controllers\ProfileController@edit');
Route::post('/profile/{id}/update','App\Http\Controllers\ProfileController@update');

Route::get('/cartdata','App\Http\Controllers\cartController@index');
Route::post('/cartdata/create','App\Http\Controllers\cartController@create');


Route::get('/wishlist','App\Http\Controllers\wishController@index');
Route::post('/wishlist/create','App\Http\Controllers\wishController@create');

Route::get('/paymentMethod','App\Http\Controllers\paymentMethodController@index');
Route::post('/paymentMethod/create','App\Http\Controllers\paymentMethodController@create');
Route::get('/paymentMethod/{id}/edit','App\Http\Controllers\paymentMethodController@edit');
Route::post('/paymentMethod/{id}/update','App\Http\Controllers\paymentMethodController@update');
Route::get('/paymentMethod/{id}/delete','App\Http\Controllers\paymentMethodController@delete');