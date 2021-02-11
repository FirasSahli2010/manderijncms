<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeunItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meun_items', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->string('name')->unique();
            $table->integer('category')->unsigned()->nullable();
            $table->integer('language')->unsigned()->nullable();
            $table->enum('shw', ['Y', 'N'])->default('N');
            $table->integer('order');
            $table->integer('possition')->default(1);
            $table->string('image')->nullable();
            $table->integer('menu-id')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meun_items');
    }
}
