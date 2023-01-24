<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;

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
// Route::get('/', function () {
//     return view('Home.homepage');
// });

Route::get('/', function () {
    return view('Home.homepage');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/profile','App\Http\Controllers\ProfileController@index');
    Route::get('/profile/{id}/view','App\Http\Controllers\ProfileController@view');
    Route::get('/profile/{id}/edit','App\Http\Controllers\ProfileController@edit');
    Route::post('/profile/{id}/update','App\Http\Controllers\ProfileController@update');

});


///////////////////////////////////////////////Chat Box/////////////////////////////////////////////////

Route::match(['get', 'post'], '/botman', 'BotManController@handle');

///////////////////////////////////////////////////////////////////////////////////////////////////

Route::get('cart/{anynname}', function () {
    return view('cart/add_cart');
});
Route::get('wishlist/{anynname}', function () {
    return view('wishlist/wishlist');
});

Route::get('/cartdata','App\Http\Controllers\cartController@index');
Route::post('/cartdata/create','App\Http\Controllers\cartController@create');
Route::get('/cartdata/{id}/delete','App\Http\Controllers\cartController@delete');

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
        return view('Home/homepage');
    })->name('dashboard');
});

Route::get('/wishlist','App\Http\Controllers\wishController@index');
Route::post('/wishlist/create','App\Http\Controllers\wishController@create');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function(){
    Route::get('/paymentMethod','App\Http\Controllers\paymentMethodController@index');
    Route::post('/paymentMethod/create','App\Http\Controllers\paymentMethodController@create');
    Route::get('/paymentMethod/{id}/edit','App\Http\Controllers\paymentMethodController@edit');
    Route::post('/paymentMethod/{id}/update','App\Http\Controllers\paymentMethodController@update');
    Route::get('/paymentMethod/{id}/delete','App\Http\Controllers\paymentMethodController@delete');
});


Route::get('/wishlist/{id}/delete','App\Http\Controllers\wishController@delete');
Route::post('/wishlist/sendData', 'App\Http\Controllers\wishController@sendData');
Route::get('/categories/eat','App\Http\Controllers\EatController@index');

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');