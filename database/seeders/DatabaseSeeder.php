<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        // User::factory()->withPersonalTeam()->create([
        //     'name' => 'Susan',
        //     'email' => 'susan@example.com',
        //     'password'=> 123456,
        // ]);
/*
        DB::table('categories')->insert([
            'name' => 'Laravel',
        ]);
        DB::table('categories')->insert([
            'name' => 'PHP',
        ]);
        DB::table('categories')->insert([
            'name' => 'VSC',
        ]);

        Post::factory()->create([
            'title' => 'My First Post',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquet nunc, vitae aliquam nunc nisl sit amet nunc. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquet nunc, vitae aliquam nunc nisl sit amet nunc.',

        ]);
        Post::factory()->create([
            'title' => 'My Second Post',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquet nunc, vitae aliquam nunc nisl sit amet nunc. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquet nunc, vitae aliquam nunc nisl sit amet nunc.',
        ]);
        Post::factory()->create([
            'title' => 'My Third Post',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquet nunc, vitae aliquam nunc nisl sit amet nunc. Sed euismod, nunc vel tincidunt lacinia, nunc nisl aliquet nunc, vitae aliquam nunc nisl sit amet nunc.',
        ]);

        DB::table('category_post')->insert([
        'category_id' =>   1,
        'post_id' => 1 ,
        'user_id' => 1
        ]);
        DB::table('category_post')->insert([
        'category_id' =>   2,
        'post_id' => 2 ,
        'user_id' => 1
        ]);
        DB::table('category_post')->insert([
        'category_id' =>  2,
        'post_id' => 3 ,
        'user_id' => 1
        ]);
*/
    }
}
