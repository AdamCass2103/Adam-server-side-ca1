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
            'user_id' => 1
        ]);

        Player::create([
            'name' => 'Mick Donnelly',
            'age' => 28,
            'position' => 'Midfielder',
            'user_id' => 1
        ]);

        Player::create([
            'name' => 'Brian Casey',
            'age' => 22,
            'position' => 'Goalkeeper',
            'user_id' => 1
        ]);
    }
}