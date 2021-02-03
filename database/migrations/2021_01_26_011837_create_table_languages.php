<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLanguages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('languages', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('code');
            $table->enum('shw', ['Y', 'N'])->default('Y');
            $table->string('locale')->nullable();
            $table->string('flag')->nullable();
            $table->string('translation')->nullable();
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
        Schema::dropIfExists('languages');
    }
}
