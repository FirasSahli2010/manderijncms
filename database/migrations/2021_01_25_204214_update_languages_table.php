<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('langauge', function (Blueprint $table) {
          $table->enum('shw', ['Y', 'N'])->default('Y');
          $table->string('locale')->nullable();
          $table->string('flag')->nullable();
          $table->string('translation')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('langauge', function (Blueprint $table) {
            $table->dropColumn('shw');
            $table->dropColumn('locale');
            $table->dropColumn('flag');
            $table->dropColumn('translation');
        });
    }
}
