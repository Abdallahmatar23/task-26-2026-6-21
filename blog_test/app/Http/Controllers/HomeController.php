<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::with('user', 'category')->paginate(12);
        $featuredPosts = $posts->where('is_featured',1);
        // dd($featuredPosts);
        return view('client.pages.home', ['posts' => $posts,'featuredPosts' => $featuredPosts]);
    }
}
