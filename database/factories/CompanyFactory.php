<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    public function definition(): array
    {
        return [
            'id_from_yandex' => fake()->unique()->uuid(),
            'name' => fake()->name(),
            'address' => fake()->address(),
            'site' => fake()->url(),
            'category' => fake()->name(),
            'work_time' => fake()->word(),
            'viewed' => false
        ];
    }
}
