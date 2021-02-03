<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pages', function ($table) {
            //
            $table->increments('id');
            $table->integer('category')->unsigned();

            $table->string('title');
            $table->string('slug')->unique();
            $table->mediumText('desc');
            $table->integer('language')->unsigned();
            // $table->foreign('language')->references('id')->on('language');
            $table->timestamps();
        });

       //  Schema::table('Pages', function($table) {
       //     $table->foreign('category')->references('id')->on('categories')->onDelete('cascade');
       // });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Pages');
    }
}
