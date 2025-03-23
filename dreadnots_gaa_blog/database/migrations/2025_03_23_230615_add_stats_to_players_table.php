<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatsToPlayersTable extends Migration
{
    public function up()
    {
        Schema::table('players', function (Blueprint $table) {
            $table->integer('goals')->default(0);
            $table->integer('points')->default(0);
            $table->integer('turnovers')->default(0);
            $table->integer('possessions_won')->default(0);
            $table->integer('possessions_lost')->default(0);
            $table->integer('kickouts_won')->default(0);
            $table->integer('kickouts_lost')->default(0);
        });
    }

    public function down()
    {
        Schema::table('players', function (Blueprint $table) {
            $table->dropColumn([
                'goals',
                'points',
                'turnovers',
                'possessions_won',
                'possessions_lost',
                'kickouts_won',
                'kickouts_lost',
            ]);
        });
    }
}