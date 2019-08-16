<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //fillableで紐つけ
    protected $fillable = ['user_id','title','order0','order1','order2','order3','order4','order5','order6','order7','order8','order9','started_at','finished_at','completion'];

    //usersテーブルと紐付ける
    //historiesテーブルはusersテーブルの情報を参考にする側なので
    //従テーブルになる
    public function user()
    {
        //user.phpとの紐付け
        //従テーブルが「この主テーブルと紐つくよ！」と宣言するので
        //belongsToを使う
        return $this->belongsTo('App\User');
    }
}
