<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use function Symfony\Component\Translation\t;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->text(200);
        return [
            "user_id" => User::factory(),
            "title" => $title,
            "description" => $this->faker->text,
            "slug" =>  SlugService::createSlug(Post::class, 'slug', $title)
        ];
    }
}
