<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
    \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        
        // User::create ([
        //         'name' => 'Alan Ari Mahendra',
        //         'email' => 'alanari@gamil',
        //         'password' => bcrypt('22122004')
        //     ]);
            
        // User::create ([
        //         'name' => 'Dody Wiguna',
        //         'email' => 'cahyadi12@gamil',
        //         'password' => bcrypt('22122006')
        //     ]);
                 
            
        User::factory(3)->create();

        Category::create ([
            'nama' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create ([
            'nama' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create ([
            'nama' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();


        // Post::create ([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, odit magnam dolore maiores accusamus mollitia quae animi perferendis quisquam cupiditate pariatur velit facilis neque possimus nostrum in voluptatibus error voluptas, illo atque officiis quam ipsam enim ipsa! Est incidunt laudantium corporis ut tempora delectus blanditiis itaque error architecto, eos temporibus laboriosam veniam quod doloribus repudiandae magni autem, vero quos fuga illum aperiam? Sit unde voluptatem reprehenderit laudantium, et rerum eaque amet aut, nam maxime veniam enim sint incidunt assumenda dignissimos cupiditate. Vitae nemo autem cumque doloribus voluptatum architecto reprehenderit molestias at natus, quam veritatis ipsam alias atque, enim cupiditate adipisci?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        
        // Post::create ([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, odit magnam dolore maiores accusamus mollitia quae animi perferendis quisquam cupiditate pariatur velit facilis neque possimus nostrum in voluptatibus error voluptas, illo atque officiis quam ipsam enim ipsa! Est incidunt laudantium corporis ut tempora delectus blanditiis itaque error architecto, eos temporibus laboriosam veniam quod doloribus repudiandae magni autem, vero quos fuga illum aperiam? Sit unde voluptatem reprehenderit laudantium, et rerum eaque amet aut, nam maxime veniam enim sint incidunt assumenda dignissimos cupiditate. Vitae nemo autem cumque doloribus voluptatum architecto reprehenderit molestias at natus, quam veritatis ipsam alias atque, enim cupiditate adipisci?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create ([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, odit magnam dolore maiores accusamus mollitia quae animi perferendis quisquam cupiditate pariatur velit facilis neque possimus nostrum in voluptatibus error voluptas, illo atque officiis quam ipsam enim ipsa! Est incidunt laudantium corporis ut tempora delectus blanditiis itaque error architecto, eos temporibus laboriosam veniam quod doloribus repudiandae magni autem, vero quos fuga illum aperiam? Sit unde voluptatem reprehenderit laudantium, et rerum eaque amet aut, nam maxime veniam enim sint incidunt assumenda dignissimos cupiditate. Vitae nemo autem cumque doloribus voluptatum architecto reprehenderit molestias at natus, quam veritatis ipsam alias atque, enim cupiditate adipisci?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create ([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, odit magnam dolore maiores accusamus mollitia quae animi perferendis quisquam cupiditate pariatur velit facilis neque possimus nostrum in voluptatibus error voluptas, illo atque officiis quam ipsam enim ipsa! Est incidunt laudantium corporis ut tempora delectus blanditiis itaque error architecto, eos temporibus laboriosam veniam quod doloribus repudiandae magni autem, vero quos fuga illum aperiam? Sit unde voluptatem reprehenderit laudantium, et rerum eaque amet aut, nam maxime veniam enim sint incidunt assumenda dignissimos cupiditate. Vitae nemo autem cumque doloribus voluptatum architecto reprehenderit molestias at natus, quam veritatis ipsam alias atque, enim cupiditate adipisci?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);


    }
}
