<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        $posts = Post::all();
        return response()->json($posts);
    }
    public function store(Request $request) {
        $post = new Post;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return response()->json($post);
    }
    public function update($id, Request $request) {
        $post = Post::findOrFail($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return response()->json($post);
    }
}
