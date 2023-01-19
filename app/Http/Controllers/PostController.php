<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;


class PostController extends Controller
{
    public function index()
    {

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->nama;
        }

        if(request('author')) {
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }


        
        return view('posts', [
            "title" => "All Post" . $title,
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);  
    }


    public function show(Post $post) 
    {
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "post" => $post
        ]);
    }
}

 