<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateMenuItemK extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('meun_items', function (Blueprint $table) {
            $table->integer('post')->nullable();
            $table->integer('page')->nullable();
            $table->string('link')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('meun_items', function (Blueprint $table) {
            $table->dropColumn('post');
            $table->dropColumn('page');
            $table->dropColumn('link');
        });
    }
}
