<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::with(['user', 'category'])->latest()->filter();

        return view('blog', [
            "title" => "All Posts",
            "posts" => Post::with(['user', 'category'])->latest()->filter(request(['search', 'category']))->paginate(6)->withQueryString(),
            "categories" => Category::all()
        ]);
    }

    public function show(Post $post)
    {
        return view('blog-detail', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
