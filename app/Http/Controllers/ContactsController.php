<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; //認証に関わる物を使う
use Illuminate\Support\Facades\Log; //ログを取る
use App; //名前空間の指定
use App\Http\Requests\ContactRequest;//バリデーションを使う
use Illuminate\Support\Facades\Mail;

class ContactsController extends Controller
{
    //問い合わせ送信
    public function  sent(ContactRequest $request){
        //バリデーションはフォームリクエスト側でok
        //変数に情報を詰める
        $contact = $request->all();
        $to = 'rie@rie-k.com';
        //メールを送る
        Mail::to($to)->send(new Contact($contact));
        Log::debug('送信出来たよ！');
        //リダイレクト
        if(Auth::check()){
            return redirect('/mypage')->with('scc_message', __(('Your message has been sent!')));
        }else{
            return redirect('/')->with('scc_message', __(('Your message has been sent!')));
        }
    }
}
