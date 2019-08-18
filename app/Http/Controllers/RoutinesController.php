<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //認証に関わる物を使う
use Illuminate\Support\Facades\Log; //ログを取る
use App; //名前空間の指定

class RoutinesController extends Controller
{
    //マイページ表示
    public function mypage()
    {
        //ユーザ情報を取得
        $user = Auth::user();
        //自分のリストを取得
        $routine = Auth::user()->routines()->get();
        //ビュー表示
        return view('routines.mypage', ['user' => $user, 'routine' => $routine]);
    }

    //新規作成画面表示
    public function new()
    {
        //ユーザ情報を取得
        $user = Auth::user();
        //ビュー表示
        return view('routines.new', ['user' => $user]);
    }

    //編集画面表示
    public function edit($id)
    {
        //ユーザ情報を取得
        $user = Auth::user();
        //ビュー表示
        return view('routines.edit', ['user' => $user]);
    }

    //準備画面表示
    public function prepare($id)
    {
        //ユーザ情報を取得
        $user = Auth::user();
        //ビュー表示
        return view('routines.prepare', ['user' => $user]);
    }

    //実行中画面表示
    public function proceed($id)
    {
        return view('routines.proceed');
    }

    //完了画面表示
    public function complete()
    {
        return view('routines.complete');
    }
}
