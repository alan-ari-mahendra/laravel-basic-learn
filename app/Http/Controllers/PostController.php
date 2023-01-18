<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
       
        return view('posts', [
            "title" => "All Post",
            // "posts" => Post::all()
            "posts" => Post::latest()->get()
        ]);  
    }


    public function show(Post $post) 
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
 