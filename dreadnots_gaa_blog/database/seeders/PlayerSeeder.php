<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    public function run()
    {
        Player::create([
            'name' => 'John O\'Reilly',
            'age' => 24,
            'position' => 'Forward',
            'goals' => 5,
            'points' => 15,
            'turnovers' => 3,
            'possessions_lost' => 2,
            'possessions_won' => 10,
            'user_id' => 1,
        ]);

        Player::create([
            'name' => 'Liam O\'Connor',
            'age' => 27,
            'position' => 'Midfielder',
            'goals' => 2,
            'points' => 8,
            'turnovers' => 5,
            'possessions_lost' => 4,
            'possessions_won' => 12,
            'user_id' => 2,
        ]);

        Player::create([
            'name' => 'David Byrne',
            'age' => 22,
            'position' => 'Defender',
            'goals' => 0,
            'points' => 3,
            'turnovers' => 1,
            'possessions_lost' => 1,
            'possessions_won' => 15,
            'user_id' => 3,
        ]);
    }
}