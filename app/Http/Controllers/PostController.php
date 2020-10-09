<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $postsFromDB = Post::all();
        return view('index', ['posts' => $postsFromDB]);
    }
    public function show($post)
    {
        $singlePost = Post::findOrFail($post);
        return view('show', ['singlepost' => $singlePost]);
    }
}
