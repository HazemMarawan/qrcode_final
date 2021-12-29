<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Settings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('slider1_title')->nullable();
            $table->string('slider1_sub_title')->nullable();
            $table->string('slider2_title')->nullable();
            $table->string('slider2_sub_title')->nullable();
            $table->string('slider1_image')->nullable();
            $table->string('slider2_image')->nullable();
            $table->string('about')->nullable();
            $table->string('contact')->nullable();
            $table->string('project_section_title')->nullable();
            $table->string('project_section_sub_title')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('instgram_link')->nullable();
            $table->string('telegram_link')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->integer('updated_by')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
}

