<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //認証に関わる物を使う
use Illuminate\Support\Facades\Log; //ログを取る
use App; //名前空間の指定

class ContactsController extends Controller
{
    //お問い合わせ画面表示
    public function index(){
        if(Auth::check()){
            //ログインしている場合ユーザ情報を取得
            $user = Auth::user();
        }else{
            $user = json_encode([""=>[]]);
        }
        //ビュー表示
        return view('contact', ['user' => $user]);
    }
}
