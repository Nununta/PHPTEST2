<?php

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


Route::group(['middleware' => 'auth'], function() {
    Route::get('/index', 'ShopController@index');
    Route::get('/mycart', 'ShopController@myCart');
    Route::post('/mycart', 'ShopController@addMycart');//追記
});





Route::group(['prefix' => 'admin'], function() {
    Route::get('points/create', 'Admin\PointsController@add')->middleware('auth');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
