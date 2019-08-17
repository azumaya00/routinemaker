<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    //お問い合わせ画面表示
    public function index(){
        return view('contact');
    }
}
