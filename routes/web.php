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

Route::get('', function () {
    return view('welcome');
});

Route::get('onlineShoppingFramework/payment-method', function () {
    return view('payment_method/payment_method');
});


Route::get('/cartdata','App\Http\Controllers\cartController@index');
Route::post('/cartdata/create','App\Http\Controllers\cartController@create');
Route::get('/cartdata/{id}/delete','App\Http\Controllers\cartController@delete');


Route::get('/wishlist','App\Http\Controllers\wishController@index');
Route::post('/wishlist/create','App\Http\Controllers\wishController@create');
Route::get('/wishlist/{id}/delete','App\Http\Controllers\wishController@delete');
Route::post('/wishlist/sendData', 'App\Http\Controllers\wishController@sendData');

