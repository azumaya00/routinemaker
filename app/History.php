<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //fillableで紐つけ
    protected $fillable = ['user_id','title','task0','task1','task2','task3','task4','task5','task6','task7','task8','task9','started_at','finished_at','completion'];

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
