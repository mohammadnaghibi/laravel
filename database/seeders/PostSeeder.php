<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()->count(3)->forEachSequence()->create()->each(function ($post) {
            $post->comments()->saveMany(Comment::factory()->count(5)->make());
        });
    }
}
