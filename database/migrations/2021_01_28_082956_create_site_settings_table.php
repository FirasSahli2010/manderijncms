<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiteSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_title')->nullable();
            $table->integer('language')->unsigned();
            $table->string('site_name')->nullable();
            $table->string('site_icon')->nullable();
            $table->mediumText('site_meta_desc')->nullable();
            $table->mediumText('site_meta_keywords')->nullable();
            $table->mediumText('site_content_rights')->nullable();
            $table->enum('site_name_in_page_title', ['Y', 'N'])->default('N');
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
        Schema::dropIfExists('site_settings');
    }
}
