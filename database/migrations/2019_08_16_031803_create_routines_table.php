<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoutinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('routines', function (Blueprint $table) {
            //routinesテーブル作成
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('task0');
            $table->string('task1')->nullable();
            $table->string('task2')->nullable();
            $table->string('task3')->nullable();
            $table->string('task4')->nullable();
            $table->string('task5')->nullable();
            $table->string('task6')->nullable();
            $table->string('task7')->nullable();
            $table->string('task8')->nullable();
            $table->string('task9')->nullable();
            $table->timestamps();
            //user_idとusersテーブルのidを紐付け
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //routinesテーブル削除
        Schema::dropIfExists('routines');
    }
}
