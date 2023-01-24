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
        
        
        User::create ([
                'name' => 'Alan Ari Mahendra',
                'username' => 'alanari',
                'email' => 'alanpekok8@gmail.com',
                'password' => bcrypt('22122004')
            ]);
            
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



    }
}
