<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLangToPageAndCagtegory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            //
            $table->integer('language')->unsigned();
            $table->foreign('language')->references('id')->on('language');
        });

        Schema::table('Pages', function (Blueprint $table) {
            //
            //$table->integer('language')->unsigned();
            $table->integer('language')->unsigned();
            $table->foreign('language')->references('id')->on('language');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            //
            $table->dropForeign('language');
            $table->dropColumn('language');
        });

        Schema::table('Pages', function (Blueprint $table) {
            //
            $table->dropForeign('language');
            $table->dropColumn('language');
        });
    }
}
