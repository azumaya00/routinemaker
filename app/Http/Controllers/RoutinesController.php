<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutinesController extends Controller
{
    //マイページ表示
    public function mypage(){
        return view('routines.mypage');
    }

    //新規作成画面表示
    public function new(){
        return view('routines.new');
    }

    //編集画面表示
    public function edit($id){
        return view('routines.edit');
    }

    //準備画面表示
    public function prepare($id){
        return view('routines.prepare');
    }

    //実行中画面表示
    public function proceed($id){
        return view('routines.proceed');
    }

    //完了画面表示
    public function complete(){
        return view('routines.complete');
    }
}
