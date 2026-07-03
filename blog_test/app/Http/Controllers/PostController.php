<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(int $user_id)
    {
        $posts = Post::where('user_id', $user_id)->get();
        return view('client.pages.blog-single', ['posts' => $posts]);
    }
    public function show(int $id)
    {
        $post = Post::with('user', 'category', 'comments')->findOrFail($id);
        // dd($post->comments);
        return view('client.pages.post-image', ['post' => $post]);
    }

    public function admin()
    {
        $posts = Post::all();
        return view('admin.pages.posts', ['posts' => $posts]);
    }
}
