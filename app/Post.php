<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function index()
    {
        return view('posts', ['posts' => Post::all()]);
    }

    public function show(int $id)
    {
        return view('post', ['post' => Post::findOrFail($id)]);
    }
}
