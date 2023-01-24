<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;



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
        "title" => "Home",
        'active' => 'categories'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        'active' => 'categories',
        "name" => "Alan Ari Mahendra",
        "email" => "penjahatk3lam1n.com",
        "image" => "v1.jpg"
    ]);
});


//Route -> controller (Models) -> View
Route::get('/posts', [PostController::class, 'index']);
    
// Web Single Post 
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function()    {
        return view('categories',[
            'title' => 'Post Categories',
            'active' => 'categories',
            'categories' => Category::all()
        ]);
    });

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts',[
//         'title' => "Post By Category : $category->nama",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category' , 'author')
//     ]);
// });

// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });




Route::get('/login' , [LoginController::class, 'index'])->name('login')->middleware('guest'); 
Route::post('/login' , [LoginController::class, 'authenticate']); 
Route::post('/logout' , [LoginController::class, 'logout']); 

Route::get('/register' , [RegisterController::class, 'index'])->middleware('guest'); 
Route::post('/register' , [RegisterController::class, 'store']); 


Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');


Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])
->middleware('auth');

// Route::get('/dashboard/posts/{post:slug}'); 
Route::resource('/dashboard/posts', DashboardPostController::class)
->middleware('auth');


Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');