<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxerTournamentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxer_tournament', function (Blueprint $table) 
            {
                $table->increments('id');
                $table->integer('boxer_id')->unsigned();
                $table->integer('tournament_id')->unsigned();
                $table->foreign('boxer_id')->references('id')->on('boxers')->onDelete('cascade');
                $table->foreign('tournament_id')->references('id')->on('tournaments')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boxer_tournament');
    }
}
