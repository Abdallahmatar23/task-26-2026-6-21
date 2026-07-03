<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(int $id)
    {
        $post = Post::with('user','category','comments')->findOrFail($id);


        // dd($post->comments);
        return view('client.pages.post-image',['post' => $post]);
    }

    // public function show($id){

    // }
    public function admin(){

    }
}
