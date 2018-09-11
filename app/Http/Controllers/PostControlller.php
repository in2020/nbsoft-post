<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostControlller extends Controller
{
    public function index()
    {
        return view('posts', ['posts' => Post::all()]);
    }

    public function show(int $id)
    {
        return view('post', ['post' => Post::find($id)]);
    }
}
