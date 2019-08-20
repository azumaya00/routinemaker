<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //認証に関わる物を使う
use Illuminate\Support\Facades\Log; //ログを取る
use App; //名前空間の指定

class HistoriesController extends Controller
{
    //履歴表示
    //あとでid指定とかを入れる
    public function show(){
        //ユーザ情報を取得
        $user = Auth::user();
        //履歴を取得
        //latestで新しい順に
        $histories = Auth::user()->histories()->latest('finished_at')->paginate(5);
        //ビュー表示
        return view('histories.show', ['user' => $user, 'histories' => $histories]);
    }
}
