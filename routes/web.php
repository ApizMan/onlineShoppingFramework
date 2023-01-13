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

Route::get('onlineShoppingFramework/payment-method', function () {
    return view('payment_method/payment_method');
});

Route::get('/cartdata','App\Http\Controllers\cartController@index');
Route::post('/cartdata/create','App\Http\Controllers\cartController@create');

Route::get('/Home', function () {
    return view('\Home.Homepage');});

Route::get('/History', function () {
        return view('\Purchase.PurchaseHistory');});

Route::get('/PayHist','App\Http\Controllers\PurchaseHis@index');

Route::get('/PayHist/{id}','App\Http\Controllers\PurchaseHis@read');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/wishlist','App\Http\Controllers\wishController@index');
Route::post('/wishlist/create','App\Http\Controllers\wishController@create');
