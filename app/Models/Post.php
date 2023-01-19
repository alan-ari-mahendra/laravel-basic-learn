<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PharIo\Manifest\Author;

class Post extends Model
{
    use HasFactory;


    // protected $fillable = ['title', 'excerpt', 'body']; //Hanya nilai didalamnya yang boleh diisi
    protected $guarded = ['id']; //Nilai yang didalamnya tidak boleh diisi, tetapi selainya boleh
    protected $with = ['author', 'category'];

    public function scopeFilter($query, array $filters) 
    {
    $query->when($filters['search'] ?? false, function($query, $search) {
        return $query->where('title', 'like', '%' . $search . '%')
                  ->orWhere('body', 'like', '%' . $search . '%');
    });


    $query->when($filters['category'] ?? false, function($query, $category) {
        return $query->whereHas('category', function($query) use ($category){
            $query->where('slug', $category);
        });
    }); 


    $query->when($filters['author'] ?? false, function($query, $author){
        return $query->whereHas('author', function($query) use ($author){
            $query->where('username', $author);
        });
    });
}

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
