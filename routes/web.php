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
//Route in relation to book element
Route::get('/', 'AccueilController@index');

Route::get('/lister', 'ListerController@index');

Route::get('/ajoutlivre', 'ListerController@ajoutlivre');

Route::post('/insertlivre', 'ListerController@insertlivre');

Route::post('/deletelivre', 'ListerController@deletelivre');

Route::post('/updatelivre', 'ListerController@updatelivre');

Route::post('/updatelivre_action', 'ListerController@updatelivre_action');

//Route in relation to author element
Route::get('/ajoutauthor', 'AuthorController@ajoutauthor');

Route::post('/insertauthor', 'AuthorController@insertauthor');

//Route in relation to message element
Route::get('/ecrire', 'MessagerieController@ecrire');

Route::get('/messagerie', 'MessagerieController@index');

Auth::routes();

