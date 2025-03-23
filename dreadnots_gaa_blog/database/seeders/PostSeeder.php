<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create([
            'title' => 'Welcome to Dreadnots GAA Blog',
            'content' => 'This is the first post for Dreadnots GAA team. Stay tuned for updates!',
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Match Day Recap',
            'content' => 'Dreadnots GAA won by 3 points against their rivals!',
            'user_id' => 1
        ]);
    }
}
