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

Route::get('/', 'AccueilController@index');

Route::get('/lister', 'ListerController@index');

Route::get('/ajoutlivre', 'ListerController@ajoutlivre');

Route::post('/insertlivre', 'ListerController@insertlivre');

Route::post('/deletelivre', 'ListerController@deletelivre');

Route::post('/updatelivre', 'ListerController@updatelivre');

Route::post('/updatelivre_action', 'ListerController@updatelivre_action');

Auth::routes();

