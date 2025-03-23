<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;
use Carbon\Carbon;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Player::create([
            'name' => 'John O\'Reilly',
            'age' => 24,
            'position' => 'Forward',
            'goals' => 12,
            'assists' => 7,
            'user_id' => 1, // Make sure user with ID 1 exists
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Player::create([
            'name' => 'Paul Murphy',
            'age' => 28,
            'position' => 'Midfielder',
            'goals' => 5,
            'assists' => 14,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Player::create([
            'name' => 'David Byrne',
            'age' => 22,
            'position' => 'Goalkeeper',
            'goals' => 0,
            'assists' => 1,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}