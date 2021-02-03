<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('langauge', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('code');
            $table->timestamps();
        });

        Schema::create('categories', function ($table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->integer('parent_category')->unsigned();
            $table->mediumText('desc');
            // $table->foreign('parent_category')->references('id')->on('categories');
            $table->timestamps();
            $table->integer('language')->unsigned();
            // $table->foreign('language')->references('id')->on('language');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
        Schema::dropIfExists('langauge');
    }
}
