<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('order0');
            $table->string('order1')->nullable();
            $table->string('order2')->nullable();
            $table->string('order3')->nullable();
            $table->string('order4')->nullable();
            $table->string('order5')->nullable();
            $table->string('order6')->nullable();
            $table->string('order7')->nullable();
            $table->string('order8')->nullable();
            $table->string('order9')->nullable();
            $table->timestamp('started_at');
            $table->timestamp('finished_at')->nullable();
            $table->boolean('completion')->nullable();
            $table->timestamps();
            //user_idをusersテーブルのidと紐付け
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
        //historiesテーブル削除
        Schema::dropIfExists('histories');
    }
}
