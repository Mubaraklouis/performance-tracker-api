<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apointment>
 */
class ApointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>1,
            'doctor_id'=>2,
            'prefared_date'=>fake()->date(),
            'description'=>fake()->sentence(),
            'patient_name'=> User::find(1)->firstName,
            'status'=>false
        ];
    }
}
