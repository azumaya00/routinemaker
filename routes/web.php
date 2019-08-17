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
    return view('index');
});

Route::get('/contacts', 'ContactsController@index')->name('contacts'); //お問い合わせ表示
Route::get('/mypage', 'RoutinesController@mypage')->name('routines.mypage'); //マイページ表示
Route::get('/routines/new', 'RoutinesController@new')->name('routines.new'); //新規作成画面表示
Route::get('/routines/{id}/edit', 'RoutinesController@edit')->name('routines.edit'); //編集画面表示
Route::get('/routines/{id}/prepare', 'RoutinesController@prepare')->name('routines.prepare'); //準備画面表示
Route::get('/routines/{id}/proceed', 'RoutinesController@proceed')->name('routines.proceed'); //実行中画面表示
Route::get('/routines/complete', 'RoutinesController@complete')->name('routines.complete'); //完了画面表示
Route::get('/histories', 'HistoriesController@show')->name('histories.show'); //履歴表示

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
