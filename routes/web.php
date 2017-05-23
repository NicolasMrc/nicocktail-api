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

use Illuminate\Support\Facades\Route;


/**
 * BUNDLE URL
 */


Route::get('bundle/{id}', 'BundleController@show');

Route::get('bundle', 'BundleController@index');

Route::post('bundle', 'BundleController@store');

Route::put('bundle', 'BundleController@update');

Route::delete('bundle/{id}', 'BundleController@destroy');


/**
 * SOFT URL
 */

Route::get('soft/{id}', 'SoftController@show');

Route::get('soft', 'SoftController@index');

Route::post('soft', 'SoftController@store');

Route::put('soft', 'SoftController@update');

Route::delete('soft/{id}', 'SoftController@destroy');


/**
 * ORDER URL
 */

Route::get('order/{id}', 'OrderController@show');

Route::get('order', 'OrderController@index');

Route::post('order', 'OrderController@store');

Route::put('order', 'OrderController@update');

Route::delete('order/{id}', 'OrderController@destroy');



/**
 * ALCOHOL URL
 */


Route::get('alcohol/{id}', 'AlcoholController@show');

Route::get('alcohol', 'AlcoholController@index');

Route::post('alcohol', 'AlcoholController@store');

Route::put('alcohol', 'AlcoholController@update');

Route::delete('alcohol/{id}', 'AlcoholController@destroy');


/**
 * EXTRA URL
 */



Route::get('extra/{id}', 'ExtraController@show');

Route::get('extra', 'ExtraController@index');

Route::post('extra', 'ExtraController@store');

Route::put('extra', 'ExtraController@update');

Route::delete('extra/{id}', 'ExtraController@destroy');


/**
 * USER URL
 */


Route::get('user/{id}', 'UserController@show');

Route::get('user', 'UserController@index');

Route::post('login', 'UserController@login');

Route::post('user', 'UserController@store');

Route::put('user', 'UserController@update');

Route::delete('user/{id}', 'UserController@destroy');

Route::get('verify/{id}/{token}', 'UserController@verify');
