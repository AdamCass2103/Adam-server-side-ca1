<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    public function run()
    {
        Player::create([
            'name' => "John O'Reilly",
            'age' => 24,
            'position' => 'Forward',
            'goals' => 10,
            'assists' => 5,
            'user_id' => 1, // Make sure this user exists!
        ]);

        Player::create([
            'name' => "Paul Murphy",
            'age' => 28,
            'position' => 'Midfielder',
            'goals' => 4,
            'assists' => 8,
            'user_id' => 1,
        ]);
    }
}