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

Route::get('hello','HelloController@index');

Route::get('top','HelloController@top');

Route::get('contact', 'HelloController@contact');

Route::get('introduction', 'HelloController@introduction');

#Route::post('store','HelloController@store');

Route::get('data', 'HelloController@data');

Route::resource('store', 'ContactController');
