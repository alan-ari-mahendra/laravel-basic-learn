<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Blog Post Alan Ari Mahendra",
            "slug" => "judul-post-pertama",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione et deserunt rem dignissimos expedita, praesentium, possimus maiores commodi distinctio magni ab. Magnam quis ullam numquam dolores. Nobis voluptatibus reiciendis harum est, suscipit aperiam consequatur ipsum veniam id iste tenetur porro aliquam, corrupti ad blanditiis adipisci itaque mollitia? Aliquid libero eligendi fuga laborum excepturi, voluptates, vel magni earum, sunt numquam culpa! Eius, asperiores non vel deserunt ab officiis quidem sit explicabo?"
        ],
        [
            "title" => "Blog Post Jokowi",
            "slug" => 'judul-post-kedua',
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Animi nihil et perspiciatis debitis sunt enim dolorem necessitatibus qui, quis optio numquam quidem, dolorum quae! Eos voluptas reprehenderit consequuntur obcaecati animi expedita consectetur at veniam deleniti, quia dolorem sit voluptatem ullam illo doloremque nobis deserunt velit libero, fugiat debitis voluptates dignissimos dolores soluta alias? Delectus alias debitis vitae, aut in error quia at tenetur natus, dolor aliquid aliquam labore autem nemo architecto dolores corporis, sequi ea repellat? Ipsam possimus et minima nostrum, veniam eius fugiat fuga sunt voluptates magni, rem quod illo vel. Qui maxime ad dignissimos doloremque nobis at itaque."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
