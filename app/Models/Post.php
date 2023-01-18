<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    // protected $fillable = ['title', 'excerpt', 'body']; //Hanya nilai didalamnya yang boleh diisi
    protected $guarded = ['id']; //Nilai yang didalamnya tidak boleh diisi, tetapi selainya boleh
    protected $with = ['author', 'category'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


}
