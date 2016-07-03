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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'post'], function () {
    Route::get('index', ['uses' => 'PostController@index', 'as' => 'post.list']);
    Route::get('trash', ['uses' => 'PostController@trash', 'as' => 'post.trash']);
    Route::get('create', ['uses' => 'PostController@create', 'as' => 'post.create']);
    Route::get('edit/{id}', ['uses' => 'PostController@edit', 'as' => 'post.edit']);
    Route::get('delete/{id}', ['uses' => 'PostController@destroy', 'as' => 'post.delete']);
    Route::get('restore/{id}', ['uses' => 'PostController@restore', 'as' => 'post.restore']);
    Route::get('forceDelete/{id}', ['uses' => 'PostController@forceDelete', 'as' => 'post.delete.force']);
    Route::post('update', ['uses' => 'PostController@update', 'as' => 'post.update']);
    Route::post('store', ['uses' => 'PostController@store', 'as' => 'post.store']);
});