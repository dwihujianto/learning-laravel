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

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware'=>'auth'],function(){
	Route::get('/book','BookController@index');
	Route::get('/book/create','BookController@create');
	Route::post('/book','BookController@store');
	Route::get('/book/{id}/edit','BookController@edit');
	Route::put('/book/{id}','BookController@update');
	Route::delete('/book/{id}','BookController@destroy');
});


