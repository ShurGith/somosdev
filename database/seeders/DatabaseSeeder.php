<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        User::factory()->withPersonalTeam()->create([
            'name' => 'Susan',
            'email' => 'susan@example.com',
            'password'=> 123456,
        ]);

        // Category::factory()->create([
        //     'name' => 'Laravel',
        // ]);
        // Category::factory()->create([
        //     'name' => 'PHP',
        // ]);

        Post::factory()->create([
            'title' => 'My First Post',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquet nunc, vitae aliquam nunc nisl sit amet nunc. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquet nunc, vitae aliquam nunc nisl sit amet nunc.',
            'category_id' => 1,
            'user_id' => 1,
        ]);
        Post::factory()->create([
            'title' => 'My Second Post',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquet nunc, vitae aliquam nunc nisl sit amet nunc. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquet nunc, vitae aliquam nunc nisl sit amet nunc.',
            'category_id' => 2,
            'user_id' => 1,
        ]);
        Post::factory()->create([
            'title' => 'My Third Post',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquet nunc, vitae aliquam nunc nisl sit amet nunc. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquet nunc, vitae aliquam nunc nisl sit amet nunc.',
            'category_id' => 1,
            'user_id' => 1,
        ]);




    }
}
