<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meuns', function (Blueprint $table) {
            $table->id();

            $table->string('title')->nullable();
            $table->string('slug')->unique();
            $table->string('name')->unique();
            $table->integer('category')->unsigned()->nullable();
            $table->integer('language')->unsigned()->nullable();
            $table->enum('shw', ['Y', 'N'])->default('N');
            $table->enum('is-main-menu', ['Y', 'N'])->default('N');
            $table->integer('possition')->default(1);

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
        Schema::dropIfExists('meuns');
    }
}
