<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(int $user_id)
    {
        $posts = Post::with('user','category','comments')->where('user_id', $user_id)->get();

        $featuredPosts = $posts->where('is_featured', 1)->all();

        return view('client.pages.blog-single', ['posts' => $posts, 'featuredPosts' => $featuredPosts]);
    }
    public function show(int $id)
    {
        $post = Post::with('user', 'category', 'comments')->findOrFail($id);
        $featuredPosts = $post->category->posts()->where('is_featured', 1)->latest()->get();
        // dd($featuredPosts);
        return view('client.pages.post-image', ['post' => $post, 'featuredPosts' => $featuredPosts]);
    }

    public function admin()
    {
        $posts = Post::all();
        return view('admin.pages.posts', ['posts' => $posts]);
    }
}
