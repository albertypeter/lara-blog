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

Route::get('/show/{id}',[
    'as' => 'show', 'uses' => 'PlayerController@showAction'
]);

Route::get('/insert',[
   'as' => 'insert','uses' => 'PlayerController@insertAction'
]);

Route::get('/update/{id}', [
   'as' => 'update','uses' => 'PlayerController@updateAction'
]);

Route::get('/delete/{id}', [
   'as' => 'delete','uses' => 'PlayerController@deleteAction'
]);

Route::get('/showAll', [
    'as' => 'showAll','uses' => 'PlayerController@showAllAction'
]);


