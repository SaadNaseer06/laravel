<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    
    public function run()
    {
        User::factory()->create([
            'name' => 'john doe'
        ]);
        Post::factory(5)->create();
    }
}
