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

Route::get('/test', function () {
    return view('Category.test');
});


Route::get('/cartdata','App\Http\Controllers\cartController@index');
Route::post('/cartdata/create','App\Http\Controllers\cartController@create');

Route::get('/categories/eat','App\Http\Controllers\EatController@index');
Route::get('/categories/all','App\Http\Controllers\EatController@all');
Route::get('/categories/buffet','App\Http\Controllers\EatController@buffet');
Route::get('/categories/asian','App\Http\Controllers\EatController@asian');
Route::get('/categories/japanese','App\Http\Controllers\EatController@japanese');
Route::get('/categories/korean','App\Http\Controllers\EatController@korean');

Route::get('/categories/{id}/view','App\Http\Controllers\EatController@view');
Route::get('/categories/review','App\Http\Controllers\ReviewController@view');
Route::get('/categories/{id}/edit','App\Http\Controllers\ReviewController@edit');
Route::post('/categories/{id}/update','App\Http\Controllers\ReviewController@update');
Route::get('/categories/{id}/delete','App\Http\Controllers\ReviewController@delete');



