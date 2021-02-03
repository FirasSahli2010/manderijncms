<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPublishedCategories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->enum('shw', ['Y', 'N'])->default('N');
            $table->enum('deleted', ['Y', 'N'])->default('N');
        });

        Schema::table('Pages', function (Blueprint $table) {
            $table->enum('shw', ['Y', 'N'])->default('N');
            $table->enum('deleted', ['Y', 'N'])->default('N');
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
          $table->dropColumn('shw');
          $table->dropColumn('deleted');
      });

      Schema::table('Pages', function (Blueprint $table) {
          //
          $table->dropColumn('shw');
          $table->dropColumn('deleted');
      });
    }
}
