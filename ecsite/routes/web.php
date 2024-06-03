<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/', 'ItemController@index');


Route::get('/item/{item}', 'ItemController@show');

Route::get('/cartitem', 'CartItemController@index');

Route::post('/cartitem', 'CartItemController@store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::delete('/cartitem/{cartItem}', 'CartItemController@destroy');
Route::put('/cartitem/{cartItem}', 'CartItemController@update');

Route::get('/buy', 'BuyController@index');
Route::post('/buy', 'BuyController@store');
