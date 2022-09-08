<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(1)->create()->each(function ($user) {
            $user->posts()->saveMany(Post::factory()->count(3)->create()->each(function ($post) {
                $post->comments()->saveMany(Comment::factory()->count(5)->make());
            }));
        });
    }

}
