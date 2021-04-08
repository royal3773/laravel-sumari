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

Route::get('top','HelloController@top');

Route::get('introduction', 'HelloController@introduction');

Route::get('contact', 'HelloController@contact');

#Route::post('store','HelloController@store');
//フォームから受け取ったデータの登録処理
Route::resource('store', 'ContactsController');
//データ一覧表示
Route::get('data', 'HelloController@data');
//削除処理
Route::post('data/{id}', 'ContactsController@destroy');

