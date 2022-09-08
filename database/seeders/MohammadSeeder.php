<?php

namespace Database\Seeders;

use App\Models\Mohammad;
use Database\Factories\MohammadFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MohammadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table("mohammads")->insert([
           "title" => Str::random(10),
            "name" => Str::random(20),
            "last_name" => Str::random(35),
        ]);*/

        Mohammad::factory()->count(20)->create();

    }
}
