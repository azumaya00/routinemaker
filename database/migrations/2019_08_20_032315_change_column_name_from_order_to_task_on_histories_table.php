<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeColumnNameFromOrderToTaskOnHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('histories', function (Blueprint $table) {
            //historiesテーブルの全部のレコードを削除
            //statementを使うと生SQL文で宣言出来る
            DB::statement('DELETE FROM histories');
            //orderで作ってあるカラムを全てtaskに
            $table->renameColumn('order0', 'task0');
            $table->renameColumn('order1', 'task1');
            $table->renameColumn('order2', 'task2');
            $table->renameColumn('order3', 'task3');
            $table->renameColumn('order4', 'task4');
            $table->renameColumn('order5', 'task5');
            $table->renameColumn('order6', 'task6');
            $table->renameColumn('order7', 'task7');
            $table->renameColumn('order8', 'task8');
            $table->renameColumn('order9', 'task9');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('histories', function (Blueprint $table) {
            //カラム名をtaskからorderへ
            $table->renameColumn('task0','order0');
            $table->renameColumn('task1','order1');
            $table->renameColumn('task2','order2');
            $table->renameColumn('task3','order3');
            $table->renameColumn('task4','order4');
            $table->renameColumn('task5','order5');
            $table->renameColumn('task6','order6');
            $table->renameColumn('task7','order7');
            $table->renameColumn('task8','order8');
            $table->renameColumn('task9','order9');
        });
    }
}
