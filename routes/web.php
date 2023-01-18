<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Alan Ari Mahendra",
        "email" => "penjahatk3lam1n.com",
        "image" => "v1.jpg"
    ]);
});


//Route -> controller (Models) -> View
Route::get('/blog', [PostController::class, 'index']);
    
// Web Single Post 
Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function()
    {
        return view('categories',[
            'title' => 'Post Categories',
            'categories' => Category::all()
        ]);
    });

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts',[
        'title' => "Post By Category : $category->nama",
        'posts' => $category->posts->load('category' , 'author')
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author')
    ]);
});


