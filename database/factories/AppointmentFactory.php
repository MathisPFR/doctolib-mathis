<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AppointmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'type' => $this->faker->randomElement(['généraliste', 'spécialiste', 'suivi']),
            'description' => fake()->paragraph(),
            'doctor' => fake()->name(),
            'date' => fake()->date(),
            'user_id' => User::factory(),
        ];
    }
}
