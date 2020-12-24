<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableFilms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('films', function (Blueprint $table) {
            $table->tinyInteger('new')->default(0);
            $table->tinyInteger('hit')->default(0);
            $table->tinyInteger('recommend')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('films', function (Blueprint $table) {
             $table->dropColumn('new');
             $table->dropColumn('hit');
             $table->dropColumn('recommend');
        });
    }
}
