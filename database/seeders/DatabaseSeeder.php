<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name'  => 'Theo Reaves',
            'username'  => 'theor'
        ]);
        Post::factory(5)->create([
            'user_id' => $user->id
        ]);

        sleep(1);
        Post::factory()->create([
            'user_id' => $user->id,
            'title' => 'What a day',
            'slug' => 'what-a-day',
            'excerpt' => 'Oh, what a day it has been!'
        ]);

        sleep(1);
        Post::factory()->create([
            'user_id' => $user->id,
            'title' => 'Here we go',
            'slug' => 'here-we-go',
            'excerpt' => 'Ok!  Here we go!'
        ]);

    }
}
