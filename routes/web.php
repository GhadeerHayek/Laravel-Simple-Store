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
// Store Routes
Route::get('/stores', 'App\Http\Controllers\Stores\StoreController@index');
Route::get('/stores/create', 'App\Http\Controllers\Stores\StoreController@create');
Route::post('/stores', 'App\Http\Controllers\Stores\StoreController@store');
Route::get('/stores/{store}/edit', 'App\Http\Controllers\Stores\StoreController@edit');
Route::put('/stores/{store}', 'App\Http\Controllers\Stores\StoreController@update');
Route::delete('/stores/{store}', 'App\Http\Controllers\Stores\StoreController@destroy');
Route::get('/stores/restore/{store}', 'App\Http\Controllers\Stores\StoreController@restore');

// Product Routes
Route::get('/products', 'App\Http\Controllers\Products\ProductController@index');
Route::get('/products/create', 'App\Http\Controllers\Products\ProductController@create');
Route::post('/products', 'App\Http\Controllers\Products\ProductController@store');
Route::get('/products/{product}/edit', 'App\Http\Controllers\Products\ProductController@edit');
Route::put('/products/{product}', 'App\Http\Controllers\Products\ProductController@update');
Route::delete('/products/{product}', 'App\Http\Controllers\Products\ProductController@destroy');
Route::get('/products/restore/{product}', 'App\Http\Controllers\Products\ProductController@restore');

// Transaction Routes
Route::get('/transactions', 'App\Http\Controllers\Transaction\TransactionController@index');
Route::get('/transactions/stats', 'App\Http\Controllers\Transaction\TransactionController@stats');
//Main Controller routes
Route::get('/admin/home', function (){
    return view('adminDashboard/index');
});
