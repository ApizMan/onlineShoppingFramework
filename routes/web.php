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

Route::get('/onlineShoppingFramework', function () {
    return view('mainpage');
});


Route::get('onlineShoppingFramework/profile','App\Http\Controllers\ProfileController@index');
Route::get('onlineShoppingFramework/profile/{id}/edit','App\Http\Controllers\ProfileController@edit');
Route::post('onlineShoppingFramework/profile/{id}/update','App\Http\Controllers\ProfileController@update');
Route::get('onlineShoppingFramework/profile/{id}/view','App\Http\Controllers\ProfileController@view');

Route::get('onlineShoppingFramework/payment-method', function () {
    return view('payment_method/payment_method');
});
Route::get('onlineShoppingFramework/cart/{anynname}', function () {
    return view('cart/add_cart');
});
Route::get('onlineShoppingFramework/wishlist/{anynname}', function () {
    return view('wishlist/wishlist');
});

Route::get('/cartdata','App\Http\Controllers\cartController@index');
Route::post('/cartdata/create','App\Http\Controllers\cartController@create');

Route::get('/categories/eat','App\Http\Controllers\EatController@index');

