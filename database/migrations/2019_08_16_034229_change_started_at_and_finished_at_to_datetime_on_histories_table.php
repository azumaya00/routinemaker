<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeStartedAtAndFinishedAtToDatetimeOnHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('histories', function (Blueprint $table) {
            //型をdatetimeに変更
            $table->dateTime('started_at')->change();
            $table->dateTime('finished_at')->nullable()->change();
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
            //型をtimestampに戻す
            $table->timestamp('started_at')->change();
            $table->timestamp('finished_at')->nullable()->change();
        });
    }
}
