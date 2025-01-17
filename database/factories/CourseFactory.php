<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           "title"=> fake()->name(),
           "description"=>fake()->paragraph(),
           "catOne"=>fake()->randomNumber(),
           "catTwo"=>fake()->randomNumber(),
           "Fat"=>fake()->randomNumber(),
           "avater"=>"https://img.freepik.com/premium-vector/default-image-icon-vector-missing-picture-page-website-design-mobile-app-no-photo-available_87543-11093.jpg?w=2000",
           "total"=>fake()->randomNumber(),
        ];
    }
}

