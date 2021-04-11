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
//TOPを表示
Route::get('top','HelloController@top');
//自己紹介を表示
Route::get('introduction', 'HelloController@introduction');
//お問い合わせフォームを表示
Route::get('contact', 'ContactsController@create');
//お問い合わせフォームで送信されたデータを追加
Route::post('store', 'ContactsController@store');
//dataを表示
Route::get('data', 'ContactsController@index');
//削除機能
Route::delete('data/{id}', 'ContactsController@destroy');
//editを表示
Route::get('data/{id}/edit', 'ContactsController@edit');
//update機能
Route::put('data/{id}', 'ContactsController@update');