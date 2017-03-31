<?php

/*
?php

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

// include routele pentru login / register / forgot password
Auth::routes();

Route::get('/plecari', 'PlecariController@index');
Route::get('/sosiri', 'SosiriController@index');
Route::get('/program', 'ProgramController@index');
Route::get('/interne', 'InterneController@index');
Route::get('/externe', 'ExterneController@index');


