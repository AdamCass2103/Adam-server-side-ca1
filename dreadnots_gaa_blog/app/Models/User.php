<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    // Define the relationship with posts
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
