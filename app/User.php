<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //routinesテーブル、historiesと紐付ける
    //今回は1対多なのでhasMany
    //主テーブルから複数の従テーブルへ紐付け
    //usersテーブルは主になる(参照元なので)
    public function routines()
    {
        //routine.phpと紐付ける
        return $this->hasMany('App\Routine');
    }
    public function histories()
    {
        //history.phpと紐付ける
        return $this->hasMany('App\History');
    }
}
