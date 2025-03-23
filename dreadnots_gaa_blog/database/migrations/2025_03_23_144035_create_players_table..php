<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    public function up()
    {

    Schema::create('players', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->integer('age');
        $table->string('position');
        $table->integer('goals')->default(0);
        $table->integer('points')->default(0);
        $table->integer('turnovers')->default(0);
        $table->integer('possessions_lost')->default(0);
        $table->integer('possessions_won')->default(0);
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}


    public function down()
    {
        Schema::dropIfExists('players');
    }
}
