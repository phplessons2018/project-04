<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                'title' => 'required|min:2',
                'content' => 'required|min:10'
            ]);
        $file = $request->file('image');
        if (!empty($file)) {
            $file->move(public_path('uploads'));
        }
        $post = new Post();
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->user_id = Auth::id();
        $post->save();

        return redirect()->route('posts.index');
    }

    public function index()
    {
        $posts = Post::with('userData')->get();
        $data['posts'] = $posts;
        return view('posts.index', $data);
    }
}
