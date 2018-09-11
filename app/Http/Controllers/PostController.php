<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
        return response()
            ->json(['posts' => Post::all()])
            ->withCallback($request->input('callback'));
    }

    public function show($id, Request $request)
    {
        return response()
            ->json(['post' => Post::find($id)])
            ->withCallback($request->input('callback'));
    }

    public function indexView()
    {
        return ['posts' => Post::all()];
    }

    public function showView(int $id)
    {
        return ['post' => Post::find($id)];
    }
}
