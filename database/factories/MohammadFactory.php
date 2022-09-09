<?php

namespace Database\Factories;

use App\Models\Mohammad;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ybazli\Faker\Facades\Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mohammad>
 */
class MohammadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $firstName = Faker::firstName();
        $lastName = Faker::lastName();
        return [
            "title" => Faker::jobTitle(),
            "first_name" => $firstName,
            "last_name" => $lastName,
            'slug' =>  SlugService::createSlug(Mohammad::class, 'slug', $firstName." ".$lastName)
        ];
    }
}
