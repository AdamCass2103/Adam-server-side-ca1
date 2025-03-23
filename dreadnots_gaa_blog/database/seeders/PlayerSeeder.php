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
            'goals' => 12,
            'assists' => 7,
            'user_id' => 1, // Link to John Matthews
        ]);

        Player::create([
            'name' => 'Liam O\'Connor',
            'age' => 27,
            'position' => 'Midfielder',
            'goals' => 9,
            'assists' => 10,
            'user_id' => 2, // Link to Sarah O'Connor
        ]);

        Player::create([
            'name' => 'David Byrne',
            'age' => 22,
            'position' => 'Defender',
            'goals' => 3,
            'assists' => 5,
            'user_id' => 3, // Link to Liam Dempsey
        ]);
    }
}