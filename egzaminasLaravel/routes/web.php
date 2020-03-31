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
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/errors', 'HomeController@showError');
Route::get('/logout', 'HomeController@logout');

Route::get('/user_account/', 'AccountController@userAccount');
Route::get('/money_transfer/', 'OperationController@moneyTransfer');
Route::post('/store_operation/', 'OperationController@StoreTransfer');
