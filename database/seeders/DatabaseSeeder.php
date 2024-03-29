<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Category;
use \App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password')
            
        ]);

        User::factory(5)->create();
        Category::create([
            'name'=> "Web Programming",
            'slug'=> "web-programming",
        ]);
        Category::create([
            'name'=> "Personal",
            'slug'=> "personal",
        ]);
        Category::create([
            'name'=> "Work Out",
            'slug'=> "work-out",
        ]);
        Post::factory(16)->create();
    }

}
