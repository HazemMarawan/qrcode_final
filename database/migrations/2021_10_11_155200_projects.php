<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Projects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->integer('baths')->nullable();
            $table->integer('beds')->nullable();
            $table->integer('rooms')->nullable();
            $table->integer('location_id')->nullable();
            $table->integer('type')->nullable();
            $table->double('price')->nullable();
            $table->string('area')->nullable();
            $table->text('note')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('active')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
