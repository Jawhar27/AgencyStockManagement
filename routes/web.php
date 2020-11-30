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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/stockDetails','App\Http\Controllers\StockController@index');
Route::get('/soldDetails','App\Http\Controllers\SoldController@index');
Route::post('//showCreditDetails','App\Http\Controllers\SoldController@showCreditDetails');
Route::post('/addStock','App\Http\Controllers\StockController@addStock');
Route::post('/addSoldDetails','App\Http\Controllers\SoldController@addSoldDetails');
Route::post('/viewSoldDetails','App\Http\Controllers\SoldController@viewSoldDetails');


Route::get('/storeStockDetails','App\Http\Controllers\StockController@storeStockDetails');
