<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // This will return the blog index page.
        return view('blog.index');
    }
}
