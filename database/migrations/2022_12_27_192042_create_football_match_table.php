<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFootballMatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('football_match', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('first_team_id');
            $table->foreign('first_team_id')->references('id')->on('teams');
            $table->unsignedBigInteger('second_team_id');
            $table->foreign('second_team_id')->references('id')->on('teams');
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
        Schema::dropIfExists('football_match');
    }
}
