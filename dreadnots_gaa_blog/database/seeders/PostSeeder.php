<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;

public function run()
{
    Post::create([
        'title' => 'Welcome to Dreadnots GAA Blog',
        'content' => 'This is the first post for Dreadnots GAA team. Stay tuned for updates!',
        'user_id' => 1
    ]);
}

