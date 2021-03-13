<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
          $table->increments('id');
            $table->timestamps();
            $table->softDeletes();
            $table->string('title');
            $table->string('slug')->unique();
            $table->integer('parent_category')->unsigned();
            $table->mediumText('desc')->nullable();
            $table->integer('language')->unsigned();

            // $table->foreign('parent_category')->references('id')->on('categories');
            // $table->foreign('language')->references('id')->on('language');
            $table->enum('shw', ['Y', 'N'])->default('N');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
