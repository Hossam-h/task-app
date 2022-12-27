<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFootballMatchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('football_matchs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('first_team_id');
            $table->foreign('first_team_id')->references('id')->on('teams');
            $table->unsignedBigInteger('second_team_id');
            $table->foreign('second_team_id')->references('id')->on('teams');
            $table->Integer('first_team_score');
            $table->Integer('second_team_score');
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
        Schema::dropIfExists('football_matchs');
    }
}
