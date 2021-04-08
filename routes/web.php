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

//①フォームから受け取ったデータの登録処理　②データを一覧表示させる処理
Route::resource('data', 'ContactsController');
//削除処理
Route::post('delete/', 'ContactsController@destroy');

