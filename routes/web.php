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

// ('受け取ったURL', '呼び出すコントローラー名@メソッド名')
Route::get('/', 'DiaryController@index')->name('diary.index');

Route::get('/diaries/create', 'DiaryController@showCreateForm')->name('diary.create');

Route::post('/diaries/create', 'DiaryController@store')->name('diary.store');

















