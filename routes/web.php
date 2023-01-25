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

//If user are not login, Homepage Display
Route::get('/', function () {
    return view('Home.homepage');
});

//If user are login, Homepage Display
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('Home/homepage');
    })->name('dashboard');
});

//Eat Interface
Route::get('/categories/eat','App\Http\Controllers\EatController@index');

//Profile
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

//Cart
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function(){
    Route::get('/cartdata','App\Http\Controllers\cartController@index');
    Route::post('/cartdata/create','App\Http\Controllers\cartController@create');
    Route::get('/cartdata/{id}/delete','App\Http\Controllers\cartController@delete');
});




Route::get('/History', function () {
        return view('\Purchase.PurchaseHistory');});


//Purchase History
Route::middleware([])->group(function(){
    Route::get('/PayHist','App\Http\Controllers\PurchaseHis@index');
    Route::get('/PayHist/{id}','App\Http\Controllers\PurchaseHis@read');
    Route::get('/PayHist/{id}/edit','App\Http\Controllers\PurchaseHis@edit');
    Route::post('/update/{id}','App\Http\Controllers\PurchaseHis@update');
    Route::get('/delete/{id}','App\Http\Controllers\PurchaseHis@destroy');
});

//Payment Method
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


//Wish List
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function(){
    Route::get('/wishlist/{id}/delete','App\Http\Controllers\wishController@delete');
    Route::post('/wishlist/sendData', 'App\Http\Controllers\wishController@sendData');
    Route::get('/wishlist','App\Http\Controllers\wishController@index');
    Route::post('/wishlist/create','App\Http\Controllers\wishController@create');
});



//If user want to logout
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');