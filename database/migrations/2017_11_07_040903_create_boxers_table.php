<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxers', function (Blueprint $table) {
                $table->increments('id');
                $table->boolean('approved')->default(false);
                $table->string('slug');
                $table->string('name');
                $table->date('dob');
                $table->unsignedInteger('weight_id');
                $table->string('image_path')->nullable();
                $table->string('country');
                $table->integer('power');
                $table->integer('speed');
                $table->integer('defense');
                $table->integer('offense');
                $table->integer('chin');
                $table->integer('stamina');
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
        Schema::dropIfExists('boxers');
    }
}
