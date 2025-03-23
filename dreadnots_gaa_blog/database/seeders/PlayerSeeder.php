<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Player;

public function run()
{
    Player::create([
        'name' => 'John O\'Reilly',
        'age' => 24,
        'position' => 'Forward',
        'user_id' => 1
    ]);
}