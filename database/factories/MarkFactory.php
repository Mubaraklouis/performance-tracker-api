<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mark>
 */
class MarkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id"=>1,
            "course_id"=>fake()->unique()->numberBetween(1, 1000),
            "catOne"=>10,
            "course_name"=>"DSA",
             "catTwo"=>10,
             "fat"=>10,
             "total"=>30
        ];
    }
}
