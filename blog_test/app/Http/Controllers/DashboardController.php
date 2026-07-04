<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $totalPosts = Post::count();
        $totalCategories =Category::count();
        $totalComments = Comment::count();
        $featuredPostsCount = Post::where('is_featured',1)->count();
        return view('admin.pages.dashboard',compact('totalPosts','totalCategories','totalComments','featuredPostsCount'));
    }
}
