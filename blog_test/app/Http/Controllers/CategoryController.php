<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // $categories = Category::all();
        $categories = Category::withCount('posts')->paginate(10);
        // $posts = Post::all();
        return view('client.pages.categories', ['categories' => $categories]);
    }
    public function view(int $id)
    {
        $category = Category::findOrFail($id);
        $posts = Post::where('category_id', $id)->paginate(10);
        $randPosts = $posts->random(3);
        return view('client.pages.fashion', ['category' => $category, 'posts' => $posts, 'randPosts' => $randPosts]);
    }


    public function admin()
    {
        $categories = Category::all();
        // dd($categories);
        return view('admin.pages.categories', ['categories' => $categories]);
    }

    public function create()
    {
        return view('admin.pages.add-category');
    }

    public function store(Request $request)
    {

        // (new Category())->store($request->title,$request->desc)
        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);

        Category::create($request->only('title', 'description'));
        return redirect()->route('all-categories')->with('success', 'Category Created Successfully');
    }

    public function edit(int $id)
    {
        // $oldData = new Category()->find($id);
        $category = Category::findOrFail($id);
        return view('admin.pages.edit-category', ['category' => $category]);
    }

    public function update(Request $request)
    {

        // (new Category())->update(trim($request->title),trim($request->desc));

        $request->validate([
            'title' => 'required',
            'description' => 'required'
        ]);
        $id = $request->id;

        $category = Category::findOrFail($id);
        $category->update($request->only('title', 'description'));
        return redirect()->route('all-categories')->with('success', 'Category Updated Successfully');
    }

    public function destroy(Request $request)
    {
        Category::findOrFail($request->id)->delete();

        return redirect()->route('all-categories')->with('success', 'Category Deleted Successfully');
    }
}
