<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('title')->nullable();
            $table->integer('category')->unsigned()->default(0);
            $table->integer('page')->unsigned()->default(0);
            $table->integer('post')->unsigned()->default(0);
            $table->integer('language')->unsigned()->nullable();
            $table->enum('shw', ['Y', 'N'])->default('N');
            $table->integer('possition')->default(1);
            $table->integer('order')->unsigned()->nullable();
            $table->integer('template')->unsigned()->default(0);

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
        Schema::dropIfExists('blocks');
    }
}
