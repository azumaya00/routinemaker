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
use Illuminate\Support\Facades\Auth; //認証に関わる物を使う

//ドメイントップ
Route::get('/', function () {
    if(Auth::check()){
        //ログインしている場合ユーザ情報を取得
        $user = Auth::user();
    }else{
        //未ログインの場合は空の連想配列
        $user = json_encode([""=>[]]);
    }
    return view('index', ['user' => $user]);
});

//ログイン必要
Route::group(['middleware' => 'auth'], function () {
    Route::get('/mypage', 'RoutinesController@mypage')->name('routines.mypage'); //マイページ表示
    Route::get('/routines/new', 'RoutinesController@new')->name('routines.new'); //新規作成画面表示
    Route::get('/routines/{id}/edit', 'RoutinesController@edit')->name('routines.edit'); //編集画面表示
    Route::get('/routines/{id}/prepare', 'RoutinesController@prepare')->name('routines.prepare'); //準備画面表示
    Route::get('/routines/{id}/proceed', 'RoutinesController@proceed')->name('routines.proceed'); //実行中画面表示
    Route::get('/routines/complete', 'RoutinesController@complete')->name('routines.complete'); //完了画面表示
    Route::get('/histories', 'HistoriesController@show')->name('histories.show'); //履歴表示

    Route::post('/routines', 'RoutinesController@create')->name('routines.create'); //新規リスト作成
    Route::post('/routines/{id}', 'RoutinesController@update')->name('routines.update'); //リストアップデート
    Route::post('/routines/{id}/delete', 'RoutinesController@delete')->name('routines.delete'); //リスト削除
    Route::post('/routines/{id}/start', 'RoutinesController@start')->name('routines.start'); //リスト実行開始
    Route::post('/routines/{id}/finish', 'RoutinesController@finish')->name('routines.finish'); //リスト完了
    Route::post('/routines/{id}/suspend', 'RoutinesController@suspend')->name('routines.suspend'); //リスト中断
});

//ログイン不要
Route::get('/contacts', 'ContactsController@index')->name('contacts'); //お問い合わせ表示

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
