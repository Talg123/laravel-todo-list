<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'notes'],function() {

    Route::get('/','NoteController@index');

    Route::post('create','NoteController@create');

    Route::put('update','NoteController@update');

    Route::delete('del','NoteController@delete');

});