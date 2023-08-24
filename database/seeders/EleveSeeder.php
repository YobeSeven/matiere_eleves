<?php

namespace Database\Seeders;

use App\Models\Eleve;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Eleve::insert([
            [
                "name" => fake()->name(),
            ],
            [
                "name" => fake()->name(),
            ],
            [
                "name" => fake()->name(),
            ],
            [
                "name" => fake()->name(),
            ],
        ]);
    }
}
