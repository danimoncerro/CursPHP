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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cities', 'CityController@index');
Route::get('/counties', 'CountyController@index');
Route::get('/counties/{id}', 'CountyController@cities');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('cities1', 'City1Controller@index');
Route::get('counties1', 'County1Controller@index');
Route::get('counties1/{id}', 'County1Controller@cities1');
Route::get('cities2', 'City2Controller@index');