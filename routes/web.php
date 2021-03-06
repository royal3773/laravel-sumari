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
    return redirect('top');
});
//TOPを表示
Route::get('top','HelloController@top');
//test表示
Route::get('index', 'HelloController@test');
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
//論理削除（ソフトデリート）をしたデータを一覧する
Route::get('softdelete_method', 'ContactsController@softdelete_get');
//論理削除の復元処理
Route::put('softdelete_method/{id}/restore', 'ContactsController@restore');
//物理削除の処理
Route::delete('softdelete_method/{id}/forcedelete', 'ContactsController@forcedelete');
//添付ファイルを個別表示
Route::get('data/{id}/file', 'ContactsController@file');