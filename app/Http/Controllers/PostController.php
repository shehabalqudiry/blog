<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $postsFromDB = Post::all();
        return view('posts.index', ['posts' => $postsFromDB]);
    }
    public function show($post)
    {
        $singlePost = Post::findOrFail($post);
        return view('posts.show', ['singlepost' => $singlePost]);
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store()
    {
        // $data = request()->all();
        $title = request()->title;
        $desc = request()->desc;
        $post = Post::create([
            'title' => $title,
            'description' => $desc
        ]);
        return redirect(route('posts.index'));
    }
    public function edit($post)
    {
        $singlePost = Post::findOrFail($post);

        return view('posts.edit', ['singlepost' => $singlePost]);
    }
    public function update($post, Request $request)
    {
        $singlepost = Post::findOrFail($post);
        // $data = request()->all();

        $singlepost->update([
            'title' => $request->title,
            'description' => $request->desc,
        ]);
        return redirect(route('posts.index'));
    }
}
