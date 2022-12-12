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
// Dashboard Store Routes
Route::get('/stores', 'App\Http\Controllers\DashboardControllers\Stores\StoreController@index')->middleware('auth');
Route::get('/stores/create', 'App\Http\Controllers\DashboardControllers\Stores\StoreController@create')->middleware('auth');
Route::post('/stores', 'App\Http\Controllers\DashboardControllers\Stores\StoreController@store')->middleware('auth');
Route::get('/stores/{store}/edit', 'App\Http\Controllers\DashboardControllers\Stores\StoreController@edit')->middleware('auth');
Route::put('/stores/{store}', 'App\Http\Controllers\DashboardControllers\Stores\StoreController@update')->middleware('auth');
Route::delete('/stores/{store}', 'App\Http\Controllers\DashboardControllers\Stores\StoreController@destroy')->middleware('auth');
Route::get('/stores/restore/{store}', 'App\Http\Controllers\DashboardControllers\Stores\StoreController@restore')->middleware('auth');

// Product Routes
Route::get('/products', 'App\Http\Controllers\DashboardControllers\Products\ProductController@index')->middleware('auth');
Route::get('/products/create', 'App\Http\Controllers\DashboardControllers\Products\ProductController@create')->middleware('auth');
Route::post('/products', 'App\Http\Controllers\DashboardControllers\Products\ProductController@store')->middleware('auth');
Route::get('/products/{product}/edit', 'App\Http\Controllers\DashboardControllers\Products\ProductController@edit')->middleware('auth');
Route::put('/products/{product}', 'App\Http\Controllers\DashboardControllers\Products\ProductController@update')->middleware('auth');
Route::delete('/products/{product}', 'App\Http\Controllers\DashboardControllers\Products\ProductController@destroy')->middleware('auth');
Route::get('/products/restore/{product}', 'App\Http\Controllers\DashboardControllers\Products\ProductController@restore')->middleware('auth');

// Transaction Routes
Route::get('/transactions', 'App\Http\Controllers\DashboardControllers\Transaction\TransactionController@index')->middleware('auth');
Route::get('/transactions/stats', 'App\Http\Controllers\DashboardControllers\Transaction\TransactionController@stats')->middleware('auth');

//Main Controller routes
Route::get('/website/home', 'App\Http\Controllers\PublicWebsiteControllers\WebsiteController@index');
Route::get('/website/search', 'App\Http\Controllers\PublicWebsiteControllers\WebsiteController@search');
Route::get('/website/store/{store}', 'App\Http\Controllers\PublicWebsiteControllers\WebsiteController@displayStoreProducts');
Route::get('/website/billing/{product}', 'App\Http\Controllers\PublicWebsiteControllers\WebsiteController@showProductBilling');
Route::post('/website/confirm/{product}', 'App\Http\Controllers\PublicWebsiteControllers\WebsiteController@handlePurchase');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
