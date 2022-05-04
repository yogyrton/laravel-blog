<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $lastPosts = Post::query()->orderBy('created_at', 'DESC')->limit(3)->get();
        $posts = Post::query()->paginate(4);
        return view('main.home', compact('posts', 'lastPosts', 'categories'));
    }

    public function show($id)
    {
        $post = Post::query()->find($id);
        return view('main.single_post', compact('post'));
    }
}
