<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //認証に関わる物を使う
use Illuminate\Support\Facades\Log; //ログを取る
use App; //名前空間の指定
use App\Http\Requests\CreateRoutineRequest; //バリデーションを使う

class RoutinesController extends Controller
{
    //マイページ表示
    public function mypage()
    {
        //ユーザ情報を取得
        $user = Auth::user();
        //自分のリストを取得
        $routines = Auth::user()->routines()->get();
        //ビュー表示
        return view('routines.mypage', ['user' => $user, 'routines' => $routines]);
    }

    //新規作成画面表示
    public function new()
    {
        //ユーザ情報を取得
        $user = Auth::user();
        //今登録しているリストの数を取得
        $totalList = App\Routine::where('user_id', $user['id'])->count();
        Log::debug('現在のリスト数: '.$totalList);

        //リスト数が5個を超えていないなら新規リスト登録画面へ
        if($totalList <5){
            //ビュー表示
            return view('routines.new', ['user' => $user]);
        }else{
            //５個以上の場合はマイページへ
            //エラーメッセも
            return redirect('/mypage')->with('err_message', __(('Max List is 5')));
        }

    }

    //新規リスト登録;
    public function create(CreateRoutineRequest $request){
        //バリデーションはフォームリクエスト側でok
        Log::debug('バリデーションok');
        //モデルのインスタンス作成
        $routine = new App\Routine;

        //登録
        //user_idはusersテーブルからひっぱる
        Auth::user()->routines()->save($routine->fill($request->all()));
        Log::debug('登録出来たよ！');

        //マイページへ遷移+成功メッセージ
        return redirect('/mypage')->with('scc_message', __(('Registered!')));
    }

    //リスト削除
    public function delete($id){
        //idが数字かどうかチェックする
        if(!ctype_digit($id)){
            //不正な場合はエラーメッセつけてマイページへ
            return redirect('/mypage')->with('err_message','Invalid operation');
        }
        //問題無ければDBから削除
        Auth::user()->routines()->find($id)->delete();
        //マイページへ遷移+成功メッセージ
        return redirect('/mypage')->with('scc_message', __(('Deleted!')));
    }

    //編集画面表示
    public function edit($id)
    {
        //idが数字かどうかチェックする
        if(!ctype_digit($id)){
            //不正な場合はエラーメッセつけてマイページへ
            return redirect('/mypage')->with('err_message','Invalid operation');
        }

        //ユーザ情報を取得
        $user = Auth::user();
        //編集するリストを取得
        $routine = Auth::user()->routines->find($id);
        //ビュー表示
        return view('routines.edit', ['user' => $user, 'routine' => $routine]);
    }

    //リスト編集機能
    public function update(CreateRoutineRequest $request, $id){
        //バリデーションはフォームリクエスト利用
        //今回変更するリストを取得
        $routine = Auth::user()->routines->find($id);

        //更新
        $routine->fill($request->all())->save();
        Log::debug('更新出来たよ！');

        //マイページへ遷移+成功メッセージ
        return redirect('/mypage')->with('scc_message', __(('Updated!')));

    }

    //準備画面表示
    public function prepare($id)
    {
        //idが数字かどうかチェックする
        if(!ctype_digit($id)){
            //不正な場合はエラーメッセつけてマイページへ
            return redirect('/mypage')->with('err_message','Invalid operation');
        }

        //ユーザ情報を取得
        $user = Auth::user();
        //表示するリストを取得
        $routine = Auth::user()->routines->find($id);
        //ビュー表示
        return view('routines.prepare', ['user' => $user, 'routine' => $routine]);
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
