<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //認証に関わる物を使う
use Illuminate\Support\Facades\Log; //ログを取る
use App; //名前空間の指定
use App\Http\Requests\CreateRoutineRequest; //バリデーションを使う
use Carbon\Carbon; //現在時刻取得用

class RoutinesController extends Controller
{
    //マイページ表示
    public function mypage()
    {
        //ユーザ情報を取得
        $user = Auth::user();
        //自分のリストを取得
        $routines = Auth::user()->routines()->get();
        Log::debug('現在のリスト: ' . $routines);
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
        Log::debug('現在のリスト数: ' . $totalList);

        //リスト数が5個を超えていないなら新規リスト登録画面へ
        if ($totalList < 5) {
            //ビュー表示
            return view('routines.new', ['user' => $user]);
        } else {
            //５個以上の場合はマイページへ
            //エラーメッセも
            return redirect('/mypage')->with('err_message', __(('Max List is 5')));
        }

    }

    //新規リスト登録;
    public function create(CreateRoutineRequest $request)
    {
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
    public function delete($id)
    {
        //idが数字かどうかチェックする
        if (!ctype_digit($id)) {
            //不正な場合はエラーメッセつけてマイページへ
            return redirect('/mypage')->with('err_message', 'Invalid operation');
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
        if (!ctype_digit($id)) {
            //不正な場合はエラーメッセつけてマイページへ
            return redirect('/mypage')->with('err_message', 'Invalid operation');
        }

        //ユーザ情報を取得
        $user = Auth::user();
        //編集するリストを取得
        $routine = Auth::user()->routines->find($id);
        //ビュー表示
        return view('routines.edit', ['user' => $user, 'routine' => $routine]);
    }

    //リスト編集機能
    public function update(CreateRoutineRequest $request, $id)
    {
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
        if (!ctype_digit($id)) {
            //不正な場合はエラーメッセつけてマイページへ
            return redirect('/mypage')->with('err_message', __(('Invalid operation')));
        }

        //ユーザ情報を取得
        $user = Auth::user();
        //表示するリストを取得
        $routine = Auth::user()->routines->find($id);
        //ビュー表示
        return view('routines.prepare', ['user' => $user, 'routine' => $routine]);
    }

    //実行開始
    public function start(Request $request, $id)
    {
       // log::debug('実行開始押したよ！');
       // log::debug('リクエストの中身:' . $request[0]);
       // log::debug('id番号:' . $id);
        //idが数字かどうかチェックする
        if (!ctype_digit($id)) {
            //不正な場合はエラーメッセつけてマイページへ
            return redirect('/mypage')->with('err_message', __(('Invalid operation')));
        }
        //渡ってきたデータの加工
        for($i=0; $i<=9; $i++){
            if($request[$i]){
                $request['task'.$i] = $request[$i];
            }else{
                continue;
            }
        }

        //モデルのインスタンス作成
        $history = new App\History;

        //今回変更するリストのタイトルを取得して
        //requestOrderに詰める
        $routine = Auth::user()->routines->find($id);
        $request['title'] = $routine['title'];

        //開始時刻は現在時刻を詰める
        $request['started_at'] = Carbon::now();

        //全て入ってるか確認
        //log::debug($request);

        //historiesの方へ追加
        Auth::user()->histories()->save($history->fill($request->all()));
        Log::debug('履歴データ追加完了');

        //今保存した履歴データを取得
        $latestHistory = Auth::user()->histories()->latest('started_at')->first();
        log::debug($latestHistory);

        //最新履歴データのidを返す
        return $data = $latestHistory['id'];

        //routinesテーブル更新の際に使う
       // $routine->fill($request->all())->save();
       // Log::debug('更新出来たよ！');


    }

    //実行中画面表示
    public function proceed($id)
    {
        //idが数字かどうかチェックする
        if (!ctype_digit($id)) {
            //不正な場合はエラーメッセつけてマイページへ
            return redirect('/mypage')->with('err_message', __(('Invalid operation')));
        }

        //表示するリストを取得
        $history = Auth::user()->histories->find($id);

        //既に終了している履歴idを手動で入れた場合
        //エラーメッセを付けてマイページへ
        if(!empty($history['finished_at'])){
            return redirect('/mypage')->with('err_message', __(('Invalid operation')));
        }else{
            //問題無ければビューを表示
            return view('routines.proceed',['history' => $history]);
        }
    }

    //リスト実行完了
    public function finish(Request $request, $id){
        //今回変更するリストを取得
        $history = Auth::user()->histories->find($id);

        //$requestに終了時刻と完了フラグをつめる
        $request['finished_at'] = Carbon::now();
        $request['completion'] = true;

        //更新
        $history->fill($request->all())->save();
        Log::debug('更新出来たよ！');
    }

    //リスト中断
    public function suspend(Request $request, $id){
        //今回変更するリストを取得
        $history = Auth::user()->histories->find($id);

        //$requestに終了時刻と未完了フラグをつめる
        $request['finished_at'] = Carbon::now();
        $request['completion'] = false;

        //更新
        $history->fill($request->all())->save();
        Log::debug('更新出来たよ！');

    }

    //完了画面表示
    public function complete()
    {
        return view('routines.complete');
    }
}
