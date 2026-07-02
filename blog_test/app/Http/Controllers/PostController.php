<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(int $id)
    {
        $post = Post::with('user','category')->findOrFail($id);


        // dd($post);
        return view('client.pages.post-image',['post' => $post]);
    }

    // public function show($id){

    // }
    public function admin(){

    }
}
