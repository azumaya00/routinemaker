<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HistoryController extends Controller
{
    //履歴表示
    //あとでid指定とかを入れる
    public function show(){
        return view('histories.show');
    }
}
